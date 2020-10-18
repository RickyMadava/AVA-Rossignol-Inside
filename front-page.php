<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rossignol_inside
 */

get_header();
?>

<!-- main -->
<main id="primary" class="site-main">

    <?php get_template_part('template-parts/front-page/banner') ?>

    <?php get_template_part('template-parts/front-page/mention-section'); ?>

    <?php get_template_part('template-parts/front-page/mot-president'); ?>

    <?php get_template_part('template-parts/front-page/pub-section'); ?>

    <?php get_template_part('template-parts/front-page/dure-formation-section'); ?>

    <?php get_template_part('template-parts/front-page/actualite-section'); ?>

    <?php get_template_part('template-parts/front-page/contact-section'); ?>
</main>
<!-- //main -->

<?php
get_footer();
