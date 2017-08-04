<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<!--Remy Sharp Shim --> 
<!--[if lt IE 9]> 
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script> 
<![endif]-->

<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" >

<!-- Start WP Head -->
<?php wp_head(); ?>
<!-- End WP Head -->

</head>

<body<?php body_class(); ?>>

<nav>

<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', ) ); ?>

</nav>

<main id="home">