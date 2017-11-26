<?php
/* Smarty version 3.1.31, created on 2017-10-20 11:42:07
  from "E:\OpenServer\domains\beegee\src\Resources\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59e9b6df9fd093_83759067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e0c136881e02cfa0701334902eaa549e07692c0' => 
    array (
      0 => 'E:\\OpenServer\\domains\\beegee\\src\\Resources\\templates\\home.tpl',
      1 => 1494188614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e9b6df9fd093_83759067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1912659e9b6dddcb411_55083611', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2962359e9b6df80b452_28345150', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'content'} */
class Block_1912659e9b6dddcb411_55083611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1912659e9b6dddcb411_55083611',
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
class Block_2962359e9b6df80b452_28345150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_2962359e9b6df80b452_28345150',
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
