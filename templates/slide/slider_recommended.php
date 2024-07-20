<div class="MovieListTopCn">
    <div class="MovieListTop owl-carousel">
        <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++ ?>
        <li class="TPostMv">
            <article id="post-<?= $key ?>"
                     class="TPost C post-<?= $key ?> post type-post status-publish format-standard has-post-thumbnail hentry">
                <a href="<?php the_permalink(); ?>">
                    <div class="Image">
                        <figure class="Objf TpMvPlay AAIco-play_arrow"><img width="215" height="320"
                                                                            src="<?= op_get_thumb_url() ?>"
                                                                            class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                            alt="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)"
                                                                            title="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)" />
                        </figure>
                        <span class="mli-quality">
                                    <?= op_get_quality() ?> <?= op_get_lang() ?>
                                </span>
                    </div>
                    <h2 class="Title"><?php the_title(); ?></h2> <span class="Year"><?= op_get_original_title() ?>
                                (<?= op_get_year() ?>)
                            </span>
                </a>
            </article>
        </li>
        <?php endwhile; ?>
    </div>
</div>