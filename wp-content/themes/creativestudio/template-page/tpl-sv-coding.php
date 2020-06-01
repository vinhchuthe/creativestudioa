<?php
/**
 * Template Name: TPL Services Coding
 */
get_header(); ?>

<!--Style Services-->
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/wowjs/animate.min.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/css/service.min.css">
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/wowjs/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!--End Style Services-->


<?php
$service_array = [
	"Front-end Developer",
	"UI/UX Design",
	"Animation",
]
?>
<div id="wrapper-master">
    <div id="service-detail" class="coding-wrapper">
        <!--Include Header-->
		<?php include get_theme_file_path( '/header-ctn.php' ) ?>
        <!--End Include Header-->
        <!-- Slider main container -->
		<?php include "sidebar-service.php"; ?>

        <div id="fullpage">

            <div id="section-1" class="section">
                <div class="container-master">
                    <div class="section-container">
                        <div class="section-child-left section-child">
                            <div class="section-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.8s">
                                <h3>
                                    Website, Landing page
                                    Microsite, Các sản phẩm
                                    Digital Marketing
                                </h3>

                            </div>
                            <div class="section-group">
                                <ul>
									<?php $k = 0.8;
									foreach ( $service_array as $title ): ?>
                                        <li class="wow fadeInLeft" data-wow-delay="<?= $k; ?>s" data-wow-duration="1s">
                                            <p>
												<?= $title; ?>
                                            </p>
                                        </li>
										<?php $k = $k + 0.2; endforeach; ?>

                                </ul>
                            </div>
                        </div>
                        <div class="section-child-right section-child wow fadeInRight" data-wow-delay="1s"
                             data-wow-duration="1s">
                            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/service/coding.png"
                                 alt="">
                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!--Include Script-->
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/scripts/main.min.js"></script>
<?php get_footer(); ?>


