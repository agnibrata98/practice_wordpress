<?php
    get_header();

    // Get the post ID
$post_id = get_the_ID();

// Get the author's display name
$author_name = get_the_author_meta('display_name', get_post_field('post_author', $post_id));

// Now you can use $author_name wherever you want to display the author's name
// echo 'Author: ' . $author_name;

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
                            <li class="breadcrumb-item active"><?=the_title()?></li>
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
                        <!-- === Sidebar Widget Start === -->
                        <div class="sidebar-widget widget-blog-recent-post wow move-up">

                            <h4 class="sidebar-widget-title">Recent Posts</h4>

                            <ul>
                            <?php
                            $args = array(
                                'post_type' => 'post', // adjust post type if necessary
                                'posts_per_page' => -1, // display all posts
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
                </div>
                <div class="col-lg-8 order-lg-2 order-1">
                    <div class="main-blog-wrap">
                        <!--======= Single Blog Item Start ========-->
                        <div class="single-blog-item">
                            <!-- Post Feature Start -->
                            <div class="post-feature blog-thumbnail wow move-up">
                                <img class="img-fluid" src="<?=the_post_thumbnail_url()?>" alt="Blog Images">
                            </div>
                            <!-- Post Feature End -->

                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info  wow move-up">
                                <h3 class="post-title"><?=the_title()?></h3>

                                <div class="post-meta mt-20">
                                    <div class="post-author">
                                        <a href="<?=get_the_permalink()?>">
                                            <img class="img-fluid avatar-96" src="<?=get_template_directory_uri()?>/assets/images/team/admin.webp" alt=""><?=$author_name?>
                                        </a>
                                    </div>
                                    <div class="post-date">
                                        <span class="far fa-calendar meta-icon"></span>
                                        <?=get_the_date()?>
                                    </div>
                                </div>

                                <div class="post-excerpt mt-15">
                                    <?=the_content()?>
                                    <?=comment_form()?>
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