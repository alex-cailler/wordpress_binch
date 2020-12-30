<section class="py-9">
    <div class="container-binch">
        <h1 class="text-center font-weight-bold pb-6 text-size-45 fadeIn"><?= get_field('_partners_title', 'option') ?></h1>
        <div class="row justify-content-between">
            <?php if (have_rows('_partners_array', 'option')): ?>
                <?php while (have_rows('_partners_array', 'option')): the_row() ?>
                    <div class="col-6 px-md-0 py-md-0 px-5 py-5 col-md-2 m-auto">
                        <?php if ($img = get_sub_field('image')): ?>
                            <?= wp_get_attachment_image($img['id'], 'small', false, ['alt' => 'binch - partners image', 'style' => 'width: 100%; height: auto']); ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>