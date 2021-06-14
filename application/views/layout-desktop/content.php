<style>
    #home-banner {
        width: 100%;
        height: 45em;
        background-color: white;
    }
</style>

<div id="home" class="menu-content col s12">

    <div id="home-banner" class="home-banner"></div>

    <div class="home-content">

        <div class="row">
            <div class="col s12 m6">

                <div class="card">
                    <div class="card-image image-only">
                        <img src="<?= base_url(); ?>images/others/home-image-1.jpg">
                    </div>
                </div>

            </div>

            <div class="col s12 m6">

                <div class="card">
                    <div class="card-image image-only">
                        <img src="<?= base_url(); ?>images/others/home-image-2.jpg">
                    </div>
                </div>

            </div>
        </div>

        <div id="load-outlets-0"></div>

        <div id="load-outlets-1"></div>

        <div id="home-content"></div>

    </div>
    <!--/.home-content -->

    <div class="footer"></div>
    <!--/.footer -->

</div>
<!--/#home -->

<div id="franchise" class="menu-content col s12" style="display:none">

    <div id="franchise-banner" class="franchise-banner"></div>

    <div class="franchise-content">
        <div id="franchise-content"></div>
    </div>

    <div class="footer"></div>
    <!--/.footer -->

</div>
<!--/#franchise -->

<div id="flavour" class="menu-content col s12" style="display:none">

    <div id="flavour-banner" class="flavour-banner">Rasa kami</div>

    <div class="flavour-content">
        <div id="load-flavours"></div>
    </div>

    <div class="footer"></div>
    <!--/.footer -->

</div>
<!--/#flavour -->

<div id="contact" class="menu-content col s12" style="display:none">

    <div id="contact-banner" class="contact-banner">Kontak kami</div>

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
                    <span id="captcha-img"><?= $captchaImg; ?></span><br>
                    <span>Can't read the image? click <a href="javascript:void(0);" class="refresh-captcha">here</a> to refresh.</span>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <button class="btn" type="submit" name="action">Submit</button>
                </div>
            </div>

        </form>

        <a href="https://wa.me/6282134515154?text=Halo,%20saya%20tertarik%20dengan%20Bobabar%20saya%20melihat%20dari%20website,%20info%20paket%20usahanya%20dong%0aNama%3a%0aKota%3a" target="_blank"><img src="<?= base_url(); ?>assets/background/whatsapp-logo.png" class="wa-logo"></a>

    </div>
    <!--/.contact-content -->

    <div class="footer"></div>
    <!--/.footer -->

</div>
<!--/#contact -->

<script>
    $(document).ready(function() {

        load_banner_w();
        load_banner_f();

        load_outlets(0);
        load_outlets(1);

        load_content('home');
        load_content('franchise');

        load_flavours();

        load_footer('.footer');

        $('.menu').on('click', function() {

            var value = $(this).data('id');

            $('.menu').removeClass('active');
            $('#menu-' + value).addClass('active');

            $('.menu-content').hide();
            $('#' + value).show();

        });
    });

    function load_banner_w() {

        $.ajax({
            url: "<?= site_url('nbobabar/load_banner_w'); ?>",
            type: "post",
            data: {
                param: 'Home'
            },
            dataType: "json",
            success: function(data) {

                if (data.length == 0) {

                } else if (data.length == 1) {
                    append_row_banner(data[0], 'Home', 'home-banner');
                } else {

                }

            }
        })
    }

    function load_banner_f() {

        $.ajax({
            url: "<?= site_url('nbobabar/load_banner_w'); ?>",
            type: "post",
            data: {
                param: 'Franchise'
            },
            dataType: "json",
            success: function(data) {

                if (data.length == 0) {

                } else if (data.length == 1) {
                    append_row_banner(data[0], 'Franchise', 'franchise-banner');
                } else {

                }

            }
        })
    }

    function append_row_banner(data, param, target) {

        var html = '<img src="<?= base_url(); ?>' + data['url'] + '" class="img-banner">';

        $('#' + target).html(html);
    }

    function load_outlets(type) {

        $.ajax({
            url: "<?= site_url('nbobabar/load_outlets'); ?>",
            type: "post",
            data: {
                type: type
            },
            dataType: "json",
            beforeSend: function() {
                var loading = '<div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
                $('#load-outlets-' + type).html(loading);
            },
            success: function(data) {

                $('#load-outlets-' + type).html('');

                if (data != null) {

                    if (data.outlets.length > 0) {

                        if (type == 1) {
                            subtext = 'Outlet';
                        } else {
                            subtext = 'Segera dibuka';
                        }

                        $('#load-outlets-' + type).html('<div class="row"><div class="col s12 m12 text-center"><h2 class="content-title">' + subtext + '</h2></div></div>');

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
        html += '<div class="col m8 offset-m2">';
        html += '<div class="card">';
        html += '<div class="card-image with-content">';
        html += '<img src="<?= base_url(); ?>' + data['url'] + '">';
        html += '</div>';
        html += '<div class="card-content">';
        html += '<span class="card-content-title">' + data['outlet_name'] + '</span>';
        html += '<p>Lorem ipsum dolor sit amet.</p>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';

        $('#load-outlets-' + type).append(html);
    }

    function load_content(param) {

        var target = param + '-content';

        $.ajax({
            url: "<?= site_url('nbobabar/load_content'); ?>",
            type: "post",
            data: {
                param: param
            },
            dataType: "json",
            success: function(data) {
                if (data != null) {
                    append_row_content(data, param, target);
                } else {

                }
            }
        });
    }

    function append_row_content(data, param, target) {
        $('#' + target).html('<div class="row"><div class="col m8 offset-m2">' + data + '</div></div>');
    }

    function load_flavours() {

        $.ajax({
            url: "<?= site_url('nbobabar/load_flavours'); ?>",
            dataType: "json",
            beforeSend: function() {
                var loading = '<div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
                $('#load-flavours').html(loading);
            },
            success: function(data) {

                $('#load-flavours').html('');

                var html = '<div class="row">';

                for (i = 0; i < data.flavours.length; i++) {
                    html += append_row_flavours(data.flavours[i]);
                }

                html += '</div>';
                $('#load-flavours').append(html);
            }
        });
    }

    function append_row_flavours(data) {

        var html = '<div class="col m3 mb-2">';
        html += '<div class="card">';
        html += '<div class="card-image with-content">';
        html += '<img src="<?= base_url(); ?>' + data['url'] + '">';
        html += '</div>';
        html += '<div class="card-content">';
        html += '<span class="title-flavour">' + data['title'] + '</span>';
        html += '</div>';
        html += '</div>';
        html += '</div>';

        return html;
    }

    function load_footer(target) {
        var html = '<div class="row"><div class="footer-title">&bobabar</div><div class="footer-subtitle">TM & Copyright 2020 PT Fondasi Generasi Muda. All Rights Reserved.</div></div>';

        $(target).html(html);
    }
</script>