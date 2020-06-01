<?php get_header(); ?>
<!--Style NewsDetail-->
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/contentmarketing/dist/css/single-blog.css">
<!--End Style NewsDetail-->

<section id="single-news" class="single-layout">
    <main id="main" class="site-main">
		<?php

		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content/content', 'blog' );


		endwhile; // End of the loop.
		?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer(); ?>
<script>
    $(document).ready(function () {
        // var checktop_elm = ;
        // var checktop_wd = $(window).scrollTop();
        if (windowsize > 769) {
            $(window).scroll(function () {
                // console.log("wd: " + checktop_wd + "elm: "+checktop_elm);
                if ($(window).scrollTop() > $("#hook-social").offset().top) {
                    $('.news-social-network').addClass('sticky')
                }else {
                    $('.news-social-network').removeClass('sticky')
                }
                if ($(this).scrollTop() != 0) {
                    $('#bttop').fadeIn();
                } else {
                    $('#bttop').fadeOut();
                }
            });

            $('#bttop').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
            });
        }
    });

</script>

