<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <article class="row">
        <?php $post_id = get_the_ID(); ?>

        <?php the_title(); ?>
        <br><br>
        <?php the_content(); ?>
    </article>
<?php endwhile;?>

<?php
$servicesArgs = array(
    'post_type'=>'all_services',
    'posts_per_page'=> 6,
    'post__not_in'=> [$post_id],
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

        <div class="section-bottom-line"></div>
        <!-- /.section-bottom-line -->
    </div>
    <!-- /.row ba-services-items-row -->
<?php endif;?>
<?php wp_reset_postdata(); ?>

<?php echo get_template_part('template-parts/content', 'franchise'); ?>
<?php get_footer(); ?>
