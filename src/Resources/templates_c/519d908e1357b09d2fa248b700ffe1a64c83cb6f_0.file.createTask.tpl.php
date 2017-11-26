<?php
/* Smarty version 3.1.31, created on 2017-05-06 17:12:58
  from "C:\OpenServer\domains\beegee\src\Resources\templates\create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590dd9ea991d23_89511630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '519d908e1357b09d2fa248b700ffe1a64c83cb6f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\beegee\\src\\Resources\\templates\\create.tpl',
      1 => 1494079970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590dd9ea991d23_89511630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2571590dd9ea954a46_65986487', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20712590dd9ea97db65_36554057', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'content'} */
class Block_2571590dd9ea954a46_65986487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2571590dd9ea954a46_65986487',
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
		<input type="file" onchange="alert('sadasd')" name="img" class="form-control">
	</div>
	<hr>
	<input type="submit" value="Создать" class="btn btn-success btn-md">
	<button class="btn btn-info btn-md" id="modal-on" type="button" data-toggle="modal" data-target="#modal">Предпросмотр </button>
</form>
	<div class="modal fade" id="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Предпросмотр задачи</h4>
				</div>
				<div class="modal-body">
					<h4 class="text-center" id="name">Задача</h4>
					<hr>
					<img id="cover" src="https://www.w3schools.com/w3css/img_avatar3.png" width="320" height="240" class="img-rounded center-block" alt="">
					<blockquote>
						<p id="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
						<footer id="email">Someone famous in </footer>
					</blockquote>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<?php
}
}
/* {/block 'content'} */
/* {block "js"} */
class Block_20712590dd9ea97db65_36554057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_20712590dd9ea97db65_36554057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
>
		$('#modal-on').on('click',function () {
		    $('#name').text($('input[name="name"]').val());
		    $('#email').text($('input[name="email"]').val());
		    $('#description').text($('textarea[name="description"]').val());

        })
        $('input[name="img"]').onload(function () {
            alert('asd');
        })
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
}
