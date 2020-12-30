<section class="step step-2">
    <div class="title">
        <div class="d-flex">
            <div>
                <button type="button" class="btn btn-link previous-step"><i class="fas fa-arrow-left text-size-25"></i></button>
            </div>
            <h1 class="font-weight-bold mb-4 lh-100">
                <?= get_field('_two_title') ?>
            </h1>
        </div>
        <p class="text-muted text-size-20 py-3">
            <?= get_field('_two_subtitle') ?>
        </p>
    </div>
    <input type="password" class="input-binch" placeholder="Mot de passe" name="password" />
    <input type="password" class="input-binch" placeholder="Confirmation mot de passe" name="confirmation_password" />
    <div class="text-center">
        <button type="button" class="btn btn-gradient rounded-pill next-step" data-step-id="2">Suivant</button>
    </div>
</section>