<section class="uk-section">
    <div class="uk-container">
        <div class="uk-grid-match uk-child-width-1-3@m metion-card-negatif-margin" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: div; delay: 500;">
            <!-- gestion card -->
            <div>
                <a href="/" class="default-link gestion-card uk-card uk-card-default uk-card-large uk-card-body" uk-tooltip="title: Cliquez pour en savoir plus; pos: top-right">
                    <h3 class="uk-card-title white-text">Gestion</h3>
                    <p>
                        <ul class="white-text uk-list uk-list-square">
                            <li>Contabilité et finance</li>
                            <li>Marketing et commerce international</li>
                            <li>Management et développement d'entreprise</li>
                        </ul>
                    </p>
                    <object>
                        <a href="#" class="uk-button uk-button-default uk-button-radius banner-button uk-light uk-hidden@m">
                            en savoir plus
                        </a>
                    </object>
                </a>
            </div>
            <!-- /gestion card -->
            <!-- droit card -->
            <div>
                <a class="default-link droit-card uk-card uk-card-default uk-card-large uk-card-body" uk-tooltip="title: Cliquez pour en savoir plus; pos: top-right">
                    <h3 class="uk-card-title white-text">Droit</h3>
                    <p>
                        <ul class="white-text uk-list uk-list-square">
                            <li>Droit public</li>
                            <li>Droit privé</li>
                        </ul>
                    </p>
                    <object>
                        <a class="uk-button uk-button-default uk-button-radius banner-button uk-light uk-hidden@m">
                            en savoir plus
                        </a>
                    </object>
                </a>
            </div>
            <!-- /droit card -->
            <!-- informatique card -->
            <div>
                <a class="default-link informatique-card uk-card uk-card-default uk-card-large uk-card-body" uk-tooltip="title: Cliquez pour en savoir plus; pos: top-right">
                    <h3 class="uk-card-title white-text">Informatique</h3>
                    <p>
                        <ul class="white-text uk-list uk-list-square">
                            <li>Administration des systèmes et réseaux</li>
                            <li>Génie logiciel et base de données</li>
                        </ul>
                    </p>
                    <object>
                        <a class="uk-button uk-button-default uk-button-radius banner-button uk-light uk-hidden@m">
                            en savoir plus
                        </a>
                    </object>
                </a>
            </div>
            <!-- /informatique card -->
        </div>
    </div>
</section>

<style>
    @media (min-width: 768px) {
        .metion-card-negatif-margin {
            margin-top: -150px;
        }
    }

    .gestion-card {
        background-color: rgb(99, 80, 162, 0.8);
        transition: 0.25s;
        cursor: pointer;
    }

    .gestion-card:hover {
        box-shadow: 0 14px 25px rgba(0, 0, 0, 0.46);
        margin-top: -10px;
        margin-bottom: 10px;
    }

    .droit-card {
        background-color: rgb(191, 20, 90, 0.8);
        transition: 0.25s;
        cursor: pointer;
    }

    .droit-card:hover {
        box-shadow: 0 14px 25px rgba(0, 0, 0, 0.46);
        margin-top: -10px;
        margin-bottom: 10px;
    }

    .informatique-card {
        background-color: rgb(0, 128, 137, 0.8);
        transition: 0.25s;
        cursor: pointer;
    }

    .informatique-card:hover {
        box-shadow: 0 14px 25px rgba(0, 0, 0, 0.46);
        margin-top: -10px;
        margin-bottom: 10px;
    }
</style>