<li class="TPostMv">
    <article id="post-<?= get_the_ID(); ?>"
        class="TPost C post-<?= get_the_ID(); ?> post type-post status-publish format-standard has-post-thumbnail hentry">
        <a href="<?php the_permalink(); ?>">
            <div class="Image">
                <figure class="Objf TpMvPlay AAIco-play_arrow">
                    <img width="215" height="320" data-src="<?= op_get_poster_url() ?>"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjOHPmzH8ACDADZKt3GNsAAAAASUVORK5CYII="
                        class="lazy attachment-thumbnail size-thumbnail wp-post-image"
                        alt="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)"
                        title="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)" />
                </figure>
                <span
                    class="mli-quality"><?= op_get_quality() ?></span>
            </div>
            <h2 class="Title"><?php the_title(); ?></h2>
            <span class="Year"><?= op_get_original_title() ?></span>
        </a>
        <div class="TPMvCn anmt">
            <div class="Title"><?php the_title(); ?></div>
            <p class="Info">
                <span class="Vote AAIco-star"><?= op_get_rating() ?></span>
                <span class="Time AAIco-access_time"><?= op_get_runtime() ?></span>
                <span class="Date AAIco-date_range"><?= op_get_year() ?></span>
            </p>
            <div class="Description">
                <p><?php the_excerpt(); ?></p>
                <p class="Director AAIco-videocam">
                    <span>Đạo diễn:</span>
                    <?= op_get_directors(1) ?>
                </p>
                <p class="Genre AAIco-movie_creation">
                    <span>Thể loại:</span>
                    <?= op_get_genres() ?>
                </p>
                <p class="Actors AAIco-person">
                    <span>Diễn viên:</span>
                    <?= op_get_actors(1) ?> <i
                        class="Button STPa AAIco-more_horiz"></i>
                </p>
            </div>
        </div>
    </article>
</li>
