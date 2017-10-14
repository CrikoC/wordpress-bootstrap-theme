<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_to_Wordpress
 */

get_header(); $featured_image_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

    <!--404 Hero-->
    <section class="featured-image featured-image-default" data-type="background" data-speed="5">
        <h1>Oops! I couldn&rsquo;t find anything!</h1>
    </section>
    <!--404 Hero-->

    <!--container-->
	<div class="container">
        <!--primary-->
        <div id="primary" class="row">
            <!--col-->
            <main id="content" class="col-sm-8">
                <!--error404-->
                <div class="error404 nothing-found">
                    <!--page-content-->
                    <div class="page-content">
                        <h2>No worries though! Let's get you back on track!</h2>

                        <!--Categories-->
                        <h3>Categories</h3>
                        <p>...or maybe a category!</p>
                        <div class="widget widget_categories">
                            <h4 class="widget-title">Most used categories</h4>
                            <ul>
                                <?php
                                    wp_list_categories([
                                        'orderby'   => 'count',
                                        'order'     => 'DESC',
                                        'show_count'=> 1,
                                        'title_li'  => '',
                                        'number'    => 10
                                    ]);
                                ?>
                            </ul>
                        </div>
                        <!--Categories-->

                        <!--Archives-->
                        <h3>Archives</h3>
                        <p>Search in our archives!</p>
                        <?php the_widget('WP_Widget_Archives','title=Our Archives','before_title=<h4 class="widget-title">&after_title=</h4>'); ?>
                        <!--Archives-->

                        <p>Or just head back to the <a href="<?php echo esc_url(home_url('/')); ?>">Home Page</a>!</p>


                    </div><!--page-content-->
                </div><!--error404-->
            </main><!--col-->
            <!--sidebar-->
            <aside id="sidebar" class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside><!--sidebar-->
        </div><!--primary-->
    </div><!--container-->

<?php
get_footer();
