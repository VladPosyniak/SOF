<?php
/* Smarty version 3.1.31, created on 2017-05-07 18:08:33
  from "C:\OpenServer\domains\beegee\src\Resources\templates\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590f38712bee35_76982331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f15436167d680f543d50ad2051bf6e88acd03f77' => 
    array (
      0 => 'C:\\OpenServer\\domains\\beegee\\src\\Resources\\templates\\edit.tpl',
      1 => 1494169712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590f38712bee35_76982331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31482590f3871284114_15717868', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'content'} */
class Block_31482590f3871284114_15717868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_31482590f3871284114_15717868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="?page=update&task=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" method="post">
        <label for="description">Описание задачи</label>
        <textarea name="description" class="form-control"><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
</textarea>
        <label for="status">Статус задачи</label>
        <select name="status" id="" class="form-control">
            <option value="0">К выполнению</option>
            <option value="1" <?php if ($_smarty_tpl->tpl_vars['task']->value['status']) {?>selected<?php }?>>Выполнена</option>
        </select>
        <br>
        <input type="submit" class="btn btn-success" value="Обновить">
    </form>

<?php
}
}
/* {/block 'content'} */
}
