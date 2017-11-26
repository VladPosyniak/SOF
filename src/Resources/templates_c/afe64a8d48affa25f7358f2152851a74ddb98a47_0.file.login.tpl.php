<?php
/* Smarty version 3.1.31, created on 2017-05-07 14:50:11
  from "C:\OpenServer\domains\beegee\src\Resources\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590f09f3cb1ca1_22261548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afe64a8d48affa25f7358f2152851a74ddb98a47' => 
    array (
      0 => 'C:\\OpenServer\\domains\\beegee\\src\\Resources\\templates\\login.tpl',
      1 => 1494157594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590f09f3cb1ca1_22261548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13885590f09f3c928d8_49071536', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'content'} */
class Block_13885590f09f3c928d8_49071536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13885590f09f3c928d8_49071536',
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
