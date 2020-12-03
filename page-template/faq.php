<?php

/**
 * Template Name: faq
 */

get_header(); ?>

<main id="main" class="<?php post_class(); ?>">

    <div class="container py-9">

        <?php get_template_part('template-parts/global/section', 'top_legal_faq'); ?>

        <?php get_template_part('template-parts/faq/section', 'expend'); ?>

    </div>

</main>

<?php get_footer(); ?>
