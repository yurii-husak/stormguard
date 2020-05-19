<section class="ba-testimonials__wrapper">
    <div class="row column">
        <h4 class="ba-testimonials-section__title"><?php the_field('testimonials_section_title'); ?></h4>
        <!-- /.ba-testimonials-section__title -->
    </div>
    <!-- /.row column -->

    <?php if( have_rows('testimonials_slider') ) : ?>
        <div class="row ba-testimonials__content ba-testimonials__slider">
            <?php while ( have_rows('testimonials_slider') ) : the_row(); ?>
                <div class="column small-12 ba-testimonials__item">
                    <div class="ba-testimonials-item__text">
                        <?php the_sub_field('testimonials_text'); ?>
                    </div>
                    <!-- /.ba-testimonials-item__text -->
                    <div class="ba-testimonials-item__name">
                        <?php the_sub_field('testimonials_persons_name'); ?>
                    </div>
                    <!-- /.ba-testimonials-item__name -->
                    <div class="ba-testimonials-item__position">
                        <?php the_sub_field('testimonials_position'); ?>
                    </div>
                    <!-- /.ba-testimonials-item__position -->
                </div>
                <!-- /.column small-12 ba-testimonials__item -->
            <?php endwhile; ?>
        </div>
        <!-- /.row ba-testimonials__content ba-testimonials__slider -->
    <?php endif; ?>
</section>
<!-- /.ba-testimonials__wrapper -->