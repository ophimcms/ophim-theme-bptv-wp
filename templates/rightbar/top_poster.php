<section class="Wdgt" id="showChonLoc">
    <div class="Title">
        <div class="Lnk fa-film">&nbsp; &nbsp;<?= $title; ?></div>
    </div>
    <ul class="MovieList block-movie">
        <?php $loop =0; while ($query->have_posts()) : $query->the_post(); $loop++; ?>
            <li>
                <a title="<?php the_title(); ?> -  <?= op_get_original_title() ?>" href="<?php the_permalink(); ?>">
                    <img class="lazy" data-src="<?= op_get_poster_url() ?>"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjOHPmzH8ACDADZKt3GNsAAAAASUVORK5CYII="
                        alt="<?php the_title(); ?> -  <?= op_get_original_title() ?>" border="0">
                    <span>
                        <h3><?php the_title(); ?></h3>
                        <h4> <?= op_get_original_title() ?> (<?= op_get_year() ?>)</h4>
                    </span>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>
</section>
