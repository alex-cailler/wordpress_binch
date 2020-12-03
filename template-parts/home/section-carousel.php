<section class="py-9 bg-lighter" id="service-tabs">

    <?php if (have_rows('_services_array')): ?>
    <div class="container-binch">
        <h1 class="text-center font-weight-bold mb-6 text-size-45"><?= get_field('_services_title') ?></h1>
    </div>
    <div class="container mb-6">
        <div class="row justify-content-center">
            <ul class="nav d-block tabs-binch" id="pills-tab" role="tablist" style="white-space:nowrap; overflow-x: scroll">
            <?php while(have_rows('_services_array')): the_row(); ?>
                <li class="nav-item mx-3 d-inline-block">
                    <a class="nav-link <?= get_row_index() == 1 ? 'show active' : ''; ?>"
                       id="pills-<?php the_row_index() ?>-tab"
                       data-toggle="pill"
                       href="#pills-<?php the_row_index() ?>"
                       role="tab"
                       aria-controls="pills-<?php the_row_index() ?>"
                       aria-selected="<?= get_row_index() == 1 ? 'true' : 'false'; ?>"
                    ><?= get_sub_field('tab_text') ?></a>
                </li>
            <?php endwhile; ?>
            </ul>
        </div>
        <hr>
    </div>

    <div class="container-binch">
        <div class="tab-content" id="pills-tabContent">
            <?php while(have_rows('_services_array')): the_row(); ?>
                <div class="tab-pane fade <?= get_row_index() == 1 ? 'show active' : ''; ?>"
                     id="pills-<?php the_row_index(); ?>"
                     role="tabpanel"
                     aria-labelledby="pills-home<?php the_row_index(); ?>-tab"
                >
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <img src="<?= get_sub_field('image')['url'] ?>"
                                     class="img-fluid"/>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex mt-5 mt-lg-0 align-items-center">
                            <div>
                                <h1 class="font-weight-bold mb-4"><?= get_sub_field('title') ?></h1>
                                <p class="text-size-25 mb-7 font-weight-light"><?= get_sub_field('description') ?></p>
                                <a href=" <?= get_sub_field('button_link') ?>"
                                   class="text-size-25 btn-outline-binch rounded-pill btn shadow-sm px-5 px-md-7 py-3 font-weight-normal">
                                    <?= get_sub_field('button_text') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <?php endif; ?>
</section>