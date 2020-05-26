<?php
/**
 * The template for displaying author archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

    <main class="ba-main-content">

        <!-- Posts -->
        <?php if ( have_posts() ) : ?>
            <div class="row column">
                <div class="page-header">
                    <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                </div><!-- .page-header -->
            </div>
            <!-- /.row column -->
        <?php endif; ?>

        <?php echo get_template_part('template-parts/content', 'news'); ?>

        <!-- Pagination -->
        <div class="row column">
            <?php /* Display navigation to next/previous pages when applicable */ ?>
            <?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
                <nav id="post-nav">
                    <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
                    <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
                </nav>
            <?php } ?>
        </div>
        <!-- /.row column -->

        <?php echo get_template_part('template-parts/content', 'franchise'); ?>
    </main>

<?php get_footer();
