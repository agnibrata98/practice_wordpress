<?php
get_header();
?>
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title">Blog Update</h2>
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">List Large Image</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- breadcrumb-area end -->

<div id="main-wrapper">
    <div class="site-wrapper-reveal">

<!--====================  Blog Area Start ====================-->
<div class="blog-pages-wrapper section-space--ptb_100">
        <div class="container">
            <div class="row">
                <?php
                    if(have_posts()):
                        while(have_posts()):the_post();
                ?>
                <div class="col-lg-4 col-md-6  mb-30 wow move-up">
                    <!--======= Single Blog Item Start ========-->
                    <div class="single-blog-item blog-grid">
                        <!-- Post Feature Start -->
                        <div class="post-feature blog-thumbnail">
                            <a href="<?=get_the_permalink();?>">
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
                                <a href="<?=get_the_permalink();?>"><?=get_the_title()?></a>
                            </h5>

                            <div class="post-excerpt mt-15">
                                <p><?=get_the_excerpt()?></p>
                            </div>
                            <div class="btn-text">
                                <a href="<?=get_the_permalink();?>">Read more <i class="ml-1 button-icon fas fa-arrow-right"></i></a>
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
<!--====================  Blog Area End  ====================-->

<!--========== Call to Action Area Start ============-->


<!-- <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7">
                <div class="cta-content md-text-center">
                    <h3 class="heading text-white">Assess your business potentials and find opportunities <span class="text-color-secondary">for bigger success</span></h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="cta-button-group--one text-center">
                    <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt"></i></span> Let's talk</a>
                    <a href="#" class="btn btn--secondary  btn-two"><span class="btn-icon me-2"><i class="fas fa-info-circle"></i></span> Get info</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?=get_option('survice_success')?>
<!--========== Call to Action Area End ============-->


<?php
get_footer();
?>