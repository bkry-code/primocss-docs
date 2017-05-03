<?php snippet('head') ?>
<?php snippet('header') ?>
    <main class="flex-container__content">
        <div class="container container--fluid">
            <section class="strip">
                <div class="grid-row grid-row--center">
                    <div class="grid-col-12 grid-md-col-10">
                        <h1><?= $page->title()->html() ?></h1>
                    </div>
                </div>
            </section>
            <section class="strip">
                <div class="grid-row grid-row--center">
                    <div class="grid-col-12 grid-md-col-10">
                        <?= $page->intro()->markdown() ?>
                    </div>
                </div>
            </section>
            <section class="strip">
                <div class="grid-row grid-row--center">
                    <div class="grid-col-12 grid-md-col-10">
                        <div class="grid-row">
                            <?= $page->about()->markdown() ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="strip">
                <div class="grid-row grid-row--center">
                    <div class="grid-col-12 grid-md-col-10">
                        <div class="grid-row">
                            <?= $page->faq()->markdown() ?>
                        </div>
                    </div>
                </div>
            </section>
<?php snippet('footer') ?>
