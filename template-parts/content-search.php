<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;

        if ( 'post' === get_post_type() ) : ?>
            <!--post-details-->
            <div class="post-details">
                <!--Author-->
                <i class="fa fa-user"></i>
                <?php the_author(); ?><!--Author-->
                <!--Created At-->
                <i class="fa fa-clock-o"></i>
                <time><?php the_date(); ?></time><!--Created At-->
                <!--Categories-->
                <i class="fa fa-folder-open"></i>
                <?php the_category(', '); ?><!--Categories-->
                <!--Tags-->
                <i class="fa fa-tags"></i>
                <?php the_tags(); ?><!--Tags-->
                <!--post-comments-badge-->
                <div class="post-comments-badge">
                    <a href="<?php comments_link(); ?>">
                        <i class="fa fa-comment"></i>
                        <span><?php comments_number(0,1,'%'); ?></span>
                    </a>
                </div><!--post-comments-badge-->
                <div><?php edit_post_link('Edit','<div><i class="fa fa-edit"></i>','</div>'); ?></div>
            </div><!--post-details-->

            <?php
        endif; ?>
    </header><!-- .entry-header -->

    <!--post-image-->
    <?php if(has_post_thumbnail()) : ?>
        <div class="post-image">
            <?php the_post_thumbnail(); ?>
        </div><!--post-image-->
    <?php endif;?>
    <!--post-excerpt-->
    <div class="post-excerpt">
        <?php the_excerpt(); ?>
    </div><!--post-excerpt-->
</article><!-- #post-<?php the_ID(); ?> -->
