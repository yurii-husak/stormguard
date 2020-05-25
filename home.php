<?php get_header(); ?>


    <main class="ba-main-content">
        <section class="ba-news">
            <div class="row column">
                <h3 class="ba-news__title"><?php the_field('news_title_blog_page', 'options'); ?></h3>
                <!-- /.ba-news__title -->
            </div>
            <!-- /.row column -->

            <?php echo get_template_part('template-parts/content', 'news'); ?>

        </section>
        <!-- /.ba-news ba-news--front -->

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

<?php get_footer(); ?>