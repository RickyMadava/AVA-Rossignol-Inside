<div uk-scrollspy="cls: uk-animation-fade; delay: 500">
    <div class="uk-position-relative uk-visible-toggle uk-light" id="main-slider" tabindex="-1" uk-slideshow="animation: push; max-height: 400; autoplay: true;">
        <ul class="uk-slideshow-items">
            <!-- slide 1 -->
            <li>
                <img data-src="<?php echo (get_template_directory_uri() . '/assets/images/pexels-jeshootscom-442574.jpg') ?>" alt="" uk-cover uk-img />
                <div class="uk-position-cover uk-position-small uk-flex uk-flex-column uk-flex-middle uk-flex-center uk-text-center uk-overlay banner-overlay uk-margin-remove">
                    <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0" class="banner-slider-tile">
                        Le cadre parfait <br />
                        pour <br />
                        les élites
                    </h2>
                </div>
            </li>
            <!-- /slide 1 -->

            <!-- slide 2 -->
            <li>
                <img data-src="<?php echo (get_template_directory_uri() . '/assets/images/pexels-andrea-piacquadio-3807741.jpg') ?>" alt="" uk-img uk-cover />
                <div class="uk-position-cover uk-position-small uk-flex uk-flex-column uk-flex-middle uk-flex-center uk-text-center uk-overlay banner-overlay uk-margin-remove">
                    <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0" class="banner-slider-tile">
                        Mention Gestion
                    </h2>
                    <a class="uk-button uk-button-default uk-button-radius banner-button" uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">
                        en savoir plus
                    </a>
                </div>
            </li>
            <!-- /slide 2 -->

            <!-- slide 3 -->
            <li>
                <img data-src="<?php echo (get_template_directory_uri() . '/assets/images/pexels-rfstudio-3059749.jpg') ?>" alt="" uk-img uk-cover />
                <div class="uk-position-cover uk-position-small uk-flex uk-flex-column uk-flex-middle uk-flex-center uk-text-center uk-overlay banner-overlay uk-margin-remove">
                    <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0" class="banner-slider-tile">
                        Mention Droit
                    </h2>
                    <a class="uk-button uk-button-default uk-button-radius banner-button" uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">
                        en savoir plus
                    </a>
                </div>
            </li>
            <!-- //slide 3 -->

            <!-- slide 4 -->
            <li>
                <img data-src="<?php echo (get_template_directory_uri() . '/assets/images/pexels-andrea-piacquadio-3769021.jpg') ?>" alt="" uk-img uk-cover />
                <div class="uk-position-cover uk-position-small uk-flex uk-flex-column uk-flex-middle uk-flex-center uk-text-center uk-overlay banner-overlay uk-margin-remove">
                    <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0" class="banner-slider-tile">
                        Mention informatique
                    </h2>
                    <a class="uk-button uk-button-default uk-button-radius banner-button" uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">
                        en savoir plus
                    </a>
                </div>
            </li>
            <!-- slide 3 -->
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>
</div>

<style>
    #main-slider {}

    .banner-slider-tile {
        font-size: 1.5em;
        letter-spacing: 0.2em;
        text-align: center;
    }

    @media (min-width: 768px) {
        .banner-slider-tile {
            font-size: 3.75em;
            letter-spacing: 0.2em;
            text-align: center;
        }
    }

    .banner-overlay {
        background: rgba(34, 34, 34, 0.1);
    }

    .banner-button {
        transition: 0.1s ease-in-out;
    }

    .banner-button:hover {
        background-color: #fff !important;
        color: #151515 !important;
    }

    .banner-button__icon {
        opacity: 0;
        transition: right 0.2s ease-out;
    }

    .banner-button:hover .banner-button__icon {
        opacity: 1;
    }

    #banner-contact {
        color: white !important;
        background-color: rgba(230, 243, 43, 0.8);
    }
</style>