<?php
/* Smarty version 3.1.31, created on 2017-05-07 18:28:25
  from "C:\OpenServer\domains\beegee\src\Resources\templates\layouts\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590f3d19ab5fe8_29159301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '411771a9f8ef099f60259428066c722ac98da122' => 
    array (
      0 => 'C:\\OpenServer\\domains\\beegee\\src\\Resources\\templates\\layouts\\main.tpl',
      1 => 1494170904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590f3d19ab5fe8_29159301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29375590f3d19a571d0_88270114', 'title');
?>
</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">BeeGee</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Все задачи</a></li>
                    <li><a href="?page=create">Создать задачу</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                        <li><a href="?page=logout">Выйти</a></li>
                    <?php } else { ?>
                        <li><a href="?page=login">Войти</a></li>
                    <?php }?>

                </ul>
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>
    <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
        <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    <?php }?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15756590f3d19a9b284_00546166', 'content');
?>


</div>
</body>
<?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='js/bootstrap.min.js'><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3285590f3d19aa7d40_02329262', 'js');
?>

</html><?php }
/* {block 'title'} */
class Block_29375590f3d19a571d0_88270114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_29375590f3d19a571d0_88270114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
BeeGee<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_15756590f3d19a9b284_00546166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15756590f3d19a9b284_00546166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_3285590f3d19aa7d40_02329262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_3285590f3d19aa7d40_02329262',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
