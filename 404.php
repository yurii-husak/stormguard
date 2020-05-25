<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<main class="row column">
    <section class="ba-file-not-found__wrapper">
        <h2 class="ba-file-not-found__title">File Not Found</h2>
        <!-- /.ba-file-not-found__title -->

        <p class="ba-file-not-found__content">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. You can try:
        </p>
        <!-- /.ba-file-not-found__content -->

        <div class="ba-file-not-found__buttons">
            <a href="/">Home page</a>
            <a href="javascript:history.back()">Return back</a>
        </div>
        <!-- /.ba-file-not-found__buttons -->
    </section>
    <!-- /.ba-file-not-found__wrapper -->
</main>
<?php get_footer();
