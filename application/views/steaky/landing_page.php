<!-- header -->

<div class="row main-navbar fixed-top ">

    <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 col-xs-12"></div>
    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-xs-12 col-nav">

        <div class="row">

            <div class="col-4 nav-home active-nav" onclick="show_home()">
                <span>Home</span>
            </div>
            <div class="col-4">
                <div class="logo-container nav-logo position-absolute top-50 start-50 translate-middle">
                    <img class="img-fluid  image-lab" src="<?= base_url(); ?>assets/images/steaky-logo.png" alt="">
                </div>
            </div>
            <div class="col-4 nav-franchise" onclick="join_franchise()">
                <span>Join Franchise</span>
            </div>

        </div>

    </div>
    <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 col-xs-12"></div>

</div>

<!-- end header -->

<!-- ################################################### home div ############################################### -->

<div class="home-div">

    <!-- banner -->
    <div class="row banner mt-xl-5 mt-lg-5 mt-md-5 mt-sm-5">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs12">
            <div class="banner-img">
                <div class="row row-banner">
                    <div class="banner-template">
                        <div class="wave-banner"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- end banner -->

    <!-- flavour -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-top: -0.5em;">
        <div class="carousel-inner">
            <div class="carousel-item active first-carousel" aria-label="3">
                <div class="row flavour mt-xl-3 mt-lg-3 mt-md-3 mt-sm-3 text-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-xs-12 col-category">
                        <div class="card w-100 border-0" style="width: 18rem; background: #e6e6e6;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                            <div class="card-series-helper">
                                <div class="card-body p-2 card-beef-series" style="background: lightgray;">
                                    <div class="wave"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-xs-12 col-category">
                        <div class="card w-100 border-0" style="width: 18rem; background: #e6e6e6;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                            <div class="card-series-helper">
                                <div class="card-body p-2 card-chicken-series" style="background: lightgray;">
                                    <div class="wave"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flavour second text-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-xs-12 col-category">
                        <div class="card w-100 border-0" style="width: 18rem; background: #e6e6e6;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">
                            <div class="card-series-helper">
                                <div class="card-body p-2 card-combo-series" style="background: lightgray;">
                                    <div class="wave"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-xs-12 col-category">
                        <div class="card w-100 border-0" style="width: 18rem; background: #e6e6e6;">
                            <div class="card-series-helper">
                                <div class="card-body p-2 card-beverage-series" style="background: lightgray;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5">
                                    <div class="wave"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row nav-tab-carousel">
                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 text-center">

                    <div class="row">

                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 back" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-label="Slide 1">
                            <img class="back-tab" src="<?= base_url(); ?>assets/images/back-gray.png" alt="">
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
                            <div class="tab-badge"></div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 d-flex tab-menu">

                            <div class="slide-tab">
                                <div class="menu-title beef-tab active-tab" id="beef-tab" active-tab="beef-tab" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                                    <p>beef series</p>
                                </div>
                                <div class="secondary-menu chicken-tab" id="chicken-tab" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                    <p>Chicken series</p>
                                </div>
                                <div class=" secondary-menu blury-tab combo-tab" id="combo-tab" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">
                                    <p>Beverages</p>
                                </div>
                                <div class="secondary-menu blury-tab beverage-tab" id="beverage-tab" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5">
                                    <p>Snacks</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>
            </div>
            <div class="carousel-item carousel-beef-chicken" data-type="beef-tab">

                <div class="row row-desc">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center">
                        <div class="desc-menu">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam doloremque possimus fugiat fuga vitae! Assumenda non voluptatibus odit nobis inventore cum quisquam id ipsam dolore nisi quos enim, hic Beef!</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                </div>
                <div class="row row-img-beef">

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2"></div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center row-helper-img-beef">
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 mt-3 col-img-beef" id="mushroom-crispy-beef-steak-1" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-1', 'hover-text-1', 'img-beef-1')" onmouseout="leave_chicken('mushroom-crispy-beef-steak-1', 'hover-text-1', 'img-beef-1')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-1', 'hover-text-1', 'img-beef-1')">
                                <img class="img-beef  image-lab" id="img-beef-1" src="<?= base_url(); ?>assets/images/crispy_beef_steak_with_brown_sauce_.webp" data-src="<?= base_url(); ?>assets/images/crispy_beef_steak_with_brown_sauce_.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-1', 'hover-text-1', 'img-beef-1')">
                                <div class="text-center hover-text" id="hover-text-1">
                                    <span>Original Beef Steak with Brown Sauce</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 mt-3 col-img-beef" id="mushroom-crispy-beef-steak-6" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-6', 'hover-text-6', 'img-beef-6')" onmouseout="leave_chicken('mushroom-crispy-beef-steak-6', 'hover-text-6', 'img-beef-6')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-6', 'hover-text-6', 'img-beef-6')">
                                <img class="img-beef  image-lab" id="img-beef-6" src="<?= base_url(); ?>assets/images/crispy_beef_steak_with_brown_sauce_.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-6', 'hover-text-6', 'img-beef-6')">
                                <div class="text-center hover-text" id="hover-text-6">
                                    <span>Crispy Beef Steak with Brown Sauce</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 mt-3 col-img-beef" id="mushroom-crispy-beef-steak-7" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-7', 'hover-text-7', 'img-beef-7')" onmouseout="leave_chicken('mushroom-crispy-beef-steak-7', 'hover-text-7', 'img-beef-7')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-7', 'hover-text-7', 'img-beef-7')">
                                <img class="img-beef  image-lab" id="img-beef-7" src="<?= base_url(); ?>assets/images/crispy_beef_steak_with_mushroom_sauce_.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-7', 'hover-text-7', 'img-beef-7')">
                                <div class="text-center hover-text" id="hover-text-7">
                                    <span>Crispy Beef Steak with Mushroom Sauce</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 mt-3 col-img-beef" id="mushroom-crispy-beef-steak-8" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-8', 'hover-text-8', 'img-beef-8')" onmouseout="leave_chicken('mushroom-crispy-beef-steak-8', 'hover-text-8', 'img-beef-8')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-8', 'hover-text-8', 'img-beef-8')">
                                <img class="img-beef  image-lab" id="img-beef-8" src="<?= base_url(); ?>assets/images/crispy_beef_steak_with_buttermilk_sauce.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-8', 'hover-text-8', 'img-beef-8')">
                                <div class="text-center hover-text" id="hover-text-8">
                                    <span>Crispy Beef Steak with Buttermilk Sauce</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 mt-3 col-img-beef" id="mushroom-crispy-beef-steak-9" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-9', 'hover-text-9', 'img-beef-9')" onmouseout="leave_chicken('mushroom-crispy-beef-steak-9', 'hover-text-9', 'img-beef-9')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-9', 'hover-text-9', 'img-beef-9')">
                                <img class="img-beef  image-lab" id="img-beef-9" src="<?= base_url(); ?>assets/images/crispy_beef_steak_with_cheese_sauce_.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-9', 'hover-text-9', 'img-beef-9')">
                                <div class="text-center hover-text" id="hover-text-9">
                                    <span>Crispy Beef Steak with Cheese Sauce</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 mt-3 col-img-beef" id="mushroom-crispy-beef-steak-10" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-10', 'hover-text-10', 'img-beef-10')" onmouseout="leave_chicken('mushroom-crispy-beef-steak-10', 'hover-text-10', 'img-beef-10')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-10', 'hover-text-10', 'img-beef-10')">
                                <img class="img-beef  image-lab" id="img-beef-10" src="<?= base_url(); ?>assets/images/crispy_beef_steak_with_barbeque_sauce_.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beef-steak-10', 'hover-text-10', 'img-beef-10')">
                                <div class="text-center hover-text" id="hover-text-10">
                                    <span>Crispy Beef Steak with BBQ Sauce</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2"></div>

                </div>
            </div>

            <div class="carousel-item carousel-beef-chicken" data-type="chicken-tab">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center">
                        <div class="desc-menu">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam doloremque possimus fugiat fuga vitae! Assumenda non voluptatibus odit nobis inventore cum quisquam id ipsam dolore nisi quos enim, hic Chicken!</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                </div>
                <div class="row row-img-chicken">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2"></div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center row-helper-img-chicken">
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 mt-3 col-img-chicken" id="mushroom-crispy-chicken-steak-1" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-1', 'hover-text-chicken-1', 'img-chicken-1')" onmouseout="leave_chicken('mushroom-crispy-chicken-steak-1', 'hover-text-chicken-1', 'img-chicken-1')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-1', 'hover-text-chicken-1', 'img-chicken-1')">
                                <img class="img-chicken  image-lab" id="img-chicken-1" src="<?= base_url(); ?>assets/images/crispy_chicken_steak_with_brown_sauce_.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-1', 'hover-text-chicken-1', 'img-chicken-1')">
                                <div class="text-center hover-text" id="hover-text-chicken-1">
                                    <span>Original Chicken Steak with Brown Sauce</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 mt-3 col-img-chicken" id="mushroom-crispy-chicken-steak-6" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-6', 'hover-text-chicken-6', 'img-chicken-6')" onmouseout="leave_chicken('mushroom-crispy-chicken-steak-6', 'hover-text-chicken-6', 'img-chicken-6')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-6', 'hover-text-chicken-6', 'img-chicken-6')">
                                <img class="img-chicken  image-lab" id="img-chicken-6" src="<?= base_url(); ?>assets/images/crispy_chicken_steak_with_brown_sauce_.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-6', 'hover-text-chicken-6', 'img-chicken-6')">
                                <div class="text-center hover-text" id="hover-text-chicken-6">
                                    <span>Crispy Chicken Steak with Brown Sauce</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 mt-3 col-img-chicken" id="mushroom-crispy-chicken-steak-7" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-7', 'hover-text-chicken-7', 'img-chicken-7')" onmouseout="leave_chicken('mushroom-crispy-chicken-steak-7', 'hover-text-chicken-7', 'img-chicken-7')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-7', 'hover-text-chicken-7', 'img-chicken-7')">
                                <img class="img-chicken  image-lab" id="img-chicken-7" src="<?= base_url(); ?>assets/images/crispy_chicken_steak_with_mushroom_sauce.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-7', 'hover-text-chicken-7', 'img-chicken-7')">
                                <div class="text-center hover-text" id="hover-text-chicken-7">
                                    <span>Crispy Chicken Steak with Mushroom Sauce</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 mt-3 col-img-chicken" id="mushroom-crispy-chicken-steak-8" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-8', 'hover-text-chicken-8', 'img-chicken-8')" onmouseout="leave_chicken('mushroom-crispy-chicken-steak-8', 'hover-text-chicken-8', 'img-chicken-8')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-8', 'hover-text-chicken-8', 'img-chicken-8')">
                                <img class="img-chicken  image-lab" id="img-chicken-8" src="<?= base_url(); ?>assets/images/crispy_chicken_steak_with_buttermilk_sauce.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-8', 'hover-text-chicken-8', 'img-chicken-8')">
                                <div class="text-center hover-text" id="hover-text-chicken-8">
                                    <span>Crispy Chicken Steak with Buttermilk Sauce</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 mt-3 col-img-chicken" id="mushroom-crispy-chicken-steak-9" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-9', 'hover-text-chicken-9', 'img-chicken-9')" onmouseout="leave_chicken('mushroom-crispy-chicken-steak-9', 'hover-text-chicken-9', 'img-chicken-9')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-9', 'hover-text-chicken-9', 'img-chicken-9')">
                                <img class="img-chicken  image-lab" id="img-chicken-9" src="<?= base_url(); ?>assets/images/crispy_chicken_steak_with_cheese_sauce_.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-9', 'hover-text-chicken-9', 'img-chicken-9')">
                                <div class="text-center hover-text" id="hover-text-chicken-9">
                                    <span>Crispy Chicken Steak with Cheese Sauce</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 mt-3 col-img-chicken" id="mushroom-crispy-chicken-steak-10" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-10', 'hover-text-chicken-10', 'img-chicken-10')" onmouseout="leave_chicken('mushroom-crispy-chicken-steak-10', 'hover-text-chicken-10', 'img-chicken-10')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-10', 'hover-text-chicken-10', 'img-chicken-10')">
                                <img class="img-chicken  image-lab" id="img-chicken-10" src="<?= base_url(); ?>assets/images/crispy_chicken_steak_with_barbeque_sauce_.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-chicken-steak-10', 'hover-text-chicken-10', 'img-chicken-10')">
                                <div class="text-center hover-text" id="hover-text-chicken-10">
                                    <span>Crispy Chicken Steak with BBQ Sauce</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2"></div>
                </div>
            </div>
            <div class="carousel-item carousel-combo" data-type="combo-tab">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center">
                        <div class="desc-menu-combo">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam doloremque possimus fugiat fuga vitae! Assumenda non voluptatibus odit nobis inventore cum quisquam id ipsam dolore nisi quos enim, hic Beverages!</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                </div>
                <div class="row row-img-combo">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 mt-3 col-img-combo" id="mushroom-crispy-combo-steak-1" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-1', 'hover-text-combo-1', 'img-combo-1')" onmouseout="leave_chicken('mushroom-crispy-combo-steak-1', 'hover-text-combo-1', 'img-combo-1')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-1', 'hover-text-combo-1', 'img-combo-1')">
                        <img class="img-combo  image-lab" id="img-combo-1" src="<?= base_url(); ?>assets/images/bev_ice_tea.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-1', 'hover-text-combo-1', 'img-combo-1')">
                        <div class="text-center hover-text hover-combo" id="hover-text-combo-1">
                            <span>Ice Tea</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 mt-3 col-img-combo" id="mushroom-crispy-combo-steak-2" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-2', 'hover-text-combo-2', 'img-combo-2')" onmouseout="leave_chicken('mushroom-crispy-combo-steak-2', 'hover-text-combo-2', 'img-combo-2')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-2', 'hover-text-combo-2', 'img-combo-2')">
                        <img class="img-combo  image-lab" id="img-combo-2" src="<?= base_url(); ?>assets/images/bev_orange_juice.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-2', 'hover-text-combo-2', 'img-combo-2')">
                        <div class="text-center hover-text hover-combo" id="hover-text-combo-2">
                            <span>Orange Juice</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                </div>
                <div class="row row-img-combo-2">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 mt-3 col-img-combo" id="mushroom-crispy-combo-steak-3" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-3', 'hover-text-combo-3', 'img-combo-3')" onmouseout="leave_chicken('mushroom-crispy-combo-steak-3', 'hover-text-combo-3', 'img-combo-3')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-3', 'hover-text-combo-3', 'img-combo-3')">
                        <img class="img-combo  image-lab" id="img-combo-3" src="<?= base_url(); ?>assets/images/bev_chocolate_ice_blend.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-3', 'hover-text-combo-3', 'img-combo-3')">
                        <div class="text-center hover-text hover-combo" id="hover-text-combo-3">
                            <span>Chocolate Ice Blend</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 mt-3 col-img-combo" id="mushroom-crispy-combo-steak-4" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-4', 'hover-text-combo-4', 'img-combo-4')" onmouseout="leave_chicken('mushroom-crispy-combo-steak-4', 'hover-text-combo-4', 'img-combo-4')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-4', 'hover-text-combo-4', 'img-combo-4')">
                        <img class="img-combo  image-lab" id="img-combo-4" src="<?= base_url(); ?>assets/images/bev_strawberry_ice_blend.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-4', 'hover-text-combo-4', 'img-combo-4')">
                        <div class="text-center hover-text hover-combo" id="hover-text-combo-4">
                            <span>Strawberry Ice Blend</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 mt-3 col-img-combo" id="mushroom-crispy-combo-steak-5" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-5', 'hover-text-combo-5', 'img-combo-5')" onmouseout="leave_chicken('mushroom-crispy-combo-steak-5', 'hover-text-combo-5', 'img-combo-5')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-5', 'hover-text-combo-5', 'img-combo-5')">
                        <img class="img-combo  image-lab" id="img-combo-5" src="<?= base_url(); ?>assets/images/bev_cookies_ice_blend.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-5', 'hover-text-combo-5', 'img-combo-5')">
                        <div class="text-center hover-text hover-combo" id="hover-text-combo-5">
                            <span>Cookies Ice Blend</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 mt-3 col-img-combo" id="mushroom-crispy-combo-steak-6" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-6', 'hover-text-combo-6', 'img-combo-6')" onmouseout="leave_chicken('mushroom-crispy-combo-steak-6', 'hover-text-combo-6', 'img-combo-6')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-6', 'hover-text-combo-6', 'img-combo-6')">
                        <img class="img-combo  image-lab" id="img-combo-6" src="<?= base_url(); ?>assets/images/bev_vanilla_ice_blend.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-6', 'hover-text-combo-6', 'img-combo-6')">
                        <div class="text-center hover-text hover-combo" id="hover-text-combo-6">
                            <span>Vanilla Ice Blend</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 mt-3 col-img-combo col-combo-last" id="mushroom-crispy-combo-steak-7" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-7', 'hover-text-combo-7', 'img-combo-7')" onmouseout="leave_chicken('mushroom-crispy-combo-steak-7', 'hover-text-combo-7', 'img-combo-7')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-7', 'hover-text-combo-7', 'img-combo-7')">
                        <img class="img-combo  image-lab" id="img-combo-7" src="<?= base_url(); ?>assets/images/bev_taro_ice_blend.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-combo-steak-7', 'hover-text-combo-7', 'img-combo-7')">
                        <div class="text-center hover-text hover-combo" id="hover-text-combo-7">
                            <span>Taro Ice Blend</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item carousel-beverage" data-type="beverage-tab">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center">
                        <div class="desc-menu-beverage">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam doloremque possimus fugiat fuga vitae! Assumenda non voluptatibus odit nobis inventore cum quisquam id ipsam dolore nisi quos enim, hic Snacks!</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                </div>
                <div class="row row-img-beverage">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-3 col-img-beverage" id="mushroom-crispy-beverage-steak-1" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beverage-steak-1', 'hover-text-beverage-1', 'img-beverage-1')" onmouseout="leave_chicken('mushroom-crispy-beverage-steak-1', 'hover-text-beverage-1', 'img-beverage-1')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-beverage-steak-1', 'hover-text-beverage-1', 'img-beverage-1')">
                        <img class="img-beverage  image-lab" id="img-beverage-1" src="<?= base_url(); ?>assets/images/snack1.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beverage-steak-1', 'hover-text-beverage-1', 'img-beverage-1')">
                        <div class="text-center hover-text hover-beverage" id="hover-text-beverage-1">
                            <span>Chicken Nugget</span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-3 col-img-beverage" id="mushroom-crispy-beverage-steak-2" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beverage-steak-2', 'hover-text-beverage-2', 'img-beverage-2')" onmouseout="leave_chicken('mushroom-crispy-beverage-steak-2', 'hover-text-beverage-2', 'img-beverage-2')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-beverage-steak-2', 'hover-text-beverage-2', 'img-beverage-2')">
                        <img class="img-beverage  image-lab" id="img-beverage-2" src="<?= base_url(); ?>assets/images/snack2.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beverage-steak-2', 'hover-text-beverage-2', 'img-beverage-2')">
                        <div class="text-center hover-text hover-beverage" id="hover-text-beverage-2">
                            <span>Local Potato</span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-3 col-img-beverage" id="mushroom-crispy-beverage-steak-3" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beverage-steak-3', 'hover-text-beverage-3', 'img-beverage-3')" onmouseout="leave_chicken('mushroom-crispy-beverage-steak-3', 'hover-text-beverage-3', 'img-beverage-3')" onclick="click_img_chicken('Mushroom Crispy Beef Steak', 'mushroom-crispy-beverage-steak-3', 'hover-text-beverage-3', 'img-beverage-3')">
                        <img class="img-beverage  image-lab" id="img-beverage-3" src="<?= base_url(); ?>assets/images/snack3.webp" alt="" onmouseover="hover_img_menu('Mushroom Crispy Beef Steak', 'mushroom-crispy-beverage-steak-3', 'hover-text-beverage-3', 'img-beverage-3')">
                        <div class="text-center hover-text hover-beverage" id="hover-text-beverage-3">
                            <span>French Fries</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end flavour -->


    <!-- store location -->

    <!-- <div class="container" style="margin-bottom: 5em;"> -->

    <div class="row store mt-xl-5 mt-lg-5 mt-md-5 mt-sm-4">

        <div class="col-12">

            <div class="row mb-4">

                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-1"></div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-10 text-center">
                    <img class="logo-icon" src="<?= base_url(); ?>assets/images/logo-icon.png" alt="">
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-1"></div>

            </div>

            <div class="row mb-4">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-text-1"></div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center col-text-2">
                    <p class="mb-0" style="font-family: var(--app-bold); color: #B50206; font-size: 30px;">New Store Locations</p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-text-3"></div>

            </div>

            <div class="xlarge-view">

                <div class="row row-store-image">

                    <div class="col-xl-1"></div>

                    <div class="col-xl-10">

                        <div class="row row-first-store" style="z-index: 2;"></div>

                        <div class="row row-second-store" style="display: none; position: relative;"></div>

                        <div class="row row-show-more" style="margin-top: 1.5em; display: none;">
                            <div class="col-12 text-center show-more-button" onclick="show_more_store()">
                                <p id="show-more-button">Show More</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-1"></div>

                </div>

            </div>

            <div class="medium-view">

                <div class="row row-store-image">

                    <div class="col-xl-1"></div>

                    <div class="col-xl-10">

                        <div class="row medium-row-first-store" style="z-index: 2;"></div>

                        <div class="row medium-row-second-store" style="display: none; position: relative;"></div>

                        <div class="row row-show-more" style="margin-top: 1.5em; display: none;">
                            <div class="col-12 text-center medium-show-more-button" onclick="show_more_store()">
                                <p id="show-more-button">Show More</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-1"></div>

                </div>

            </div>

        </div>

    </div>

    <!-- </div> -->

    <!-- end store location  -->

    <!-- footer  -->

    <div class="row row-main-footer">

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">



        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-footer-text">

            <p class="join-us">join us steaky people</p>

            <p class="become-franchise">become a franchise</p>

            <p class="span-footer-text" style="margin-bottom: 0;">
                Minat masyarakat terhadap bidang makanan dan minuman tidak hanya sekedar menghilangkan rasa lapar dan haus saja. Tetapi termasuk juga di dalamnya adalah cita rasa yang enak, dan harga makanan serta minuman yang terjangkau.
            </p>

            <div class="row">
                <div class="col">
                    <div class="collapse" id="collapseExample" style="margin-top: 0.6em;">
                        <p class="span-footer-text-collapsed">
                            Franchise Steaky Steak hadir untuk menjawab keinginan masyarakat yang mengharapkan adanya kuliner enak dengan harga terjangkau.
                            Dengan mengusung konsep paket usaha yang modern Steaky Steak juga memiliki rasa yang khas dengan berbagai macam signature saus.
                        </p>

                        <p class="span-footer-text-collapsed">
                            Steaky Steak membuka peluamng usaha kemitraan bagi siapa saja yang ingin menjadi bagian dari bisnis Steaky Steak and Blend dengan berbagai macam benefit yang salah satunya yaitu
                            kami memberikan free konsultasi design interior maupun eksterior sesuai dengan lokasi yang dimiliki calon mitra.
                        </p>

                        <p class="span-footer-text-collapsed">
                            Kami membuka kesempatan bagi anda unutk berinvestasi di Steaky steak and Blend dengan memiliki outlet Steaky Steak anda sendiri, dan biarkan kami membantu untuk mewujudkan keberhasilan anda.
                        </p>
                    </div>
                </div>
            </div>
            <p class="p-collapse">
                <a class="btn btn-show-more-collapse" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span><img class="arrow-collapse" src="<?= base_url(); ?>assets/images/arrow-down.png" style="margin-right: 1em;" alt=""></span><span class="collapse-text-trigger">Read more</span>
                </a>
                <button class="btn" style="color: #e6e6e6;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Button with data-bs-target
                </button>
            </p>

        </div>

    </div>

    <div class="row row-town-list">

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12" id="footer-img-left">
            <img class="footer-img-left" src="<?= base_url(); ?>assets/images/footer-text-1.png" alt="">
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12" id="footer-img-left-mobile">
            <img class="footer-img-left" src="<?= base_url(); ?>assets/images/footer-text-1-mobile.png" alt="">
        </div>

        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-center-footer">

            <div class="row" style="padding-top: 1em;">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-siluet">
                    <img class="img-siluet" src="<?= base_url(); ?>assets/images/store-siluet.png" alt="">
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 btn-join text-center">
                    <button class="how-to-join d-flex justify-content-between">how to join <span><img src="<?= base_url(); ?>assets/images/right-arrow.png" alt=""></span></button>
                </div>

            </div>

            <div class="row detail-town-list">

                <div class="col-3"></div>
                <div class="col-6 text-center town-list">

                    <span class="town-name">Jakarta</span>
                    <span class="dot"><img src="<?= base_url(); ?>images/dot.png" alt=""></span>
                    <span class="town-name">malang</span>
                    <span class="dot"><img src="<?= base_url(); ?>images/dot.png" alt=""></span>
                    <span class="town-name">malang</span>
                    <span class="dot"><img src="<?= base_url(); ?>images/dot.png" alt=""></span>
                    <span class="town-name">malang</span>
                    <span class="dot"><img src="<?= base_url(); ?>images/dot.png" alt=""></span>
                    <span class="town-name">malang</span>
                    <span class="dot"><img src="<?= base_url(); ?>images/dot.png" alt=""></span>
                    <span class="town-name">malang</span>

                </div>
                <div class="col-3"></div>

            </div>

            <div class="row" style="margin-bottom: 3em;">

                <div class="col-12 text-center">
                    <img class="more-than-steak" src="<?= base_url(); ?>assets/images/more-than-steak.png" alt="">
                </div>

            </div>

        </div>

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12" id="footer-img-right-mobile">
            <img class="footer-img-right" src="<?= base_url(); ?>assets/images/footer-text-2-mobile.png" alt="">
        </div>

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12" id="footer-img-right">
            <img class="footer-img-right" src="<?= base_url(); ?>assets/images/footer-text-2.png" alt="">
        </div>


    </div>

</div>

<!-- ################################################### end home div ############################################### -->



<!-- ###################################################  franchise div ############################################### -->

<div class="row franchise-div">
    <div class="col-md-6 offset-md-3 targetFranchise"></div>
</div>

<!-- ################################################### end franchise div ############################################### -->




<div class="row fixed-bottom footer-fixed">

    <div class="col-12" style="display: flex; justify-content: space-between;">

        <div style="display: flex;">
            <span class="instagram-footer">Instagram</span>
            <span class="instagram-footer-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></span>
            <span class="divide">|</span>
            <span class="whatsapp-footer" id="whatsapp-jawa" onclick="get_number()">Whatsapp Jawa</span>
            <span class="divide">|</span>
            <span class="whatsapp-footer" id="whatsapp-luar" onclick="get_number()">Whatsapp Luar Jawa</span>
        </div>

        <div class="div-contact-us">
            <span class="contact-us">contact us</span>
        </div>

    </div>

</div>

<!-- end footer  -->

<!-- modal whatsapp for mobile only -->

<div class="modal fade modal-whatsapp" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
            <div class="col-6 text-center">
                <div class="whatsapp-kota-div">
                    <span class="modal-whatsapp-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </span>
                </div>
                <div class="whatsapp-kota-text">
                    Whatsapp Jawa
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="whatsapp-kota-div">
                    <span class="modal-whatsapp-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </span>
                </div>
                <div class="whatsapp-kota-text">
                    Whatsapp Luar Kota
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end modal whatsapp for mobile only -->

<script>
    $(document).ready(function() {

        get_banner();
        get_series();
        get_store();

        $('.modal-whatsapp').modal('show');

        $('.collapse-text-trigger').click((e) => {
            e.preventDefault();

            $('#collapseExample').collapse('toggle');
        })

        var myCollapsible = document.getElementById('collapseExample');
        myCollapsible.addEventListener('show.bs.collapse', function() {
            $('.collapse-text-trigger').text('Read less');
            $('.arrow-collapse').addClass('rtr');
        });

        myCollapsible.addEventListener('hidden.bs.collapse', function() {
            $('.collapse-text-trigger').text('Read more');
            $('.arrow-collapse').removeClass('rtr');
        });

        var myCarousel = document.querySelector('#carouselExampleIndicators');
        var carousel = new bootstrap.Carousel(myCarousel, {
            pause: true,
            interval: false
        })

        $('#carouselExampleIndicators').on('slide.bs.carousel', function(ev) {
            var idx = $(ev.relatedTarget).index() + 1;
            if (idx == 1) {
                $('.nav-tab-carousel').addClass('nav-tab-carousel-move');
            }
        });

        myCarousel.addEventListener('slide.bs.carousel', function() {
            $('.nav-tab-carousel').css({
                "left": "0"
            })
        })

        myCarousel.addEventListener('slid.bs.carousel', function() {


            var active = $('.carousel-item.active').attr('data-type');
            if (active == 'chicken-tab') {
                //add new active tab
                $('.chicken-tab').click();

                //change beef tab style 
                $('.beef-tab p').addClass('inactive-tab');
                $('.beef-tab').addClass('inactive-beef-tab');
            } else if (active == 'combo-tab') {
                //add new active tab
                $('.combo-tab').click();

                //change beef tab style 
                $('.beef-tab p').addClass('inactive-tab');
                $('.beef-tab').addClass('inactive-beef-tab');
                $('.beef-tab').addClass('blury-tab');
            } else if (active == 'beverage-tab') {
                //add new active tab
                $('.beverage-tab').click();

                //change beef tab style 
                $('.beef-tab p').addClass('inactive-tab');
                $('.beef-tab').addClass('inactive-beef-tab');
                $('.beef-tab').addClass('blury-tab');

                $('.chicken-tab').addClass('blury-tab');
            } else if (active == 'beef-tab') {
                $('.beef-tab').click();
            }
        })

        // ####################################### beef series click ######################################### //

        $('.beef-tab').click((e) => {
            e.preventDefault()

            var active = $('.active-tab').attr('active-tab');

            //clear style 
            $('#chicken-tab p').removeAttr('class');
            $('#chicken-tab').removeAttr('class');
            $('#beef-tab p').removeAttr('class');
            $('#beef-tab').removeAttr('class');
            $('#combo-tab p').removeAttr('class');
            $('#combo-tab').removeAttr('class');
            $('#beverage-tab p').removeAttr('class');
            $('#beverage-tab').removeAttr('class');
            $('.nav-tab-carousel').removeClass('nav-tab-carousel-move');

            $('#beef-tab').attr('class', 'menu-title beef-tab')
            $('#chicken-tab').attr('class', 'secondary-menu chicken-tab');
            $('#combo-tab').attr('class', 'secondary-menu blury-tab combo-tab');
            $('#beverage-tab').attr('class', 'secondary-menu blury-tab beverage-tab');

            //clear active tab
            $('.beef-tab').removeAttr('active-tab');
            $('.chicken-tab').removeAttr('active-tab');
            $('.combo-tab').removeAttr('active-tab');
            $('.beverage-tab').removeAttr('active-tab');

            //clear active tab class
            $('.beef-tab').removeClass('active-tab');
            $('.chicken-tab').removeClass('active-tab');
            $('.combo-tab').removeClass('active-tab');
            $('.beverage-tab').removeClass('active-tab');

            //clear slide tab class
            $('.slide-tab').removeClass('slide-tab-beef');
            $('.slide-tab').removeClass('slide-tab-chicken');
            $('.slide-tab').removeClass('slide-tab-combo');
            $('.slide-tab').removeClass('slide-tab-beverage');


            //add active tab
            $('.beef-tab').attr('active-tab', 'beef-tab');
            $('.beef-tab').addClass('active-tab');

            //change slide tab
            $('.slide-tab').addClass('slide-tab-beef');

            //change font to active text
            $('.beef-tab p').addClass('active-text-tab');

            if (active == 'chicken-tab') {
                //change style chicken-tab
                $('.chicken-tab').addClass('inactive-etc-tab');

                $('.chicken-tab p').addClass('inactive-tab');
            } else if (active == 'combo-tab') {
                //add blur
                $('.combo-tab').addClass('blury-tab');

                //change style of combo-tab
                $('.combo-tab p').css({
                    "font-size": "1em",
                    "color": "#cccccc"
                })

                $('.combo-tab').css({
                    "top": "1.5em"
                })

            }



            //un blur 
            $('.beef-tab').removeClass('blury-tab');
        })

        // ####################################### end beef series click ######################################### //

        // ####################################### chicken series click ######################################### //

        $('.chicken-tab').click((e) => {
            e.preventDefault();

            //condition active tab
            var active = $('.active-tab').attr('active-tab');

            //clear style 
            $('#chicken-tab p').removeAttr('class');
            $('#chicken-tab').removeAttr('class');
            $('#beef-tab p').removeAttr('class');
            $('#beef-tab').removeAttr('class');
            $('#combo-tab p').removeAttr('class');
            $('#combo-tab').removeAttr('class');
            $('#beverage-tab p').removeAttr('class');
            $('#beverage-tab').removeAttr('class');
            $('.nav-tab-carousel').removeClass('nav-tab-carousel-move');

            $('#beef-tab').attr('class', 'menu-title beef-tab')
            $('#chicken-tab').attr('class', 'secondary-menu chicken-tab');
            $('#combo-tab').attr('class', 'secondary-menu combo-tab');
            $('#beverage-tab').attr('class', 'secondary-menu blury-tab beverage-tab');

            //clear active tab
            $('.beef-tab').removeAttr('active-tab');
            $('.chicken-tab').removeAttr('active-tab');
            $('.combo-tab').removeAttr('active-tab');
            $('.beverage-tab').removeAttr('active-tab');

            $('.beef-tab').removeClass('active-tab');
            $('.chicken-tab').removeClass('active-tab');
            $('.combo-tab').removeClass('active-tab');
            $('.beverage-tab').removeClass('active-tab');

            //clear slide tab class
            $('.slide-tab').removeClass('slide-tab-beef');
            $('.slide-tab').removeClass('slide-tab-chicken');
            $('.slide-tab').removeClass('slide-tab-combo');
            $('.slide-tab').removeClass('slide-tab-beverage');

            //add active tab
            $('.chicken-tab').attr('active-tab', 'chicken-tab');
            $('.chicken-tab').addClass('active-tab');

            $('.slide-tab').addClass('slide-tab-chicken');

            //change style of this element
            $('.chicken-tab p').addClass('active-text-etc');

            $('.chicken-tab').addClass('active-div-text')

            if (active == 'beef-tab') {
                $('.beef-tab p').addClass('inactive-tab');

                $('.beef-tab').addClass('inactive-beef-tab');

                //remove blur 
                $('.combo-tab').removeClass('blury-tab');
            } else if (active == 'combo-tab') {
                //un blur beef tab
                $('.beef-tab').removeClass('blury-tab');

                //blur beverage tab 
                $('.beverage-tab').addClass('blury-tab');


                //change style combo 
                $('.combo-tab p').addClass('inactive-tab');

                $('.combo-tab').addClass('inactive-etc-tab');

                //change style beef tab
                $('.beef-tab p').addClass('inactive-tab');
                $('.beef-tab').addClass('inactive-beef-tab');
            } else if (active == 'beverage-tab') {
                //change style of beef tab 
                $('.beef-tab p').addClass('inactive-tab');
                $('.beef-tab').addClass('inactive-beef-tab');
            }

            //un blur 
            $('.chicken-tab').removeClass('blury-tab');
        });

        // ####################################### end chicken series click ######################################### //

        // ####################################### combo series click ######################################### //

        $('.combo-tab').click((e) => {
            e.preventDefault();

            //condition active tab
            var active = $('.active-tab').attr('active-tab');

            //clear style 
            $('#chicken-tab p').removeAttr('class');
            $('#chicken-tab').removeAttr('class');
            $('#beef-tab p').removeAttr('class');
            $('#beef-tab').removeAttr('class');
            $('#combo-tab p').removeAttr('class');
            $('#combo-tab').removeAttr('class');
            $('#beverage-tab p').removeAttr('class');
            $('#beverage-tab').removeAttr('class');
            $('.nav-tab-carousel').removeClass('nav-tab-carousel-move');

            $('#beef-tab').attr('class', 'menu-title beef-tab')
            $('#chicken-tab').attr('class', 'secondary-menu chicken-tab');
            $('#combo-tab').attr('class', 'secondary-menu blury-tab combo-tab');
            $('#beverage-tab').attr('class', 'secondary-menu blury-tab beverage-tab');

            //clear active tab
            $('.beef-tab').removeAttr('active-tab');
            $('.chicken-tab').removeAttr('active-tab');
            $('.combo-tab').removeAttr('active-tab');
            $('.beverage-tab').removeAttr('active-tab');

            $('.beef-tab').removeClass('active-tab');
            $('.chicken-tab').removeClass('active-tab');
            $('.combo-tab').removeClass('active-tab');
            $('.beverage-tab').removeClass('active-tab');

            //clear slide tab class
            $('.slide-tab').removeClass('slide-tab-beef');
            $('.slide-tab').removeClass('slide-tab-chicken');
            $('.slide-tab').removeClass('slide-tab-combo');
            $('.slide-tab').removeClass('slide-tab-beverage');

            //add active tab
            $('.combo-tab').attr('active-tab', 'combo-tab');
            $('.combo-tab').addClass('active-tab');

            //change this element 
            $('.combo-tab p').addClass('active-text-combo');

            $('.combo-tab').addClass('active-div-text');

            //change slide tab 
            $('.slide-tab').addClass('slide-tab-combo');

            if (active == 'chicken-tab') {
                //change style chicken-tab
                $('.chicken-tab p').addClass('inactive-tab');

                $('.chicken-tab').addClass('inactive-etc-tab');

                //change style and add blur of beef-tab 
                $('.beef-tab p').addClass('inactive-tab');

                $('.beef-tab').addClass('inactive-beef-tab');
            } else if (active == 'beef-tab') {

                //change style of beef-tab 
                $('.beef-tab p').addClass('inactive-tab');

                $('.beef-tab').addClass('inactive-beef-tab');
            } else if (active == 'beverage-tab') {
                //change style of beverage-tab
                $('.beverage-tab p').addClass('inactive-tab');

                $('.beverage-tab').addClass('inactive-etc-tab');

                //change style of beef tab 
                $('.beef-tab p').addClass('inactive-tab');
                $('.beef-tab').addClass('inactive-beef-tab');
            }



            //un blur
            $('.beverage-tab').removeClass('blury-tab');

            //blur
            $('.beef-tab').addClass('blury-tab');

            //un blur 
            $('.combo-tab').removeClass('blury-tab');

        });

        // ####################################### end combo series click ######################################### //

        // ####################################### beverage series click ######################################### //

        $('.beverage-tab').click((e) => {
            //condition active tab
            var active = $('.active-tab').attr('active-tab');
            //clear style 
            $('#chicken-tab p').removeAttr('class');
            $('#chicken-tab').removeAttr('class');
            $('#beef-tab p').removeAttr('class');
            $('#beef-tab').removeAttr('class');
            $('#combo-tab p').removeAttr('class');
            $('#combo-tab').removeAttr('class');
            $('#beverage-tab p').removeAttr('class');
            $('#beverage-tab').removeAttr('class');
            $('.nav-tab-carousel').removeClass('nav-tab-carousel-move');

            $('#beef-tab').attr('class', 'menu-title beef-tab')
            $('#chicken-tab').attr('class', 'secondary-menu chicken-tab');
            $('#combo-tab').attr('class', 'secondary-menu blury-tab combo-tab');
            $('#beverage-tab').attr('class', 'secondary-menu blury-tab beverage-tab');

            //clear active tab
            $('.beef-tab').removeAttr('active-tab');
            $('.chicken-tab').removeAttr('active-tab');
            $('.combo-tab').removeAttr('active-tab');
            $('.beverage-tab').removeAttr('active-tab');

            $('.beef-tab').removeClass('active-tab');
            $('.chicken-tab').removeClass('active-tab');
            $('.combo-tab').removeClass('active-tab');
            $('.beverage-tab').removeClass('active-tab');

            //clear slide tab class
            $('.slide-tab').removeClass('slide-tab-beef');
            $('.slide-tab').removeClass('slide-tab-chicken');
            $('.slide-tab').removeClass('slide-tab-combo');
            $('.slide-tab').removeClass('slide-tab-beverage');

            //add active tab
            $('.beverage-tab').attr('active-tab', 'beverage-tab');
            $('.beverage-tab').addClass('active-tab');

            //slide tab 
            $('.slide-tab').addClass('slide-tab-beverage');

            //change style of this element 
            $('.beverage-tab p').addClass('active-text-beverage');

            $('.beverage-tab').addClass('active-div-text');

            if (active == 'combo-tab') {
                //add blur to chicken0-tab 
                $('.chicken-tab').addClass('blury-tab');

                //change style of combo-tab 
                $('.combo-text p').addClass('inactive-tab');

                $('.combo-tab').addClass('inactive-etc-class');
                $('.combo-tab').removeClass('blury-tab');

                //change style of beef 
                $('.beef-tab p').addClass('inactive-tab');
                $('.beef-tab').addClass('inactive-beef-tab');

                //add blur to beef tab 
                $('.beef-tab').addClass('blury-tab');

            } else if (active == 'chicken-tab') {
                //add blur to chicken0-tab and beef tab
                $('.chicken-tab').addClass('blury-tab');
                $('.beef-tab').addClass('blury-tab');

                //change style of chicken-tab
                $('.chicken-tab p').addClass('inactive-tab');

                $('.chicken-tab').addClass('inactive-etc-tab');

                //change beef tab style 
                $('.beef-tab p').addClass('inactive-tab');
                $('.beef-tab').addClass('inactive-beef-tab');
            } else if (active == 'beef-tab') {
                //ublur beef-tab and chicken-tab
                $('.chicken-tab').addClass('blury-tab');
                $('.beef-tab').addClass('blury-tab');

                //change style of beef tab
                $('.beef-tab p').addClass('inactive-tab');

                $('.beef-tab').addClass('inactive-beef-tab');

                //un blur combo tab
                $('.combo-tab').removeClass('blury-tab');
            }

            //un blur this item 
            $('.beverage-tab').removeClass('blury-tab')
            $('.combo-tab').removeClass('blury-tab')
        })

        // ####################################### end beverage series click ######################################### //

    })

    function show_home() {
        $('.nav-franchise').removeClass('active-nav');
        $('.nav-home').addClass('active-nav');

        $('.franchise-div').hide();
        $('.home-div').show();
    }

    function join_franchise() {
        $('.nav-home').removeClass('active-nav');
        $('.nav-franchise').addClass('active-nav');
        $.ajax({
            type: 'post',
            url: '<?= site_url('steaky/get_content'); ?>',
            dataType: 'text',
            success: function(response) {
                $('.home-div').hide();
                $('.targetFranchise').html(response);
            }
        })
    }

    function hover_img_menu(menu, id, span, img) {
        var split = img.split('-');

        if (split[1] == 'combo') {
            $('#' + id).addClass('helper-img-combo');
        } else if (split[1] == 'beverage') {
            $('#' + id).addClass('helper-img-beverage');
        } else {
            $('#' + id).addClass('helper-img-chicken');
        }

        $('#' + img).addClass('img-chicken-blur');
        $('#' + span).css({
            "opacity": "1"
        })

    }

    function click_img_chicken(menu, id, span, img) {
        var split = img.split('-');

        if (split[1] == 'combo') {
            $('#' + id).addClass('helper-img-combo');
        } else if (split[1] == 'beverage') {
            $('#' + id).addClass('helper-img-beverage');
        } else {
            $('#' + id).addClass('helper-img-chicken');
        }
        $('#' + img).addClass('img-chicken-blur');
        $('#' + span).css({
            "opacity": "1"
        })

        setTimeout(() => {
            if (split[1] == 'combo') {
                $('#' + id).removeClass('helper-img-combo');
            } else {
                $('#' + id).removeClass('helper-img-chicken');
            }

            $('#' + img).removeClass('img-chicken-blur');
            $('#' + span).css({
                "opacity": "0"
            });
        }, 1000)
    }

    function leave_chicken(id, span, img) {
        var split = img.split('-');

        if (split[1] == 'combo') {
            $('#' + id).removeClass('helper-img-combo');
        } else if (split[1] == 'beverage') {
            $('#' + id).removeClass('helper-img-beverage');
        } else {
            $('#' + id).removeClass('helper-img-chicken');
        }

        $('#' + img).removeClass('img-chicken-blur');
        $('#' + span).css({
            "opacity": "0"
        })
    }

    function back_carousel() {
        $('.back').attr('data-bs-target', 'carouselExampleIndicators');
        $('.back').attr('data-bs-slide-to', '0');
        $('.back').attr('aria-label', 'Slide 1');
    }

    function detail_menu() {
        $('.row.flavour').addClass('slide-out-left');

        $('.detail-menu').show();

        setTimeout(() => {
            $('.detail-menu').addClass('slide-in-right');
        }, 500)
    }

    function get_banner() {
        var temp = '<div class="row w-100 parent-col-banner"></div>';
        var banner = '<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 banner-img-text mt-5">' +
            '<table>' +
            '<tr>' +
            '<td>Hungry? <br> We got you</td>' +
            '</tr>' +
            '</table>' +
            '</div>' +
            '<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 banner-img-item">' +
            '<img id="banner-img" src="<?= base_url(); ?>assets/images/steaky-banner.webp" alt="">' +
            // '<img id="banner-img" src="<?= base_url(); ?>assets/images/header.png" alt="">' +
            '</div>';

        $('.row-banner').append(temp);
        $('.parent-col-banner').hide();

        $('.parent-col-banner').html(banner);
        var x = document.getElementById('banner-img').complete;

        if (x == true) {
            setTimeout(() => {
                $('.banner-template').remove();
                $('.parent-col-banner').show();
            }, 300)
        } else {
            $('.banner-template').remove();
            $('.parent-col-banner').show();
        }
    }

    function get_series() {
        var chicken = '<img class="img-fluid banner-menu-img  image-lab" src="<?= base_url(); ?>assets/images/_r1_.webp" alt="">';
        var combo = '<img class="img-fluid banner-menu-img  image-lab" src="<?= base_url(); ?>assets/images/_R2_.webp" alt="">';
        var beef = '<img class="img-fluid banner-menu-img  image-lab" src="<?= base_url(); ?>assets/images/_L1_.webp" alt="">';
        var beverages = '<img class="img-fluid banner-menu-img  image-lab" id="img-lab-beverage" src="<?= base_url(); ?>assets/images/_L2_.webp" alt="">';

        setTimeout(() => {
            $('.card-beef-series').html(beef);
            $('.card-chicken-series').html(chicken);
            $('.card-combo-series').html(beverages);
            $('.card-beverage-series').html(combo);

            $('.card-beef-series').css({
                "background": "none"
            })
            $('.card-chicken-series').css({
                "background": "none"
            })
            $('.card-combo-series').css({
                "background": "none"
            })
            $('.card-beverage-series').css({
                "background": "none"
            })
            $('.card-series-helper').css({
                "padding": "0"
            })

            //remove class 
            $('.card-beef-series').removeClass('card-beef-series');
            $('.card-chicken-series').removeClass('card-chicken-series');
            $('.card-combo-series').removeClass('card-combo-series');
            $('.card-beverage-series').removeClass('card-beverage-series');
        }, 500)
    }

    function show_more_store() {
        $('.row-second-store').show();
        $('.row-second-store').addClass('slide-in-fwd-top');

        $('.show-more-button').attr('onclick', 'hide_store()');
        $('#show-more-button').text('Show Less')

        setTimeout(() => {
            $('.row-second-store').removeClass('slide-in-fwd-top');
        }, 750)
    }

    function hide_store() {
        $('.row-second-store').addClass('slide-out-bck-top');
        $('.row-seconde-store').css({
            'z-index': "-1"
        });

        $('.show-more-button').attr('onclick', 'show_more_store()');

        $('#show-more-button').text('Show More')


        setTimeout(() => {
            $('.row-second-store').hide();
            $('.row-second-store').removeClass('slide-out-bck-top');
        }, 500)
    }

    function close_card(target, img, close, button) {
        $('.' + target).removeClass('card-1-transform');
        $('#' + close).removeClass('multiply-icon-transform')

        // remove filter 
        $('.' + img).css({
            "filter": "none",
            'opacity': "1"
        })

        setTimeout(() => {
            //hide button card
            $('#' + button).hide();
        }, 150)
    }

    function devices_width() {
        var devices_width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
        return devices_width;
    }


    function detail_store(target, img, close, button) {
        //condition screen 

        $('.' + target).addClass('card-1-transform');
        $('#' + close).addClass('multiply-icon-transform');

        $('#' + button).show();
        // $('#' + button).addClass('slide-in-bottom');

        $('.' + img).css({
            "filter": "blue (4px)",
            "-webkit-filter": "blur(4px)",
            'opacity': "0.5"
        })

    }

    function get_store() {
        $.ajax({
            type: 'post',
            url: '<?= site_url('steaky/get_store'); ?>',
            dataType: 'json',
            success: function(response) {

                if (response == 'empty') {
                    // hide outlet list 
                    $('.store').hide();
                    $('.row-store-image').hide();
                    // $('.town-list').html('');
                } else if (response.length > 1) {
                    $('.store').show();

                    // do loopoing 
                    if (response.length > 3) {
                        var key = 3;
                        $('.row-show-more').show();
                        var lastKey = (response.length - key);
                    } else {
                        var key = response.length;
                    }

                    var temp = '';
                    var med_temp = '';
                    for (var i = 0; i < key; i++) {
                        var card1 = "'card-" + (i + 1) + "'";
                        var cardImg = "'card-img-" + (i + 1) + "'";
                        var multi = "'multiply-icon-" + (i + 1) + "'";
                        var button = "'button-card-" + (i + 1) + "'";

                        var med_card1 = "'medium-card-" + (i + 1) + "'";
                        var med_cardImg = "'medium-card-img-" + (i + 1) + "'";
                        var med_multi = "'medium-multiply-icon-" + (i + 1) + "'";
                        var med_button = "'medium-button-card-" + (i + 1) + "'";

                        temp += '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 target-first-col">' +
                            '<div class="card card-img-store">' +
                            '<img src="<?= base_url(); ?>' + response[i].url + '" class=" image-lab card-img-top img-store card-img-' + (i + 1) + '" alt="...">' +
                            '<div class="card-body card-body-store card-' + (i + 1) + '">' +
                            '<div class="row">' +
                            '<div class="col-8">' +
                            '<p onclick="detail_store(' + card1 + ',' + cardImg + ',' + multi + ',' + button + ')" style="font-family: var(--sfpd-bold); color: #B50206; font-weight: bolder; margin-bottom: 0;">' + response[i].outlet_name + '</p>' +
                            '<span class="span-address" onclick="detail_store(' + card1 + ',' + cardImg + ',' + multi + ',' + button + ')">' + response[i].address + '</span>' +
                            '</div>' +
                            '<div class="col-4 multiply-icon" id="multiply-icon-' + (i + 1) + '">' +
                            '<img onclick="close_card(' + card1 + ',' + cardImg + ',' + multi + ',' + button + ')" src="<?= base_url(); ?>assets/images/multiply.png" width="30" height="30" alt="">' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="button-card" id="button-card-' + (i + 1) + '">' +
                            '<div class="row">' +
                            '<div class="col d-flex">' +
                            '<div class="btn-group text-center">' +
                            '<button class="btn-instagram"><img src="<?= base_url(); ?>assets/images/instagram.png" class=" image-lab" width="16" height="16" alt=""> Open in Instagram</button>' +
                            '<button class="btn-maps ms-2"><img src="<?= base_url(); ?>assets/images/instagram.png" class=" image-lab" width="16" height="16" alt=""> Open in Maps</button>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';

                        med_temp += '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 target-first-col">' +
                            '<div class="card card-img-store">' +
                            '<img src="<?= base_url(); ?>' + response[i].url + '" class=" image-lab card-img-top img-store medium-card-img-' + (i + 1) + '" alt="...">' +
                            '<div class="card-body card-body-store medium-card-' + (i + 1) + '">' +
                            '<div class="row">' +
                            '<div class="col-8">' +
                            '<p onclick="detail_store(' + med_card1 + ',' + med_cardImg + ',' + med_multi + ',' + med_button + ')" style="font-family: var(--sfpd-bold); color: #B50206; font-weight: bolder; margin-bottom: 0;">' + response[i].outlet_name + '</p>' +
                            '<span class="span-address" onclick="detail_store(' + med_card1 + ',' + med_cardImg + ',' + med_multi + ',' + med_button + ')">' + response[i].address + '</span>' +
                            '</div>' +
                            '<div class="col-4 multiply-icon" id="medium-multiply-icon-' + (i + 1) + '">' +
                            '<img onclick="close_card(' + med_card1 + ',' + med_cardImg + ',' + med_multi + ',' + med_button + ')" class=" image-lab" src="<?= base_url(); ?>assets/images/multiply.png" width="30" height="30" alt="">' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="button-card" id="medium-button-card-' + (i + 1) + '">' +
                            '<div class="row">' +
                            '<div class="col d-flex">' +
                            '<div class="btn-group text-center">' +
                            '<button class="btn-instagram"><img src="<?= base_url(); ?>assets/images/instagram.png" class=" image-lab" width="16" height="16" alt=""> Open in Instagram</button>' +
                            '<button class="btn-maps ms-2"><img src="<?= base_url(); ?>assets/images/instagram.png" class=" image-lab" width="16" height="16" alt=""> Open in Maps</button>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }

                    //second store 
                    var extend = '';
                    for (var x = 3; x < response.length; x++) {
                        var card1 = "'card-" + (x + 1) + "'";
                        var cardImg = "'card-img-" + (x + 1) + "'";
                        var multi = "'multiply-icon-" + (x + 1) + "'";
                        var button = "'button-card-" + (x + 1) + "'";
                        extend += '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 target-first-col">' +
                            '<div class="card card-img-store">' +
                            '<img src="<?= base_url(); ?>assets/images/testing-1.jpeg" class=" image-lab card-img-top img-store card-img-' + (x + 1) + '" alt="...">' +
                            '<div class="card-body card-body-store card-' + (x + 1) + '">' +
                            '<div class="row">' +
                            '<div class="col-8">' +
                            '<p onclick="detail_store(' + card1 + ',' + cardImg + ',' + multi + ',' + button + ')" style="font-family: var(--sfpd-bold); color: #B50206; font-weight: bolder; margin-bottom: 0;">' + response[x].outlet_name + '</p>' +
                            '<span class="span-address" onclick="detail_store(' + card1 + ',' + cardImg + ',' + multi + ',' + button + ')">' + response[x].address + '</span>' +
                            '</div>' +
                            '<div class="col-4 multiply-icon" id="multiply-icon-' + (x + 1) + '">' +
                            '<img onclick="close_card(' + card1 + ',' + cardImg + ',' + multi + ',' + button + ')" class=" image-lab" src="<?= base_url(); ?>assets/images/multiply.png" width="30" height="30" alt="">' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="button-card" id="button-card-' + (x + 1) + '">' +
                            '<div class="row">' +
                            '<div class="col d-flex">' +
                            '<div class="btn-group text-center">' +
                            '<button class="btn-instagram"><img src="<?= base_url(); ?>assets/images/instagram.png" class=" image-lab" width="16" height="16" alt=""> Open in Instagram</button>' +
                            '<button class="btn-maps ms-2"><img src="<?= base_url(); ?>assets/images/instagram.png" class=" image-lab" width="16" height="16" alt=""> Open in Maps</button>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }

                    if (response.length == 2) {
                        var col1 = '<div class="col-xl-2 col-lg-2 col-md-2 target-first-col">';
                        var col2 = '<div class="col-xl-2 col-lg-2 col-md-2 target-first-col">';

                        $('.row-first-store').append(col1);
                        $('.row-first-store').append(temp);
                        $('.row-first-store').append(col2);
                    } else if (response.length == 3) {
                        $('.row-first-store').html(temp);
                    } else if (response.length > 3) {
                        $('.row-first-store').html(temp);
                        $('.row-second-store').html(extend);
                    }
                    // $('.medium-row-first-store').html(med_temp);

                    //town list 
                    var town = '';
                    for (var t = 0; t < response.length; t++) {
                        town += '<span class="town-name">' + response[t].outlet_name + '</span>' +
                            '<span class="dot" id="dot-' + (t + 1) + '"><img src="<?= base_url(); ?>images/dot.png" alt=""></span>';
                    }

                    $('.town-list').html(town);

                    $('#dot-' + response.length).remove();

                    if (response.length > 3) {
                        //set card col-4 and show more
                    } else if (response.length > 1 && response.length < 3) {
                        //set card col-4 offset 2 and hide show more

                    } else if (response.length == 3) {
                        //set card col-4 and hide show more
                    }
                }

            }
        })
    }

    function template_store(key) {
        var key1 = '<div class="col-xl-2 col-lg-2 col-md-2 target-first-col">' +
            '<div class="col-xl-2 col-lg-2 col-md-2 target-first-col">';

        var key2 = '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 target-first-col"></div>' +
            '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 pe-1 ps-1 col-store"></div>' +
            '<div class="col-xl-4 col-lg-4 col-md-4 target-first-col">';

        if (key > 3) {
            return 'dynamic all';
        } else if (key == 2) {
            return key1;
        }
    }
</script>