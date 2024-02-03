<?php
    get_header();
?>


<div class="site-wrapper-reveal">
    <!--============ Infotechno Hero Start ============-->
    <?php
        if(get_field('hero_section')):
            $hero_section = get_field('hero_section');
    ?>
    <div class="infotechno-hero infotechno-bg">
        <div class="container-fluid">
            <div class="row align-items-center"><!--baseline-->
                <div class="col-lg-6 col-md-6">
                    <div class="infotechno-hero-text  wow move-up">
                        <h6><?=$hero_section['sub_title']?></h6>
                        <h1 class="font-weight--reguler mb-15"><?=$hero_section['heading']?> </h1>
                        <?=$hero_section['paragraph']?> 
                        <div class="hero-button  mt-30">
                            <a href="<?=$hero_section['button_link']['url']?>" class="ht-btn ht-btn-md"><?=$hero_section['button_text']?> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="infotechno-hero-inner-images">
                        <div class="infotechno-inner-one">
                            <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/images/hero/home-infotechno-main-slider-slide-01-image-01.webp" alt="<?=$hero_section['heading']?>">
                        </div>
                        <div class="infotechno-inner-two  wow move-up">
                            <img class="img-fluid" src="<?=$hero_section['image']['url']?>" alt="<?=$hero_section['heading']?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        endif;
    ?>
    <!--============ Infotechno Hero End ============-->
    <!--====================  brand logo slider area ====================-->
    <?php
        if(have_rows('brand_logo')):
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
                                     while(have_rows('brand_logo')):the_row();
                                     $image = get_sub_field('image');
                                     $hover_logo = get_sub_field('hover_logo');
                                     $logo_link = get_sub_field('logo_link');
                                ?>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="<?=$logo_link['url']?>">
                                        <div class="brand-logo__image">
                                            <img src="<?=$image['url']?>" class="img-fluid" alt="Logo">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="<?=$hover_logo['url']?>" class="img-fluid" alt="Hover logo">
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
    
    <!--===========  feature-images-wrapper  Start =============-->
    <?php
        if (have_rows('our_services')) :
            while (have_rows('our_services')) : the_row();
                $sub_heading = get_sub_field('sub_heading');
                $heading = get_sub_field('heading');
                $footer_paragraph = get_sub_field('footer_paragraph');
                $footer_link = get_sub_field('footer_link');
                $footer_link_text = get_sub_field('footer_link_text');


    ?>
    <div class="feature-images-wrapper bg-gray section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center">
                        <h6 class="section-sub-title mb-20"><?=$sub_heading?></h6>
                        <h3 class="heading"><?=$heading?></h3>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="feature-images__one">
                        <div class="row">
                            <?php
                            if (have_rows('main_services')) :
                                while(have_rows('main_services')):the_row();
                                    $heading = get_sub_field('heading');
                                    $image = get_sub_field('image');
                                    $paragraph = get_sub_field('paragraph');
                                    $button_link = get_sub_field('button_link');


                            ?>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-01">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <img class="img-fulid" src="<?=$image['url']?>" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading"><?=$heading?></h5>
                                            <div class="text"><?=$paragraph?>
                                            </div>
                                            <div class="circle-arrow">
                                                <div class="middle-dot"></div>
                                                <div class="middle-dot dot-2"></div>
                                                <a href="<?=$button_link['url']?>">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <?php
                            endwhile;
                            ?>
                           <?php
                           
                           endif;
                           ?>

                        </div>
                    </div>

                    <div class="section-under-heading text-center section-space--mt_60 section-space--pt_30"><?=$footer_paragraph?> <a href="<?=$footer_link['url']?>"><?=$footer_link_text?></a></div>

                </div>
            </div>
        </div>
    </div>

    <?php
        endwhile;
        endif;
    ?>
    <!--===========  feature-images-wrapper  End =============-->

    <!-- ============ Our Experience Wrapper Start =============== -->
    <?php
    if (have_rows('our_experience')) :
        while (have_rows('our_experience')) : the_row();
            $sub_heading = get_sub_field('sub_heading');
            $heading = get_sub_field('heading');
            $paragraph = get_sub_field('paragraph');
            $button_text = get_sub_field('button_text');
            $button_link = get_sub_field('button_link');
            $sub_title = get_sub_field('sub_title');
            $second_heading = get_sub_field('second_heading');
            $footer_text = get_sub_field('footer_text');
            $footer_link = get_sub_field('footer_link');
    ?>
    <div class="section-space--ptb_100 infotechno-section-bg-01">

        <div class="our-experience-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-title small-mb__40 tablet-mb__40">
                            <h6 class="section-sub-title mb-20"><?=$sub_heading?></h6>
                            <h3 class="heading"><?=$heading?></h3>
                            <p class="text mt-20"><?=$paragraph?></p>

                            <div class="sider-title-button-box mt-30">
                                <a href="<?=$button_link['url']?>" class="ht-btn ht-btn-md"><?=$button_text?></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2">
                    <?php
                    if (have_rows('questions_link')) :
                        while(have_rows('questions_link')):the_row();
                        $marker_number = get_sub_field('marker_number');
                        $question_text = get_sub_field('question_text');
                        $question_link = get_sub_field('question_link');
                        
                    ?>
                        <div class="ht-list style-auto-numbered-02">
                            <div class="list-item">
                                <a class="link" href="<?=$question_link['url']?>">
                                    <div class="list-header">
                                        <div class="marker">
                                            <?=$marker_number?>
                                        </div>
                                        <div class="title-wrap">
                                            <h6 class="title"><?=$question_text?> </h6>
                                        </div>
                                    </div>
                                </a>
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

        <!--===========  feature-large-images-wrapper  Start =============-->
        <div class="feature-large-images-wrapper section-space--pt_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_30">
                            <h6 class="section-sub-title mb-20"><?=$sub_title?></h6>
                            <h3 class="heading"><?=$second_heading?></span></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row row--35">
                            <?php
                            if (have_rows('main_features')) :
                                while(have_rows('main_features')):the_row();
                                $feature_image = get_sub_field('feature_image');
                                $image_link = get_sub_field('image_link');
                                $feature_text = get_sub_field('feature_text');
                                $button_text = get_sub_field('button_text');
                                $feature_paragraph = get_sub_field('feature_paragraph');
                            ?>
                            <div class="col-lg-4 col-md-6 mt-30">
                                <!-- Box large image warap Start -->
                                <a href="<?=$image_link['url']?>" class="box-large-image__wrap wow move-up">
                                    <div class="box-large-image__box">
                                        <div class="box-large-image__midea">
                                            <div class="images-midea">
                                                <img src="<?=$feature_image['url']?>" width="330" height="330" class="img-fluid" alt="">

                                                <div class="button-wrapper">
                                                    <div class="btn tm-button">
                                                        <span class="button-text"><?=$button_text?></span>
                                                    </div>
                                                </div>
                                                <div class="heading-wrap">
                                                    <h5 class="heading"><?=$feature_text?></h5>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="box-large-image__content mt-30 text-center">
                                            <p><?=$feature_paragraph?></p>
                                        </div>
                                    </div>
                                </a>
                                <!-- Box large image warap End -->
                            </div>
                            <?php
                            endwhile;
                            endif;
                            ?>

                        </div>

                    <div class="section-under-heading text-center section-space--mt_40"><a href="<?=$footer_link['url']?>"><?=$footer_text?><i class="ml-1 button-icon fas fa-arrow-right"></i></a></div>

                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-large-images-wrapper  End =============-->
    </div>
    <?php
    endwhile;
    endif;
    ?>
    <!-- ============ Our Experience Wrapper End =============== -->
    <!--=========== fun fact Wrapper Start ==========-->

    <?php
        if(have_rows('result_box')):
    ?>

    <div class="fun-fact-wrapper">
        <div class="container">
            <div class="fun-fact-grid-4">

                <?php
                while(have_rows('result_box')):the_row();
                    $heading = get_sub_field('heading');
                    $output_number = get_sub_field('output_number');
                    $bottom_text = get_sub_field('bottom_text');

                ?>
                <div class="grid-item  wow move-up">
                    <div class="fun-fact--one text-center">
                        <h5 class="fun-fact__title"><?=$heading?></h5>
                        <div class="fun-fact__count counter"><?=$output_number?></div>
                        <span class="fun-fact__text"><?=$bottom_text?></span>
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

    <!--=========== Infotechno Video Wrapper Start ==========-->
    <?php
    if(get_field('video_section')):
        $video_section = get_field('video_section');
    ?>
    <div class="infotechno-video-wrapper infotechno-video-ptb infotechno-video-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10 col-11 offset-md-2 offset-1 offset-lg-6 ms-auto">
                    <div class="video-content-wrap">
                        <div class="vieeo-content-inner">
                            <h2 class="heading"><?=$video_section['heading']?></h2>

                            <div class="viewo-text-wrap">
                                <div class="video-popup infotech-video-box">
                                    <a href="<?=$video_section['video']['url']?>" class="single-popup-wrap video-link">
                                        <div class="video-content">
                                            <div class="ht-popup-video video-button">
                                                <div class="video-mark">
                                                    <div class="wave-pulse wave-pulse-1"></div>
                                                    <div class="wave-pulse wave-pulse-2"></div>
                                                </div>
                                                <div class="video-button__two">
                                                    <div class="video-play">
                                                        <span class="video-play-icon"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="video-text">
                                            <?=$video_section['small_text']?>
                                            </div>
                                        </div>
                                    </a>
                                </div>

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
    <!--=========== Infotechno Video Wrapper End ==========-->
    
    <!--===========  Projects wrapper Start =============-->
    <?php
        if (have_rows('projects_section')) :
            while (have_rows('projects_section')) : the_row();
            $sub_title = get_sub_field('sub_title');
            $heading = get_sub_field('heading');
            $footer_text = get_sub_field('footer_text');
            $footer_link = get_sub_field('footer_link');
            $footer_link_text = get_sub_field('footer_link_text');

    ?>

    <div class="projects-wrapper projectinfotechno-bg section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_40">
                        <h6 class="section-sub-title mb-20"><?=$sub_title?></h6>
                        <h3 class="heading"><?=$heading?></span></h3>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="projects-wrap swiper-container projects-slider__container">
                        <div class="swiper-wrapper">

                            <?php
                            if (have_rows('project_slider')) :
                                while(have_rows('project_slider')):the_row();
                                    $project_image = get_sub_field('project_image');
                                    $project_heading = get_sub_field('project_heading');
                                    $project_sub_heading = get_sub_field('project_sub_heading');
                                    $project_paragraph = get_sub_field('project_paragraph');
                                    $project_link = get_sub_field('project_link');
                                    $button_text = get_sub_field('button_text');
                            ?>

                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="<?=$project_link['url']?>" class="projects-wrap style-01 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid" src="<?=$project_image['url']?>" alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="heading"><?=$project_heading?></h6>
                                            <div class="post-categories"><?=$project_sub_heading?></div>
                                            <div class="text"><?=$project_paragraph?>
                                            </div>
                                            <div class="box-projects-arrow">
                                                <span class="button-text"><?=$button_text?></span>
                                                <i class="fas fa-arrow-right ml-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>

                                <?php
                                    endwhile;
                                endif;
                                ?>
                        </div>
                        <div class="swiper-pagination swiper-pagination-project mt_20"></div>
                    </div>

                    <div class="section-under-heading text-center section-space--mt_40"><?=$footer_text?> <a href="<?=$footer_link['url']?>"><?=$footer_link_text?></a></div>

                </div>
            </div>
        </div>
    </div>
    <?php
    endwhile;
    endif;
    ?>
    <!--===========  Projects wrapper End =============-->

    <!--====================  testimonial section ====================-->
    <?php
        if (have_rows('testimonial_section')) :
            while (have_rows('testimonial_section')) : the_row();
            $sub_title = get_sub_field('sub_title');
            $heading = get_sub_field('heading');

    ?>

    <div class="testimonial-slider-area section-space--ptb_120 bg-gray-3">
        <div class="container-fluid container-fluid--cp-80">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h6 class="section-sub-title mb-20"><?=$sub_title?></h6>
                        <h3 class="heading"><?=$heading?></h3>
                    </div>
                    <div class="testimonial-slider">
                        <div class="swiper-container testimonial-slider__container-two">
                            <div class="swiper-wrapper testimonial-slider__wrapper">
                                <?php
                                if (have_rows('testimonial_slider')) :
                                    while(have_rows('testimonial_slider')):the_row();
                                        $testimonial_text = get_sub_field('testimonial_text');
                                        $testimonial_paragraph = get_sub_field('testimonial_paragraph');
                                        $testimonial_image = get_sub_field('testimonial_image');
                                        $testimonial_name = get_sub_field('testimonial_name');
                                        $testimonial_designation = get_sub_field('testimonial_designation');
                                ?>

                                <div class="swiper-slide">
                                    <div class="testimonial-slider__single wow move-up">
                                        <h6 class="testimonial-subject"><?=$testimonial_text?></h6>
                                        <div class="testimonial-slider__text"><?=$testimonial_paragraph?></div>
                                        <div class="author-info">
                                            <div class="testimonial-slider__media">
                                                <img src="<?=$testimonial_image['url']?>" class="img-fluid" alt="">
                                            </div>
                                            <div class="testimonial-slider__author">
                                                <h6 class="name"><?=$testimonial_name?></h6>
                                                <span class="designation"><?=$testimonial_designation?></span>
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
                        <div class="swiper-pagination swiper-pagination-t0 section-space--mt_40"></div>
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


    <!--====================  Blog Section Start ====================-->
    <div class="blog-section-wrapper section-space--pt_100  section-space--pb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 wow move-up">

                    <div class="section-title tablet-mb__60 section-space--mb_30 tablet-mt__0 small-mt__0 small-mb__60 mt-30">
                        <h6 class="section-sub-title mb-20">Blogs & news</h6>
                        <h3 class="heading">Interesting articles<span class="text-color-primary"> updated daily</span></h3>
                        <ul class="infotechno-blog-list mt-30">
                            <?php
                            $args = array(
                                'post_type' => 'post', // adjust post type if necessary
                                'posts_per_page' => 10, // display all posts
                            );
                            $query = new WP_Query($args);

                            if ($query->have_posts()):
                                while ($query->have_posts()): $query->the_post();
                                    ?>
                                    <li>
                                        <a href="<?= get_the_permalink() ?>"><?= the_title() ?></a>
                                    </li>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </ul>

                    </div>

                </div>

                <?php
                    $args = array(
                        'post_type' => 'post', // adjust post type if necessary
                        'posts_per_page' => 2, // display all posts
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()):
                        while ($query->have_posts()): $query->the_post();
                ?>
                <div class="col-lg-4 col-md-6 wow move-up">
                    <!--======= Single Blog Item Start ========-->
                    <div class="single-blog-item blog-grid">
                        <!-- Post Feature Start -->
                        <div class="post-feature blog-thumbnail">
                            <a href="blog-post-layout-one.html">
                                <img class="img-fluid" src="<?=the_post_thumbnail_url()?>" alt="Blog Images">
                            </a>
                        </div>
                        <!-- Post Feature End -->

                        <!-- Post info Start -->
                        <div class="post-info lg-blog-post-info">
                            <div class="post-meta">
                                <div class="post-date">
                                    <span class="far fa-calendar meta-icon"></span>
                                    <?=get_the_date()?>
                                </div>
                            </div>

                            <h5 class="post-title font-weight--bold">
                                <a href="<?=get_the_permalink()?>"><?=the_title()?></a>
                            </h5>

                            <div class="post-excerpt mt-15">
                                <p><?=get_the_excerpt()?></p>
                            </div>
                            <div class="btn-text">
                                <a href="<?=get_the_permalink()?>">Read more <i class="ml-1 button-icon fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Post info End -->
                    </div>
                    <!--===== Single Blog Item End =========-->

                </div>
                <?php
                        endwhile;
                    endif;
                ?>

            </div>
        </div>
    </div>
    <!--====================  Blog Section End  ====================-->
    <!--====================  Conact us Section Start ====================-->

    <?php
        if(get_field('contact_us')):
            $contact_us = get_field('contact_us');
    ?>

    <div class="contact-us-section-wrappaer infotechno-contact-us-bg section-space--ptb_120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-6">
                    <div class="conact-us-wrap-one">
                        <h3 class="heading"><?=$contact_us['heading']?></h3>

                        <div class="sub-heading"><?=$contact_us['sub_heading']?></div>

                    </div>
                </div>

                <div class="col-lg-6 col-lg-6">
                    <div class="contact-info-one text-center">
                        <div class="icon">
                            <span class="fas fa-phone"></span>
                        </div>
                        <h6 class="heading font-weight--reguler"><?=$contact_us['small_text']?></h6>
                        <h2 class="call-us"><a href="tel:<?=$contact_us['contact_link']['url']?>"><?=$contact_us['contact_number']?></a></h2>
                        <div class="contact-us-button mt-20">
                            <a href="<?=$contact_us['button_link']['url']?>" class="btn btn--secondary"><?=$contact_us['button_text']?></a>
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