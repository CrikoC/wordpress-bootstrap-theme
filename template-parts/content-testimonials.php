<section id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <h1>Testimonials</h1>
            </div><!--col-->
        </div><!--row-->

        <?php
        $testimonials = new WP_Query([
            'post_type' => 'testimonials',
            'orderby'   => 'post_id',
            'order'     => 'ASC'
        ]);

        while($testimonials->have_posts()) : $testimonials->the_post();
            ?>
            <div class="row testimonial">
                <div class="col-sm-4">
                    <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
                </div><!--col-->
                <div class="col-sm-8">
                    <blockquote>
                        <?php the_content(); ?>
                        <cite>&mdash; <?php the_title(); ?></cite>
                    </blockquote>
                </div><!--col-->
            </div><!--row-->
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div><!--container-->
</section>
