<?php
/*
Template Name: Contact page
*/
?>

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
    <?php get_template_part('template-parts/front-page/contact-section'); ?>

    <div class="uk-section">
        <div class="uk-container">
            <p class="uk-text-center uk-width-1-2@m uk-margin-auto">
                vous pouvez utiliser le formulaire ci-dessous pour nous contacter et
                nous ferons en sorte de vous répondre le plus rapidement possible !
            </p>
            <form action="" class="uk-form-stacked">
                <div class="uk-margin-auto uk-width-1-2@m uk-width-1-1 uk-margin-small-bottom">
                    <label class="uk-form-label" for="name">Nom</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="name" type="email" placeholder="Votre nom..." />
                    </div>
                </div>
                <div class="uk-margin-auto uk-margin-small-bottom uk-width-1-2@m uk-width-1-1">
                    <label class="uk-form-label" for="email">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="email" type="email" placeholder="Votre email..." />
                    </div>
                </div>
                <div class="uk-margin-auto uk-width-1-2@m uk-width-1-1">
                    <label class="uk-form-label" for="email">Message</label>
                    <div class="uk-form-controls">
                        <div class="uk-margin">
                            <textarea class="uk-textarea" rows="5" placeholder="Votre message..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m uk-width-1-1 uk-margin-auto uk-text-right">
                    <button class="uk-button uk-button-primary" style="border-radius: 30px">
                        Contactez-nous
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
<!-- //main -->

<?php
get_footer();
