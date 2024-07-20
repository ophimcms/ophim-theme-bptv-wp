<ol class="breadcrumb" itemScope itemType="https://schema.org/BreadcrumbList">
    <li itemProp="itemListElement" itemScope itemType="http://schema.org/ListItem">
        <a class="" itemProp="item" title="Xem Phim" href="/">
                <span class="" itemProp="name">
                    <i class="fa fa-home"></i> Xem Phim
                </span>
        </a>
        <meta itemProp="position" content="1" />
    </li>
    <li class="active" itemProp="itemListElement" itemScope itemType="http://schema.org/ListItem">
            <span itemProp="item">
                <span class="breadcrumb_last" itemProp="name">
                    <?php the_title(); ?>
                </span>
                <meta itemProp="position" content="4" />
            </span>
    </li>
</ol>
<div class="TpRwCont">
    <main>
         <?php if (op_get_notify()) { ?>
        <div class="watch-notice">
            <div class="box-content alerts">
                <div class="alert alert-danger">
                    <strong>Thông báo: </strong><?= op_get_notify() ?>
                </div>
            </div>
        </div>
         <?php } ?>
       <?php if (op_get_showtime_movies()) { ?>
        <div class="watch-notice">
            <div class="box-content alerts">
                <div class="alert alert-success">
                    <strong>Lịch chiếu: </strong><?= op_get_showtime_movies() ?>
                </div>
            </div>
        </div>
       <?php } ?>
        <article class="TPost Single">
            <header>
                <h1 class="Title"><?php the_title(); ?></h1>
                <h2 class="SubTitle"><?= op_get_original_title() ?></h2>
                <div class="Image">
                    <figure class="Objf">
                        <img width="180" height="260" src="<?= op_get_thumb_url() ?>"
                             class="attachment-img-mov-md size-img-mov-md wp-post-image"
                             alt="<?php the_title(); ?> - <?= op_get_original_title() ?>" />
                    </figure>
                      <?php if (watchUrl()) { ?>
                    <a
                            href="<?= watchUrl() ?>"><i
                                class="TpMvPlay AAIco-play_arrow show"></i></a>
                    <a class="watch_button_more" title="<?php the_title(); ?> - <?= op_get_original_title() ?>"
                       href="<?= watchUrl() ?>">Xem
                        phim
                    </a>
                      <?php } ?>
                </div>
                <div class="Description">
                    <p><?=the_content();?></p>
                </div>
            </header>
            <footer class="ClFx">
                <div class="VotesCn">
                    <div class="Prct">
                        <div id="TPVotes" data-percent="<?= op_get_rating() *10 ?>">
                        </div>
                    </div>
                    <div class="post-ratings" itemscope itemtype="http://schema.org/Article">
                        <input id="hint_current" type="hidden" value="">
                        <input id="score_current" type="hidden"
                               value="<?= op_get_rating() ?>">
                        <div id="star" data-score="<?= op_get_rating() ?>"
                             style="cursor: pointer;"></div>
                        <br />
                        (<strong class="num-rating"><?= op_get_rating_count() ?></strong> lượt, đánh giá: <strong
                                id="average_score"><?= op_get_rating() ?></strong>
                        trên 10)<br />
                        <span class="post-ratings-text" id="hint"></span>
                    </div>
                    <div style="display: none;" itemprop="aggregateRating" itemscope
                         itemtype="http://schema.org/AggregateRating">
                        <span itemprop="ratingValue"><?= op_get_rating() ?></span>
                        <meta itemprop="ratingCount" content="<?= op_get_rating_count() ?>">
                        <meta itemprop="bestRating" content="10" />
                        <meta itemprop="worstRating" content="1" />
                    </div>
                </div>
                <p class="Info">
                    <span class="Time AAIco-access_time"><?= op_get_runtime() ?></span>
                    <span class="Date AAIco-date_range"><?= op_get_year() ?></span>
                    <span class="View AAIco-remove_red_eye"><?= op_get_post_view() ?> lượt xem</span>
                </p>
            </footer>
             <?php if (op_get_poster_url()) { ?>
            <div class="TPostBg Objf">
                <img class="TPostBg" src="<?= op_get_poster_url() ?>"
                     alt="<?php the_title(); ?> - <?= op_get_original_title() ?>">
            </div>
             <?php } ?>
        </article>
        <div class="MovieInfo TPost Single">
            <div class="MovieTabNav">
                <div class="Lnk on AAIco-description" data-Mvtab="MvTb-Info">Thông tin phim</div>

                <div class="Lnk AAIco-movie_filter" data-Mvtab="MvTb-Cast">Diễn viên</div>

                  <?php if (op_get_trailer_url()) { ?>
                <div class="Lnk AAIco-video_call" data-Mvtab="MvTb-Trailer">Trailer</div>
                  <?php } ?>
                <div class="Lnk AAIco-collections" data-Mvtab="MvTb-Image">Hình ảnh</div>
            </div>
            <div class="MvTbCn on anmt" id="MvTb-Info">
                <div class="mvici-left">
                    <ul class="InfoList">
                        <li class="AAIco-adjust"><strong>Trạng thái:</strong>
                            <?= op_get_status() ?>
                        </li>
                        <li class="AAIco-adjust"><strong>Thể loại:</strong>
                            <?= op_get_genres(', ') ?>
                        </li>
                        <li class="AAIco-adjust"><strong>Đạo diễn:</strong>
                            <?= op_get_directors(10,', ') ?>
                        </li>
                        <li class="AAIco-adjust"><strong>Quốc gia:</strong>
                            <?= op_get_regions() ?>
                        </li>
                    </ul>
                </div>
                <div class="mvici-right">
                    <ul class="InfoList">
                        <li class="AAIco-adjust"><strong>Thời lượng:</strong>
                            <?= op_get_runtime() ?>
                        </li>
                        <li class="AAIco-adjust"><strong>Tổng số tập:</strong>
                            <?= op_get_total_episode() ?>
                        </li>
                        <li class="AAIco-adjust"><strong>Độ phân giải:</strong> <span
                                    class="quality">   <?= op_get_quality() ?></span></li>
                        <li class="AAIco-adjust"><strong>Ngôn ngữ:</strong> <span
                                    class="imdb"><?= op_get_lang() ?></span>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="MvTbCn anmt" id="MvTb-Cast">
                <ul class="ListCast Rows AF A06 B03 C02 D20 E02">

                    <?= op_get_actors_custom() ?>
                </ul>
            </div>
            <?php if (op_get_trailer_url()) {
                    parse_str( parse_url( op_get_trailer_url(), PHP_URL_QUERY ), $my_array_of_vars );
                    $video_id = $my_array_of_vars['v'];

            ?>
            <div class="MvTbCn anmt clearfix" id="MvTb-Trailer">

                <div class="TPlayerCn BgA">
                    <div class="EcBgA">
                        <div class="TPlayer">
                            <div class="TPlayerTb Current clearfix" id="Opt1">

                                <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/<?= $video_id ?>"></iframe>
                            </div>
                            <span class="AAIco-lightbulb_outline lgtbx-lnk"></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php     } ?>
            <div class="MvTbCn anmt" id="MvTb-Image">
                <div class="ImageMovieList owl-carousel">
                    <div class="item active">
                        <?php if (op_get_poster_url()) { ?>
                        <center>
                            <img src="<?= op_get_poster_url() ?>" alt="Hình ảnh <?php the_title(); ?>"
                                 class="img-responsive">
                        </center>
                        <div class="carousel-caption"> Hình ảnh <?php the_title(); ?></div>
                        <?php     } ?>

                    </div>
                </div>
            </div>
            <div class="TPostBg Objf"></div>
        </div>

        <div class="Wdgt">
            <div class="Title">Bình luận</div>
            <div style="width: 100%; background-color: #fff">
                <div class="fb-comments w-full" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                 data-numposts="5" data-colorscheme="light" data-lazy="true">
            </div>
            </div>
        </div>
        <div class="Wdgt">
            <div class="Title">Có thể bạn muốn xem?</div>
            <div class="MovieListRelated owl-carousel">
                <?php
                $postType = 'ophim';
                $taxonomyName = 'ophim_genres';
                $taxonomy = get_the_terms(get_the_id(), $taxonomyName);
                if ($taxonomy) {
                    $category_ids = array();
                    foreach ($taxonomy as $individual_category) $category_ids[] = $individual_category->term_id;
                    $args = array('post_type' => $postType, 'post__not_in' => array(get_the_id()), 'posts_per_page' => 12, 'tax_query' => array(array('taxonomy' => $taxonomyName, 'field' => 'term_id', 'terms' => $category_ids,),));
                    $my_query = new wp_query($args);
                   
                    if ($my_query->have_posts()):
                        while ($my_query->have_posts()):$my_query->the_post(); ?>

                            <div class="TPostMv">
                                <div class="TPost B">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="Image">
                                            <figure class="Objf TpMvPlay AAIco-play_arrow"><img width="215" height="320"
                                                                                                src="<?= op_get_thumb_url() ?>"
                                                                                                class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                alt="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)"
                                                                                                title="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)" />
                                            </figure>
                                            <span class="mli-quality"><?= op_get_quality() ?></span>
                                            <div class="Title"><?php the_title(); ?></div>
                                        </div>
                                    </a>
                                </div>
                            </div>


                        <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                }
                ?>
            </div>
        </div>
        <div id="mv-keywords">
            <strong class="mr10">Từ khóa:</strong>
            <?= op_get_tags() ?>
        </div>
    </main>

    <?php get_sidebar('ophim'); ?>
</div>


<?php
add_action('wp_footer', function (){?>
    <script type="text/javascript">
        const URL_POST_RATING = '<?php echo admin_url('admin-ajax.php')?>';
        const POST_ID = '<?php echo get_the_ID(); ?>';
        const TEMPURL = '<?= get_template_directory_uri() ?>';
        var rated = false;
    </script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/film.notiny.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/jquery.raty.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/film.rating.js"></script>

<?php }) ?>