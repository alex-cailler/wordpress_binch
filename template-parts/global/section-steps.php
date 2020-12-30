<section>
    <div class="container-binch">
        <h1 class="text-center font-weight-bold pb-9 text-size-45 fadeIn"><?= get_field('_steps_title') ?></h1>
        <div class="position-relative">
            <div class="position-absolute d-lg-flex justify-content-center w-100 d-none" style="top: -50px">
                <?= file_get_contents( get_template_directory_uri()."/assets/svg/line.svg") ?>
            </div>
            <?php if (have_rows('_steps_array')): ?>
                <?php while (have_rows('_steps_array')): the_row() ?>
                    <div class="slideUp row align-items-center <?= get_sub_field('image_left') ? 'flex-lg-row-reverse' : '' ?>" style="margin: 0 0 200px 0">
                        <div class="col-lg-6 <?= get_sub_field('image_left') ? 'pl-lg-9' : 'pr-lg-9' ?>">
                            <h1 class="font-weight-bold mb-4"><?= get_sub_field('title') ?></h1>
                            <p class="text-size-25 font-weight-light"><?= get_sub_field('description') ?></p>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0 justify-content-center d-flex align-items-center">
                            <div style="width: 500px; height: 500px" class="d-flex align-items-center justify-content-center">
                                <?php if ($img = get_sub_field('image')): ?>
                                    <?= wp_get_attachment_image($img['id'], 'medium', false, ['alt' => 'binch - bar steps image']); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>