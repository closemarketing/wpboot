<?php
/*
Template Name: Full Width Page
*/
__( 'Full Width Page', 'wpbo' );
?>

<?php get_header(); ?>

<div id="content" class="clearfix row">
<?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
    } ?>

    <div id="main" class="col col-sm-12 clearfix" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

            <header>

                <div class="page-header"><h1><?php the_title(); ?></h1></div>

            </header> <!-- end article header -->

            <section class="post_content">
                <?php the_content(); ?>

            </section> <!-- end article section -->

            <footer>

                <p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbo") . ': ', ', ', '</span>'); ?></p>

            </footer> <!-- end article footer -->

        </article> <!-- end article -->

        <?php endwhile; ?>

        <?php else : ?>

        <article id="post-not-found">
            <header>
                <h1><?php _e("Not Found", "wpbo"); ?></h1>
            </header>
            <section class="post_content">
                <p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbo"); ?></p>
            </section>
            <footer>
            </footer>
        </article>

        <?php endif; ?>

    </div> <!-- end #main -->

    <?php //get_sidebar(); // sidebar 1 ?>

</div> <!-- end #content -->

<?php get_footer(); ?>