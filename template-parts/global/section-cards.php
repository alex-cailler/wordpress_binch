<section class="py-9">
    <div class="container-binch">
        <h1 class="text-center font-weight-bold mb-6 text-size-45"><?= get_field('_cards_title') ?></h1>
        <div class="row">
            <?php if (have_rows('_cards_array')): ?>
                <?php while (have_rows('_cards_array')): the_row() ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-binch hover rounded-binch pb-9 pt-6 px-5">
                            <div class="d-flex justify-content-center">
                                <img src="<?= get_sub_field('image')['url'] ?>"
                                     class="img-fluid"/>
                            </div>
                            <span class="card-binch__title d-block text-center font-weight-bold">
                                        <?= get_sub_field('title') ?>
                                    </span>
                            <p class="text-center card-binch__text font-weight-light">
                                <?= get_sub_field('description'); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif ?>
        </div>
    </div>
</section>