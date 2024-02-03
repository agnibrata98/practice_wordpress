<!DOCTYPE html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mitech - Technology IT Solutions HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Technology IT Solutions HTML Template">
    <!-- Favicon -->
    <link rel="icon" href="<?=get_template_directory_uri()?>/assets/images/favicon.webp">

    <!-- CSS
        ============================================ -->

    <!-- Font Family CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/plugins/plugins.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/style.css">
    <?php
    wp_head();
    ?>

</head>

<body>

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--====================  header area ====================-->
    <div class="header-area header-area--default">

        <!-- Header Top Wrap Start -->
        <div class="header-top-wrap border-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-center top-message"><a href="#">Now Hiring:</a> Are you a driven and motivated 1st Line IT Support Engineer?</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Wrap End -->

        <!-- Header Bottom Wrap Start -->
        <div class="header-bottom-wrap header-sticky">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header default-menu-style position-relative">

                            <!-- brand logo -->
                            <div class="header__logo">
                                <a href="<?=bloginfo('url')?>">
                                    <img src="<?=get_template_directory_uri()?>/assets/images/logo/logo-dark.webp" aria-label="Mitech Logo" width="160" height="48" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!-- header midle box  -->
                            <div class="header-midle-box">
                                <div class="header-bottom-wrap d-md-block d-none">
                                    <div class="header-bottom-inner">
                                        <div class="header-bottom-left-wrap">
                                            <!-- navigation menu -->
                                            <div class="header__navigation d-none d-xl-block">
                                                <nav class="navigation-menu primary--menu">

                                                <?php $defaults = array( 
                                                    'theme_location' => 'top-menu',
                                                    'menu' => 'top-menu',
                                                    'container' => false,
                                                    'menu_class' => '',
                                                 ) ; 
                                                 wp_nav_menu($defaults);
                                                 ?>
                    
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- header right box -->
                            <div class="header-right-box">
                                <div class="header-right-inner" id="hidden-icon-wrapper">

                                    <!-- language-menu -->
                                  

                                    <!-- header-search-form -->
                                    <div class="header-search-form default-search">
                                        <form action="#" class="search-form-top">
                                            <input class="search-field" type="text" placeholder="Search…">
                                            <button class="search-submit">
                                                <i class="search-btn-icon fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                                <!-- hidden icons menu -->
                                <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                    <a href="javascript:void(0)">
                                        <i class="far fa-ellipsis-h-alt"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom Wrap End -->

    </div>
    <!--====================  End of header area  ====================-->
    <div id="main-wrapper">