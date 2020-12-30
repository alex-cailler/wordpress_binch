<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <title><?= the_title() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','<?= get_field('google_tag_manager_key', 'option') ?>');</script>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id='<?= get_field('google_tag_manager_key', 'apis') ?>'"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<?php wp_body_open(); ?>

<header id="header" class="fixed-top header-binch">

    <nav class="navbar navbar-binch container-binch navbar-expand-md" role="navigation">

        <?php get_template_part('template-parts/headers/logo'); ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbar',
                'menu_class' => 'nav navbar-nav ml-auto',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker()
            ));
        ?>
    </nav>

</header>
