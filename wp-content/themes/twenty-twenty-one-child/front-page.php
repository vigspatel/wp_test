<?php get_header(); 
if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- Content Wrapper -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>