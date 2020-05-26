<?php $page = $_SERVER['REQUEST_URI']; ?>

<section class="ba-get-started
    <?php if($page == '/') : ?>
        ba-get-started--front
    <?php endif; ?>">
    <div class="row">
        <h3 class="column small-12 ba-get-started__title">Ready To Get Started?</h3>
        <!-- /.column small-12 ba-get-started__title -->
        <p class="column small-12 ba-get-started__desc">
            Damage to your home or business from a storm?
            <br>
            Looking to replace your old roof or siding? Get Started below!
        </p>
        <!-- /.column small-12 ba-get-started__desc -->
    </div>
    <!-- /.row -->

    <div class="row ba-get-started__content">
        <article class="column small-12 medium-6 large-4 ba-get-started__item">
            <a href="#" class="ba-get-started__item-link">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/residential.jpg" alt="" class="ba-get-started__item-image">
                <!-- /.ba-get-started__item-image -->
                <h5 class="ba-get-started__item-text">
                    Residental Repiar
                    <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/src/assets/img/right-arrow.png" alt="Right Arrow">
                </h5>
                <!-- /.ba-get-started__item-text -->
            </a>
            <!-- /.ba-get-started__item-link -->
        </article>
        <!-- /.column small-12 medium-6 large-4 ba-get-started__item -->

        <article class="column small-12 medium-6 large-4 ba-get-started__item">
            <a href="#" class="ba-get-started__item-link">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/commercial.jpg" alt="" class="ba-get-started__item-image">
                <!-- /.ba-get-started__item-image -->
                <h5 class="ba-get-started__item-text">
                    Commercial Repair
                    <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/src/assets/img/right-arrow.png" alt="Right Arrow">
                </h5>
                <!-- /.ba-get-started__item-text -->
            </a>
            <!-- /.ba-get-started__item-link -->
        </article>
        <!-- /.column small-12 medium-6 large-4 ba-get-started__item -->

        <article class="column small-12 medium-6 large-4 ba-get-started__item">
            <a href="#" class="ba-get-started__item-link">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/insurance.jpg" alt="" class="ba-get-started__item-image">
                <!-- /.ba-get-started__item-image -->
                <h5 class="ba-get-started__item-text">
                    Insurance Claims
                    <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/src/assets/img/right-arrow.png" alt="Right Arrow">
                </h5>
                <!-- /.ba-get-started__item-text -->
            </a>
            <!-- /.ba-get-started__item-link -->
        </article>
        <!-- /.column small-12 medium-6 large-4 ba-get-started__item -->
    </div>
    <!-- /.row ba-get-started__content -->
</section>
<!-- /.ba-get-started -->