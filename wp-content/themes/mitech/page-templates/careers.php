<?php
//Template Name: Careers
get_header();
?>

  <!-- breadcrumb-area start -->
  <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Careers</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Careers</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->











    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--======== careers-experts Start ==========-->
            <?php
                if (have_rows('career_experts')) :
                    while (have_rows('career_experts')) : the_row();
                    $heading = get_sub_field('heading');
            ?>
            <div class="careers-experts-wrapper section-space--pt_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 m-auto">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center section-space--mb_30">
                                <h3 class="heading"><?=$heading?></h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ht-simple-job-listing move-up animate">
                                <div clas="list">
                                    <?php
                                        if (have_rows('job_list')) :
                                            while(have_rows('job_list')):the_row();
                                                $job_name = get_sub_field('job_name');
                                                $job_type = get_sub_field('job_type');
                                                $job_description = get_sub_field('job_description');
                                                $button_link = get_sub_field('button_link');
                                                $button_text = get_sub_field('button_text');
                                    ?>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="job-info">
                                                    <h5 class="job-name"><?=$job_name?></h5>
                                                    <span class="job-time"><?=$job_type?></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="job-description"><?=$job_description?></div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="job-button text-md-center">
                                                    <a class="ht-btn ht-btn-md ht-btn--solid" href="<?=$button_link?>">
                                                        <span class="button-text"><?=$button_text?></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php
            endwhile;
        endif;
            ?>
            <!--======== careers-experts End ==========-->

            <?php
                if (have_rows('gallery_section')) :
                    while (have_rows('gallery_section')) : the_row();
                    $heading = get_sub_field('heading');
                    $sub_title_text = get_sub_field('sub_title_text');
                    $sub_title_link = get_sub_field('sub_title_link');
            ?>
            <div class="gallery-section section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center">
                                <h3 class="section-title mb-15 wow move-up"><?=$heading?></h3>
                                <div class="contact-button section-space--mt_30 wow move-up">
                                    <a href="<?=$sub_title_link?>" class="hover-style-link"><?=$sub_title_text?><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-wrapper Start -->
                    <div class="gallery-wrapper section-space--pt_80 ">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- gallery-warp Start -->
                                <div class="gallery-warp popup-images ">
                                    <?php
                                        if (have_rows('gallery')) :
                                            while(have_rows('gallery')):the_row();
                                                $images = get_sub_field('images');
                                                $images_link = get_sub_field('images_link');
                                    ?>
                                    <!-- single gallery Start -->
                                    <a class="single-gallery gallery-grid wow move-up" href="<?=$images_link['url']?>">
                                        <div class="single-gallery__item">
                                            <div class="single-gallery__thum bg-item-images bg-img" data-bg="<?=$images['url']?>">

                                            </div>
                                            <div class="ht-overlay"></div>
                                            <div class="overlay-icon">
                                                <i class="fas fa-search"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                    endwhile;
                                endif;
                                    ?>
                                    <!-- single gallery End -->
                                    <!-- single gallery Start -->
                                    
                                    <!-- single gallery End -->
                                    <!-- single gallery Start -->
                                    
                                    <!-- single gallery End -->
                                    <!-- single gallery Start -->
                                    
                                    <!-- single gallery End -->

                                </div>
                                <!-- gallery-warp End -->
                            </div>
                        </div>
                    </div>
                    <!-- gallery-wrapper End -->

                </div>
            </div>
            <?php
            endwhile;
        endif;
            ?>

            <!--====================  Conact us Section Start ====================-->
            <?php
                if(get_field('contact_section')):
                    $contact_section = get_field('contact_section');
            ?>
            <div class="contact-us-section-wrappaer infotechno-contact-us-bg section-space--ptb_120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one">
                                <h3 class="heading"><?=$contact_section['heading']?> </h3>

                                <div class="sub-heading"><?=$contact_section['sub_heading']?></div>

                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-info-one text-center">
                                <div class="icon">
                                    <span class="fas fa-phone"></span>
                                </div>
                                <h6 class="heading font-weight--reguler"><?=$contact_section['sub_title']?></h6>
                                <h2 class="call-us"><a href="tel:<?=$contact_section['phone_link']?>"><?=$contact_section['phone_number']?></a></h2>
                                <div class="contact-us-button mt-20">
                                    <a href="<?=$contact_section['button_link']?>" class="btn btn--secondary"><?=$contact_section['button_text']?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            endif;
            ?>
            <!--====================  Conact us Section End  ====================-->

        </div>

<?php
get_footer();
?>