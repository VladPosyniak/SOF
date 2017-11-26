<?php
/* Smarty version 3.1.31, created on 2017-11-15 01:20:55
  from "E:\OpenServer\domains\beegee\src\Resources\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a0b6c47e0f537_27603910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12e90ba0ffaf38a8b26000725fc59abf76974071' => 
    array (
      0 => 'E:\\OpenServer\\domains\\beegee\\src\\Resources\\templates\\login.tpl',
      1 => 1494157594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0b6c47e0f537_27603910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23435a0b6c47e04779_16486444', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'content'} */
class Block_23435a0b6c47e04779_16486444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_23435a0b6c47e04779_16486444',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <form class="form-signin" method="post" action="?page=login" role="form" style="max-width: 350px; margin: auto">
            <h2 class="form-signin-heading">Введите свои данные</h2>
            <input type="text" class="form-control" name="login" placeholder="Логин" required autofocus>
            <input type="password" class="form-control" name="password" placeholder="Пароль" required>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
        </form>

<?php
}
}
/* {/block 'content'} */
}
