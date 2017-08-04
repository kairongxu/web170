<?php get_header(); ?>
<main id="home">
<div id ="wrapper">
<img src="http://www.xukairong.net/web170/templates/images/home.jpg" alt="Picture of homepage">
<div id="box1">
<h2>About me</h2>
<?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
<?php the_content(''); // get the home page's content ?>
<?php endwhile; endif; // end loop one ?></div> <!--end box1-->

<div id="box2">
<h2>Postings</h2>
<?php rewind_posts(); // stop loop one ?>
<?php query_posts('showposts=4'); // give directions to loop two ?>
<?php while (have_posts()) : the_post(); // start loop two ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; // end loop two ?>
</div> <!--end box1-->

<div id="box3">
<h2>Our Technology</h2>
X-rays are a primary tool for early identification of dental problems. Detecting issues with X-rays before they become problems can save you money in the long run by preventing the need for more extensive, expensive procedures or surgeries.
</div> <!--end box1-->

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>