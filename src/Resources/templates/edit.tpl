{extends file='layouts/main.tpl'}
{block name=content}
    <form action="?page=update&task={$task.id}" method="post">
        <label for="description">Описание задачи</label>
        <textarea name="description" class="form-control">{$task.description}</textarea>
        <label for="status">Статус задачи</label>
        <select name="status" id="" class="form-control">
            <option value="0">К выполнению</option>
            <option value="1" {if $task.status}selected{/if}>Выполнена</option>
        </select>
        <br>
        <input type="submit" class="btn btn-success" value="Обновить">
    </form>

{/block}