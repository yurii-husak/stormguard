<?php $page = $_SERVER['REQUEST_URI']; ?>

<header class="ba-header">

    <div class="ba-header__top-bar">
        <div class="row top-bar__row">
            <div class="top-bar__left-side">
                <a href="<?php the_field('top_bar_link', 'options'); ?>">
                    <?php the_field('top_bar_text', 'options'); ?>
                    <i class="fa fa-chevron-right"></i>
                </a>
            </div>
            <!-- /.top-bar__left-side -->
            <div class="top-bar__right-side">
                <nav>
                    <?php foundationpress_first_top_bar(); ?>
                    <button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon hide-for-large" type="button" data-toggle="off-canvas-menu"></button>
                </nav>
            </div>
            <!-- /.top-bar__right-side -->
        </div>
        <!-- /.row top-bar__row -->
    </div>
    <!-- /.ba-header__top-bar -->

    <div class="ba-header"
        <?php if ($page == '/') : ?>
            style="background-image: url('<?php the_field('header_image', 'options'); ?>'); -webkit-background-size: cover;background-size: cover;background-repeat: no-repeat; background-position: center;"
        <?php elseif($page != '/' && get_field('header_image')) : ?>
            style="background-image: url('<?php the_field('header_image'); ?>'); -webkit-background-size: cover;background-size: cover;background-repeat: no-repeat; background-position: center;"
        <?php else : ?>
            style="background-image: url('<?php the_field('header_image', 'options'); ?>'); -webkit-background-size: cover;background-size: cover;background-repeat: no-repeat; background-position: center;"
        <?php endif; ?>
    >
        <div class="ba-header__nav">
            <div class="row ba-header-nav__row">
                <div class="ba-header-nav__left-side">
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
                <!-- /.ba-header-nav__left-side -->
                <div class="ba-header-nav__right-side">
                    <nav>
                        <?php foundationpress_second_top_bar(); ?>
                    </nav>
                </div>
                <!-- /.ba-header-nav__right-side -->
            </div>
            <!-- /.row ba-header-nav__row -->
        </div>
        <!-- /.ba-header__nav -->
        <?php if($page == '/') : ?>
            <div class="ba-header__content">
                <div class="row column ba-header__content-row">
                    <div class="ba-header__content-text">
                        <h1 class="ba-header__content-title">
                            <?php the_field('header_title', 'options'); ?>
                        </h1>
                        <!-- /.ba-header__content-title -->
                        <a href="#ba-footer" class="ba-header__contact-button">
                            Contact Us Today <i class="fa fa-chevron-right"></i>
                        </a>
                        <!-- /.ba-header__contact-button -->
                    </div>
                    <!-- /.ba-header__content-text -->
                </div>
                <!-- /.row column ba-header__content-row -->
            </div>
            <!-- /.ba-header__content -->
        <?php endif; ?>
    </div>
    <!-- /.ba-header -->

    <?php if($page != '/') echo get_template_part('template-parts/content', 'breadcrumbs')?>
</header>