<section class="py-9">
    <div class="container-binch">
        <div class="row align-items-center">
            <div class="col-md-6 pr-sm-5">
                <h1 class="font-weight-bold mb-4 fadeIn"><?= get_field('_ui_title') ?></h1>
                <div class="slideUp">
                    <p class="text-size-25 font-weight-light"><?= get_field('_ui_description') ?></p>
                </div>
            </div>
            <div class="col-md-6 pl-sm-5 pr-sm-5">
                <?php if ($img = get_field('_ui_image')): ?>
                    <?= wp_get_attachment_image($img['id'], 'small', false, ['alt' => 'binch - ui image']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>