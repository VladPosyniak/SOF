<?php
/* Smarty version 3.1.31, created on 2017-05-07 23:23:35
  from "C:\OpenServer\domains\beegee\src\Resources\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590f82477fe096_77183323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a8f41b63383bc7125fc165be8d271fafa27903b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\beegee\\src\\Resources\\templates\\home.tpl',
      1 => 1494188614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590f82477fe096_77183323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31288590f8247716052_34878966', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18961590f82477ede82_61280787', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'content'} */
class Block_31288590f8247716052_34878966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_31288590f8247716052_34878966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Задачи</h1>
    <hr>
    <select name="" id="sort" class="form-control">
        <option>Сортировать</option>
        <option value="name" <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'name') {?>selected<?php }?>>По имени</option>
        <option value="email" <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'email') {?>selected<?php }?>>По email</option>
        <option value="status" <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'status') {?>selected<?php }?>>По статусу</option>
    </select>
    <hr>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
?>
            <div class="panel <?php if ($_smarty_tpl->tpl_vars['task']->value['status']) {?> panel-success <?php } else { ?> panel-warning <?php }?>">
                <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>

                    <small>(<?php echo $_smarty_tpl->tpl_vars['task']->value['email'];?>
)</small>
                </div>
                <div class="panel-body">

                    <?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>

                    <hr>
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

                </div>
                <div class="panel-footer">
                    <a href="?page=show&task=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" class="btn btn-success">Просмотр</a>
                    <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                        <a href="?page=edit&task=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" class="btn btn-info">Редактировать</a>
                    <?php }?>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>
    <div class="text-center">
        <?php echo $_smarty_tpl->tpl_vars['paginator']->value;?>

    </div>
<?php
}
}
/* {/block 'content'} */
/* {block "js"} */
class Block_18961590f82477ede82_61280787 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_18961590f82477ede82_61280787',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            var columns = ['name', 'email', 'status'];
            $('#sort').on('change', function () {
                var sort = $(this).val();
                if (columns.indexOf(sort) != -1) {
                    document.location.href = '?pagination=1&sort=' + sort;
                }
            })
        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
}
