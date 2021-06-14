
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/tinymce.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/jquery.tinymce.min.js"></script>

    <style>
        .btn-content-menu {
            margin: 0 .375rem;
        }

        .btn-content-menu.active {
            background-color: #0d6efd;
            color: white;
        }
    </style>
    
    <div class="row align-items-center mb-3">

        <div class="col-12">

            <div class="card card-body">
                <h5 class="card-title text-center color-primary">Content</h5>
            </div>

        </div>
        <!--/.col -->
    </div>
    <!--/.row -->

    <div class="row mb-3">

        <div class="col-12">

            <div class="card card-body">

                <div class="row">

                    <div class="col-12">

                        <?php
                        if (count($content) > 0) {
                            foreach ($content as $row) :
                                echo '<button class="btn btn-light btn-sm btn-content-menu" data-id="' . $row->id . '" id="btn-content-menu-' . $row->id . '">' . $row->menu . '</button>';
                            endforeach;
                        } ?>

                    </div>

                </div>

                <div id="detail-content"></div>

            </div>
            <!--/.card -->

        </div>
        <!--/.col -->
    </div>
    <!--/.row -->

    <script>

        $('.btn-content-menu').click( function () {

            var id = $(this).data('id');

            $.ajax({
                url:"<?=site_url('content/get_content_by_id');?>",
                type: "post",
                data: {
                    id: id
                },
                beforeSend: function () {
                    var loading = '<?php $this->load->view("webadmin/layouts/loading");?>';
                    $('#detail-content').html(loading);
                },
                success: function (data) {

                    $('.btn-content-menu').removeClass('active');
                    $('#btn-content-menu-' + id).addClass('active');

                    $('#detail-content').html(data);
                }
            });
        });


    </script>