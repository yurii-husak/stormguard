<?php get_header(); ?>

<main class="ba-main-content">
    <article class="row">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php $post_id = get_the_ID(); ?>
            <div class="column ba-single-post">
                <?php $image = get_field('service_image'); ?>
                <img class="ba-single-post__image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['name'] ?>" width="535" height="335">
                <h3 class="ba-single-post__title"><?php the_title(); ?></h3>
                <!-- /.ba-single-post__title -->
                <div class="ba-single-post__content"><?php the_content(); ?></div>
                <!-- /.ba-single-post__content -->
            </div>
            <!-- /.column ba-services__single-post -->
        <?php endwhile;?>
    </article>

    <section class="ba-services__wrapper ba-services__single">
        <div class="row ba-services-row">
            <h3 class="column small-12 ba-services-title"><?php the_field('services_title_single_page', 'options'); ?></h3>
            <!-- /.column small-12 ba-services-title -->
            <p class="column small-12 ba-services-desc"><?php the_field('services_description_single_page', 'options'); ?></p>
            <!-- /.column small-12 ba-services-desc -->
        </div>
        <!-- /.row ba-services-row -->

        <?php
        $servicesArgs = array(
            'post_type'=>'all_services',
            'posts_per_page'=> 6,
            'post__not_in'=> [$post_id],
        );
        $services = new WP_Query($servicesArgs);?>
        <?php if($services->have_posts()): ?>
            <div class="row ba-services-items-row align-left">
                <?php $count_posts = 0 ?>
                <?php while($services->have_posts()): $services->the_post() ?>
                    <article class="column large-4 medium-6 small-12 ba-services-item">
                        <div class="ba-services-item__image"><?php the_post_thumbnail() ?></div>
                        <!-- /.ba-services-item__image -->
                        <a href="<?php echo get_post_permalink(); ?>" class="ba-services-item__title"><?php the_title(); ?></a>
                        <!-- /.ba-services-item__title -->
                        <div class="ba-services-item__desc"><?php the_excerpt(); ?></div>
                        <!-- /.ba-services-item__desc -->
                    </article>
                    <!-- /.column large-4 medium-6 small-12 ba-services-item -->
                    <?php $count_posts++; ?>
                <?php endwhile; ?>

                <?php $count_posts = 6 - $count_posts; ?>
                <?php for($i = 0; $i < $count_posts; $i++) : ?>
                    <article class="column large-4 medium-6 small-12 ba-services-item"></article>
                    <!-- /.column large-4 medium-6 small-12 ba-services-item -->
                <?php endfor; ?>

                <div class="ba-single-service__line"></div>
                <!-- /.ba-single-service__line -->
            </div>
            <!-- /.row ba-services-items-row -->
        <?php endif;?>
        <?php wp_reset_postdata(); ?>
    </section>
    <!-- /.ba-services__wrapper ba-services__single -->

    <?php echo get_template_part('template-parts/content', 'franchise'); ?>
</main>
<!-- /.ba-main-content -->
<?php get_footer(); ?>
