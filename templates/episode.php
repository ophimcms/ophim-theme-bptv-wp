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

                    <ul class="ListPOpt">
                        <li>
                            <a title="Chia sẻ qua Facebook" rel="nofollow"
                               onclick="window.open ('http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>', 'Facebook', 'toolbar=0, status=0, width=650, height=450');"
                               href="javascript: void(0);" class="Fcb fa-facebook"></a>
                        </li>
                        <li>
                            <a title="Chia sẻ qua Twitter" rel="nofollow"
                               onclick="window.open ('http://twitter.com/intent/tweet?status=<?php the_title(); ?>+<?php the_permalink(); ?>', 'Twitter', 'toolbar=0, status=0, width=650, height=450');"
                               href="javascript: void(0);" class="Twt fa-twitter"></a>
                        </li>
                        <li>
                            <a title="Chia sẻ qua Google" rel="nofollow"
                               onclick="window.open ('https://plus.google.com/share?url=<?php the_permalink(); ?>', 'Google', 'toolbar=0, status=0, width=650, height=450');"
                               href="javascript: void(0);" class="Ggl fa-google-plus"></a>
                        </li>
                    </ul>
                </div>
                <div class="Description">
                    <p><?=the_content();?></p>
                </div>
            </header>
            <footer class="ClFx">
                <div class="VotesCn">
                    <div class="Prct">
                        <div id="TPVotes" data-percent="<?= op_get_rating() ?>">
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

        <div id="watch-block">
            <style>
                .jwplayer.jw-flag-aspect-mode {
                    height: 100% !important;
                }
            </style>
            <div class="media-player uniad-player" id="media-player-box">
                <div id="media-player" style="width: 100%;height: 100%;background:#1D1D1D;text-align: center">
                    <p style="height: 300px">Đang tải, đợi tí nhé ...</p>
                </div>
                <div id="player-loading" class="player-loading">
                    <div class="status"></div>
                </div>
                <span class="AAIco-input btn-re-expand" id="btn-re-expand"></span>
            </div>
            <div class="MovieTabNav ControlPlayer">
                <div class="Lnk AAIco-lightbulb_outline" id="btn-light" title="Tắt đèn nền">Tắt đèn</div>
                <div class="Lnk AAIco-launch" id="btn-expand"><span id="expand-status">Phóng to</span></div>
                <div class="Lnk AAIco-error" id="btn-toggle-error" title="Báo lỗi cho admin!">Báo lỗi</div>
            </div>
        </div>

        <div id="change-server">
            <center>
                <ul class="server-list">
                    <li class="backup-server"> <span class="server-title">Đổi Sever</span>
                        <ul class="list-episode">
                            <li class="episode">

                                <a data-id="<?= episodeName() ?>" data-link="<?= m3u8EpisodeUrl() ?>"
                                   data-type="m3u8" onclick="chooseStreamingServer(this)"
                                   class="streaming-server btn-link-backup btn-episode black episode-link">VIP
                                    #1</a>

                                <a data-id="<?= episodeName() ?>" data-link="<?= embedEpisodeUrl() ?>"
                                   data-type="embed" onclick="chooseStreamingServer(this)"
                                   class="streaming-server btn-link-backup btn-episode black episode-link">VIP
                                    #2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </center>
        </div>

        <div class="Wdgt list-server" id="list-server">
               <?php foreach (episodeList() as $key => $server) { ?>
            <div class="server clearfix server-group">
                <h3 class="server-name"> <?= $server['server_name'] ?> </h3>
                <ul class="row list-episode">

                    <?php foreach ($server['server_data'] as $list) {
                        $current = '';
                        if (slugify($list['name']) == episodeName()&& episodeSV() == $key) {
                            $current = 'active';
                        }
                        echo '
                                            <li class="episode col-xs-3 col-sm-2 col-lg-1"><a class="btn-episode episode-link btn3d black' . $current . '" href="' . hrefEpisode($list["name"],$key) . '"
                                              >
                                                ' . $list['name'] . '
                                            </a>  </li>
                                        ';
                    } ?>

                </ul>
            </div>
               <?php } ?>
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
add_action('wp_footer', function () {?>
    <script src="<?= get_template_directory_uri() ?>/assets/player/js/p2p-media-loader-core.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/player/js/p2p-media-loader-hlsjs.min.js"></script>
    <?php op_jwpayer_js(); ?>

    <script>
        $(document).ready(function() {
            $('html, body').animate({
                scrollTop: $('#media-player-box').offset().top
            }, 'slow');
        });
    </script>

    <script>
        var episode_id = '<?= episodeName() ?>';
        const wrapper = document.getElementById('media-player');
        const vastAds = "<?= get_option('ophim_jwplayer_advertising_file') ?>";

        function chooseStreamingServer(el) {
            const type = el.dataset.type;
            const link = el.dataset.link.replace(/^http:\/\//i, 'https://');
            const id = el.dataset.id;

            episode_id = id;


            Array.from(document.getElementsByClassName('streaming-server')).forEach(server => {
                server.classList.remove('active');
            })
            el.classList.add('active');

            renderPlayer(type, link, id);
        }

        function renderPlayer(type, link, id) {
            if (type == 'embed') {
                if (vastAds) {
                    wrapper.innerHTML = `<div id="fake_jwplayer"></div>`;
                    const fake_player = jwplayer("fake_jwplayer");
                    const objSetupFake = {
                        key: "<?= get_option('ophim_jwplayer_license', 'ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc=') ?>",
                        aspectratio: "16:9",
                        width: "100%",
                        file: "<?= get_template_directory_uri() ?>/assets/player/1s_blank.mp4",
                        volume: 100,
                        mute: false,
                        autostart: true,
                        advertising: {
                            tag: "<?= get_option('ophim_jwplayer_advertising_file') ?>",
                            client: "vast",
                            vpaidmode: "insecure",
                            skipoffset: <?= get_option('ophim_jwplayer_advertising_skipoffset') ?:  5 ?>, // Bỏ qua quảng cáo trong vòng 5 giây
                            skipmessage: "Bỏ qua sau xx giây",
                            skiptext: "Bỏ qua"
                        }
                    };
                    fake_player.setup(objSetupFake);
                    fake_player.on('complete', function(event) {
                        $("#fake_jwplayer").remove();
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                        fake_player.remove();
                    });

                    fake_player.on('adSkipped', function(event) {
                        $("#fake_jwplayer").remove();
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                        fake_player.remove();
                    });

                    fake_player.on('adComplete', function(event) {
                        $("#fake_jwplayer").remove();
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                        fake_player.remove();
                    });
                } else {
                    if (wrapper) {
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                    }
                }
                return;
            }

            if (type == 'm3u8' || type == 'mp4') {
                wrapper.innerHTML = `<div id="jwplayer"></div>`;
                const player = jwplayer("jwplayer");
                const objSetup = {
                    key: "<?= get_option('ophim_jwplayer_license', 'ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc=') ?>",
                    aspectratio: "16:9",
                    width: "100%",
                    image: "<?= op_get_poster_url() ?>",
                    file: link,
                    playbackRateControls: true,
                    playbackRates: [0.25, 0.75, 1, 1.25],
                    sharing: {
                        sites: [
                            "reddit",
                            "facebook",
                            "twitter",
                            "googleplus",
                            "email",
                            "linkedin",
                        ],
                    },
                    volume: 100,
                    mute: false,
                    autostart: true,
                    logo: {
                        file: "<?= get_option('ophim_jwplayer_logo_file') ?>",
                        link: "<?= get_option('ophim_jwplayer_logo_link') ?>",
                        position: "<?= get_option('ophim_jwplayer_logo_position') ?>",
                    },
                    advertising: {
                        tag: "<?= get_option('ophim_jwplayer_advertising_file') ?>",
                        client: "vast",
                        vpaidmode: "insecure",
                        skipoffset: <?= get_option('ophim_jwplayer_advertising_skipoffset') ?:  5 ?>, // Bỏ qua quảng cáo trong vòng 5 giây
                        skipmessage: "Bỏ qua sau xx giây",
                        skiptext: "Bỏ qua"
                    }
                };

                if (type == 'm3u8') {
                    const segments_in_queue = 50;

                    var engine_config = {
                        debug: !1,
                        segments: {
                            forwardSegmentCount: 50,
                        },
                        loader: {
                            cachedSegmentExpiration: 864e5,
                            cachedSegmentsCount: 1e3,
                            requiredSegmentsPriority: segments_in_queue,
                            httpDownloadMaxPriority: 9,
                            httpDownloadProbability: 0.06,
                            httpDownloadProbabilityInterval: 1e3,
                            httpDownloadProbabilitySkipIfNoPeers: !0,
                            p2pDownloadMaxPriority: 50,
                            httpFailedSegmentTimeout: 500,
                            simultaneousP2PDownloads: 20,
                            simultaneousHttpDownloads: 2,
                            // httpDownloadInitialTimeout: 12e4,
                            // httpDownloadInitialTimeoutPerSegment: 17e3,
                            httpDownloadInitialTimeout: 0,
                            httpDownloadInitialTimeoutPerSegment: 17e3,
                            httpUseRanges: !0,
                            maxBufferLength: 300,
                            // useP2P: false,
                        },
                    };
                    if (Hls.isSupported() && p2pml.hlsjs.Engine.isSupported()) {
                        var engine = new p2pml.hlsjs.Engine(engine_config);
                        player.setup(objSetup);
                        jwplayer_hls_provider.attach();
                        p2pml.hlsjs.initJwPlayer(player, {
                            liveSyncDurationCount: segments_in_queue, // To have at least 7 segments in queue
                            maxBufferLength: 300,
                            loader: engine.createLoaderClass(),
                        });
                    } else {
                        player.setup(objSetup);
                    }
                } else {
                    player.setup(objSetup);
                }


                const resumeData = 'OPCMS-PlayerPosition-' + id;
                player.on('ready', function() {
                    if (typeof(Storage) !== 'undefined') {
                        if (localStorage[resumeData] == '' || localStorage[resumeData] == 'undefined') {
                            console.log("No cookie for position found");
                            var currentPosition = 0;
                        } else {
                            if (localStorage[resumeData] == "null") {
                                localStorage[resumeData] = 0;
                            } else {
                                var currentPosition = localStorage[resumeData];
                            }
                            console.log("Position cookie found: " + localStorage[resumeData]);
                        }
                        player.once('play', function() {
                            console.log('Checking position cookie!');
                            console.log(Math.abs(player.getDuration() - currentPosition));
                            if (currentPosition > 180 && Math.abs(player.getDuration() - currentPosition) >
                                5) {
                                player.seek(currentPosition);
                            }
                        });
                        window.onunload = function() {
                            localStorage[resumeData] = player.getPosition();
                        }
                    } else {
                        console.log('Your browser is too old!');
                    }
                });

                player.on('complete', function() {
                    <?php if(nextEpisodeUrl()){ ?>
                    window.location.href = "<?= nextEpisodeUrl() ?>";
                    <?php }?>
                    if (typeof(Storage) !== 'undefined') {
                        localStorage.removeItem(resumeData);
                    } else {
                        console.log('Your browser is too old!');
                    }
                })

                function formatSeconds(seconds) {
                    var date = new Date(1970, 0, 1);
                    date.setSeconds(seconds);
                    return date.toTimeString().replace(/.*(\d{2}:\d{2}:\d{2}).*/, "$1");
                }
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const episode = '<?= episodeName() ?>';
            let playing = document.querySelector(`[data-id="${episode}"]`);
            if (playing) {
                playing.click();
                return;
            }

            const servers = document.getElementsByClassName('streaming-server');
            if (servers[0]) {
                servers[0].click();
            }
        });
    </script>

    <script type="text/javascript">
        const URL_POST_RATING = '<?php echo admin_url('admin-ajax.php')?>';
        const URL_POST_REPORT_ERROR  = '<?php echo admin_url('admin-ajax.php')?>';
        const POST_ID = '<?php echo get_the_ID(); ?>';
        const TEMPURL = '<?= get_template_directory_uri() ?>';
        var rated = false;
    </script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/film.notiny.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/jquery.raty.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/film.rating.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/watch.js"></script>
<?php }) ?>