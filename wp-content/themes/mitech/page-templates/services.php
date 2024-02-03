<?php
// Template Name: services template
        get_header();
    ?>
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title"><?=the_title()?></h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?=bloginfo('url')?>">Home</a></li>
                            <li class="breadcrumb-item active">/<?=the_title()?></li>
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








            <!--====================  Blog Area Start ====================-->
            <div class="blog-pages-wrapper section-space--ptb_100">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 order-lg-1 order-2">
                            <div class="page-sidebar-content-wrapper page-sidebar-left  small-mt_40 tablet-mt_40">

                                <!--=== Sidebar Widget Start ===-->
                                <div class="sidebar-widget search-post wow move-up">
                                    <div class="widget-title">
                                    </div>
                                    <form action="#" method="post">
                                        <div class="widget-search">
                                        
                                        </div>
                                    </form>
                                </div>
                                <!--=== Sidebar Widget End ===-->


                                <!-- === Sidebar Widget Start === -->
                                <div class="sidebar-widget widget-blog-recent-post wow move-up">

                                    <h4 class="sidebar-widget-title">Recent Posts</h4>

                                    <ul>
                                    <?php 
                                    $query = new WP_Query( array( 'post_type' => 'page', 'order' => 'asc', 'meta_key' => '_wp_page_template', 'meta_value' => 'page-templates/services.php'));
                                    if ( $query->have_posts() ) 
                                    {
                                        while ( $query->have_posts() ) : $query->the_post();
                                        // $page_id = get_the_ID();
                                        // $current_page_id = $wp_query->post->ID;
                                ?>
                                    <li><a href="<?=get_the_permalink()?>"><?=get_the_title(); ?></a>
                                    </li>
                                <?php
                                        endwhile;
                                    }else
                                    {
                                        echo 'No Pages found in this template';
                                    }
                                    wp_reset_query();
                                ?>
                                    </ul>

                                </div>
                                <!-- === Sidebar Widget End === -->

                                <!-- === Sidebar Widget Start === -->
                                <div class="sidebar-widget widget-images wow move-up">

                                    <!-- <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/images/blog/blog-sidebar-ads.webp" alt=""> -->

                                </div>
                                <!-- === Sidebar Widget End === -->

                                <!-- === Sidebar Widget Start === -->
                               
                                <!-- === Sidebar Widget End === -->


                            </div>
                        </div>
                        <div class="col-lg-8 order-lg-2 order-1">
                            <div class="main-blog-wrap">
                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item">
                                    <!-- Post Feature Start -->
                                    <div class="post-feature blog-thumbnail wow move-up">
                                        <img class="img-fluid" src="<?=get_the_post_thumbnail_url()?>" alt="Blog Images">
                                    </div>
                                    <!-- Post Feature End -->

                                    <!-- Post info Start -->
                                    <div class="post-info lg-blog-post-info  wow move-up">
                                        

                                        <h3 class="post-title"><?=the_title()?></h3>

                                        

                                        <div class="post-excerpt mt-15">
                                            <?=the_content()?>
                                        </div>

                                            
                                            

                                          
                                        </div>

                                    </div>
                                    <!-- Post info End -->
                                </div>
                                <!--===== Single Blog Item End =========-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
        get_footer();
    ?>