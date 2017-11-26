{extends file='layouts/main.tpl'}
{block name=content}
    <h1>Задачи</h1>
    <hr>
    <select name="" id="sort" class="form-control">
        <option>Сортировать</option>
        <option value="name" {if $sort == 'name'}selected{/if}>По имени</option>
        <option value="email" {if $sort == 'email'}selected{/if}>По email</option>
        <option value="status" {if $sort == 'status'}selected{/if}>По статусу</option>
    </select>
    <hr>
    <div class="row">
        {foreach from=$tasks item=task}
            <div class="panel {if $task.status} panel-success {else} panel-warning {/if}">
                <div class="panel-heading">{$task.name}
                    <small>({$task.email})</small>
                </div>
                <div class="panel-body">

                    {$task.description}
                    <hr>
                    {foreach from=unserialize($task.img) item = img}
                        <img src="{$img}" alt="">
                    {/foreach}
                </div>
                <div class="panel-footer">
                    <a href="?page=show&task={$task.id}" class="btn btn-success">Просмотр</a>
                    {if $admin}
                        <a href="?page=edit&task={$task.id}" class="btn btn-info">Редактировать</a>
                    {/if}
                </div>
            </div>
        {/foreach}
    </div>
    <div class="text-center">
        {$paginator}
    </div>
{/block}

{block name="js"}
    <script>
        $(document).ready(function () {
            var columns = ['name', 'email', 'status'];
            $('#sort').on('change', function () {
                var sort = $(this).val();
                if (columns.indexOf(sort) != -1) {
                    document.location.href = '?pagination=1&sort=' + sort;
                }
            })
        })
    </script>
{/block}