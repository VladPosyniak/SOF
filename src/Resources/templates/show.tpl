{extends file='layouts/main.tpl'}
{block name=content}
    <h1>{$task.name}</h1>
    <h4>{$task.email}</h4>
    <pre>{$task.description}</pre>
    <h2>Картинки:</h2>
    {foreach from=unserialize($task.img) item = img}
        <img src="{$img}" alt="">
    {/foreach}
{/block}