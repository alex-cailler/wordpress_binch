<section style="background: url('<?= get_field('_intro_image')['url'] ?>'); background-size: cover">
    <div class="vh-100" style="background-color: rgba(30,32,30,0.6)">
        <div class="d-flex align-items-center h-100 container-binch">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="font-weight-bold text-white d-none d-lg-block lh-100 fadeIn" style="font-size: 60px"><?= get_field('_intro_title') ?></h1>
                    <h1 class="font-weight-bold text-white lh-100 d-lg-none fadeIn" style="font-size: 50px"><?= get_field('_intro_title') ?></h1>
                    <p class="text-white font-weight-light my-5 text-size-25 fadeIn">
                        <?= get_field('_intro_description') ?>
                    </p>
                    <div class="fadeIn">
                        <a href="<?= get_field('_intro_button_link') ?>"
                           class="rounded-pill btn shadow-sm px-3 px-md-4 py-3 font-weight-bold mt-2 btn-gradient" style="font-size: 22px">
                            <?= get_field('_intro_button_text') ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>
</section>