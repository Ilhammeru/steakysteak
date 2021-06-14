<div class="row mb-3 mt-3">

    <div class="col-12">

        <div class="card card-body">

            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <div class="form-check form-switch">
                        <?php $carousel['is_active'] == 1 ? $checked = 'checked' : $checked = ''; ?>
                        <input class="form-check-input" type="checkbox" id="is_active" <?= $checked; ?> value="1">
                    </div>
                </span>

                <input type="text" class="form-control form-control-sm" id="menu-edit" value="<?= $carousel['menu']; ?>" disabled>

                <span class="input-group-text" id="basic-addon1">

                    <div class="btn-group">
                        <button class="btn btn-light btn-sm disabled" onclick="delete_carousel(<?= $carousel['id']; ?>)"><i class="bi-trash"></i></button>
                        <!-- <button class="btn btn-light btn-sm" onclick="append_row()">Add file</button> -->
                    </div>

                </span>
            </div>

        </div>
        <!--/.card -->

    </div>
    <!--/.col -->

</div>
<!--/.row -->

<div class="row mb-3">

    <div class="col-12">

        <button class="btn btn-light btn-sm btn-view" id="btn-view-w" data-id="w" onclick="get_data_carousel('w')">Website</button>
        <button class="btn btn-light btn-sm btn-view" id="btn-view-m" data-id="m" onclick="get_data_carousel('m')">Mobile</button>

    </div>
    <!--/.col -->
</div>
<!--/.row -->

<div id="box-w" class="box-view">

    <div class="row mb-3">

        <div class="col-12">

            <div class="card card-body" id="carousel-images-message-w">

                <table id="table-images-w">

                    <tbody></tbody>
                </table>

            </div>
            <!--/.card -->

        </div>
        <!--/.col -->

    </div>
    <!--/.row -->

    <div class="row">

        <div class="col-12">

            <div class="card card-body">
                <form id="form-w" entype="multipart/data">
                    <input type="hidden" name="id" value="<?= $carousel['id']; ?>">
                    <input type="hidden" name="view" value="w">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 bd-highlight">
                            <input type="file" id="image-field-w" name="file" class="custom-file-input custom-file-input-sm" hidden onchange="change_name('image-field-w', 'img-name-w')">
                            <label class="image-field-w" for="image-field-w">Choose file</label>
                            <span class="img-name-w"></span>
                        </div>
                        <div class="ms-auto p-2 bd-highlight">
                            <button type="button" class="btn btn-sm btn-primary" onclick="upload_file('w')">Upload</button><br>
                        </div>
                    </div>
                    <progress style="width:100%;display:none" id="progressBar-w" value="0" max="100"></progress>
                </form>
            </div>
            <!--/.card -->

        </div>
        <!--/.col -->

    </div>
    <!--/.row -->

</div>

<div id="box-m" class="box-view">

    <div class="row mb-3">

        <div class="col-12">

            <div class="card card-body" id="carousel-images-message-m">

                <table id="table-images-m">
                    <tbody></tbody>
                </table>

            </div>
            <!--/.card -->

        </div>
        <!--/.col -->

    </div>
    <!--/.row -->

    <div class="row">

        <div class="col-12">

            <div class="card card-body">
                <form id="form-m" entype="multipart/data">
                    <input type="hidden" name="id" value="<?= $carousel['id']; ?>">
                    <input type="hidden" name="view" value="m">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 bd-highlight">
                            <input type="file" id="image-field-m" name="file" class="custom-file-input custom-file-input-sm" hidden onchange="change_name('image-field-m', 'img-name-m')">
                            <label class="image-field-m" for="image-field-m">Choose file</label>
                            <span class="img-name-m"></span>
                        </div>
                        <div class="ms-auto p-2 bd-highlight">
                            <button type="button" class="btn btn-sm btn-primary" onclick="upload_file('m')">Upload</button><br>
                        </div>
                    </div>
                    <progress style="width:100%;display:none" id="progressBar-m" value="0" max="100"></progress>
                </form>
            </div>
            <!--/.card -->

        </div>
        <!--/.col -->

    </div>
    <!--/.row -->

</div>

<script>
    $(document).ready(function() {
        $('#box-w').hide();
        $('#box-m').hide();
    });

    $('#menu-edit').on('blur', function() {

        var value = $(this).val();
        var id = "<?= $carousel['id']; ?>";

        value = value.replace(' ', '');

        if (value != '') {
            $.ajax({
                url: "<?= site_url('banner/update_carousel_menu'); ?>",
                type: "post",
                data: {
                    menu: value,
                    id: id
                },
                success: function(response) {

                    if (response == 'success') {
                        $('#menu-edit').addClass('success');

                        setTimeout(function() {
                            $('#menu-edit').removeClass('success');
                            get_data_carousel();
                        }, 1500);
                    } else if (response == 'duplicate') {

                        $('#menu-edit').addClass('danger');

                        setTimeout(function() {
                            $('#menu-edit').removeClass('danger');
                        }, 1500);
                    }
                }
            });
        }

    });

    $('#is_active').on('change', function() {

        var value = 0;
        var id = "<?= $carousel['id']; ?>";

        if ($(this).is(':checked')) {
            value = 1;
        }

        $.ajax({
            url: "<?= site_url('banner/update_carousel_is_active'); ?>",
            type: "post",
            data: {
                is_active: value,
                id: id
            },
            success: function() {
                // No action
            }
        })
    });

    function get_data_carousel(view) {

        var id = "<?= $carousel['id']; ?>";

        $('#table-images-' + view + ' tbody').html('');

        $.ajax({
            url: "<?= site_url('banner/get_images_carousel'); ?>",
            type: "post",
            data: {
                view: view,
                id: id
            },
            dataType: "json",
            beforeSend: function() {
                var loading = '<?php $this->load->view("webadmin/layouts/loading"); ?>';
                $('#carousel-image-message-' + view).html(loading);
            },
            success: function(data) {

                $('.btn-view').removeClass('active');
                $('#btn-view-' + view).addClass('active');

                $('.box-view').hide();
                $('#box-' + view).show();

                if (data != null) {
                    if (data.length > 0) {

                        for (i = 0; i < data.length; i++) {
                            append_row(data[i], i, view);
                        }
                    } else {
                        var tr = '<tr>' +
                            '<td colspan="2">No images available</td>' +
                            '</tr>';
                        $('#table-images-' + view + ' tbody').html(tr);
                    }
                } else {
                    var tr = '<tr>' +
                        '<td colspan="2">No images available</td>' +
                        '</tr>';
                    $('#table-images-' + view + ' tbody').html(tr);
                }
            }
        });

    }

    function change_name(field, span) {

        let value = $('#' + field).val().split(/[\\]/);
        $('.' + span).removeClass('template-error-outlets');

        $('.' + span).text(value[2]);

    }

    function delete_carousel(id) {

        Swal.fire({
            title: 'Delete data, are you sure?',
            //text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#007bff',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Submit!'
        }).then((result) => {

            if (result.isConfirmed) {

                $.ajax({
                    url: "<?= site_url('banner/delete_carousel'); ?>",
                    type: "post",
                    data: {
                        id: id
                    },
                    success: function() {

                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        setTimeout(function() {
                            get_data_carousel();
                        }, 1500);

                    }
                })

            }
        });
    }

    function upload_file(view) {
        var img = $('#image-field-' + view).val();
        var imgSplit = img.split(/[\\]/);
        var imgExt = imgSplit[2].split('.');
        var ext = imgExt.slice(-1).pop();

        if (img == '') {

            //error empty field 
            $('.img-name-' + view).text('Gambar tidak boleh kosong');
            $('.img-name-' + view).addClass('template-error-outlets');

        } else if (ext == 'png' || ext == 'jpg' || ext == 'webp' || ext == 'jpeg') {

            var form = $('#form-' + view)[0];
            var formData = new FormData(form);

            var progressElem = $('#progressBar-' + view);

            Swal.fire({
                title: 'Upload this image?',
                //text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#007bff',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Submit!'
            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: "<?= site_url('banner/upload_file_carousel'); ?>",
                        type: "post",
                        data: formData,
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            //When loading
                        },
                        success: function(result) {

                            if (result != 'success') {
                                //load progress 
                                $('#progressBar-' + view).show();
                                let elem = $('#progressBar-' + view)
                                let max = Math.floor((Math.random() * 20) + 1);

                                move(elem, max);

                                setTimeout(function() {
                                    $('#progressBar-' + view).hide();

                                    if (result == 'error-wrong') {
                                        //set span 
                                        $('.img-name-' + view).text('File tidak di dukung');
                                        $('.img-name-' + view).addClass('template-error-outlets');
                                    } else {
                                        //set span 
                                        $('.img-name-' + view).text('File gagal di upload');
                                        $('.img-name-' + view).addClass('template-error-outlets');
                                    }

                                }, 1000)
                            } else {
                                // load progress bar
                                $('#progressBar-' + view).show();
                                let elem = $('#progressBar-' + view)
                                let max = 100;

                                move(elem, max);

                                setTimeout(function() {
                                    $('#progressBar-' + view).hide();

                                    get_data_carousel(view);

                                    //set span 
                                    $('.img-name-' + view).text('');
                                    $('.img-name-' + view).removeClass('template-error-outlets');

                                    form.reset();

                                    Swal.fire({
                                        buttons: false,
                                        timer: 1500,
                                        title: 'Berhasil',
                                        text: 'Gambar berhasil di upload',
                                        icon: 'success'
                                    })
                                }, 1600);
                            }

                        }
                    })

                }
            });

        } else {

            //load progress 
            $('#progressBar-' + view).show();
            let elem = $('#progressBar-' + view)
            let max = Math.floor((Math.random() * 20) + 1);

            move(elem, max);

            setTimeout(function() {
                $('#progressBar-' + view).hide();

                //error empty field 
                $('.img-name-' + view).text('Format tidak di dukung');
                $('.img-name-' + view).addClass('template-error-outlets');

                elem.val('0');

            }, 1000)

        }

    }

    function delete_image(id, i, view) {

        Swal.fire({
            title: 'Delete data, are you sure?',
            //text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#007bff',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Submit!'
        }).then((result) => {

            if (result.isConfirmed) {

                $.ajax({
                    url: "<?= site_url('banner/delete_image_carousel'); ?>",
                    type: "post",
                    data: {
                        id: id,
                        no_arr: i,
                        view: view
                    },
                    success: function() {

                        get_data_carousel(view);
                        //get_images_carousel(view);
                    }
                })
            }
        });
    }

    function images_active(id, i, view) {

        var value = 0;

        if ($('#images-active-' + i).is(':checked')) {
            value = 1;
        }

        $.ajax({
            url: "<?= site_url('banner/disabled_image_carousel'); ?>",
            type: "post",
            data: {
                id: id,
                no_arr: i,
                is_active: value,
                view: view
            },
            success: function() {
                // No action
            }
        })
    }

    function get_images_carousel(view) {
        var id = "<?= $carousel['id']; ?>";

        $('#carousel-images-message-' + view).html('');
        $('#table-images-' + view + ' tbody').html('');

        $.ajax({
            url: "<?= site_url('banner/get_images_carousel'); ?>",
            type: "post",
            data: {
                view: view,
                id: id
            },
            dataType: "json",
            beforeSend: function() {
                var loading = '<?php $this->load->view("webadmin/layouts/loading"); ?>';
                $('#carousel-image-message-' + view).html(loading);
            },
            success: function(data) {

                if (data != null) {
                    if (data.length > 0) {

                        for (i = 0; i < data.length; i++) {
                            append_row(data[i], i, view);
                        }
                    } else {
                        $('#carousel-images-message-' + view).html('No images avaiable');
                    }
                } else {
                    $('#carousel-images-message-' + view).html('No images avaiable');
                }
            }
        });
    }

    function append_row(data, i, view) {

        var id = "<?= $carousel['id']; ?>";

        var tableImages = document.getElementById('table-images-' + view);
        // var l = tableImages.rows.length;
        // var n = (l/2)+1;

        var row = tableImages.insertRow(0);

        var is_active = data['is_active'];
        var checked = '';

        if (is_active == 1) {
            checked = 'checked';
        }

        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);

        cell1.innerHTML = '<img src="<?= base_url(); ?>' + data['url'] + '" class="img-carousel">';
        cell2.innerHTML = '<div class="btn-group">';
        cell2.innerHTML += '<button class="btn btn-transparent btn-sm"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="images-active-' + i + '" value="1" onchange="images_active(' + id + ', ' + i + ', \'' + view + '\')" ' + checked + '></button></div>';
        cell2.innerHTML += '<button class="btn btn-light btn-sm" onclick="delete_image(' + id + ', ' + i + ', \'' + view + '\')"><i class="bi-trash"></i></button>';
        cell2.innerHTML += '<button class="btn btn-light btn-sm" onclick="convert(' + id + ', ' + i + ', \'' + view + '\')">convert</button>';
        cell2.innerHTML += '</div>';
    }

    function convert(id, noArr, view) {
        $.ajax({
            type: 'post',
            data: {
                id: id,
                view: view
            }, 
            url: '<?=base_url('banner/convert');?>',
            dataType: 'text',
            success: function(result) {
                console.log(result);
            }
        })
    }
</script>