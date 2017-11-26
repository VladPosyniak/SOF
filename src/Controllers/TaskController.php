<?php

namespace App\Controllers;

use App\Models\Tasks;
use JasonGrimes\Paginator;

/**
 *
 */
class TaskController extends Controller
{
    public function allTasks()
    {
        $page = isset($_GET['pagination']) ? $_GET['pagination'] : 1;
        $sort = isset($_GET['sort']) ? htmlspecialchars($_GET['sort']) : 'id';
        $tasks = new Tasks();
        $tasks = $tasks->orderBy($sort, 'DESC')->get();
        $countTasks = count($tasks);
        $urlPattern = '/?pagination=(:num)&sort=' . $sort;
        $itemsPerPage = 3;
        $currentTasks = [];
        foreach ($tasks as $key => $task) {
            if ($key >= ($page - 1) * 3 && $key <= ($page - 1) * 3 + 2) {
                $currentTasks[] = $task;
            }
        }
        $this->getSmarty()->assign([
            'tasks' => $currentTasks,
            'sort' => $sort,
            'paginator' => new Paginator($countTasks, $itemsPerPage, $page, $urlPattern)]);
        $this->getSmarty()->display('home.tpl');
    }

    public function show()
    {
        if (isset($_GET['task']) && is_numeric($_GET['task'])) {
            $task = new Tasks();
            $task = $task->find($_GET['task']);
            $this->getSmarty()->assign([
                'task' => $task
            ]);
            $this->getSmarty()->display('show.tpl');
        }
    }

    public function create()
    {
        $this->getSmarty()->display('create.tpl');
    }

    public function store()
    {
        $task = new Tasks();
        $result = $task->createTask(
            isset($_POST['name']) ? $_POST['name'] : '',
            isset($_POST['email']) ? $_POST['email'] : '',
            isset($_POST['description']) ? $_POST['description'] : '',
            isset($_FILES['img']) ? $_FILES['img'] : []
        );

        if ($result) {
            $this->redirect('/');
        } else {
            $this->redirect('?page=create', 'Неправильное расширение у изображений.');
        }
    }

    public function edit()
    {
        if (!$this->checkAdmin()) {
            $this->redirect('/', 'У вас нет прав администратора.');
            exit();
        }
        if (isset($_GET['task']) && is_numeric($_GET['task'])) {
            $task_id = $_GET['task'];
        } else {
            $this->redirect('/', 'Такой задачи не существует');
            exit();
        }
        $task = new Tasks();
        $task = $task->find($task_id);
        $this->getSmarty()->assign(
            ['task' => $task]
        );
        $this->getSmarty()->display('edit.tpl');
    }

    public function update()
    {
        if (!$this->checkAdmin()) {
            $this->redirect('/', 'У вас нет прав администратора.');
            exit();
        }
        if (isset($_GET['task']) && is_numeric($_GET['task'])) {
            $task_id = $_GET['task'];
            $task = new Tasks();
            $task->updateTask(
                $task_id,
                isset($_POST['description']) ? $_POST['description'] : '',
                isset($_POST['status']) ? $_POST['status'] : 0);
            $this->redirect('/');
        } else {
            $this->redirect('/', 'Такой задачи не существует.');
            exit();
        }
    }
}