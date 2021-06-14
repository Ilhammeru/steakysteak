
    <nav class="nav-footer">
        <div class="nav-wrapper">

            <div class="row mb-0">
                <div class="col s12 p-0">
                    <ul class="tabs">
                        <li class="tab col s3">
                            <a href="#home" class="active">
                                <img class="i-navbar" src="<?=base_url();?>assets/vendor/ans-icons/icon-home-fill.svg">
                                <span class="title-navbar">Beranda</span>
                            </a>
                        </li>
                        <li class="tab col s3">
                            <a href="#franchise">
                                <img class="i-navbar" src="<?=base_url();?>assets/vendor/ans-icons/icon-franchise-fill.svg">
                                <span class="title-navbar">Waralaba</span>
                            </a>
                        </li>
                        <li class="tab col s3">
                            <a href="#flavours">
                                <img class="i-navbar" src="<?=base_url();?>assets/vendor/ans-icons/icon-product-fill.svg">
                                <span class="title-navbar">Menu</span>
                            </a>
                        </li>
                        <li class="tab col s3">
                            <a href="#contact">
                                <img class="i-navbar" src="<?=base_url();?>assets/vendor/ans-icons/icon-contact-fill.svg">
                                <span class="title-navbar">Kontak</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    
</main>
    
    <script>

    $(document).ready( function() {
        $('.tabs').tabs();
    });

    $('*').click(function(){
        //openFullscreen();
    });

    function openFullscreen() {

        if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
            (!document.mozFullScreen && !document.webkitIsFullScreen)) {

            if (document.documentElement.requestFullScreen) {  
                document.documentElement.requestFullScreen();  
            } else if (document.documentElement.mozRequestFullScreen) {  
                document.documentElement.mozRequestFullScreen();  
            } else if (document.documentElement.webkitRequestFullScreen) {  
                document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
            }  
        }
    }
    </script>
    
</body>
</html>