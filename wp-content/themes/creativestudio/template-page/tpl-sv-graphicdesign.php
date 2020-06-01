<?php
/**
 * Template Name: TPL Services Graphic Design
 */
get_header(); ?>

<!--Style Services-->
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/wowjs/animate.min.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/swiper/swiper.min.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/fullpage/fullpage.min.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/css/service.min.css">
<!--End Style Services-->

<div id="wrapper-master">
    <div id="service-detail" class="graphicdesign-wrapper">
        <!--Include Header-->
		<?php include get_theme_file_path( '/header-ctn.php' ) ?>
        <!--End Include Header-->
        <!-- Slider main container -->
		<?php include "sidebar-service.php"; ?>

        <div id="fullpage">


            <div id="section-1" class="section">
                <div class="container-master">
                    <div class="section-container">
                        <div class="section-title">
                            <h3>
                                Digital <br>Marketing
                            </h3>
                            <ul>
                                <li>
                                    Landing page / Website
                                </li>
                                <li>
                                    Email marketing
                                </li>
                                <li>
                                    Newsletter
                                </li>
                                <li>
                                    Handbook
                                </li>
                                <li>
                                    Corporate Magazine
                                </li>
                                <li>
                                    Nhận diện thương hiệu (logo, bao bì...)
                                </li>
                            </ul>
                        </div>
                        <div class="section-image">
                            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/service/img7.jpg"
                                 alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div id="section-2" class="section">
                <div class="container-master">
                    <div class="section-container">
                        <div class="section-title">
                            <h3>
                                Event <br> Theme Design
                            </h3>
                        </div>
                        <div class="section-image">
                            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/service/img9.jpg" alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div id="section-3" class="section">
                <div class="container-master">
                    <div class="section-container">
                        <div class="section-title">
                            <h3>
                                Editorial<br> Visual Content
                            </h3>
                            <ul>
                                <li>
                                    eMagazine
                                </li>
                                <li>
                                    Infographic
                                </li>
                                <li>
                                    Photo story
                                </li>
                                <li>
                                    Photo quotes
                                </li>
                                <li>
                                    Comic
                                </li>
                                <li>
                                    Social media post
                                </li>
                            </ul>
                        </div>
                        <div class="section-image">
                            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/service/img8.jpg" alt="">
                        </div>
                    </div>

                </div>
            </div>



            <div id="section-4" class="section">
                <div class="container-master">
                    <div class="section-container">
                        <div class="section-title">
                            <h3>
                                Corporate<br> Identity
                            </h3>
                        </div>
                        <div class="section-image">
                            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/service/img10.jpg" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>


<!--Include Script-->
<?php get_footer(); ?>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/fullpage/fullpage.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/fullpage/fullpage.extensions.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/gsap/Tweenmax.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/scripts/main.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/scripts/service-type-1.min.js"></script>


