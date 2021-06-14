
    <style>
        .btn-carousel-menu {
            margin: 0 .375rem;
        }

        .btn-carousel-menu.active {
            background-color: #0d6efd;
            color: white;
        }

        .btn-view.active {
            background-color: #0d6efd;
            color: white;
        }
    </style>

    <div class="card card-body">

        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary btn-sm disabled" data-bs-toggle="modal" data-bs-target="#modal-add-carousel"><i class="bi-plus"></i></button>

                <?php
                if (count($carousel) > 0) {
                    foreach ($carousel as $row) :
                        echo '<button class="btn btn-light btn-sm btn-carousel-menu" data-id="' . $row->id . '" id="btn-carousel-menu-' . $row->id . '">' . $row->menu . '</button>';
                    endforeach;
                } ?>
            </div>
        </div>

        <div id="detail-carousel"></div>

        <?php
        if (count($carousel) == 0) {
            $this->load->view('webadmin/layouts/no-data.php');
        }
        ?>

    </div>
    <!--/.card -->

    <script>

        $('.btn-carousel-menu').click( function () {

            var id = $(this).data('id');

            $.ajax({
                url: "<?=site_url('banner/get_detail_carousel');?>",
                type: "post",
                data: {
                    id: id
                },
                success: function (response) {

                    $('.btn-carousel-menu').removeClass('active');
                    $('#btn-carousel-menu-' + id).addClass('active');

                    $('#detail-carousel').html(response);
                }
            });
            
        });

    </script>