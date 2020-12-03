<footer id="footer" class="bg-lighter pt-6 pb-8">
    <div class="footer-widgets">
        <div class="container-binch">
            <div class="row footer-legal">
                <div class="col-md-6 order-md-0 order-2 mt-7 mt-md-0">
                    <div class="d-inline-block">
                        <div class="logo-company">
                            <img src="<?= get_field('_footer_image', 'page_options')['url'] ?>" alt="image" class="img-fluid">
                        </div>
                        <p class="text-gray text-size-25 wrap-pre lh-130 mt-3"><?= get_field('_footer_address', 'page_options') ?></p>
                        <?php if (have_rows('_socials_array', 'page_options')): ?>
                        <div class="d-flex justify-content-between">
                            <?php while (have_rows('_socials_array', 'page_options')): the_row() ?>
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

<script type="text/javascript"> window.$crisp=[];window.CRISP_WEBSITE_ID="897eb3fb-c158-4797-9ce3-a4e32599a71e";(function(){ d=document;s=d.createElement("script"); s.src="https://client.crisp.chat/l.js"; s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})(); </script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/binch-nav.js"></script>

<?php wp_footer(); ?>

</body>
</html>
