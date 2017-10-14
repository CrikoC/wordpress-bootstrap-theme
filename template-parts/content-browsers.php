<?php
//browsers
$browsers_title = get_field('browsers_title');
$browsers_body = get_field('browsers_body');

?>
<section id="browsers">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h1><?php echo $browsers_title; ?></h1>
                <p class="lead"><?php echo $browsers_body; ?></p>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-sm-1"></div>
            <?php
            $browsers = new WP_Query([
                'post_type' => 'browsers',
                'orderby'   => 'post_id',
                'order'     => 'ASC'
            ]);

            while($browsers->have_posts()) : $browsers->the_post(); ?>
                <div class="col-sm-2">
                    <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
                    <h3><?php the_title(); ?></h3>
                </div><!--col-->
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>

        </div><!--row-->
    </div><!--container-->
</section>
