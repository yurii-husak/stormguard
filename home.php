<?php get_header(); ?>


    <main class="ba-main-content">
        <section class="ba-news__wrapper">
            <div class="row column">
                <h3 class="ba-news__title"><?php the_field('news_title_blog_page', 'options'); ?></h3>
                <!-- /.ba-latest-news__title -->
            </div>
            <!-- /.row column -->

            <?php if ( have_posts() ) : ?>
                <div class="row ba-news__content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="column small-12 medium-6 large-4 ba-news__item">
                            <div class="ba-news__date">
                                <div class="ba-news-date__month"><?php echo get_the_date('M', get_the_ID()) ?></div>
                                <!-- /.ba-news-date__month -->
                                <div class="ba-news-date__day"><?php echo get_the_date('j', get_the_ID()) ?></div>
                                <!-- /.ba-news-date__day -->
                            </div>
                            <!-- /.ba-news__date -->
                            <div class="ba-news__image" style="background-image: url('<?php the_post_thumbnail_url('news_thumbnail') ?>');"></div>
                            <!-- /.ba-news__image -->
                            <a href="<?php echo get_permalink(); ?>" class="ba-news__title"><?php the_title(); ?></a>
                            <!-- /.ba-news__title -->
                            <p class="ba-news__text">
                                <?php the_excerpt(); ?>
                                <a href="<?php echo get_permalink(); ?>" class="ba-news__readmore">Read more</a>
                            </p>
                            <!-- /.ba-news__text -->
                            <div class="ba-news__author">
                                By <?php echo get_the_author_posts_link(); ?>
                            </div>
                            <!-- /.ba-news__author -->
                        </article>
                        <!-- /.column small-12 medium-6 large-4 ba-news__item -->
                    <?php endwhile; ?>
                </div>
                <!-- /.row ba-news__content -->
            <?php endif; // End have_posts() check. ?>

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
        </section>
        <!-- /.ba-latest-news__wrapper -->
    </main>


<?php get_footer(); ?>