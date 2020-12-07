<section class="py-9 bg-lighter">
    <div class="container-binch">
        <div class="row">
            <div class="col-lg-7">
                <div class="mb-7 mr-lg-9">
                    <h1 class="font-weight-bold mb-4"><?= get_field('_intro_title') ?></h1>
                    <p class="font-weight-light text-size-25"><?= get_field('_intro_description') ?></p>
                </div>
                <div class="rounded-lg bg-white pt-3 pb-4 px-md-6 px-3 shadow mr-lg-9">
                    <div class="d-flex justify-content-center mb-5">
                         <div class="bg-lighter rounded-pill px-5 py-3">
                             <span class="fa fa-star text-secondary px-1 text-size-20"></span>
                             <span class="fa fa-star text-secondary px-1 text-size-20"></span>
                             <span class="fa fa-star text-secondary px-1 text-size-20"></span>
                             <span class="fa fa-star text-secondary px-1 text-size-20"></span>
                             <span class="fa fa-star text-secondary px-1 text-size-20"></span>
                         </div>
                    </div>
                    <div>
                        <i class="text-size-20"><?= get_field('_option_text')?></i>
                        <p class="font-weight-bold text-size-20 mt-5 text-primary mb-4"><?= get_field('_origin') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mt-7 mt-lg-0">
                <div class="card-binch px-5 py-6 shadow rounded-lg bg-white">
                    <?php echo do_shortcode('[contact-form-7 id="331" title="Contact - testing"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
