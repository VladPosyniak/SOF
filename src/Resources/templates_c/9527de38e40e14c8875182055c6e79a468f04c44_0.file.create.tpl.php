<?php
/* Smarty version 3.1.31, created on 2017-06-28 02:52:11
  from "C:\OpenServer\domains\beegee\src\Resources\templates\create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5952efab1570d8_42379477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9527de38e40e14c8875182055c6e79a468f04c44' => 
    array (
      0 => 'C:\\OpenServer\\domains\\beegee\\src\\Resources\\templates\\create.tpl',
      1 => 1494191801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5952efab1570d8_42379477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102735952efab011025_01384357', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_215745952efab13fb67_88731217', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'content'} */
class Block_102735952efab011025_01384357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_102735952efab011025_01384357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Создание задачи</h1>
    <hr>
    <form action="/?page=store" enctype="multipart/form-data" method="POST">
        <div class="input-group" style="width: 100%">
            <label for="name">Имя</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="input-group" style="width: 100%">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <div class="input-group" style="width: 100%">
            <label for="description">Описание</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="input-group" style="width: 100%">
            <label for="img">Картинки</label>
            <input type="file" id="files" name="img[]" class="form-control" multiple required>
        </div>
        <hr>
        <input type="submit" value="Создать" class="btn btn-success btn-md">
        <button class="btn btn-info btn-md" id="modal-on" type="button" data-toggle="modal" data-target="#modal">
            Предпросмотр
        </button>
    </form>
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Предпросмотр задачи</h4>
                </div>
                <div class="modal-body">
                    <h4 class="text-center" id="name"></h4>
                    <hr>
                    <blockquote>
                        <p id="description"></p>
                        <footer id="email"></footer>
                    </blockquote>
                    <div id="list">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php
}
}
/* {/block 'content'} */
/* {block "js"} */
class Block_215745952efab13fb67_88731217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_215745952efab13fb67_88731217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $('#modal-on').on('click', function () {
            $('#name').text($('input[name="name"]').val());
            $('#email').text($('input[name="email"]').val());
            $('#description').text($('textarea[name="description"]').val());

        });


        function handleFileSelect(evt) {
            var files = evt.target.files;
            document.getElementById('list').innerHTML = '';
            for (var i = 0, f; f = files[i]; i++) {

                if (!f.type.match('image.*')) {
                    continue;
                }

                var reader = new FileReader();

                reader.onload = (function(theFile) {
                    return function(e) {
                        var span = document.createElement('span');
                        span.innerHTML = ['<img style="width:277px; height:200px;" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
                        document.getElementById('list').insertBefore(span, null);
                    };
                })(f);

                reader.readAsDataURL(f);
            }
        }

        document.getElementById('files').addEventListener('change', handleFileSelect, false);
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
}
