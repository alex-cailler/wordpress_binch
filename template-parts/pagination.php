    <nav aria-label="Pagination" class="mt-4">

        <ul class="pagination">

            <?php $pages = paginate_links(['type' => 'array']);
                foreach ($pages as $page):
            ?>
                <?php
                    $active = strpos($page, 'current') !== false;
                    $class = 'page-item';
                    if ($active)
                    {
                        $class .= ' active';
                    }
                ?>
                <li class="<?= $class ?>">
                    <?= str_replace('page-numbers', 'page-link', $page) ?>
                </li>
            <?php endforeach; ?>
        </ul>

    </nav>

<?php
