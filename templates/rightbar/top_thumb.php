<section class="Wdgt">
    <div class="Title">
        <div class="View AAIco-remove_red_eye">&nbsp; &nbsp;<?= $title; ?></div>
    </div>
    <ul class="MovieList">
        <?php $loop =0; while ($query->have_posts()) : $query->the_post(); $loop++; ?>
            <li>
                <div class="TPost A">
                    <a rel="bookmark" href="<?php the_permalink(); ?>">
                        <span class="Top">#<?= $loop ?><i></i></span>
                        <div class="Image">
                            <figure class="Objf TpMvPlay AAIco-play_arrow"><img width="55" height="85"
                                    data-src="<?= op_get_thumb_url() ?>"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjOHPmzH8ACDADZKt3GNsAAAAASUVORK5CYII="
                                    class="lazy attachment-img-mov-sm size-img-mov-sm wp-post-image"
                                    alt="<?php the_title(); ?> -  <?= op_get_original_title() ?>"></figure>
                        </div>
                        <div class="Title"><?php the_title(); ?></div>
                    </a>
                    <p class="Info">
                        <span class="Vote AAIco-star"><?= op_get_rating() ?></span>
                        <span class="Date AAIco-date_range"> <?= op_get_year() ?></span>
                        <span class="View AAIco-remove_red_eye"> <?= op_get_post_view() ?></span>
                        <br />
                        <span class="Qlty"> <?= op_get_quality() ?> -  <?= op_get_lang() ?></span>
                    </p>
                </div>
            </li>
            <?php endwhile; ?>
    </ul>
</section>
