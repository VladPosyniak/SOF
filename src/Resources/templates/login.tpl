{extends file='layouts/main.tpl'}
{block name=content}

        <form class="form-signin" method="post" action="?page=login" role="form" style="max-width: 350px; margin: auto">
            <h2 class="form-signin-heading">Введите свои данные</h2>
            <input type="text" class="form-control" name="login" placeholder="Логин" required autofocus>
            <input type="password" class="form-control" name="password" placeholder="Пароль" required>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
        </form>

{/block}