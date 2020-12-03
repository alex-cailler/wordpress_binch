<div class="col-sm-4 p-2">
    <article <?php post_class(['card shadow']); ?>>

        <?php the_post_thumbnail('medium', [
            'class' => 'card-img-top',
            'alt' => 'image',
            'style' => 'height: 200px; width: 100%; object-fit: cover; object-position: center;',
        ]); ?>
        <div class="card-body">

            <?php the_title('<h3 class="h3">', '</h3>'); ?>

            <?php the_excerpt(); ?>


            <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded">Voir</a>
        </div>

    </article>
</div>