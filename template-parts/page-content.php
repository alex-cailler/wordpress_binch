<section class="section" id="page-content">

    <div class="container">
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

</section>