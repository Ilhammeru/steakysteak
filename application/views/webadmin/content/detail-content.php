
    
    <script>

        var id = "<?=$id;?>";

        tinymce.init({

            selector: ".post-content",
            plugins: [
               "advlist autolink lists link image charmap print preview hr anchor pagebreak media",
               "searchreplace wordcount visualblocks visualchars code fullscreen",
               "insertdatetime nonbreaking save table contextmenu directionality",
               "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image responsivefilemanager | media",
            automatic_uploads: true,
            image_advtab: true,
            images_upload_url: "<?=site_url('content/image_upload');?>/" + id,
            file_picker_types: 'image', 
            paste_data_images:true,
            relative_urls: false,
            remove_script_host: false,
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'content-' + id + '-' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var blobInfo = blobCache.create(id, file, reader.result);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            }

        });

    </script>

    <form class="form-horizontal" action="<?=site_url('content/save_content');?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$id;?>">
    
    <div class="row mt-3">

        <div class="col-12">

            <div class="row">

                <div class="col-12">
                    
                    <textarea rows="25" name="post_content" class="form-control post-content"><?=$content != null ? $content : null;?></textarea>

                </div>

            </div>

            <br>

            <div class="row">

                <div class="col-12">

                    <button type="submit" class="btn btn-primary btn-block btn-cm">
                        <i class="fa fa-floppy-o"></i> Save
                    </button>

                </div>

            </div>

        </div>
        
    </div>

    </form>