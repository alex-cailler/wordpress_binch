<section class="py-9 bg-lighter">
    <div class="container-binch">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="<?= get_field('_stockage_image')['url'] ?>" class="img-fluid" alt="image">
            </div>
            <div class="col-lg-6 pl-lg-5 pr-lg-7 mt-5 mt-lg-0">
                <h1 class="font-weight-bold mb-4"><?= get_field('_stockage_title') ?></h1>
                <p class="text-size-25 font-weight-light"><?= get_field('_stockage_description') ?></p>
                <a href="<?= get_field('_stockage_button_link') ?>"
                   class="rounded-pill btn shadow-sm mt-3 px-5 py-3 font-weight-bold mt-2 btn-gradient text-size-25">
                    <?= get_field('_stockage_button_text') ?>
                </a>
            </div>
        </div>
    </div>
</section>
