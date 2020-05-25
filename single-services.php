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

    <section class="ba-services ba-services--front">
        <div class="row ba-services__row">
            <h3 class="column small-12 ba-services__title"><?php the_field('services_title_single_page', 'options'); ?></h3>
            <!-- /.column small-12 ba-services__title -->
            <p class="column small-12 ba-services__desc"><?php the_field('services_description_single_page', 'options'); ?></p>
            <!-- /.column small-12 bba-services__desc -->
        </div>
        <!-- /.row ba-services__row -->

        <?php
        $servicesArgs = array(
            'post_type'=>'services',
            'posts_per_page'=> 6,
            'post__not_in'=> [$post_id],
        );
        $services = new WP_Query($servicesArgs);?>
        <?php if($services->have_posts()): ?>
            <div class="row ba-services__content">
                <?php $count_posts = 0 ?>
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
                    <?php $count_posts++; ?>
                <?php endwhile; ?>

                <?php $count_posts = 6 - $count_posts; ?>
                <?php for($i = 0; $i < $count_posts; $i++) : ?>
                    <article class="column large-4 medium-6 small-12 ba-services__item"></article>
                    <!-- /.column large-4 medium-6 small-12 ba-services__item -->
                <?php endfor; ?>

                <div class="ba-single-service__line"></div>
                <!-- /.ba-single-service__line -->
            </div>
            <!-- /.row ba-services__content -->
        <?php endif;?>
        <?php wp_reset_postdata(); ?>
    </section>
    <!-- /.ba-services -->

    <?php echo get_template_part('template-parts/content', 'franchise'); ?>
</main>
<!-- /.ba-main-content -->
<?php get_footer(); ?>
