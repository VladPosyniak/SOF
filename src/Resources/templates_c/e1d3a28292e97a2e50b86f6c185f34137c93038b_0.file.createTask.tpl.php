<?php
/* Smarty version 3.1.31, created on 2017-04-02 13:08:51
  from "C:\OpenServer\domains\taskmanager\src\Resources\templates\create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e0cdb3a756b8_71699532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d3a28292e97a2e50b86f6c185f34137c93038b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\taskmanager\\src\\Resources\\templates\\create.tpl',
      1 => 1491127728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e0cdb3a756b8_71699532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1964158e0cdb3a64215_19306755', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'content'} */
class Block_1964158e0cdb3a64215_19306755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1964158e0cdb3a64215_19306755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Создание задачи</h1>
<hr>
<form action="/?page=create-task" enctype="multipart/form-data" method="POST" >
	<div class="input-group" style="width: 100%">
		<label for="name">Название задачи</label>
		<input  type="text" name="name" class="form-control" >
	</div>
	<div class="input-group" style="width: 100%">
		<label for="email">Email</label>
		<input type="text" name="email" class="form-control" >
	</div>
	<div class="input-group" style="width: 100%">
		<label for="description">Описание</label>
		<textarea name="description" class="form-control" ></textarea>
	</div>
	<div class="input-group" style="width: 100%">
		<label for="img">Иконка</label>
		<input type="file" name="img" class="form-control">
	</div>
	<hr>
	<input type="submit" class="btn btn-success btn-lg>
</form>
<?php
}
}
/* {/block 'content'} */
}
