<?php
/*
Template Name: Front
*/
get_header(); ?>

<main class="ba-main-content">
    <?php echo get_template_part('template-parts/content', 'franchise'); ?>

	<section class="ba-services ba-services--front">
        <div class="row ba-services__row">
            <h3 class="column small-12 ba-services__title"><?php the_field('services_title_front_page', 'options'); ?></h3>
            <!-- /.column small-12 ba-services__title -->
            <p class="column small-12 ba-services__desc"><?php the_field('services_description_front_page', 'options'); ?></p>
            <!-- /.column small-12 bba-services__desc -->
        </div>
        <!-- /.row ba-services__row -->

        <?php
        $servicesArgs = array(
        	'post_type'=>'services',
        	'posts_per_page'=> 6,
        );
        	$services = new WP_Query($servicesArgs);?>
        	<?php if($services->have_posts()): ?>
                <div class="row ba-services__content">
                    <?php while($services->have_posts()): $services->the_post() ?>
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

                    <div class="column small-12 ba-services__link">
                        <a class="ba-simple-button" href="<?php echo get_post_type_archive_link('services'); ?>">
                            View All Services
                        </a>
                    </div>
                    <!-- /.column small-12 ba-services__link -->
                    <div class="ba-section-bottom-line"></div>
                    <!-- /.ba-section-bottom-line -->
                </div>
                <!-- /.row ba-services__content -->
        	<?php endif;?>
        <?php wp_reset_postdata(); ?>
    </section>
	<!-- /.ba-services -->

    <?php echo get_template_part('template-parts/content', 'get-started'); ?>

    <?php echo get_template_part('template-parts/content', 'testimonials'); ?>

    <section class="ba-news ba-news--front ">
        <div class="row column">
            <h3 class="ba-news__title"><?php the_field('news_title_front_page', 'options'); ?></h3>
            <!-- /.ba-news__title -->
        </div>
        <!-- /.row column -->

        <?php echo get_template_part('template-parts/content', 'news'); ?>

    </section>
    <!-- /.ba-news ba-news--front -->


</main>

<?php get_footer(); ?>
