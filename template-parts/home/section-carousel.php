<section class="py-9 bg-lighter" id="service-tabs">

    <?php if (have_rows('_services_array')): ?>
        <div class="container-binch">
            <h1 class="text-center font-weight-bold mb-6 text-size-45 fadeIn"><?= get_field('_services_title') ?></h1>
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
                            <div class="col-6 offset-2 col-sm-5 offset-sm-3 col-md-4 offset-md-4 col-lg-3 offset-lg-1">
                                <div class="d-flex justify-content-center">
                                    <?php if ($img = get_sub_field('image')): ?>
                                        <?= wp_get_attachment_image($img['id'], 'small', true, ['alt' => 'binch - services image', 'style'=> 'width: 100%; height: auto']) ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1 d-flex mt-5 mt-lg-0 align-items-center">
                                <div>
                                    <h1 class="font-weight-bold mb-4"><?= get_sub_field('title') ?></h1>
                                    <p class="text-size-25 mb-7 font-weight-light"><?= get_sub_field('description') ?></p>
                                    <a href="<?= get_sub_field('button_link') ?>"
                                       class="btn-outline-binch rounded-pill btn shadow-sm px-5 py-3 font-weight-normal"
                                       style="font-size: 22px"
                                    >
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