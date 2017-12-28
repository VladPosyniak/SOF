<?php
/* Smarty version 3.1.31, created on 2017-12-29 00:54:52
  from "E:\OpenServer\domains\SOF\src\Resources\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a45682c3e13a6_09361369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09c74193e19fdf4c16c7f05baaa6b513cb6b56b4' => 
    array (
      0 => 'E:\\OpenServer\\domains\\SOF\\src\\Resources\\templates\\home.tpl',
      1 => 1514497889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a45682c3e13a6_09361369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_295465a45682c3c3085_82301874', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82835a45682c3d6753_78180530', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'title'} */
class Block_295465a45682c3c3085_82301874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_295465a45682c3c3085_82301874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Welcome
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_82835a45682c3d6753_78180530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_82835a45682c3d6753_78180530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Welcome!</h1>
    <h3>Now you can develop your project.</h3>
<?php
}
}
/* {/block 'content'} */
}
