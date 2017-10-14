<?php
/*
 * Template Name: Resources Page
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
<!--Resources Hero-->

<!--Content-->

<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
            <!--main-content-->
            <section class="main-content">
                <?php while(have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <hr>
                <?php
                $resources = new WP_Query([
                    'post_type' => 'sponsors',
                    'orderby'   => 'post_id',
                    'order'     => 'ASC'
                ]);

                while($resources->have_posts()) : $resources->the_post();
                    $resource_image = get_field('resource_image');
                ?>
                <!--resource-row-->
                <div class="resource-row clearfix">
                    <!--resource-->
                    <div class="resource">
                        <img class="img img-responsive" src="<?php echo $resource_image['url']; ?>" alt="<?php echo $resource_image['alt']; ?>">
                        <h3>
                            <a href="<?php echo get_field('resource_url'); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <?php the_content(); ?>
                        <?php if(!empty(get_field('resource_button_text'))): ?>
                            <a href="<?php echo get_field('resource_url'); ?>" class="btn btn-success">
                                <?php echo get_field('resource_button_text'); ?>
                            </a>
                        <?php endif; ?>
                    </div><!--resource-->
                </div><!--resource-row-->
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </section><!--main-content-->
        </div><!--content-->
    </div><!--row-->
</div><!--container-->

<?php get_footer(); ?>
