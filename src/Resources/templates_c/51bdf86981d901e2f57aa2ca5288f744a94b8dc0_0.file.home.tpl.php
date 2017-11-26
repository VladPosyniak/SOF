<?php
/* Smarty version 3.1.31, created on 2017-04-03 23:29:47
  from "C:\OpenServer\domains\taskmanager\src\Resources\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e2b0bb2d4981_16709365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51bdf86981d901e2f57aa2ca5288f744a94b8dc0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\taskmanager\\src\\Resources\\templates\\home.tpl',
      1 => 1491251385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e2b0bb2d4981_16709365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_926158e2b0bb25c784_02744654', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'content'} */
class Block_926158e2b0bb25c784_02744654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_926158e2b0bb25c784_02744654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Задачи</h1>
<hr>
<div class="row">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
?>
	  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="<?php if ((isset($_smarty_tpl->tpl_vars['task']->value['img']))) {?> img/tasks/$task.img <?php } else { ?> img/default.png <?php }?> " alt="...">
      <div class="caption">
        <h3><?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
</p>
        <p><a href="/?page=task&id=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" class="btn btn-primary" role="button">Кнопка</a> <a href="#" class="btn btn-default" role="button">Кнопка</a></p>
      </div>
    </div>
  </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


</div>
<?php
}
}
/* {/block 'content'} */
}
