<section class="py-9">
    <div class="container-binch">
        <div class="row">
            <?php if (have_rows('_information_array')): ?>
                <?php while (have_rows('_information_array')): the_row() ?>
                    <div class="col-lg-4 mb-5 mb-lg-0 pr-9">
                        <div class="mb-4">
                            <i class="text-size-25 text-primary <?= get_sub_field('icon'); ?>"></i>
                        </div>
                        <span class="text-size-25 d-block text-primary">
                                    <?= get_sub_field('title') ?>
                                </span>
                        <p class="text-size-20 text-light font-weight-light">
                            <?= get_sub_field('description'); ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            <?php endif ?>
        </div>
    </div>
</section>