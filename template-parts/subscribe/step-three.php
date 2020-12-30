<section class="step step-3">
    <div class="title">
        <div class="d-flex">
            <div>
                <button type="button" class="btn btn-link previous-step"><i class="fas fa-arrow-left text-size-25"></i></button>
            </div>
            <h1 class="font-weight-bold mb-4 lh-100">
                <?= get_field('_three_title') ?>
            </h1>
        </div>
        <?php if ($text = get_field('_three_subtitle')): ?>
            <p class="text-muted text-size-20 py-3">
                <?= $text ?>
            </p>
        <?php endif; ?>
    </div>
    <input type="text" class="input-binch" name="establishment_name" placeholder="Nom de votre établissement" />
    <input type="text" class="input-binch" name="addressLine_1" placeholder="Adresse" />
    <input type="text" class="input-binch" name="addressLine_2" placeholder="Adresse 2" />
    <div class="d-flex">
        <input type="text" class="input-binch" name="postalCode" placeholder="Code postal" />
        <input type="text" class="input-binch" name="city" placeholder="Ville" />
    </div>
    <select name="type" id="" class="input-binch">
        <option value="" disabled selected>Type d'établissement</option>
        <option value="bar">Bar</option>
        <option value="restaurant">Restaurant</option>
        <option value="evenementielle">Evenementielle</option>
    </select>
    <div class="text-center pt-3">
        <button type="button" class="btn btn-gradient rounded-pill next-step" data-step-id="3">Suivant</button>
    </div>
</section>
