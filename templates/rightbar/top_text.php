<section class="Wdgt">
    <div class="Title"><div class="Lnk AAIco-movie_filter">&nbsp; &nbsp;<?= $title; ?></div></div>
    <ul class="MovieList Newepisode">
        <?php $loop =0; while ($query->have_posts()) : $query->the_post(); $loop++; ?>
            <li>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <span><?php the_title(); ?></span><span><?= op_get_episode() ?></span>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>
</section>
