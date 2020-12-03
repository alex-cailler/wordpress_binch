<?php
/**
 * Template Name: contact
 */

get_header(); ?>

<main id="main" class="<?= get_class() ?>">

    <?php get_template_part('template-parts/contact/section', 'top'); ?>

    <div id="nav-event-position"></div>

    <?php get_template_part('template-parts/contact/section', 'informations'); ?>

    <?php get_template_part('template-parts/contact/section', 'form'); ?>

</main>

<?php get_footer(); ?>
