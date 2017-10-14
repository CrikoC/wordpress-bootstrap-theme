<?php
/*
 * Template Name: Page Full width
 */
get_header();
$featured_image_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<!--Resources Hero-->
<?php if(has_post_thumbnail()) { ?>
    <section class="featured-image" style="background: url('<?php echo $featured_image_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="5">
        <h1><?php the_title(); ?></h1>
    </section>
<?php } else { ?>
    <section class="featured-image featured-image-default" data-type="background" data-speed="5">
        <h1><?php the_title(); ?></h1>
    </section>
<?php } ?>

<!--Content-->
<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
            <section class="main-content">
                <?php while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </section><!--main-content-->
        </div><!--content-->
    </div><!--row-->
</div><!--container-->


<?php get_footer();

?>


