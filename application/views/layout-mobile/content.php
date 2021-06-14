
    <div id="home" class="col s12">

        <div id="home-banner" class="home-banner mb-2">
        </div>
        <!--/.home-banner -->

        <div class="home-content mb-5">

            <div class="row">
                <div class="col s12">

                    <div class="card">
                        <div class="card-image image-only">
                            <img src="<?=base_url();?>images/others/home-image-1.jpg">
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col s12">

                    <div class="card">
                        <div class="card-image image-only">
                            <img src="<?=base_url();?>images/others/home-image-2.jpg">
                        </div>
                    </div>

                </div>
            </div>

            <div id="load-outlets-0" style="text-align:center"></div>

            <div id="load-outlets-1" style="text-align:center"></div>

            <div id="home-content"></div>

        </div>
        <!--/.home-content -->

        <div class="home-footer mb-4">

            <div class="row">
                <div class="col s12"> 
                    <div class="home-footer-content">   
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </div>
                </div>
            </div>

        </div>
        <!--/.home-footer -->

    </div>
    <!--#home -->

    <div id="franchise" class="col s12">

        <div id="franchise-banner" class="franchise-banner mb-2">
        </div>
        <!--/.franchise-banner -->

        <div class="franchise-content mb-5">

            <div id="franchise-content"></div>

        </div>
        <!--/.franchise-content -->

    </div>
    <!--#franchise -->

    <div id="flavours" class="col s12">

        <div class="flavour-banner">
            Menu kami
        </div>

        <div class="flavour-content">
            <div class="row mb-4" id="load-flavours"></div>
        </div>

    </div>
    <!--/#flavours -->

    <div id="contact" class="col s12">

        <div class="contact-banner">
            Kontak
        </div>

        <div class="contact-content">
            
            <form id="form-submit">

                <div class="row">
                    <div class="input-field col s12">
                        <input id="nama" type="text" required>
                        <label for="nama">Nama</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="umur" type="number" required>
                        <label for="umur">Umur</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="keterangan" class="materialize-textarea" required></textarea>
                        <label for="keterangan">Keterangan</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="captcha" type="text" required>
                        <label for="captcha">Captcha</label>
                    </div>
                    <div class="input-field col s12">
                        <span id="captcha-img"><?=$captchaImg;?></span><br>
                        <span>Can't read the image? click <a href="javascript:void(0);" class="refresh-captcha">here</a> to refresh.</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <button class="btn" type="submit" name="action">Submit</button>
                    </div>
                </div>

            </form>

            <a href="https://wa.me/6282134515154?text=Halo,%20saya%20tertarik%20dengan%20Bobabar%20saya%20melihat%20dari%20website,%20info%20paket%20usahanya%20dong%0aNama%3a%0aKota%3a" target="_blank"><img src="<?=base_url();?>assets/background/whatsapp-logo.png" class="wa-logo roll-in-left mb-5"></a>

        </div>
        <!--/.contact-content -->
    </div>
    <!--/#contact -->

    <script>

        $(document).ready( function () {

           load_flavours(); 

           load_outlets(0);
           load_outlets(1);

           load_home_banner();
           load_franchise_banner();

           load_content('home');
           load_content('franchise');

            $('a.refresh-captcha').on('click', function(){

                $.ajax({
                    url: "<?=site_url('nbobabar/captcha_refresh');?>",
                    success: function (data) {
                        $('span#captcha-img').html(data);
                    }
                });
            });
        });

        function load_flavours() {

            $.ajax({
                url: "<?=site_url('nbobabar/load_flavours');?>",
                dataType: "json",
                beforeSend: function () {
                    var loading = '<div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
                    $('#load-flavours').html(loading);
                },
                success: function (data) {

                    $('#load-flavours').html('');
                    for (i = 0; i < data.flavours.length; i++) {
                        append_row_flavours(data.flavours[i]);
                    }
                }
            });
        }

        function append_row_flavours(data) {

            var html = '<div class="col s6 mb-2">';
            html += '<div class="card">';
            html += '<div class="card-image with-content">';
            html += '<img src="<?=base_url();?>' + data['url'] + '">';
            html += '</div>';
            html += '<div class="card-content">';
            html += '<span class="title-flavour">' + data['title'] + '</span>';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            $('#load-flavours').append(html);
        }

        function load_outlets(type) {

            $.ajax({
                url: "<?=site_url('nbobabar/load_outlets');?>",
                type: "post",
                data: {
                    type: type
                },
                dataType: "json",
                beforeSend: function () {
                    var loading = '<div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
                    $('#load-outlets-' + type).html(loading);
                },
                success: function (data) {

                    $('#load-outlets-' + type).html('');

                    if (data != null) {

                        if (data.outlets.length > 0) {

                            if (type == 1) {
                                subtext = 'Outlet';
                            } else {
                                subtext = 'Segera dibuka';
                            }

                            $('#load-outlets-' + type).html('<div class="row"><div class="col s12"><h2 class="content-title">' + subtext + '</h2></div></div>');

                            for (i = 0; i < data.outlets.length; i++) {
                                append_row_outlets(data.outlets[i], type);
                            }
                        }
                    }
                }
            })
        }

        function append_row_outlets(data, type) {

            var html = '<div class="row">';
            html += '<div class="col s12">';
            html += '<div class="card">';
            html += '<div class="card-image with-content">';
            html += '<img src="<?=base_url();?>' + data['url'] + '">';
            html += '</div>';
            html += '<div class="card-content">';
            html += '<span class="card-content-title">' + data['outlet_name'] +'</span>';
            html += '<p>Lorem ipsum dolor sit amet.</p>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            $('#load-outlets-' + type).append(html);
        }

        function load_home_banner() {

            $.ajax({
                url: "<?=site_url('nbobabar/load_banner_m');?>",
                type: "post",
                data: {
                    param: 'Home'
                },
                dataType: "json",
                success: function (data) {

                    if (data.length == 0) {

                    } else if (data.length == 1) {
                        append_row_banner(data[0], 'Home', 'home-banner');
                    } else {

                    }
                }
            })
        }

        function load_franchise_banner() {

            $.ajax({
                url: "<?=site_url('nbobabar/load_banner_m');?>",
                type: "post",
                data: {
                    param: 'Franchise'
                },
                dataType: "json",
                success: function (data) {

                    if (data.length == 0) {

                    } else if (data.length == 1) {
                        append_row_banner(data[0], 'Franchise', 'franchise-banner');
                    } else {

                    }
                }
            })
        }

        function append_row_banner(data, param, target) {

            var html = '<img src="<?=base_url();?>' + data['url'] + '">';
            $('#' + target).html(html);
        }

        function load_content(param) {

            var target = param + '-content';

            $.ajax({
                url: "<?=site_url('nbobabar/load_content');?>",
                type: "post",
                data: {
                    param: param
                },
                dataType: "json",
                success: function (data) {
                    if (data != null) {
                        append_row_content(data, param, target);
                    } else {

                    }
                }
            });
        }

        function append_row_content(data, param, target) {
            $('#' + target).html('<div class="row"><div class="col s12">');
            $('#' + target).append(data);
            $('#' + target).append('</div></div>');
        }

        $('#form-submit').submit( function (e) {
            e.preventDefault();

            var form = $('#form-subtmi')[0];
            var formData = new FormData(form);

            $.ajax({
                url: "<?=site_url('flavours/save_data');?>",
                type: "post",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {

                    if (response == 'success') {
                        form.reset();
                    } else if (response == 'captcha-not-match') {

                        Swal.fire({
                            position: 'center',
                            icon: 'warning',
                            title: 'Captcha salah!',
                            showConfirmButton: false,
                            timer: 1000
                        });

                    }
                }
            });
        });
    </script>