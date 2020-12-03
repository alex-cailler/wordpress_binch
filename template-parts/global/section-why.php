<section class="pt-9 pb-6">
    <div class="container-binch">
        <h1 class="text-center font-weight-bold pb-9 text-size-45"><?= get_field('_why_title') ?></h1>
        <?php if (have_rows('_why_array')): ?>
            <div class="row">
                <?php while (have_rows('_why_array')): the_row() ?>
                    <div class="col-lg-6 px-5 mb-6">
                        <?php if(get_sub_field('image')): ?>
                            <div class="mb-4">
                                <img src="<?= get_sub_field('image')['url'] ?>" class="img-fluid" alt="image">
                            </div>
                        <?php endif; ?>
                        <h1 class="font-weight-bold mb-4"><?= get_sub_field('title') ?></h1>
                        <p class="text-size-25 font-weight-light"><?= get_sub_field('description') ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>