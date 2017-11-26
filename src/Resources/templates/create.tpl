{extends file='layouts/main.tpl'}

{block name=content}
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
{/block}

{block name="js"}
    <script>
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
    </script>
{/block}