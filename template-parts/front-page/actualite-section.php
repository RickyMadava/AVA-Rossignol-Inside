<section class="uk-section-small">
    <div class="uk-container">
        <h3 uk-scrollspy="cls:uk-animation-fade; delay: 500" class="uk-text-center uk-text-uppercase">
            Actualités et événement
        </h3>
        <div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 200;">
            <?php get_template_part('template-parts/common/post-card') ?>
        </div>
    </div>
</section>