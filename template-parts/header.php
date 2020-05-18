<header class="ba-header">
    <div class="ba-header__first-top-bar-wrapper">
        <div class="row ba-header__first-top-bar">
            <div class="ba-first-top-bar__left">
                <a href="<?php the_field('top_bar_link', 'options'); ?>">
                    <?php the_field('top_bar_text', 'options'); ?>
                    <i class="fa fa-chevron-right"></i>
                </a>
            </div>
            <!-- /.ba-first-top-bar__left -->
            <div class="ba-first-top-bar__right">
                <nav>
                    <?php foundationpress_first_top_bar(); ?>
                    <button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon hide-for-large" type="button" data-toggle="off-canvas-menu"></button>
                </nav>
            </div>
            <!-- /.ba-first-top-bar__right -->
        </div>
        <!-- /.row ba-header__first-top-bar -->
    </div>
    <!-- /.ba-header__first-top-bar-wrapper -->

    <div class="ba-header__content-wrapper">
        <div class="ba-header__second-top-bar-wrapper">
            <div class="row ba-header__second-top-bar">
                <div class="ba-second-top-bar__left">
                    <a class="any-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
                        <?php if(has_custom_logo()) : ?>
                            <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            ?>
                            <img src="<?php echo $image[0] ?>" alt="<?php bloginfo( 'name' ); ?>" />
                        <?php else : ?>
                            <?php bloginfo( 'name' ); ?>
                        <?php endif ?>
                    </a>
                </div>
                <!-- /.ba-second-top-bar__left -->
                <div class="ba-second-top-bar__right">
                    <nav>
                        <?php foundationpress_second_top_bar(); ?>
                    </nav>
                </div>
                <!-- /.ba-second-top-bar__right -->
            </div>
            <!-- /.row ba-header__second-top-bar -->
        </div>
        <!-- /.ba-header__second-top-bar-wrapper -->
        <div class="ba-header__content" style="background-image: url('<?php the_field('header_background', 'options'); ?>'); -webkit-background-size: cover;background-size: cover;background-repeat: no-repeat; background-position: center;">
            <div class="row column ba-header__content-text-wrapper">
                <div class="ba-header__content-text">
                    <h1 class="ba-header__content-title">
                        <?php the_field('header_title', 'options'); ?>
                    </h1>
                    <!-- /.ba-header__content-title -->
                    <a href="#" class="ba-header__contact-button">
                        Contact Us Today <i class="fa fa-chevron-right"></i>
                    </a>
                    <!-- /.ba-header__contact-button -->
                </div>
                <!-- /.ba-header__content-text -->
            </div>
            <!-- /.row column ba-header__content-text-wrapper -->
        </div>
        <!-- /.ba-header__content -->
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
    </div>
    <!-- /.ba-header__content-wrapper -->

</header>