<section class="py-9">
    <div class="container-binch">
        <div class="row">
            <div class="col-lg-6 pr-sm-5">
                <h1 class="font-weight-bold mb-4"><?= get_field('_bar_title') ?></h1>
                <p class="font-weight-light text-size-25"><?= get_field('_bar_description') ?></p>
                <div class="mt-7">
                    <a href=" <?= get_field('_bar_button_link') ?>"
                       class="text-size-25 btn-gradient rounded-pill btn shadow-sm px-3 px-md-7 py-3 font-weight-normal">
                        <?= get_field('_bar_button_text') ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-5">
                <img src="<?= get_field('_bar_image')['url'] ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>