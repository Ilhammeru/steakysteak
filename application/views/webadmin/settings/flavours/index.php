<div class="row align-items-center mb-3">

  <div class="col-12">

    <div class="card card-body">
      <h5 class="card-title text-center color-primary">Flavours</h5>
    </div>
  </div>
  <!--/.col -->

</div>
<!--/.row -->

<div class="row mb-3">

  <div class="col-12">

    <div class="card card-body">

      <form id="form-add-flavours">
        <div class="row">

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-2">
            <input type="text" name="title" id="title" class="form-control form-control-sm" placeholder="Title">
          </div>
          <!--/.col -->

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mt-2">
            <input type="file" name="file" id="field-upload" class="custom-file-input custom-file-input-sm" hidden onchange="set_file_name()">
            <label for="field-upload" class="label-upload">Choose file</label>
            <span class="span-file-name"></span>
            <div class="">
              <progress class="progress-flavour" id="progress-bar" value="0" max="100"></progress>
            </div>

          </div>

          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-2">
            <button type="submit" class="btn btn-primary btn-sm save-flavour">
              Submit
            </button>
          </div>

        </div>
      </form>

    </div>
    <!--/.card -->

  </div>
  <!--/.col -->

</div>
<!--/.row -->

<div class="row">

  <div class="col-12" style="padding: 0;">

    <div class="card card-body" style="margin: 1em; padding: 0.5em 1em;  height: auto; max-height: 30em; overflow: auto; display: block">
      <div id="get-data-flavours"></div>
      <table id="table-flavours">
        <thead style="display: table; width: 100%; table-layout: fixed; margin-bottom: 2em;">
          <tr>
            <th class="text-end" colspan="3">
              <div style="display: flex; justify-content: flex-end;">

                <div class="" style="margin-right: 0.6em; cursor: pointer;">
                  <div class="search-area">
                    <input type="text" class="field-search-flavour" name="" value="">
                    <i class="bi bi-search search-icon"></i>
                  </div>
                </div>

                <div class="" style="cursor: pointer;">
                  <i onclick="sort_ascending('ascending')" class="bi bi-funnel sort-ascending"></i>
                </div>

              </div>

            </th>
          </tr>
        </thead>
        <tbody class="body-flavour" style="display: block; height: 40em; width: 100%; overflow: auto;">
        </tbody>
      </table>
    </div>
    <!--/.card -->

  </div>
  <!--/.col -->

</div>
<!--/.row -->

<script>
  $(document).ready(function() {

    $('#title').on('focus', function() {
      $("#title").removeClass('input-alert');

      $('#title').attr('placeholder', 'Title');

    });
    get_data_flavours();

    $('.field-search-flavour').on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $('.body-flavour tr').filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      })
    })

  });

  function get_data_flavours(keySort = '') {

    $.ajax({
      url: "<?= site_url('flavours/get_data_flavours'); ?>",
      dataType: "json",
      beforeSend: function() {
        var loading = '<?php $this->load->view("webadmin/layouts/loading"); ?>';
        $('#get-data-flavours').html(loading);
      },
      success: function(data) {
        $('#get-data-flavours').html('');
        $('#table-flavours tbody').html('');

        if (data.result != null) {

          if (data.result.length > 0) {

            for (i = 0; i < data.result.length; i++) {
              append_row(data.result[i]);
            }

          } else {
            $('#get-data-flavours').html('No data avaiable');
          }
        } else {
          $('#get-data-flavours').html('No data avaiable');
        }

      }
    })
  }

  function append_row(data) {

    var tableFlavours = document.getElementById('table-flavours').getElementsByTagName('tbody')[0];
    var l = tableFlavours.rows.length;
    var n = (l / 2) + 1;

    var url = "'" + data['url'] + "'";

    var row = tableFlavours.insertRow(l);

    var is_active = data['is_active'];
    var checked = '';

    if (is_active == 1) {
      checked = 'checked';
    }

    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.classList.add('template-image-table' + data['id']);
    cell1.style.maxWidth = "13em";
    cell1.style.width = "13em";
    cell2.style.maxWidth = "29em";
    cell2.style.width = "29em";

    cell1.innerHTML = '<img src="<?= base_url(); ?>' + data['url'] + '" class="img-flavours">';
    // cell1.innerHTML = '<div class="template-image"><input type="file" name="file" id="field-upload-edit" class="custom-file-input custom-file-input-sm" hidden onchange="change_image()"><label for="field-upload-edit" class="label-edit">Choose file</label><span class="error-edit-image">File tidak di dukung</span></div>';
    cell2.innerHTML = data['title'];

    cell3.innerHTML = '<div class="btn-group">';
    cell3.innerHTML += '<button class="btn btn-transparent btn-sm"><div class="form-check form-switch"><input class="form-check-input" id="flavours-status-' + data['id'] + '" onchange="flavours_status(' + data['id'] + ')" type="checkbox" value="1" data-id="' + data['id'] + '" ' + checked + '></button></div>';
    cell3.innerHTML += '<button class="btn btn-light btn-sm" onclick="delete_flavours(' + data['id'] + ')"><i class="bi-trash"></i></button>';
    cell3.innerHTML += '<button class="btn btn-light btn-sm btn-edit-img" id="btn-edit-img' + data['id'] + '" onclick="edit_image(' + data['id'] + ', ' + url + ')"><i class="bi-pencil-square"></i></button>';
    cell3.innerHTML += '</div>';

  }

  function edit_image(id, url) {

    var url = "'" + url + "'";

    var template = '<div class="template-image" id="template-image' + id + '">' +
      '<div class="">' +
      '<form id="form-edit-image">' +
      '<input type="file" name="file" id="field-upload-edit" class="custom-file-input custom-file-input-sm" hidden onchange="change_image(' + id + ')">' +
      '<input class="id-db" type="hidden"  name="id-db" value="' + id + '">' +
      '<label for="field-upload-edit" class="label-edit">Choose file</label>' +
      '<span class="error-edit-image" id="error-edit-image' + id + '">File tidak di dukung</span>' +
      '</form>' +
      '</div>' +
      '</div>';

    $('.template-image-table' + id).html(template);

    // change logo
    var logo = '<i class="bi bi-x-circle"></i>';
    $('#btn-edit-img' + id).html(logo);

    //change onclick attribute
    $('#btn-edit-img' + id).attr('onclick', 'clear_edit(' + id + ', ' + url + ')');

  }

  function clear_edit(id, url) {

    var img = '<img src="<?= base_url(); ?>' + url + '" class="img-flavours">';
    $('.template-image-table' + id).html(img);

    //change button edit
    var logo = '<i class="bi-pencil-square"></i>';
    $('#btn-edit-img' + id).html(logo);

    var url = "'" + url + "'";

    //change onclick
    $('#btn-edit-img' + id).attr('onclick', 'edit_image(' + id + ', ' + url + ')');

  }

  function change_image(id) {

    var form = document.getElementById('form-edit-image');
    var formData = new FormData(form);

    $.ajax({
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      url: '<?= site_url('flavours/edit_image'); ?>',
      dataType: 'json',
      success: function(response) {
        console.log(response);

        //set progress bar
        var loader = '<progress value="20" class="progress-edit" id="progress-bar' + id + '" max="100"></progress>';
        $('#template-image' + id).html(loader);

        if (response.message == 'success') {

          var max = 100;
          var elem = $('#progress-bar' + id);

          move(elem, max);

          setTimeout(function() {

            var img = '<img src="<?= base_url(); ?>' + response.url + '" class="img-flavours">';
            $('.template-image-table' + id).html(img);

            //change button edit
            var url = "'" + response.url + "'";
            change_button_edit(id, url);

          }, 1500)

        } else if (response.message == 'error-wrong') {

          var template = '<div class="template-image" id="template-image' + id + '">' +
            '<div class="">' +
            '<form id="form-edit-image">' +
            '<input type="file" name="file" id="field-upload-edit" class="custom-file-input custom-file-input-sm" hidden onchange="change_image(' + id + ')">' +
            '<input class="id-db" type="hidden"  name="id-db" value="' + id + '">' +
            '<label for="field-upload-edit" class="label-edit">Choose file</label>' +
            '<span class="error-edit-image" id="error-edit-image' + id + '">File tidak di dukung</span>' +
            '</form>' +
            '</div>' +
            '</div>';

          $('.template-image-table' + id).html(template);

          $('#error-edit-image' + id).show();

        }

      }
    })

  }

  function change_button_edit(id, url) {

    var logo = '<i class="bi-pencil-square"></i>';
    $('#btn-edit-img' + id).html(logo);

    // var url = "'"+ url +"'";

    //change onclick
    $('#btn-edit-img' + id).attr('onclick', 'edit_image(' + id + ', ' + url + ')');

  }

  function sort_ascending(key) {

    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("table-flavours");
    switching = true;


    while (switching) {

      switching = false;
      rows = table.rows; // get tr element

      for (i = 1; i < (rows.length - 1); i++) {

        shouldSwitch = false;

        x = rows[i].getElementsByTagName("TD")[1]; // td title
        y = rows[i + 1].getElementsByTagName("TD")[1]; // td title

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

  function flavours_status(id) {

    var value = $('#flavours-status-' + id).is(':checked');

    $.ajax({
      url: "<?= site_url('flavours/flavour_status'); ?>",
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

  function delete_flavours(id) {

    Swal.fire({
      title: 'Delete flavour?',
      //text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#007bff',
      cancelButtonColor: '#6c757d',
      confirmButtonText: 'Submit!'
    }).then((result) => {

      if (result.isConfirmed) {

        $.ajax({
          url: "<?= site_url('flavours/delete_flavour'); ?>",
          type: "post",
          data: {
            id: id
          },
          success: function() {
            get_data_flavours();
          }
        });

      }
    });
  }

  $('#form-add-flavours').submit(function(e) {
    e.preventDefault();

    var form = $('#form-add-flavours')[0];
    var formData = new FormData(form);

    var progressElem = $('#progressBar');

    var title = $('#title').val();

    if (title == '') {

      //change input field to showing alert
      $('#title').attr('placeholder', 'Title harus diisi');
      $('#title').addClass('input-alert');

    } else {

      Swal.fire({
        title: 'Save flavours?',
        //text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#007bff',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Submit!'
      }).then((result) => {

        if (result.isConfirmed) {

          $.ajax({
            url: "<?= site_url('flavours/save_data'); ?>",
            type: "post",
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            beforeSend: function() {
              var spinner = '<div class="spinner-border text-light" role="status" style="width: 15px; height: 15px;">' +
                '<span class="visually-hidden">Loading...</span>' +
                '</div>';
              $('.save-flavour').html(spinner);
            },
            success: function(response) {
              console.log(response);

              var elem = $('#progress-bar');

              if (response.message == "success") {

                $('.progress-flavour').show();

                $('.label-upload').css({
                  "margin-top": "1px"
                });

                var max = 100;

                move(elem, max);

                //remove progress
                setTimeout(function() {

                  $('.progress-flavour').hide();

                  $('.span-file-name').text('');

                  $('.label-upload').css({
                    "margin-top": "5px"
                  });

                  Swal.fire({
                    title: 'Success',
                    icon: 'success',
                    buttons: false,
                    timer: 1500
                  })

                  //change button
                  $('.save-flavour').html('submit');

                }, 1700);

                form.reset();

                get_data_flavours();

                $('input:first').focus();

              } else if (response.message == 'You did not select a file to upload.') {

                //show span
                $('.span-file-name').text('Gambar masih kosong');

                $('.span-file-name').css({
                  "color": "red"
                });

                //change button
                $('.save-flavour').html('submit');

              } else if (response.message == 'The filetype you are attempting to upload is not allowed.') {

                //progress error
                $('.progress-flavour').show();

                var max = Math.floor((Math.random() * 20) + 1);
                move(elem, max);

                //hide progress
                setTimeout(function() {

                  $('.progress-flavour').hide();

                  // show span
                  $('.span-file-name').text('Format file tidak di dukung');

                  $('.span-file-name').css({
                    "color": "red"
                  });

                  //change button
                  $('.save-flavour').html('submit');

                }, 900);

              }

            }
          })

        }
      });

    }

  });

  function set_file_name() {

    var value = $('#field-upload').val().split(/[\\]/);

    $('.span-file-name').text(value[2]);
    $('.span-file-name').css({
      "color": "black"
    });

  }
</script>