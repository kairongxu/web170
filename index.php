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



<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', ) ); ?>



<main id="home">

<div id="content">
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
<?php the_content(''); // get page or posting written content ?>
<?php endwhile; endif; // end the loop ?>
<small>index.php</small>

</div>

<div id="sub_navigation class=widget">
<h2 class="sub-navigation-title"><?php echo get_the_title($post->post_parent); // ...get the gateway page title ?></h2>
<ul class="sub-navigation-items"><?php if ($post->post_parent) { // if the page has a parent...
wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // ...list the sub-pages with no title
} else { // if the page does not have a parent...
wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // ...list the sub-pages with no title
} ?></ul>
</div>

</main>



<!--close wrapper-->
<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~kxu00004%2Fweb110%2Ffinal%2Ftmp.html&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en">Valid</a>
<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fedison.seattlecentral.edu%2F~kxu00004%2Fweb110%2Ffinal%2Ftmp.html">Html</a>


<footer>

<ul>
<li>Copyright &copy; 2016</li>
<li>All Rights Reserved</li>
<li><a href="../index.html">Web design by Kairong</a></li>
</ul>

</footer>

<!-- Start WP Footer -->
<?php wp_footer(); ?>
<!-- End WP Footer -->

</body>
</html>