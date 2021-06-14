<style>
    #table-outlets {
        font-size: 12px;
    }
</style>

<div class="row align-items-center mb-3">

    <div class="col-12">

        <div class="card card-body">
            <h5 class="card-title text-center color-primary">Outlets</h5>
        </div>
    </div>
    <!--/.col -->

</div>
<!--/.row -->

<div class="row">

    <div class="col-12">

        <div class="card card-body card-outlets">

            <div class="row mb-3">
                <div class="col-9">
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-add-outlet"><i class="bi-plus"></i></button>

                </div>
                <div class="col-3">
                    <div class="search-area">
                        <input type="text" class="field-search-outlets" name="" value="">
                        <i class="bi bi-search search-icon-outlets"></i>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12" id="data-outlets"></div>
            </div>

            <div class="table-responsive table-parent">

                <table class="table" id="table-outlets">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th style="cursor: pointer;" onclick="sorting_item('ascending', 1)">Outlet <i class="bi bi-sort-alpha-down"></i></th>
                            <th style="cursor: pointer;" onclick="sorting_item('ascending', 2)">Category <i class="bi bi-sort-alpha-down"></i></th>
                            <th style="cursor: pointer;" onclick="sorting_item('ascending', 3)">Instagram Account <i class="bi bi-sort-alpha-down"></i></th>
                            <th style="cursor: pointer;" onclick="sorting_item('ascending', 3)">Address <i class="bi bi-sort-alpha-down"></i></th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="body-outlets"></tbody>
                </table>

            </div>

        </div>

    </div>
    <!--/.col -->

</div>
<!--/.row -->

<!-- Modal -->
<div class="modal fade" id="modal-add-outlet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Outlet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form-add-outlet">
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Outlet's name</label>
                        <input type="text" class="form-control form-control-sm" name="outlet_name" id="outlet_name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Instagram account</label>
                        <input type="text" class="form-control form-control-sm" id="ig" name="ig" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control form-control-sm" id="address" name="address"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Geolocation</label>
                        <input class="form-control form-control-sm" id="geo" name="geo">
                    </div>

                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="type" value="0" checked>
                            <label class="form-check-label">
                                Opening soon
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="type" name="type" value="1">
                            <label class="form-check-label">
                                Is open
                            </label>
                        </div>
                    </div>

                    <div class="mb-3 image-outlet-div">
                        <input type="file" name="file" id="field-img-outlets" class="custom-file-input custom-file-input-sm" hidden onchange="change_name('save', 'field-img-outlets')">
                        <label class="label-outlets" for="field-img-outlets">Choose File</label>
                        <span class="template-img-outlets"></span>
                        <progress id="progress-outlets" value="0" max="100"></progress>
                    </div>

                    <div class="mb-3 image-edit-div">
                        <img id="preview-template" />
                        <input type="file" name="img-edit" id="field-edit-img-outlets" class="custom-file-input custom-file-input-sm" hidden onchange="change_name('edit', 'field-edit-img-outlets')">
                        <label class="label-outlets-edit" for="field-edit-img-outlets">Change File</label>
                        <span class="template-edit-img-outlets"></span>
                        <progress id="progress-outlets-edit" value="20" max="100"></progress>
                        <input type="hidden" name="id-outlets" class="id-outlets">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm" id="button-modal-outlets" onclick="save_outlet()">Save changes</button>
                </div>
            </form>

        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        get_data_outlets();

        $('.field-search-outlets').on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $('.body-outlets tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            })
        })

        $('#outlet_name').on('focus', function() {
            $(this).removeClass('input-alert');
        })

        $('#ig').on('focus', function() {
            $(this).removeClass('input-alert');
        })

        $('#address').on('focus', function() {
            $(this).removeClass('input-alert');
        })
    });

    function change_name(key, field) {
        let file = $('#' + field).val().split(/[\\]/);

        if (key == 'save') {

            $('.template-img-outlets').text(file[2]);
            $('.template-img-outlets').removeClass('template-error-outlets');

        } else {

            $('.template-edit-img-outlets').text(file[2]);
            $('.template-edit-img-outlets').removeClass('template-error-outlets');

        }


    }

    function sorting_item(key, row) {

        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("table-outlets");
        switching = true;


        while (switching) {

            switching = false;
            rows = table.rows; // get tr element

            for (i = 1; i < (rows.length - 1); i++) {

                shouldSwitch = false;

                x = rows[i].getElementsByTagName("TD")[row]; // td title
                y = rows[i + 1].getElementsByTagName("TD")[row]; // td title

                if (key == "ascending") {

                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {

                        shouldSwitch = true;
                        break;
                    }

                } else if (key == "descending") {

                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {

                        shouldSwitch = true;
                        break;
                    }

                }

            }

            if (shouldSwitch) {

                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]); //change posititon
                switching = true;

                // if true then do increment (for all element)
                switchcount++;

            } else {

                if (switchcount == 0 && key == "ascending") {

                    key = "descending";
                    switching = true;

                }

            }

        }

    }

    function get_data_outlets() {

        $.ajax({
            url: "<?= site_url('outlets/get_data_outlets'); ?>",
            dataType: "json",
            beforeSend: function() {
                var loading = '<?php $this->load->view("webadmin/layouts/loading"); ?>';
                $('#data-outlets').html(loading);
            },
            success: function(data) {

                $('#data-outlets').html('');

                if (data != null) {
                    if (data.length > 0) {

                        $('#table-outlets tbody').html('');

                        for (i = 0; i < data.length; i++) {
                            append_row(data[i]);
                        }
                    } else {
                        $('#data-outlets').html('No images avaiable');
                    }
                } else {
                    $('#data-outlets').html('No images avaiable');
                }
            }
        });
    }

    function append_row(data) {

        var tableOutlets = document.getElementById('table-outlets').getElementsByTagName('tbody')[0];
        var l = tableOutlets.rows.length;
        var n = (l / 2) + 1;

        var row = tableOutlets.insertRow(l);

        var is_active = data['is_active'];
        var checked = '';

        if (is_active == 1) {
            checked = 'checked';
        }

        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);

        cell1.classList.add('col1');
        cell2.classList.add('col2');
        cell3.classList.add('col3');

        cell1.innerHTML = '<img src="<?= base_url(); ?>' + data['url'] + '" class="img-outlets">';
        cell2.innerHTML = data['outlet_name'];
        cell3.innerHTML = data['type'];
        cell4.innerHTML = data['ig'];
        cell5.innerHTML = data['address'];

        cell6.innerHTML = '<div class="btn-group">';
        cell6.innerHTML += '<button class="btn btn-transparent btn-sm"><div class="form-check form-switch"><input class="form-check-input" id="outlet-status-' + data['id'] + '" onchange="outlet_status(' + data['id'] + ')" type="checkbox" value="1" data-id="' + data['id'] + '" ' + checked + '></button></div>';
        cell6.innerHTML += '<button class="btn btn-light btn-sm" onclick="edit_outlet(' + data['id'] + ')"><i class="bi-pen"></i></button>';
        cell6.innerHTML += '<button class="btn btn-light btn-sm" onclick="delete_outlet(' + data['id'] + ')"><i class="bi-trash"></i></button>';
        cell6.innerHTML += '</div>';
    }

    function save_outlet() {

        // validation 
        let outlet = $('#outlet_name').val();
        let ig = $('#ig').val();
        let address = $('#address').val();
        let type = $('#type').val();

        if (outlet == '') {

            $('#outlet_name').addClass('input-alert');
            $('#outlet_name').attr('placeholder', 'Nama outlet harus di isi');

        } else if (ig == '') {

            $('#ig').addClass('input-alert');
            $('#ig').attr('placeholder', 'Instagram harus di isi');

        } else if (address == '') {

            $('#address').addClass('input-alert');
            $('#address').attr('placeholder', 'Alamat outlet harus di isi');

        } else {

            var form = $('#form-add-outlet')[0];
            var formData = new FormData(form);

            var progressElem = $('#progressBar');

            Swal.fire({
                title: 'Save outlet?',
                //text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#007bff',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Submit!'
            }).then((result) => {

                $.ajax({
                    url: "<?= site_url('outlets/save_data'); ?>",
                    type: "post",
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        //When loading
                    },
                    success: function(response) {
                        console.log(response);

                        if (response == 'The filetype you are attempting to upload is not allowed.') {

                            //error progress bar
                            $('#progress-outlets').show();
                            let elem = $('#progress-outlets');
                            var max = Math.floor((Math.random() * 25) + 1);

                            move(elem, max);

                            setTimeout(function() {
                                // change span
                                $('.template-img-outlets').text('File tidak di dukung');
                                $('.template-img-outlets').addClass('template-error-outlets');
                                $('#progress-outlets').hide();
                            }, 500);

                        } else if (response == 'You did not select a file to upload.') {

                            // change span
                            $('.template-img-outlets').text('Gambar harus diisi');
                            $('.template-img-outlets').addClass('template-error-outlets');

                        } else if (response == 'success') {

                            $('#progress-outlets').show();
                            let elem = $('#progress-outlets');
                            var max = 100;

                            move(elem, max);

                            setTimeout(function() {
                                form.reset();
                                $('#progressBar').val(0);
                                $('#progressBar').hide();

                                get_data_outlets();

                                $('#modal-add-outlet').modal('hide');
                                $('.template-img-outlets').text('');
                                $('#progress-outlets').hide();

                                Swal.fire({
                                    icon: 'success',
                                    timer: 1500,
                                    title: 'Berhasil',
                                    text: 'Outlet berhasil di tambahkan'
                                })
                            }, 1600)

                        }
                    }
                })
            })

        }

    }

    $("body").on("shown.bs.modal", "#modal-add-outlet", function() {
        $('#outlet_name').focus();
    });

    function outlet_status(id) {

        var value = 0;
        var id = $('#outlet-status-' + id).data('id');

        if ($('#outlet-status-' + id).is(':checked')) {
            value = 1;
        }

        $.ajax({
            url: "<?= site_url('outlets/outlet_status'); ?>",
            type: "post",
            data: {
                id: id,
                is_active: value
            },
            success: function() {
                // No action
            }
        });
    }

    function delete_outlet(id) {

        Swal.fire({
            title: 'Delete outlet?',
            //text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#007bff',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Submit!'
        }).then((result) => {

            if (result.isConfirmed) {

                $.ajax({
                    url: "<?= site_url('outlets/delete_outlet'); ?>",
                    type: "post",
                    data: {
                        id: id
                    },
                    success: function() {
                        get_data_outlets();
                    }
                });

            }

        });
    }

    function edit_outlet(id) {

        //show modal
        $('#modal-add-outlet').modal('show');

        $.ajax({
            type: 'post',
            data: {
                id: id
            },
            url: '<?= site_url('outlets/edit_outlets'); ?>',
            dataType: 'json',
            success: function(response) {

                // hide current image div
                $('.image-outlet-div').hide();

                $('#outlet_name').val(response['outlet_name']);
                $('.id-outlets').val(id);
                $('#ig').val(response['ig']);
                $('#address').val(response['address']);
                $('#geo').val(response['geolocation']);
                $('#type[value="' + response['type'] + '"]').prop('checked', true);
                document.getElementById('preview-template').src = '<?= base_url(); ?>' + response['url'];
                $('.image-edit-div').show();

                // reset span 
                $('.template-edit-img-outlets').html('');
                $('.template-edit-img-outlets').removeClass('template-error-outlets');

                //change button
                $('#button-modal-outlets').text('Edit Outlets');
                $('#button-modal-outlets').attr('onclick', 'save_edit(' + id + ')');


            }

        })

    }

    function save_edit(id) {

        let form = $('#form-add-outlet')[0];
        let formData = new FormData(form);


        $.ajax({
            type: 'post',
            data: formData,
            processData: false,
            contentType: false,
            url: '<?= site_url('outlets/save_edit'); ?>',
            dataType: 'json',
            success: function(response) {
                console.log(response);

                $('.image-outlet-div').hide();
                $('.image-edit-div').show();

                if (response == 'error-wrong') {

                    //show progress bar 
                    $('#progress-outlets-edit').show();
                    let elem = $('#progress-outlets-edit');
                    let max = Math.floor((Math.random() * 20) + 1);

                    move(elem, max);

                    setTimeout(function() {

                        $('#progress-outlets-edit').hide();

                        // show span 
                        $('.template-edit-img-outlets').html('File tidak di dukung');
                        $('.template-edit-img-outlets').addClass('template-error-outlets');

                    }, 1250)

                } else {

                    //show progress bar 
                    $('#progress-outlets-edit').show();
                    let elem = $('#progress-outlets-edit');
                    let max = 100;

                    move(elem, max);

                    setTimeout(function() {

                        $('#progress-outlets-edit').hide();

                        get_data_outlets();

                        //hide modal
                        $('#modal-add-outlet').modal('hide');

                        $('.image-outlet-div').show();
                        $('.image-edit-div').hide();

                        //reset button
                        $('#button-modal-outlets').text('Save Outlet');
                        $('#button-modal-outlets').attr('onclick', 'save_outlet()');

                        //reset form 
                        form.reset();

                        Swal.fire({
                            title: 'Berhasil',
                            buttons: false,
                            timer: 1500,
                            icon: 'success',
                            text: 'Data berhasil di update'

                        })

                    }, 1700)

                }


            }
        })

    }
</script>