<?php
/**
 * The template for displaying archive pages
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
        <?php if(have_posts()) : ?>
            <section class="ba-services">
                <div class="row ba-services__row">
                    <h3 class="column small-12 ba-services__title"><?php the_field('services_title_front_page', 'options'); ?></h3>
                    <!-- /.column small-12 ba-services__title -->
                    <p class="column small-12 ba-services__desc"><?php the_field('services_description_front_page', 'options'); ?></p>
                    <!-- /.column small-12 bba-services__desc -->
                </div>
                <!-- /.row ba-services__row -->
                <div class="row ba-services__content">
                    <?php while( have_posts() ) : the_post(); ?>
                        <article class="column large-4 medium-6 small-12 ba-services__item">
                            <div class="ba-services__item-image"><?php the_post_thumbnail() ?></div>
                            <!-- /.ba-services__item-image -->
                            <a href="<?php echo get_post_permalink(); ?>" class="ba-services__item-title"><?php the_title(); ?></a>
                            <!-- /.ba-services__item-title -->
                            <div class="ba-services__item-desc"><?php the_excerpt(); ?></div>
                            <!-- /.ba-services__item-desc -->
                        </article>
                        <!-- /.column large-4 medium-6 small-12 ba-services__item -->
                    <?php endwhile; ?>
                </div>
                <!-- /.row ba-services__content -->
            </section>
            <!-- /.ba-services -->
        <?php endif; ?>

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
