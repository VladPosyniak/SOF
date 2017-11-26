<?php
/* Smarty version 3.1.31, created on 2017-11-15 01:20:48
  from "E:\OpenServer\domains\beegee\src\Resources\templates\create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a0b6c4052b4c3_44171339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c18307ba8240db710726b81647d12db4099a597' => 
    array (
      0 => 'E:\\OpenServer\\domains\\beegee\\src\\Resources\\templates\\create.tpl',
      1 => 1494191801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0b6c4052b4c3_44171339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194825a0b6c404ecfd6_18714024', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8435a0b6c4050e2c5_10457660', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main.tpl');
}
/* {block 'content'} */
class Block_194825a0b6c404ecfd6_18714024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_194825a0b6c404ecfd6_18714024',
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
class Block_8435a0b6c4050e2c5_10457660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_8435a0b6c4050e2c5_10457660',
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
