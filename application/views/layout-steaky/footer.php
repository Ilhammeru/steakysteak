<script>
    function get_number() {
        $.ajax({
            url: "<?= site_url('steaky/get_data'); ?>",
            dataType: "json",
            success: function(data) {
                console.log(data);

                if (data.phone.length > 0 && data.message_content != '') {

                    for (var i = 0; i < data.phone.length; i++) {
                        var url = 'https://api.whatsapp.com/send/?phone=' + data.phone[i].phone + '&text=' + data.message_content;
                        window.open(url, '_blank');
                    }

                }

                if (data.color != '') {
                    $('a').css('background-color', data.color);
                } else {
                    $('a').addClass('btn-primary');
                    $('.whatsapp-footer').attr('target', '_blank');
                }
            }
        });
    }

    function append_phone(data, message_content, length) {

        var html = '';
        var col = '';

        if (length == 1) {
            col = 'col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-12 col-sm-12 col-xs-12';
        } else if (length == 2) {
            col = 'col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-12 col-sm-12 col-xs-12';
        } else if (length == 3) {
            col = 'col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12';
        }
        html += '<div class="' + col + '">';
        html += '<a href="https://api.whatsapp.com/send/?phone=' + data.phone + '&text=' + message_content + '" target="_blank" class="btn btn-block"><i class="bi-whatsapp"></i> ' + data.title.toUpperCase() + '</a>';
        html += '</div>';

        return html;
    }
</script>

</body>

</html>