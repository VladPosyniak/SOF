<?php
/* Smarty version 3.1.31, created on 2017-04-08 14:40:27
  from "C:\OpenServer\domains\taskmanager\src\Resources\templates\layouts\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e8cc2b30ca15_03025002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd91c6134a1f5f7ec9a1f9ebfc1c4c4fdc211fb2a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\taskmanager\\src\\Resources\\templates\\layouts\\main.tpl',
      1 => 1491651624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e8cc2b30ca15_03025002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3176158e8cc2b1243e3_94329790', 'title');
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
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">TaskManager</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="/">Главная</a></li>
						<li><a href="?page=create-task">Создать задачу</a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Найти</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Действие</a></li>
								<li><a href="#">Другое действие</a></li>
								<li><a href="#">Что-то еще</a></li>
								<li class="divider"></li>
								<li><a href="#">Отдельная ссылка</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1266258e8cc2b226b37_12443110', 'content');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1317558e8cc2b2a9b27_98807508', 'js');
?>

</html><?php }
/* {block 'title'} */
class Block_3176158e8cc2b1243e3_94329790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3176158e8cc2b1243e3_94329790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
TASKMANAGER<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_1266258e8cc2b226b37_12443110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1266258e8cc2b226b37_12443110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_1317558e8cc2b2a9b27_98807508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_1317558e8cc2b2a9b27_98807508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
