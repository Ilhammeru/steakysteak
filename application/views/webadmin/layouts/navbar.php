
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    
        <div class="container-fluid">
            <img src="<?=base_url();?>assets/background/logo-ans.png" style="width: 40px; height: auto;">
            <span class="navbar-brand">&Bobabar Webadmin</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">

                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Settings</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="<?=site_url('banner/carousel_banner');?>">Carousel Banner</a></li>
                            <li><a class="dropdown-item" href="<?=site_url('outlets');?>">Outlets</a></li>
                            <li><a class="dropdown-item" href="<?=site_url('flavours');?>">Flavours</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?=site_url('content');?>">Content</a>
                    </li> 

                </ul>

                <ul class="navbar-nav navbar-right">

                    <li class="nav-item">
                        <a href="<?=site_url('users/form_change_password');?>"
                        class="nav-link"
                        data-toggle="tooltip" data-placement="bottom" title="<?=$this->session->userdata('username');?>">
                            <?=$this->session->userdata('username');?> <i class="bi-person"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="javascript:void(0)" id="btn-signout"
                        class="nav-link"
                        data-toggle="tooltip" data-placement="bottom" title="Logout">
                            <i class="bi-power"></i>
                        </a>
                    </li>

                </ul>
                <!-- /ul.navbar-nav -->

            </div>  
            <!-- /.collapse -->

        </div>
        <!-- /.container-fluid -->
        
    </nav>

    <main class="container">