<?php get_header() ?>

    <main id="main " <?php get_post_class('bg-lighter') ?> >

        <section class="py-9 bg-lighter">
            <div class="container-binch">
                <div class="pb-9">
                    <h1 class="text-size-45 font-weight-bold">Actualité</h1>
                    <p class="text-size-20">Découvrer les derniers articles, nouveauté et conseils</p>
                </div>
                <?php if (have_posts()): ?>
                    <?php $i = 0; ?>
                    <div class="row">
                        <?php while (have_posts()): the_post(); ?>

                            <?php if ($i == 0): ?>
                                <div class="col-12 mb-7">
                                    <div class="d-lg-flex rounded shadow overflow-hidden first-article" >
                                        <div class="h-100" style="flex: 1">
                                            <?php the_post_thumbnail('large', [
                                                'class' => 'img-fluid w-100',
                                                'style' => 'object-fit: cover; object-position: top;',
                                                'alt'   => 'binch - bar, article pour le blog'
                                            ]); ?>
                                        </div>
                                        <div class="w-100 px-5 px-md-6 pt-5 pb-6" style="flex: 1; min-width: 0">
                                            <h2 class="text-size-35 text-primary font-weight-bold">
                                                <?php the_title() ?>
                                            </h2>
                                            <p class="text-size-25 font-weight-light">
                                                <?php the_excerpt(); ?>
                                            </p>
                                            <p class="text-size-20 text-gray">
                                                <?php _e(date( 'j F Y', strtotime($post->post_date) ), 'binch') ?>
                                            </p>
                                            <div class="pt-5 flex-shrink-1">
                                                <a href="<?php the_permalink(); ?>" class="btn-gradient rounded-pill text-size-20 font-weight-bold px-4 py-2 px-md-6 py-md-2">Lire l'article</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="shadow rounded-lg overflow-hidden" style="min-height: 550px">
                                        <?php the_post_thumbnail('large', [
                                                'class' => 'img-fluid w-100',
                                                'style' => 'max-height: 250px; object-fit: cover; object-position: top;',
                                                'alt'   => 'binch - bar, article pour le blog'
                                        ]); ?>
                                        <div class="px-5 pb-6 pt-5">
                                            <h2 class="text-size-25 font-weight-bold text-primary">
                                                <?php the_title() ?>
                                            </h2>
                                            <?php the_excerpt(); ?>
                                            <div class="pt-5">
                                                <a href="<?php the_permalink(); ?>" class="btn-gradient rounded-pill text-size-15 font-weight-bold px-4 py-2">Lire l'article</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php $i++ ?>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <div class="empty">
                    <span class="empty-text">
                        <?php _e('Il n\'y a pas d\'articles à affiché'); ?>
                    </span>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>





