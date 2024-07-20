<div class="MovieListSldCn">
    <div class="MovieListSld owl-carousel">
<?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++; ?>
            <div class="TPostMv">
                <div class="TPost D">
                    <a href="<?php the_permalink(); ?>">
                        <div class="Image">
                            <figure class="Objf">
                                <img class="TPostBg lazy" data-src="<?= op_get_poster_url() ?>"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjOHPmzH8ACDADZKt3GNsAAAAASUVORK5CYII="
                                    alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                            </figure>
                        </div>
                    </a>
                    <div class="TPMvCn">
                        <a href="<?php the_permalink(); ?>">
                            <div class="Title"><?php the_title(); ?></div>
                        </a>
                        <p class="Info">
                            <span class="Vote AAIco-star"><?php op_get_rating() ?></span>
                            <span class="Time AAIco-access_time"><?= op_get_episode() ?></span>
                            <span class="Date AAIco-date_range"><?= op_get_year() ?></span>
                            <span class="Qlty"><?= op_get_quality() ?> <?= op_get_lang() ?></span>
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
                                <i onclick="window.location.href='<?php the_permalink(); ?>'"
                                    class="Button STPa AAIco-more_horiz"></i>
                            </p>
                        </div>
                        <div class="Cast">
                            <?= op_get_actors(1) ?>
                            <button type="button" onclick="window.location.href='<?php the_permalink(); ?>'"
                                class="Button STPa AAIco-more_horiz"></button>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="Button TPlay AAIco-play_arrow">Xem
                            <strong>Phim</strong>
                        </a>
                    </div>
                </div>
            </div>
        <?  endwhile; ?>
    </div>
</div>
