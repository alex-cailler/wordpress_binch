<?php

/**
 * Template Name: legal
 */

get_header(); ?>

<main id="main" class="<?php post_class(['cgu']); ?>">

    <div class="container py-9">
        <?php get_template_part('template-parts/global/section', 'top_legal_faq'); ?>

        <div class="mt-5">
            <?php if (have_posts()): ?>

                <?php while (have_posts()): the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

            <?php else: ?>
                <div class="empty">
                <span class="empty-text">
                    <?php _e('Il n\'y a pas d\'articles a display'); ?>
                </span>
                </div>
            <?php endif; ?>
        </div>

    </div>

</main>

<?php get_footer(); ?>
