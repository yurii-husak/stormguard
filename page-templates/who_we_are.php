<?php
/*
Template Name: Who We Are
*/
get_header(); ?>
<main class="ba-main-content">
    <article class="row">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="column ba-single-post">
                <?php the_post_thumbnail('single_post', ['class' => 'ba-single-post__image']); ?>
                <h3 class="ba-single-post__title"><?php the_title(); ?></h3>
                <!-- /.ba-single-post__title -->
                <div class="ba-single-post__content"><?php the_content(); ?></div>
                <!-- /.ba-single-post__content -->
            </div>
            <!-- /.column ba-services__single-post -->
        <?php endwhile;?>
    </article>

    <?php echo get_template_part('template-parts/content', 'get-started'); ?>
    <?php echo get_template_part('template-parts/content', 'franchise'); ?>
</main>
<?php get_footer(); ?>
