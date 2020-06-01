<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="icon" href="<?= home_url(); ?>/wp-content/themes/creativestudio/dist/images/favicon.png">
    <title><?php is_front_page() ? bloginfo( 'description' ) : wp_title( '' ); ?></title>
	<?php wp_head(); ?>
</head>
<body class="<?php echo is_user_logged_in() ? 'logged' : '' ?> ">






