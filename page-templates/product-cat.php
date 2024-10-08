<?php
/**
 * Template Name: Full-width Page Template, No Sidebar, Subproducts displayed
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
    <div id="content" role="main">

        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('content', 'page'); ?>
        <?php endwhile; ?>

    </div>
</div>

<?php get_footer(); ?> 