<?php get_header(); ?>

<main id="main" class="<?= get_class() ?>">

    <?php get_template_part('template-parts/global/section', 'intro'); ?>

    <div id="nav-event-position"></div>

    <?php get_template_part('template-parts/global/section', 'cards'); ?>

    <?php get_template_part('template-parts/global/section', 'steps'); ?>

    <?php get_template_part('template-parts/global/section', 'why'); ?>

    <?php get_template_part('template-parts/home/section', 'carousel'); ?>

    <?php get_template_part('template-parts/home/section', 'bar'); ?>

    <?php get_template_part('template-parts/global/section', 'partners'); ?>

    <?php get_template_part('template-parts/global/section', 'conclude'); ?>

</main>

<?php get_footer(); ?>
