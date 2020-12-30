<section class="step step-3">
    <div class="title">
        <div class="d-flex">
            <div>
                <button type="button" class="btn btn-link previous-step"><i class="fas fa-arrow-left text-size-25"></i></button>
            </div>
            <h1 class="font-weight-bold mb-4 lh-100"><?= get_field('_four_title') ?></h1>
        </div>
        <?php if ($text = get_field('_four_subtitle')): ?>
            <p class="text-muted text-size-20 py-3">
                <?= $text ?>
            </p>
        <?php endif; ?>
    </div>
        <?php if (have_rows('_four_types_establishment')): ?>
            <div class="d-flex flex-wrap">
                <?php while(have_rows('_four_types_establishment')): the_row(); ?>
                    <div class="w-50 px-2 py-1 d-flex justify-content-center">
                        <label class="checkbox-services-type" style="cursor:pointer;">
                            <input type="checkbox" name="<?= get_sub_field('value') ?>" hidden>
                            <div class="bg-lighter rounded-lg py-3 checkbox-item">
                                <div class="text-center">
                                    <p class="text-size-20 font-weight-bold text-primary"><?= get_sub_field('title') ?></p>
                                    <span class="d-block text-size-10"><?= get_sub_field('subtitle') ?></span>
                                </div>
                                <div class="text-center mt-2">
                                    <?php if ($image = get_sub_field('image')): ?>
                                        <?= wp_get_attachment_image($image['id'], 'small', false, ['alt' => 'Binch - Type Establishment', 'style' => 'height: 90px; width: 90px']) ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </label>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    <div class="text-center">
        <button type="submit" class="btn btn-gradient rounded-pill" data-step-id="4">Valider</button>
    </div>
</section>
