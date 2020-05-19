<?php
/*
Template Name: Front
*/
get_header(); ?>

<main class="ba-main-content">
    <?php echo get_template_part('template-parts/content', 'franchise'); ?>

	<section class="ba-services__wrapper">
        <div class="row ba-services-row">
            <h3 class="column small-12 ba-services-title"><?php the_field('services_title', 'options'); ?></h3>
            <!-- /.column small-12 ba-services-title -->
            <p class="column small-12 ba-services-desc"><?php the_field('services_description', 'options'); ?></p>
            <!-- /.column small-12 ba-services-desc -->
        </div>
        <!-- /.row ba-services-row -->

        <?php
        $servicesArgs = array(
        	'post_type'=>'all_services',
        	'posts_per_page'=> 6,
        );
        	$services = new WP_Query($servicesArgs);?>
        	<?php if($services->have_posts()): ?>
                <div class="row ba-services-items-row">
                    <?php while($services->have_posts()): $services->the_post() ?>
                        <article class="column large-4 medium-6 small-12 ba-services-item">
                            <div class="ba-services-item__image"><?php the_post_thumbnail() ?></div>
                            <!-- /.ba-services-item__image -->
                            <a href="<?php echo get_post_permalink(); ?>" class="ba-services-item__title"><?php the_title(); ?></a>
                            <!-- /.ba-services-item__title -->
                            <div class="ba-services-item__desc"><?php the_content(); ?></div>
                            <!-- /.ba-services-item__desc -->
                        </article>
                        <!-- /.column large-4 medium-6 small-12 ba-services-item -->
                    <?php endwhile; ?>

                    <div class="column small-12 ba-services-link">
                        <a class="ba-simple-button" href="<?php echo get_post_type_archive_link('all_services'); ?>">
                            View All Services
                        </a>
                    </div>
                    <!-- /.column small-12 ba-services-link -->
                    <div class="ba-section-bottom-line"></div>
                    <!-- /.ba-section-bottom-line -->
                </div>
                <!-- /.row ba-services-items-row -->
        	<?php endif;?>
        <?php wp_reset_postdata(); ?>
    </section>
	<!-- /.ba-services__wrapper -->

    <?php echo get_template_part('template-parts/content', 'testimonials'); ?>

    <section class="ba-latest-news__wrapper">
        <div class="row column">
            <h3 class="ba-latest-news__title"><?php the_field('latest_news_title'); ?></h3>
            <!-- /.ba-latest-news__title -->
        </div>
        <!-- /.row column -->

        <?php
        $postsArgs = array(
            'post_type'=>'post',
            'posts_per_page'=>3,
        );
        $posts = new WP_Query($postsArgs);?>
        <?php if($posts->have_posts()): ?>
            <div class="row ba-news__content">
                <?php while($posts->have_posts()): $posts->the_post() ?>
                    <div class="column small-12 medium-6 large-4 ba-news__item">
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
                    </div>
                    <!-- /.column small-12 medium-6 large-4 ba-news__item -->
                <?php endwhile; ?>
            </div>
            <!-- /.row ba-news__content -->
        <?php endif;?>
        <?php wp_reset_postdata(); ?>
    </section>
    <!-- /.ba-latest-news__wrapper -->
</main>

<?php get_footer(); ?>
