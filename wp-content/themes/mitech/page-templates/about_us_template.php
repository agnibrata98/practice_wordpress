<?php
    //Template Name: About Template
    get_header();
?>
<div class="site-wrapper-reveal">
    <?php
        if(get_field('first_banner')):
            $first_banner = get_field('first_banner');
    ?>
<div class="about-banner-wrap banner-space about-us-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-banner-content text-center">
                    <h1 class="mb-15 text-white"><?=$first_banner['heading']?></h1>
                    <h5 class="font-weight--normal text-white"><?=$first_banner['paragraph']?></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
endif;
?>
<!--===========  feature-large-images-wrapper  Start =============-->

<?php
    if (have_rows('feature_wrapper')) :
        while (have_rows('feature_wrapper')) : the_row();
        $sub_title = get_sub_field('sub_title');
        $heading = get_sub_field('heading');
        $sub_heading = get_sub_field('sub_heading');
        $small_text = get_sub_field('small_text');
        $paragraph = get_sub_field('paragraph');
        $link_text = get_sub_field('link_text');
        $link = get_sub_field('link');
        $footer_text = get_sub_field('footer_text');
        $footer_link = get_sub_field('footer_link');
        $footer_link_text = get_sub_field('footer_link_text');
?>

<div class="feature-large-images-wrapper section-space--ptb_100">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_60">
                    <h6 class="section-sub-title mb-20"><?=$sub_title?></h6>
                    <h3 class="heading"><?=$heading?></h3>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>

        <div class="cybersecurity-about-box section-space--pb_70">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="modern-number-01">
                        <h2 class="heading  me-5"><?=$sub_heading?></h2>
                        <h6 class="heading mt-30"><?=$small_text?></h6>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <div class="cybersecurity-about-text">
                        <div class="text"><?=$paragraph?></div>
                        <div class="button-text">
                            <a href="<?=$link['url']?>" class="btn-text">
                            <?=$link_text?>
                                <span class="button-icon ml-1">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="feature-images__six">
                    <div class="row">
                        <?php
                            if (have_rows('feature_section')) :
                                while(have_rows('feature_section')):the_row();
                                    $feature_image = get_sub_field('feature_image');
                                    $feature_heading = get_sub_field('feature_heading');
                                    $feature_paragraph = get_sub_field('feature_paragraph');
                                    $button_text = get_sub_field('button_text');
                                    $button_link = get_sub_field('button_link');
                        ?>
                        <div class="col-lg-4 col-md-6 wow move-up">
                            <!-- ht-box-icon Start -->
                            <div class="ht-box-images style-06">
                                <div class="image-box-wrap">
                                    <div class="box-image">
                                        <div class="default-image">
                                            <img class="img-fulid" src="<?=$feature_image['url']?>" alt="">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5 class="heading"><?=$feature_heading?></h5>
                                        <div class="text"><?=$feature_paragraph?>
                                        </div>
                                        <a href="<?=$button_link['url']?>" class="box-images-arrow">
                                            <span class="button-text"><?=$button_text?></span>
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- ht-box-icon End -->
                        </div>
                        
                            <?php
                                endwhile;
                            endif;
                            ?>
                    </div>
                </div>

                <div class="section-under-heading text-center section-space--mt_60"><?=$footer_text?> <a href="<?=$footer_link['url']?>"><?=$footer_link_text?></a></div>

            </div>
        </div>
    </div>
</div>
<?php
endwhile;
endif;
?>
<!--===========  feature-large-images-wrapper  End =============-->




<!--========= About Resources Wrapper Start ===========-->
<?php
    if(get_field('about_resources')):
        $about_resources = get_field('about_resources');
?>
<div class="about-resources-wrapper">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="resources-left-box">
                    <div class="resources-inner">
                        <h6 class="sub-title mb-20"><?=$about_resources['sub_title']?></h6>
                        <h3 class="heading"><?=$about_resources['main_heading']?></h3>
                        <div class="button mt-30">
                            <a href="<?=$about_resources['button_link']['url']?>" class="ht-btn ht-btn-md"><?=$about_resources['button_text']?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="resources-right-box">
                    <div class="resources-right-inner text-center">
                        <div class="resources-images">
                            <img class="img-fluid" src="<?=$about_resources['image']['url']?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
endif;
?>
<!--========= About Resources Wrapper End ===========-->

<!--========= About Delivering Wrapper Start ===========-->
<?php
    if (have_rows('about_delivery')) :
        while (have_rows('about_delivery')) : the_row();
        $main_heading = get_sub_field('main_heading');
?>

<div class="about-delivering-wrapper section-space--ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrap text-center section-space--mb_20">
                    <h3 class="heading"><?=$main_heading?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                 if (have_rows('left_side_questions')) :
                    
            ?>
            <div class="col-lg-6">
                <?php
                    while(have_rows('left_side_questions')):the_row();
                    $left_question_title = get_sub_field('left_question_title');
                    $left_question_description = get_sub_field('left_question_description');
                ?>
                <div class="delivering-optimal-wrap">
                    <div class="list-item">
                        <div class="marker"></div>
                        <div class="title-wrap">
                            <h5 class="title"><?=$left_question_title?></h5>
                            <div class="desc"><?=$left_question_description?></div>
                        </div>
                    </div>
                    
                </div>
                <?php
                endwhile;
                ?>
            </div>
            <?php           
        endif;
            ?>
            <?php
                 if (have_rows('right_side_questions')) :
                    
            ?>
            <div class="col-lg-6">
                <?php
                while(have_rows('right_side_questions')):the_row();
                $right_question_title = get_sub_field('right_question_title');
                $right_question_description = get_sub_field('right_question_description');
                ?>
                <div class="delivering-optimal-wrap">
                    <div class="list-item">
                        <div class="marker"></div>
                        <div class="title-wrap">
                            <h5 class="title"><?=$right_question_title?></h5>
                            <div class="desc"><?=$right_question_description?> </div>
                        </div>
                    </div>
                    
                </div>
                <?php
                endwhile;
                ?>
            </div>
            <?php               
            endif;
            ?>
        </div>
    </div>
</div>
<?php
    endwhile;
endif;
?>
<!--========= About Delivering Wrapper End ===========-->

<!--=========== fun fact Wrapper Start ==========-->
<?php
    if(have_rows('result_section')):
?>
<div class="fun-fact-wrapper bg-theme-default section-space--pb_30 section-space--pt_60">
    <div class="container">
        <div class="row">
            <?php
                while(have_rows('result_section')):the_row();
                $result_counts = get_sub_field('result_counts');
                $result_text = get_sub_field('result_text');
            ?>
            <div class="col-md-3 col-sm-6 wow move-up">
                <div class="fun-fact--two text-center">
                    <div class="fun-fact__count counter"><?=$result_counts?></div>
                    <h6 class="fun-fact__text"><?=$result_text?></h6>
                </div>
            </div>
            
            <?php
                endwhile;
            ?>
        </div>
    </div>
</div>
<?php
    endif;
?>
<!--=========== fun fact Wrapper End ==========-->

<!--====================  testimonial section ====================-->
<?php
    if (have_rows('testimonial_section')) :
        while (have_rows('testimonial_section')) : the_row();
        $sub_title = get_sub_field('sub_title');
        $heading = get_sub_field('heading');
?>
<div class="testimonial-slider-area section-space--pt_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrap text-center section-space--mb_40">
                    <h6 class="section-sub-title mb-20"><?=$sub_title?></h6>
                    <h3 class="heading"><?=$heading?></h3>
                </div>
                <div class="testimonial-slider">
                    <div class="swiper-container testimonial-slider__container">
                        <div class="swiper-wrapper testimonial-slider__wrapper">
                            <?php
                                if (have_rows('testimonial_slider')) :
                                    while(have_rows('testimonial_slider')):the_row();
                                        $testimonial_image = get_sub_field('testimonial_image');
                                        $testimonial_name = get_sub_field('testimonial_name');
                                        $testimonial_designation = get_sub_field('testimonial_designation');
                                        $testimonial_paragraph = get_sub_field('testimonial_paragraph');
                            ?>
                            <div class="swiper-slide">
                                <div class="testimonial-slider__one wow move-up">

                                    <div class="testimonial-slider--info">
                                        <div class="testimonial-slider__media">
                                            <img src="<?=$testimonial_image['url']?>" class="img-fluid" alt="">
                                        </div>

                                        <div class="testimonial-slider__author">
                                            <div class="testimonial-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="author-info">
                                                <h6 class="name"><?=$testimonial_name?></h6>
                                                <span class="designation"><?=$testimonial_designation?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonial-slider__text"><?=$testimonial_paragraph?></div>

                                </div>
                            </div>
                           
                            <?php
                            endwhile;
                        endif;
                            ?>
                        </div>
                        <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>
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
<!--====================  End of testimonial section  ====================-->

<!--====================  brand logo slider area ====================-->
<?php
    if(have_rows('image_section')):
?>
<div class="brand-logo-slider-area section-space--ptb_60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- brand logo slider -->
                <div class="brand-logo-slider__container-area">
                    <div class="swiper-container brand-logo-slider__container">
                        <div class="swiper-wrapper brand-logo-slider__one">
                                <?php
                                     while(have_rows('image_section')):the_row();
                                     $image = get_sub_field('image');
                                     $hover_image = get_sub_field('hover_image');
                                     $image_link = get_sub_field('image_link');
                                ?>
                            <div class="swiper-slide brand-logo brand-logo--slider">
                                <a href="<?=$image_link['url']?>">
                                    <div class="brand-logo__image">
                                        <img src="<?=$image['url']?>" class="img-fluid" alt="">
                                    </div>
                                    <div class="brand-logo__image-hover">
                                        <img src="<?=$hover_image['url']?>" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </div>
                            <?php
                            endwhile;
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
endif;
?>
<!--====================  End of brand logo slider area  ====================-->
<!--============ Contact Us Area Start =================-->
<?php
    if(get_field('contact_us')):
        $contact_us = get_field('contact_us');
?>
<div class="contact-us-area infotechno-contact-us-bg section-space--pt_100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="image">
                    <img class="img-fluid" src="<?=$contact_us['image']['url']?>" alt="">
                </div>
            </div>

            <div class="col-lg-4 ms-auto">
                <div class="contact-info style-two text-left">

                    <div class="contact-info-title-wrap text-center">
                        <h3 class="heading  mb-10"><?=$contact_us['heading']?></h3>
                        <div class="ht-star-rating lg-style">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p class="sub-text"><?=$contact_us['sub_text']?></p>
                    </div>

                    <div class="contact-list-item">
                        <a href="tel:<?=$contact_us['phone_link']?>" class="single-contact-list">
                            <div class="content-wrap">
                                <div class="content">
                                    <div class="icon">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                    <div class="main-content">
                                        <h6 class="heading"><?=$contact_us['phone_text']?></h6>
                                        <div class="text"><?=$contact_us['phone_number']?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="mailto:<?=$contact_us['mail_link']?>" class="single-contact-list">
                            <div class="content-wrap">
                                <div class="content">
                                    <div class="icon">
                                        <span class="far fa-envelope"></span>
                                    </div>
                                    <div class="main-content">
                                        <h6 class="heading"><?=$contact_us['mail_text']?></h6>
                                        <div class="text"><?=$contact_us['mail_id']?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
endif;
?>
<!--============ Contact Us Area End =================-->

</div>



<?php
    get_footer();
?>