<section class="step step-1 active-step">
    <div class="title">
        <h1 class="font-weight-bold mb-4 lh-100">
            <?= get_field('_one_title') ?>
        </h1>
        <p class="text-muted text-size-20 py-3">
           <?= get_field('_one_subtitle') ?>
        </p>
    </div>
    <input type="text" class="input-binch" placeholder="Votre appelation" name="name" />
    <input type="text" class="input-binch" placeholder="E-mail" name="email" />
    <input type="text" class="input-binch" placeholder="Téléphone" name="phoneNumber" />
    <div class="text-center pt-3">
        <button type="button" class="btn rounded-pill btn-gradient firstNext next-step" data-step-id="1">Suivant</button>
    </div>
</section>