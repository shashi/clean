<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/superfish.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/superfish.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/superfish-vertical.css">

</head>

<body <?php body_class(); ?>>

	<?php do_action( 'before' ); ?>
<div class="pure-g-r" id="layout">

