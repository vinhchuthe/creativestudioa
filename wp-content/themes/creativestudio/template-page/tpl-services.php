<?php
/**
 * Template Name: TPL Services
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
$args = array(
	'post_type'      => 'page',
	'posts_per_page' => -1,
	'post_parent'    => 6,
	'order'          => 'ASC',
	'orderby'        => 'menu_order'
);


$pagechilds = new WP_Query( $args ); ?>
<div id="wrapper-master">

    <div id="service-master">

        <!--Include Header-->
	    <?php include get_theme_file_path( '/header-ctn.php' ) ?>
        <!--End Include Header-->

        <!-- Slider main container -->
        <div class="service-master-container">
            <div class="section">
                <div class="section-header">
                    <span>→</span>
                    <h1>Dịch vụ</h1>
                    của chúng tôi
                </div>
                <div class="section-content">
                    <ul>
						<?php $k=0.2;
	                    if ( $pagechilds->have_posts() ) :
		                    while ( $pagechilds->have_posts() ) : $pagechilds->the_post();
			                    ?>
                                <li class="wow fadeInLeft" data-wow-delay="<?= $k; ?>s" data-wow-duration="1s">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> "><?php the_title(); ?> </a>
                                </li>
		                    <?php $k= $k + 0.5;endwhile; endif; wp_reset_postdata();?>
                    </ul>


                </div>
            </div>
        </div>

    </div>
</div>

<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/scripts/main.min.js"></script>
<!--Include Script-->


<?php get_footer(); ?>
