<?php
/**
 * Template Name: TPL Project Detail
 */
get_header(); ?>

<!--Style Services-->
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/wowjs/animate.min.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/swiper/swiper.min.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/css/project.min.css">
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/wowjs/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!--End Style Services-->
<?php
$url_current = str_replace('projects/', '', $_SERVER['REQUEST_URI']);
$args = array(
	'post_type'      => 'page',
	'posts_per_page' => -1,
	'post_parent'    => 11,
	'order'          => 'ASC',
	'orderby'        => 'menu_order'
);


$pagechilds = new WP_Query( $args ); ?>
<div id="wrapper-master">
    <div id="project-detail">
        <!--Include Header-->
	    <?php include get_theme_file_path( '/header-ctn.php' ) ?>
        <!--End Include Header-->
        <!-- Slider main container -->
        <div class="project-detail-container">
            <nav class="sidebar-project">
                <div class="container-master">
                    <ul>
	                    <?php
	                    global $post;
	                    if ( $pagechilds->have_posts() ) :
	                    while ( $pagechilds->have_posts() ) : $pagechilds->the_post();
	                    $slug = $post->post_name;
	                    ?>
                            <li>
	                            <?php if ('/'.$slug.'/' == $url_current): ?>
                                    <h1>
                                        <span class="project-current"><?php the_title(); ?></span>
                                    </h1>
								<?php else: ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<?php endif ?>
                            </li>

	                    <?php endwhile; endif; wp_reset_postdata();?>
                    </ul>
                </div>

            </nav>

            <div class="list-project">
                <div class="container-master">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
	                        <?php

	                        // check if the repeater field has rows of data
	                        if( have_rows('project_slider_repeater') ):

		                        // loop through the rows of data
		                        while ( have_rows('project_slider_repeater') ) : the_row(); ?>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="item-header">
                                                <h4><?php the_sub_field('title_project'); ?></h4>
                                                <h3><a href="<?php the_sub_field('link_project'); ?>" title="<?php the_sub_field('subtitle_project'); ?>"
                                                       target="_blank"><?php the_sub_field('subtitle_project'); ?></a></h3>
                                            </div>
                                            <a href="<?php the_sub_field('link_project'); ?>" class="item-pic"
                                               title="<?php the_sub_field('subtitle_project'); ?>" target="_blank">
                                        <span>
                                            <img src="<?php the_sub_field('image_project'); ?>"
                                                 alt="<?php the_sub_field('subtitle_project'); ?>">
                                        </span>
                                            </a>
                                        </div>
                                    </div>

		                       <?php  endwhile;

	                        else :

		                        // no rows found

	                        endif;?>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/plugins/swiper/swiper.min.js"></script>
<script src="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/scripts/main.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30, loop: true,
        speed: 2000,
        mousewheel: {
            releaseOnEdges: true,
        },
        breakpoints: {
            1290: {
                slidesPerView: 2,
            },

            768: {
                slidesPerView: 1,
            },
        },
    });
</script>
<!--Include Script-->

<?php get_footer(); ?>