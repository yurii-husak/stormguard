<div class="ba-header__franchise-wrapper">
    <div class="row ba-header_franchise">
        <div class="ba-header__franchise-icon">
            <?php $franchise_icon = get_field('header_franchise_icon', 'options') ?>
            <img src="<?php echo esc_url($franchise_icon['url']) ?>" alt="<?php echo esc_attr($franchise_icon['name']) ?>">
        </div>
        <!-- /.ba-header__franchise-icon -->
        <div class="ba-header__franchise-text">
            <h2 class="ba-header__franchise-title">
                <?php the_field('header_franchise_title', 'options'); ?>
            </h2>
            <!-- /.ba-header__franchise-title -->
            <p class="ba-header__franchise-desc">
                <?php the_field('header_fanchise_description', 'options'); ?>
            </p>
            <!-- /.ba-header__franchise-desc -->
        </div>
        <!-- /.ba-header__franchise-text -->
        <div class="ba-header_franchise-form">
            <form>
                <input type="text" name="zip-code" class="zip-code" placeholder="Enter Zip Code">
                <input type="submit" name="submit" class="franchise-button" value="Submit">
            </form>
        </div>
        <!-- /.ba-header_franchise-form -->
    </div>
    <!-- /.row ba-header_franchise -->
</div>
<!-- /.ba-header__franchise-wrapper -->