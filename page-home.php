<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>
    <!--Hero-->
    <?php get_template_part('template-parts/content', 'hero'); ?>
    <!--Hero-->

    <?php get_template_part('template-parts/content', 'bootstrap'); ?>
    <?php get_template_part('template-parts/content', 'responsive'); ?>
    <?php get_template_part('template-parts/content', 'browsers'); ?>
    <?php get_template_part('template-parts/content', 'video'); ?>
    <?php get_template_part('template-parts/content', 'testimonials'); ?>




<?php get_footer();
