<?php
/* Smarty version 3.1.31, created on 2017-05-07 23:24:12
  from "C:\OpenServer\domains\beegee\src\Resources\templates\show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590f826c916466_52882374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '314d9642f237e76131edd73f6a11dd0baf073ca5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\beegee\\src\\Resources\\templates\\show.tpl',
      1 => 1494188651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590f826c916466_52882374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12663590f826c8c4dd5_00492766', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'content'} */
class Block_12663590f826c8c4dd5_00492766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12663590f826c8c4dd5_00492766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>
</h1>
    <h4><?php echo $_smarty_tpl->tpl_vars['task']->value['email'];?>
</h4>
    <pre><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
</pre>
    <h2>Картинки:</h2>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, unserialize($_smarty_tpl->tpl_vars['task']->value['img']), 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php
}
}
/* {/block 'content'} */
}
