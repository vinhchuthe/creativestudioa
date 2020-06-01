<?php
/**
 * Template Name: TPL Project
 */
get_header(); ?>

<!--Style Services-->
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/wowjs/animate.min.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/css/project.min.css">
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/wowjs/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!--End Style Services-->
<?php
$project = [
	"1" => "Chụp ảnh sự kiện",
	"2" => "Chụp ảnh báo chí",
	"3" => "Chụp ảnh BĐS",
	"4" => "Chụp ảnh thời trang",
	"5" => "Inside Factory",
	"6" => "Video",
	"7" => "Website/Landing Page",
	"8" => "eMagazine",
	"9" => "Event Theme Design"
];
$args    = array(
	'post_type'      => 'page',
	'posts_per_page' => - 1,
	'post_parent'    => 11,
	'order'          => 'ASC',
	'orderby'        => 'menu_order'
);

$pagechilds = new WP_Query( $args );
?>

<div id="wrapper-master">
    <div id="project-master">
        <div id="banner-left" class="banner" data-relative-input="true">
            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/project/banner.png" alt=""
                 data-depth="0.2">
        </div>
        <div id="banner-right" class="banner" data-relative-input="true">
            <img src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/project/banner.png" alt=""
                 data-depth="0.2">
        </div>
        <!--Include Header-->
		<?php include get_theme_file_path( '/header-ctn.php' ) ?>
        <!--End Include Header-->

        <!-- Slider main container -->
        <div class="project-master-container">
            <div class="section">
                <div class="section-header">
                    <span>→</span>
                    <h1>Dự án</h1>
                    của chúng tôi
                </div>
                <div class="section-content">
                    <ul>
						<?php
						$k = 0.2;
						if ( $pagechilds->have_posts() ) :
							while ( $pagechilds->have_posts() ) : $pagechilds->the_post();
								?>
                                <li>

                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>

								<?php $k = $k + 0.5;endwhile; endif; wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/scripts/main.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/parallax/parallax.min.js"></script>
<script>
    var banner1 = document.getElementById("banner-left");
    var banner_1 = new Parallax(banner1, {
        relativeInput: true
    });

    var banner2 = document.getElementById("banner-right");
    var banner_2 = new Parallax(banner2, {
        relativeInput: true
    });


</script>
<!--Include Script-->
<?php get_footer(); ?>