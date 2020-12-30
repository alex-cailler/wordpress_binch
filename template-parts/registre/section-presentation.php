<section class="py-9">
    <div class="container-binch">
        <div class="row align-items-center" style="margin: 0 0 270px 0">
            <div class="col-lg-6">
                <div class="slideRight">
                    <h1 class="font-weight-bold mb-4"><?= get_field('_presentation_title') ?></h1>
                    <p class="text-size-25 font-weight-light"><?= get_field('_presentation_description') ?></p>
                    <a href="<?= get_field('_presentation_button_link') ?>"
                       class="rounded-pill btn shadow-sm px-5 py-3 font-weight-bold mt-2 btn-gradient text-size-25">
                        <?= get_field('_presentation_button_text') ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 justify-content-center d-flex mt-5 mt-lg-0">
                <div style="max-width: 350px" class="slideLeft">
                    <?php if ($img = get_field('_presentation_image')): ?>
                        <?= wp_get_attachment_image($img['id'], 'small', false, ['alt' => 'binch - presentation registre image', 'style' => 'height: auto; width: 100%']); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
