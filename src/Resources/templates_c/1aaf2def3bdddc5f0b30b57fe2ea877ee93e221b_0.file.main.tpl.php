<?php
/* Smarty version 3.1.31, created on 2017-12-16 20:03:37
  from "E:\OpenServer\domains\SOF\src\Resources\templates\layouts\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3551e9b2dc36_57840254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aaf2def3bdddc5f0b30b57fe2ea877ee93e221b' => 
    array (
      0 => 'E:\\OpenServer\\domains\\SOF\\src\\Resources\\templates\\layouts\\main.tpl',
      1 => 1513443816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3551e9b2dc36_57840254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_300275a3551e9ad9e29_18697496', 'title');
?>
</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container text-center">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_315285a3551e9b06e15_10441138', 'content');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205455a3551e9b1ee63_95038048', 'js');
?>

</html><?php }
/* {block 'title'} */
class Block_300275a3551e9ad9e29_18697496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_300275a3551e9ad9e29_18697496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_315285a3551e9b06e15_10441138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_315285a3551e9b06e15_10441138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_205455a3551e9b1ee63_95038048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_205455a3551e9b1ee63_95038048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
