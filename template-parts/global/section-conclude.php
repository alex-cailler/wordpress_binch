<section class="py-6 bg-gradient">
    <div class="container-binch">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="font-weight-bold text-white mb-4 fadeIn"><?= get_field('_conclude_title', 'option') ?></h1>
                <p class="font-weight-light text-white text-size-20 slideRight"><?= get_field('_conclude_description', 'option') ?></p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center slideUp">
                <a href="<?= get_field('_conclude_button_link', 'option') ?>"
                   class="rounded-pill btn shadow-sm bg-white text-primary mt-3 mt-md-0 px-3 px-md-5 py-3 font-weight-normal text-size-22"><?= get_field('_conclude_button_text', 'option') ?>
                </a>
            </div>
        </div>
    </div>
</section>