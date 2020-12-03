<section class="py-6 bg-gradient">
    <div class="container-binch">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="font-weight-bold text-white mb-4"><?= get_field('_conclude_title', 'page_options') ?></h1>
                <p class="font-weight-light text-white text-size-20"><?= get_field('_conclude_description', 'page_options') ?></p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <a href="<?= get_field('_conclude_button_link', 'page_options') ?>"
                   class="rounded-pill btn shadow-sm bg-white text-primary mt-3 mt-md-0 px-3 px-md-7 py-3 font-weight-normal text-size-25"><?= get_field('_conclude_button_text', 'page_options') ?>
                </a>
            </div>
        </div>
    </div>
</section>