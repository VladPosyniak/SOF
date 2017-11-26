<?php
/* Smarty version 3.1.31, created on 2017-11-15 01:20:51
  from "E:\OpenServer\domains\beegee\src\Resources\templates\show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a0b6c434efde7_09178254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7973431ccce5d93b224717c0f6bae2d3714aaff7' => 
    array (
      0 => 'E:\\OpenServer\\domains\\beegee\\src\\Resources\\templates\\show.tpl',
      1 => 1494188651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0b6c434efde7_09178254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36495a0b6c433fdd17_56880535', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'content'} */
class Block_36495a0b6c433fdd17_56880535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_36495a0b6c433fdd17_56880535',
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
