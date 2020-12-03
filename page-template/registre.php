<?php

/**
 * Template Name: registre
 */

get_header(); ?>

    <main id="main" class="<?php post_class(); ?>">

        <?php get_template_part('template-parts/global/section', 'intro'); ?>

        <div id="nav-event-position"></div>

        <?php get_template_part('template-parts/registre/section', 'presentation'); ?>

        <?php get_template_part('template-parts/global/section', 'steps'); ?>

        <?php get_template_part('template-parts/global/section', 'why'); ?>

        <?php get_template_part('template-parts/global/section', 'partners'); ?>

        <?php get_template_part('template-parts/global/section', 'conclude'); ?>

    </main>


<?php get_footer(); ?>