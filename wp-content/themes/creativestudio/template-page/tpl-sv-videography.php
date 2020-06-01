<?php
/**
 * Template Name: TPL Services Videography
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
$service__array__1 = [
	"TVC",
	"Review Video",
	"Mutex Video",
	"Reaction Video",
	"How-to Video",
	"Event Recap",
	"Interview Video",
	"Editorial Video <span>(Video đăng tải báo chí)</span>"
];
$service__array__2 = [
	"Corporate Film <span>(Phim giới thiệu doanh nghiệp)</span>",
	"Event Livestream",
	"Event Recap",
]
?>
<div id="wrapper-master">
    <div id="service-detail" class="videography-wrapper">
        <!--Include Header-->
	    <?php include get_theme_file_path( '/header-ctn.php' ) ?>
        <!--End Include Header-->
        <!-- Slider main container -->
		<?php include "sidebar-service.php"; ?>

        <div class="section-note">
            <div class="container-master">
                <div class="section-container">
                    <ul>
                        <li>
                            (*) Video bao gồm định dạng thực tế, animation, stop-motion, motion graphic…
                        </li>
                        <li>
                            (*) Creative Studio Athena thực hiện từ kịch bản - quay - dựng - hiệu đính
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div id="fullpage">

            <div id="section-1" class="section">
                <div class="container-master">
                    <div class="section-container">
                        <div class="section-child-left section-child">
                            <div class="section-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <h3>
                                    Short <br>
                                    Video
                                </h3>

                            </div>
                            <div class="section-group">
                                <ul>
								    <?php $k = 1.2;
								    foreach ($service__array__1 as $title): ?>
                                        <li class="wow fadeInLeft" data-wow-delay="<?= $k; ?>s" data-wow-duration="1s">
                                            <p>
											    <?= $title; ?>
                                            </p>
                                        </li>
									    <?php $k = $k + 0.2;endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="section-child-right section-child">
                            <div class="section-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                <h3>
                                    Long <br>
                                    Video
                                </h3>
                            </div>
                            <div class="section-group same-width">
                                <ul>
								    <?php $m = 1.2;
								    foreach ($service__array__2 as $title2): ?>
                                        <li class="wow fadeInRight" data-wow-delay="<?= $m; ?>s" data-wow-duration="1s">
                                            <p>
											    <?= $title2; ?>
                                            </p>
                                        </li>
									    <?php $m = $m + 0.2;endforeach; ?>

                                </ul>
                            </div>
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


