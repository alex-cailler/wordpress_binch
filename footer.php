<footer id="footer" class="bg-lighter pt-6 pb-8">
    <div class="footer-widgets">
        <div class="container-binch">
            <div class="row footer-legal">
                <div class="col-md-6 order-md-0 order-2 mt-7 mt-md-0">
                    <div class="d-inline-block">
                        <div class="logo-company">
                            <?php if ($img = get_field('_footer_image', 'option')): ?>
                                <?= wp_get_attachment_image($img['id'], 'small')  ?>
                            <?php endif; ?>
                        </div>
                        <p class="text-gray text-size-25 wrap-pre lh-130 mt-3"><?= get_field('_footer_address', 'option') ?></p>
                        <?php if (have_rows('_socials_array', 'option')): ?>
                        <div class="d-flex justify-content-between">
                            <?php while (have_rows('_socials_array', 'option')): the_row() ?>
                                <a href="<?= get_sub_field('social_link') ?>" class="icon-binch">
                                    <i class="<?= get_sub_field('icon') ?>"></i>
                                </a>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-3 order-md-1 order-0">
                    <?php dynamic_sidebar('sidebar-2') ?>
                </div>
                <div class="col-md-3 order-md-2 order-1">
                    <?php dynamic_sidebar('footer-3') ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/binch-nav.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/binch-steppers.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script type="text/javascript"> window.$crisp=[];window.CRISP_WEBSITE_ID="897eb3fb-c158-4797-9ce3-a4e32599a71e";(function(){ d=document;s=d.createElement("script"); s.src="https://client.crisp.chat/l.js"; s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})(); </script>
<script src="https://unpkg.com/scrollreveal"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/binch-reveal.js"></script>

</body>
</html>
