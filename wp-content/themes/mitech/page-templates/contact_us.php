<?php
//Template Name: Contact Us
get_header();

$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );
?>

  <!-- breadcrumb-area start -->
  <div class="breadcrumb-area" style="background-image: url(<?=$thumbnail_src[0]?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title"><?=the_title()?></h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?=bloginfo('url')?>">Home</a></li>
                            <li class="breadcrumb-item active">/<?=the_title()?> </li>
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
            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one mb-30">
                                <h3 class="heading">To make requests for <br>further information, <br><span class="text-color-primary">contact us</span> via our social channels. </h3>
                                <div class="sub-heading">We just need a couple of hours! <br> No more than 2 working days since receiving your issue ticket.</div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-form-wrap">

                                <!-- <form id="contact-form" action="http://whizthemes.com/mail-php/jowel/mitech/php/mail.php" method="post"> -->
                                <!-- <form id="contact-form" action="https://htmldemo.net/mitech/assets/php/mail.php" method="post">
                                    <div class="contact-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="Name *" required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_email" type="email" placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="con_subject" type="text" placeholder="Subject *" required>
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="con_message" placeholder="Please describe what you need." required></textarea>
                                        </div>
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form> -->

                                <?=do_shortcode('[contact-form-7 id="0f2d13b" title="Untitled"]')?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->

            <!--====================  Conact us info Start ====================-->
            <?php
                if(have_rows('contact_us_info')):
            ?>
            <div class="contact-us-info-wrappaer section-space--pb_100">
                <div class="container">
                    <div class="row align-items-center">
                        <?php
                            while(have_rows('contact_us_info')):the_row();
                            $heading = get_sub_field('heading');
                            $address = get_sub_field('address');
                            $contact_text = get_sub_field('contact_text');
                            $contact_link = get_sub_field('contact_link');
                            $phone_number = get_sub_field('phone_number');
                            $phone_number_link = get_sub_field('phone_number_link');
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20"><?=$heading?></h5>
                                <ul class="conact-info__list">
                                    <li><?=$address?></li>
                                    <li><a href="<?=$contact_link?>" class="hover-style-link text-color-primary"><?=$contact_text?></a></li>
                                    <li><a href="<?=$phone_number_link?>" class="hover-style-link text-black font-weight--bold"><?=$phone_number?></a></li>
                                </ul>
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
            <!--====================  Conact us info End  ====================-->






            <!--========== Call to Action Area Start ============-->
            <?php
                if(get_field('call_to_action_area')):
                    $call_to_action_area = get_field('call_to_action_area');
            ?>
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading"><?=$call_to_action_area['heading']?></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--two text-center">
                                <a href="<?=$call_to_action_area['first_button_link']['url']?>" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt"></i></span> <?=$call_to_action_area['first_button_text']?></a>
                                <a href="<?=$call_to_action_area['second_button_link']['url']?>" class="btn btn--secondary btn-two "><span class="btn-icon me-2"><i class="fas fa-info-circle"></i></span><?=$call_to_action_area['second_button_text']?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            endif;
            ?>
            <!--========== Call to Action Area End ============-->




        </div>

<?php
get_footer();
?>