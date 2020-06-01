<?php
/**
 * Template Name: TPL Contact
 */
get_header(); ?>

<!--Style Contact-->
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/wowjs/animate.min.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/css/contact.min.css">
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/wowjs/wow.min.js"></script>
<!--End Style Contact-->

<div id="wrapper-master">

    <div id="contact-wrapper">
        <!--Include Header-->
		<?php include get_theme_file_path( '/header-ctn.php' ) ?>
        <!--End Include Header-->

        <!-- Slider main container -->
        <div class="contact-master-container">
            <div class="section">
                <div class="section-header">
                    <span>→</span>
                    <h1>Liên hệ</h1>
                    với chúng tôi
                </div>
                <div class="section-content">
					<?php echo do_shortcode( '[contact-form-7 id="12" title="Contact form"]' ) ?>
                </div>
                <div class="section-footer">

                        <div class="section-footer-body">
                            <div class="line1">
                                <a href="mailto:creativestudioa@admicro.vn">
                                    creativestudioa@admicro.vn
                                </a>
                            </div>
                            <div class="line2">
                                <div class="line2-col">
                                    <ul>
                                        <li>Hotline: <a href="tel:+84834246209">(84) 834 246 209</a></li>
                                        <li>Tel: <a href="tel:0473077979">(04) 7307 7979 (#62935)</a></li>
                                    </ul>
                                </div>
                                <div class="line2-col">
                                    © 2020 Admicro <br>
                                    All Rights Reserved

                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>

    </div>
</div>

<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/scripts/main.min.js"></script>
<!--Include Script-->

<?php

get_footer(); ?>
