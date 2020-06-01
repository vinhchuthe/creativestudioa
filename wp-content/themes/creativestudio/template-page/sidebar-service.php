

<?php
$url_current = str_replace('services/', '', $_SERVER['REQUEST_URI']);
$args = array(
	'post_type'      => 'page',
	'posts_per_page' => -1,
	'post_parent'    => 6,
	'order'          => 'ASC',
	'orderby'        => 'menu_order'
);


$pagechilds = new WP_Query( $args ); ?>


<nav class="service-nav">
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
                        <h1><span class="service-current"><?php the_title(); ?> </span></h1>
					<?php else: ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php endif; ?>
                </li>

			<?php endwhile; endif; wp_reset_postdata();?>
        </ul>
    </div>

</nav>