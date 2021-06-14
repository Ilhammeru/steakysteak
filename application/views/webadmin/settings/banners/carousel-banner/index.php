
    <div class="row align-items-center mb-3">

        <div class="col-8 offset-2">

            <div class="card card-body mb-3">
                <h5 class="card-title text-center color-primary">Carousel Banner</h5>
            </div>

            <div id="carousel-data"></div>

        </div>
        <!--/.col -->

    </div>
    <!--/.row -->

    <!-- Modal -->
    <div class="modal fade" id="modal-add-carousel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Carousel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="form-add-carousel" method="post">
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Menu</label>
                        <input type="text" class="form-control" name="menu" id="menu" required>
                    </div>        

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                </div>
                </form>

            </div>
        </div>

    </div>

    <script>

        $(document).ready( function () {

            get_data_carousel();
        }); 

        function get_data_carousel() {

            $.ajax({
                url: "<?=site_url('banner/get_data_carousel');?>",
                beforeSend: function () {
                    var loading = '<?php $this->load->view("webadmin/layouts/loading");?>';
                    $('#carousel-data').html(loading);
                },
                success: function (response) {
                    $('#carousel-data').html(response);
                }
            });
        }

        $("body").on("shown.bs.modal", "#modal-add-carousel", function () {
            $('#menu').focus();
        });

        $('#form-add-carousel').submit( function (e) {
            e.preventDefault();
            
            Swal.fire({
            title: 'Data sudah benar?',
            //text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#007bff',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Submit!'
            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
						url: "<?=site_url('banner/add_carousel');?>",
						data: $(this).serialize(),
						type: $(this).attr("method"),
						success: function (response) {

                            if (response == 'success') {

                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'Data berhasil disimpan',
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                                setTimeout(function () {
                                    $('#modal-add-carousel').modal('hide');
                                    get_data_carousel();
                                }, 1500);
                            
                            } else if (response == 'duplicate') {
                                
                                Swal.fire({
		                            icon: 'error',
		                            title: 'Oops...',
		                            text: 'Duplicate menu!',
		                        });
                            } else if (response == 'error') {
                                
                                Swal.fire({
		                            icon: 'error',
		                            title: 'Oops...',
		                            text: 'Something wrong!',
		                        });
                            }

						}
					});
                
                }

            });

        });

    </script>