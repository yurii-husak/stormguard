<?php
/*
Template Name: Front
*/
get_header(); ?>

<main class="ba-main-content">
	<section class="ba-services-wrapper">
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
                        <div class="column large-4 medium-6 small-12 ba-services-item">
                            <div class="ba-services-item__image"><?php the_post_thumbnail() ?></div>
                            <!-- /.ba-services-item__image -->
                            <a href="<?php echo get_post_permalink(); ?>" class="ba-services-item__title"><?php the_title(); ?></a>
                            <!-- /.ba-services-item__title -->
                            <div class="ba-services-item__desc"><?php the_content(); ?></div>
                            <!-- /.ba-services-item__desc -->
                        </div>
                        <!-- /.column large-4 medium-6 small-12 ba-services-item -->
                    <?php endwhile; ?>

                    <div class="column small-12 ba-services-link">
                        <a class="ba-simple-button" href="<?php echo get_post_type_archive_link( 'all_services' ); ?>">
                            View All Services
                        </a>
                    </div>
                    <!-- /.column small-12 ba-services-link -->
                    <div class="section-bottom-line"></div>
                    <!-- /.section-bottom-line -->
                </div>
                <!-- /.row ba-services-items-row -->
        	<?php endif;?>
        	<?php wp_reset_postdata(); ?>
    </section>
	<!-- /.ba-services-wrapper -->
    <br><br><br><br><br><br><br><br><br><br><br>
</main>

<?php get_footer(); ?>
