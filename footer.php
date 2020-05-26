<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$page = $_SERVER['REQUEST_URI'];
?>
            <footer class="ba-footer" id="ba-footer">
                <div class="ba-footer__top-bar">
                    <div class="row ba-footer-top-bar__row">
                        <div class="column small-12 large-6 ba-footer__contact">
                            <h3 class="ba-footer-contact__title">
                                <?php the_field('footer_contact_title', 'options'); ?>
                            </h3>
                            <!-- /.ba-footer-contact__title -->
                            <p class="ba-footer-contact__desc">
                                <?php the_field('footer_contact_desc', 'options'); ?>
                            </p>
                            <!-- /.ba-footer-contact__desc -->
                            <?php if ($page == '/') : ?>
                                <div class="ba-footer__contact-form">
                                    <?php the_field('footer_contact_form', 'options'); ?>
                                </div>
                                <!-- /.ba-footer__contact-form -->
                            <?php else : ?>
                                <div class="ba-footer__contact-us">
                                    <a href="#" class="ba-footer-contact-us__first">Contact Your Local Storm Guard Franchise</a>
                                    <a href="#" class="ba-footer-contact-us__second">Contact the Storm Guard Corporate Office</a>
                                </div>
                                <!-- /.ba-footer__contact-us -->
                            <?php endif; ?>
                        </div>
                        <!-- /.column small-12 large-6 ba-footer__contact -->
                        <div class="column small-12 large-6 ba-footer__last-projects <?php if($page != '/') : ?>ba-footer__left-line<?php endif; ?>">
                            <h3 class="ba-footer-projects__title">
                                <?php the_field('footer_projects_title', 'options'); ?>
                            </h3>
                            <!-- /.ba-footer-projects__title -->
                            <p class="ba-footer-projects__desc">
                                <?php the_field('footer_projects_description', 'options'); ?>
                                <?php if($page != '/') : ?>
                                    <a href="#" class="ba-footer-projects__desc-link">View the whole portfolio.</a>
                                    <!-- /.ba-footer-projects__desc-link -->
                                <?php endif; ?>
                            </p>
                            <!-- /.ba-footer-projects__desc -->
                            <div class="row ba-footer-projects__row">
                                <a href="#" class="column small-6 medium-3 ba-footer-projects__item"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/assets/img/past_project.jpg); background-repeat: no-repeat; background-position: center; -webkit-background-size: cover;background-size: cover;"></a>
                                <!-- /.column small-6 medium-3 ba-footer-projects__item -->

                                <a href="#" class="column small-6 medium-3 ba-footer-projects__item"
                                   style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/assets/img/past_project.jpg); background-repeat: no-repeat; background-position: center; -webkit-background-size: cover;background-size: cover;"></a>
                                <!-- /.column small-6 medium-3 ba-footer-projects__item -->

                                <a href="#" class="column small-6 medium-3 ba-footer-projects__item"
                                   style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/assets/img/past_project.jpg); background-repeat: no-repeat; background-position: center; -webkit-background-size: cover;background-size: cover;"></a>
                                <!-- /.column small-6 medium-3 ba-footer-projects__item -->

                                <a href="#" class="column small-6 medium-3 ba-footer-projects__item"
                                   style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/assets/img/past_project.jpg); background-repeat: no-repeat; background-position: center; -webkit-background-size: cover;background-size: cover;"></a>
                                <!-- /.column small-6 medium-3 ba-footer-projects__item -->

                                <a href="#" class="column small-6 medium-3 ba-footer-projects__item"
                                   style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/assets/img/past_project.jpg); background-repeat: no-repeat; background-position: center; -webkit-background-size: cover;background-size: cover;"></a>
                                <!-- /.column small-6 medium-3 ba-footer-projects__item -->

                                <a href="#" class="column small-6 medium-3 ba-footer-projects__item"
                                   style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/assets/img/past_project.jpg); background-repeat: no-repeat; background-position: center; -webkit-background-size: cover;background-size: cover;"></a>
                                <!-- /.column small-6 medium-3 ba-footer-projects__item -->

                                <a href="#" class="column small-6 medium-3 ba-footer-projects__item"
                                   style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/assets/img/past_project.jpg); background-repeat: no-repeat; background-position: center; -webkit-background-size: cover;background-size: cover;"></a>
                                <!-- /.column small-6 medium-3 ba-footer-projects__item -->

                                <a href="#" class="column small-6 medium-3 ba-footer-projects__item"
                                   style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/assets/img/past_project.jpg); background-repeat: no-repeat; background-position: center; -webkit-background-size: cover;background-size: cover;"></a>
                                <!-- /.column small-6 medium-3 ba-footer-projects__item -->

                                <?php if($page == '/') : ?>
                                    <a href="#" class="column small-12 medium-4 ba-footer-projects__button">View More Photos</a>
                                    <!-- /.column small-12 medium-4 ba-footer-projects__button -->
                                <?php endif; ?>
                            </div>
                            <!-- /.row ba-footer-projects__row -->
                        </div>
                        <!-- /.column small-12 large-6 ba-footer__last-projects -->
                    </div>
                    <!-- /.row ba-footer-top-bar__row -->
                </div>
                <!-- /.ba-footer__top-bar -->
                <div class="ba-footer__bottom-bar">
                    <div class="row ba-footer-bottom__row">
                        <div class="column small-12 large-6 ba-footer-bottom__item">
                            <p class="ba-footer__copyright">
                                <?php the_field('footer_copyright', 'options'); ?>
                                <a href="<?php the_field('produced_by_link', 'options'); ?>">
                                    <?php the_field('produced_by_name', 'options'); ?>
                                </a>
                            </p>
                            <!-- /.ba-footer__copyright -->
                        </div>
                        <!-- /.column small-12 large-6 ba-footer-bottom__item -->
                        <div class="column small-12 large-6 ba-footer-bottom__item ba-footer-bottom__menu">
                            <?php foundationpress_bottom_bar(); ?>
                        </div>
                        <!-- /.column small-12 large-6 ba-footer-bottom__item ba-footer-bottom__menu -->
                    </div>
                    <!-- /.row ba-footer-bottom__row -->
                </div>
                <!-- /.ba-footer__bottom-bar -->
            </footer>
            <!-- /.ba-footer -->

		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->

<?php wp_footer(); ?>
</body>
</html>