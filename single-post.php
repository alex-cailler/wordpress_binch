<?php get_header(); ?>

<main id="main" <?php post_class('bg-lighter'); ?> >
    <div class="container-binch py-9">
        <?php if (have_posts()): ?>
            <div class="shadow rounded-lg">
                <div class="pt-9 mb-6">
                    <?php the_title('<h1 class="text-size-55 d-none d-md-block text-center font-weight-bold">','</h3>'); ?>
                    <?php the_title('<h1 class="text-size-25 d-md-none text-center font-weight-bold">','</h3>'); ?>
                    <p class="text-center text-size-20">
                        Publié le :
                        <?php _e(date( 'j F Y', strtotime($post->post_date) )) ?>
                    </p>
                </div>
                <?php the_post_thumbnail('large', ['class' => 'img-fluid w-100', 'style' => 'max-height: 700px; object-fit: cover; object-position: center;']); ?>
                <div class="pt-5 px-4 px-md-6 pb-7">
                    <?php if (have_posts()): ?>

                        <?php while (have_posts()): the_post(); ?>

                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php else: ?>

                        <div class="empty">
                            <span class="empty-text text-center d-block">
                                <?php _e('There`\'s no posts to display', 'alex'); ?>
                            </span>
                        </div>

                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
