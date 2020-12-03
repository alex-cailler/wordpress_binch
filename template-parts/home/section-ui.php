<section class="py-9">
    <div class="container-binch">
        <div class="row align-items-center">
            <div class="col-md-6 pr-sm-5">
                <h1 class="font-weight-bold mb-4"><?= get_field('_ui_title') ?></h1>
                <p class="text-size-25 font-weight-light"><?= get_field('_ui_description') ?></p>
            </div>
            <div class="col-md-6 pl-sm-5 pr-sm-5">
                <img src="<?= get_field('_ui_image')['url'] ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>