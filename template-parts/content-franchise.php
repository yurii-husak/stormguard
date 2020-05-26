<?php $page = $_SERVER['REQUEST_URI']; ?>

<section class="ba-franchise
    <?php if($page == '/') : ?>
        ba-franchise--front
    <?php endif; ?>">
    <div class="row ba-franchise__row">
        <div class="ba-franchise__icon">
            <?php $franchise_icon = get_field('header_franchise_icon', 'options') ?>
            <img src="<?php echo esc_url($franchise_icon['url']) ?>" alt="<?php echo esc_attr($franchise_icon['name']) ?>">
        </div>
        <!-- /.ba-franchise__icon -->
        <div class="ba-franchise__text">
            <h2 class="ba-franchise__text-title">
                <?php the_field('header_franchise_title', 'options'); ?>
            </h2>
            <!-- /.ba-franchise__text-title -->
            <p class="ba-franchise__text-desc">
                <?php the_field('header_fanchise_description', 'options'); ?>
            </p>
            <!-- /.ba-franchise__text-desc -->
        </div>
        <!-- /.ba-franchise__text -->
        <div class="ba-franchise__form">
            <form>
                <input type="text" name="zip-code" class="zip-code" placeholder="Enter Zip Code">
                <input type="submit" name="submit" class="franchise-button" value="Submit">
            </form>
        </div>
        <!-- /.ba-franchise__form -->
    </div>
    <!-- /.row ba-franchise__row -->
</section>
<!-- /.ba-franchise -->