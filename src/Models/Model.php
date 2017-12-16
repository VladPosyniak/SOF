<?php
namespace App\Models;
use PDO;
/**
* 
*/
abstract class Model 
{
	private $pdo;
	private $sql = ''; 
	protected $table_name; 
	function __construct($table = null)
	{	
		$opt = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
		];
		$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;
		$this->pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $opt);
		if (!isset($table)) {
			$table = get_class($this);
			$table = explode('\\', $table);
			$table = end($table);	
		}
		$this->table_name = mb_strtolower($table);
	}

	public function query($sql, $data){
	    $stmt = $this->pdo->prepare($sql);
	    $stmt->execute($data);
	    return $stmt->fetchAll();
    }

	public function save(){ //создание новой записе в таблице
		$allTableFields = $this->fieldsTable(); //получаем названия всех столбцов в таблице
		$setFields = [];
		$setValues = [];
		foreach ($allTableFields as $value) { //проверям какие столбцы нужно заполнять и получаем значения 
			if (isset($this->$value)){
				$setFields[] = $value;
				$setValues[] = $this->$value;
			}
		}

		//переводим названия столбцов и их значения в пригодный для запроса вид
		$querySetFields = implode(',', $setFields); 
		$rangePlace = array_fill(0, count($setFields), '?'); //создаем маркеры для подготовленного запроса
		$querySetValues = implode(',', $rangePlace);
		try{
			$db = $this->pdo;
			$stmt = $db->prepare("INSERT INTO $this->table_name ($querySetFields) VALUES ($querySetValues)");
			$stmt->execute($setValues);
		}catch(PDOexeprion $e){
			echo "Error:".$e->getMessage();
			exit();
		}
	}

	public function update($id){
        $allTableFields = $this->fieldsTable(); //получаем названия всех столбцов в таблице
        $sqlData = '';
        $setValues = [];
        foreach ($allTableFields as $value) { //проверям какие столбцы нужно заполнять, получаем значения и формируем запрос
            if (isset($this->$value)){
                $setValues[] = $this->$value;
                if ($value !== end($allTableFields)){
                    $sqlData .= $value.' = ?, ';
                }
                else{
                    $sqlData .= $value.' = ? ';
                }

            }
        }
        try{
            $db = $this->pdo;
            $stmt = $db->prepare("UPDATE $this->table_name SET $sqlData WHERE id = $id");
            $stmt->execute($setValues);
        }catch(PDOexeprion $e){
            echo "Error:".$e->getMessage();
            exit();
        }
        return $this;
    }

	public function get($rows = null){
		
		$db = $this->pdo;
		if (is_array($rows)) {
			$rows = implode(',', $rows);
			try {
				$stmt = $db->prepare("SELECT $rows FROM $this->table_name $this->sql");
				$result = $stmt->execute();
				$result = $stmt->fetchAll();
			} catch (PDOException $e) {
				echo "Error: ".$e->getMessage();
				exit();
			}
		}
		if (!isset($rows)) {
			try {
				$stmt =$db->prepare("SELECT * FROM $this->table_name $this->sql");
				$stmt->execute();
				$result = $stmt->fetchAll();
			} catch (PDOException $e) {
				echo "Error: ".$e->getMessage();
				exit();
			}
		}
		if (isset($rows) && !is_array($rows)) {
			try{
				$stmt = $db->prepare("SELECT $rows FROM $this->table_name $this->sql");
				$stmt->execute();
				$result = $stmt->fetchAll();
			} catch(PDOException $e){
				echo "Error: ".$e->getMessage();
				exit();
			}
		}

		return $result;
	}

	public function where($condition){
		if (is_array($condition)) {
			if (is_array($condition[0])) {
				$this->sql = $this->sql.' WHERE '.$condition[0][0].$condition[0][1].'"'.$condition[0][2].'"';
				unset($condition[0]);
				foreach ($condition as $key => $value) {
					$this->sql = $this->sql.' AND '.$value[0].$value[1].'"'.$value[2].'"';
				}
				return $this;
			}
			else {
				$this->sql = $this->sql.' WHERE '.$condition[0].$condition[1].'"'.$condition[2].'"';
				return $this;
			}
		}
	}

	public function orderBy($column,$sort = null){
	    if (is_string($column)){
	        if (is_string($sort)){
                $this->sql = $this->sql.' ORDER BY '.$column.' '.$sort;
            }
            if ($sort === null){
                $this->sql = $this->sql.' ORDER BY '.$column;
            }
        }
        return $this;
    }
}