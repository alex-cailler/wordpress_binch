<section>
    <h1 class="text-center font-weight-bold mb-5 text-size-45 fadeIn"><?= get_field('_top_title') ?></h1>
    <div class="d-flex justify-content-center">
        <?php if ($img = get_field('_top_image')): ?>
            <?= wp_get_attachment_image($img['id'], 'small', false, ['alt' => 'binch - application pour les bars faq image']); ?>
        <?php endif; ?>
    </div>
</section>