<section class="pt-6">
    <div class="accordion" id="accordionExample">

        <?php if (have_rows('_questions_array')): ?>
            <?php while (have_rows('_questions_array')): the_row() ?>
                <div class="shadow-sm  overflow-hidden rounded-binch mb-5">
                    <div class="px-3 py-4 bg-lighter" id="heading<?php the_row_index() ?>">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-size-20 font-weight-bold btn-link text-left"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapse<?php the_row_index() ?>"
                                    aria-expanded="<?= get_row_index() == 1 ? 'true' : 'false'; ?>"
                                    aria-controls="collapse<?php the_row_index() ?>"
                            >
                                <?= get_sub_field('libel') ?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse<?php the_row_index() ?>"
                         class="collapse <?= get_row_index() == 1 ? 'show' : ''; ?>"
                         aria-labelledby="heading<?php the_row_index() ?>"
                         data-parent="#accordionExample"
                    >
                        <div class="card-body pt-3">
                            <?= get_sub_field('response') ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</section>