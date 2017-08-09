<?php get_header(); ?>

<div id="wrapper">
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <article id="post-<?php the_ID(); ?>" class="post">
<h2><?php the_title(); // get the page or posting title ?></h2>
<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
<?php the_post_thumbnail('large');?>
<?php the_content(''); // get page or posting written content ?>
<?php endwhile; endif; // end the loop ?>
<small>single.php</small>
        </article>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>