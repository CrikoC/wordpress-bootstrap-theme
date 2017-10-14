<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<?php wp_footer(); ?>

<!--Sign up-->
<section id="more" data-type="background" data-speed="5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>
                    Are you ready for more awesome
                    <strong>Themes</strong>?
                </h2>
                <p>
                    <a href="#" class="btn btn-lg btn-block btn-primary">
                        Enter!
                    </a>
                </p>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</section><!--Sign up-->
<!--Footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <p>
                    <?php
                    //Assign our bootstrap navigation classes
                    if(has_nav_menu('social_footer')) {
                        wp_nav_menu([
                            'theme_location' => 'social_footer',
                            'container' => 'nav',
                            'container_class' => 'menu-social',
                            'menu_id' => 'footer-social-items',
                            'menu_class' => 'list-unstyled list-inline',
                            'link_before' => '<span class="sr-only">',
                            'link_after' => '</span>'
                        ]);
                    }
                    ?>
                </p>
            </div><!--col-->
            <div class="col-sm-6">
                <?php
                //Assign our bootstrap navigation classes
                if(has_nav_menu('footer')) {
                    wp_nav_menu([
                        'theme_location'    => 'footer',
                        'container'         => 'nav',
                        'menu_class'        => 'list-unstyled list-inline'
                    ]);
                }
                ?>
            </div><!--col-->
            <div class="col-sm-3">
                <p class="pull-right">
                    <?php bloginfo('name');?><br/> &copy; <?php echo date('Y'); ?> <?php the_author_link();?>
                </p>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</footer><!--Footer-->

<!--JS-->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
