<section class="bg-lighter pb-7 pb-lg-9">
    <div class="container-binch">
        <div class="row">
            <div class="col-lg-7 pt-lg-0 pt-6 align-items-center d-flex pr-lg-9">
               <div class="mb-5">
                   <h1 class="text-size-40 font-weight-bold lh-120"> <?= get_field('_form_title') ?></h1>
                   <p class="text-muted mt-4 text-size-20 mb-0">
                       <?= get_field('_form_phone_libel') ?>
                   </p>
                   <a href="tel:0000000" class="text-primary font-weight-bold text-size-20"><?= get_field('_form_phone_value') ?></a>
                   <address class="text-muted text-size-20 mt-4">
                       <?= get_field('_form_address_value') ?>
                   </address>
               </div>
            </div>
            <div class="col-lg-5 mt-7 mt-lg-0">
                <div class="card-binch px-5 py-6 shadow rounded-lg bg-white position-relative" style="top: -100px">
                    <?php echo do_shortcode('[contact-form-7 id="84" title="Formulaire - Contact"]'); ?>
                </div>
            </div>
        </div>
</section>