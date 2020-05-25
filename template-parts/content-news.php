<?php $page = $_SERVER['REQUEST_URI']; ?>

<?php if($page == '/') : ?>
    <?php
    $postsArgs = array(
        'post_type'=>'post',
        'posts_per_page'=>3,
    );
    $posts = new WP_Query($postsArgs);?>
    <?php if($posts->have_posts()): ?>
        <div class="row ba-news__content">
            <?php while($posts->have_posts()): $posts->the_post() ?>
                <article class="column small-12 medium-6 large-4 ba-news__item">
                    <div class="ba-news__item-date">
                        <div class="ba-news__date-month"><?php echo get_the_date('M', get_the_ID()) ?></div>
                        <!-- /.ba-news__date-month -->
                        <div class="ba-news__date-day"><?php echo get_the_date('j', get_the_ID()) ?></div>
                        <!-- /.ba-news__date-month -->
                    </div>
                    <!-- /.ba-news__item-date -->
                    <a href="<?php echo get_permalink(); ?>" class="ba-news__item-image">
                        <?php the_post_thumbnail('news_thumbnail'); ?>
                    </a>
                    <!-- /.ba-news__item-image -->
                    <a href="<?php echo get_permalink(); ?>" class="ba-news__item-title"><?php the_title(); ?></a>
                    <!-- /.ba-news__item-title -->
                    <p class="ba-news__item-text">
                        <?php the_excerpt(); ?>
                        <a href="<?php echo get_permalink(); ?>" class="ba-news__item-readmore">Read more</a>
                    </p>
                    <!-- /.ba-news__item-text -->
                    <div class="ba-news__item-author">
                        By <?php echo get_the_author_posts_link(); ?>
                    </div>
                    <!-- /.ba-news__item-author -->
                </article>
                <!-- /.column small-12 medium-6 large-4 ba-news__item -->
            <?php endwhile; ?>

            <?php if($page == '/') : ?>
                <div class="column small-12 ba-news__link">
                    <a class="ba-simple-button" href="<?php echo get_post_type_archive_link('post'); ?>">
                        View All Posts
                    </a>
                </div>
                <!-- /.column small-12 ba-news__link -->
            <?php endif; ?>
        </div>
        <!-- /.row ba-news__content -->
    <?php endif;?>
    <?php wp_reset_postdata(); ?>

<?php else: ?>
    <?php if ( have_posts() ) : ?>
        <div class="row ba-news__content">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="column small-12 medium-6 large-4 ba-news__item">
                    <div class="ba-news__item-date">
                        <div class="ba-news__date-month"><?php echo get_the_date('M', get_the_ID()) ?></div>
                        <!-- /.ba-news__date-month -->
                        <div class="ba-news__date-day"><?php echo get_the_date('j', get_the_ID()) ?></div>
                        <!-- /.ba-news__date-month -->
                    </div>
                    <!-- /.ba-news__item-date -->
                    <a href="<?php echo get_permalink(); ?>" class="ba-news__item-image">
                        <?php the_post_thumbnail('news_thumbnail'); ?>
                    </a>
                    <!-- /.ba-news__item-image -->
                    <a href="<?php echo get_permalink(); ?>" class="ba-news__item-title"><?php the_title(); ?></a>
                    <!-- /.ba-news__item-title -->
                    <p class="ba-news__item-text">
                        <?php the_excerpt(); ?>
                        <a href="<?php echo get_permalink(); ?>" class="ba-news__item-readmore">Read more</a>
                    </p>
                    <!-- /.ba-news__item-text -->
                    <div class="ba-news__item-author">
                        By <?php echo get_the_author_posts_link(); ?>
                    </div>
                    <!-- /.ba-news__item-author -->
                </article>
                <!-- /.column small-12 medium-6 large-4 ba-news__item -->
            <?php endwhile; ?>
        </div>
        <!-- /.row ba-news__content -->
    <?php endif; ?>
<?php endif; ?>