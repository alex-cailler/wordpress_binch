<section class="py-9">
    <div class="container-binch">
        <h1 class="text-center font-weight-bold pb-6 text-size-45"><?= get_field('_partners_title', 'page_options') ?></h1>
        <div class="row justify-content-between">
            <?php if (have_rows('_partners_array', 'page_options')): ?>
                <?php while (have_rows('_partners_array', 'page_options')): the_row() ?>
                    <div class="col-6 px-md-0 py-md-0 px-5 py-5 col-md-2 m-auto"><img src="<?= get_sub_field('image')['url'] ?>" class="img-fluid"></div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>