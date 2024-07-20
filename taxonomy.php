<?php
get_header();
?>
<ol class="breadcrumb" itemScope itemType="https://schema.org/BreadcrumbList">
    <li itemProp="itemListElement" itemScope itemType="http://schema.org/ListItem">
        <a class="" itemProp="item" title="Xem Phim" href="/">
                <span class="" itemProp="name">
                    <i class="fa fa-home"></i> Xem Phim
                </span>
        </a>
        <meta itemProp="position" content="1" />
    </li>

    <li class="" itemProp="itemListElement" itemScope="" itemType="http://schema.org/ListItem">
        <a itemProp="item" href="/" title="<?= single_tag_title(); ?>">
                <span class="breadcrumb_last" itemProp="name">
                   <?= single_tag_title(); ?>
                </span>
        </a>
        <meta itemProp="position" content="2" />
    </li>
</ol>
<div class="list-movie-filter SearchMovies" style="margin-bottom: 50px;">
    <div class="list-movie-filter-main">
        <form id="form-filter" class="form-inline" method="GET">
            <div class="list-movie-filter-item Form-Group">
                <label class="AAIco-widgets" for="filter-type">Định dạng</label>
                <div class="">
                    <select class="" id="type" name="filter[categories]" form="form-search">
                        <option value="">Mọi định dạng</option>
                        <?php $categories = get_terms(array('taxonomy' => 'ophim_categories', 'hide_empty' => false,));?>
                        <?php foreach($categories as $category) { ?>
                            <option value='<?php echo $category->name; ?>' ><?php echo $category->name ; ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="list-movie-filter-item Form-Group">
                <label for="filter-cat_id" class="AAIco-movie_creation">Thể loại</label>
                <div class="">
                    <select class="" id="category" name="filter[genres]" form="form-search">
                        <option value="">Tất cả thể loại</option>
                        <?php $genres = get_terms(array('taxonomy' => 'ophim_genres', 'hide_empty' => false,));?>
                        <?php foreach($genres as $genre) { ?>
                            <option value='<?php echo $genre->name; ?>' ><?php echo $genre->name ; ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="list-movie-filter-item Form-Group">
                <label for="filter-country" class="AAIco-public">Quốc gia</label>
                <div class="">
                    <select class="" name="filter[regions]" form="form-search">
                        <option value="">Tất cả quốc gia</option>
                        <?php $regions = get_terms(array('taxonomy' => 'ophim_regions', 'hide_empty' => false,));?>
                        <?php foreach($regions as $region) { ?>
                            <option value='<?php echo $region->name; ?>' ><?php echo $region->name ; ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="list-movie-filter-item Form-Group">
                <label for="filter-year" class="AAIco-date_range">Năm phát hành</label>
                <div class="">
                    <select class="" name="filter[years]" form="form-search">
                        <option value="">Tất cả năm</option>
                        <?php $years = get_terms(array('taxonomy' => 'ophim_years', 'hide_empty' => false,));?>
                        <?php foreach($years as $year) { ?>
                            <option value='<?php echo $year->name; ?>'><?php echo $year->name ; ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <button type="submit" form="form-search" class="btn btn-red btn-filter-movie"><span>Lọc</span></button>
            <div class="clear"></div>
        </form>
    </div>
</div>

<div class="TpRwCont">
    <main>
        <main>
            <section>
                <div class="Top">
                    <h2><?= single_tag_title(); ?></h2>
                </div>
                <?php
                if (have_posts()) { echo '  <ul class="MovieList Rows AX A06 B04 C03 E20">';
                    while (have_posts()) {
                        the_post();
                    include THEMETEMPLADE.'/section/section_thumb_item.php';
                    } wp_reset_postdata(); echo ' </ul>'; }
                else { ?>
                    <p>Rất tiếc, không có nội dung nào trùng khớp yêu cầu</p>
                <?php } ?>
            </section>
            <?php ophim_pagination(); ?>
        </main>
    </main>

    <?php get_sidebar('ophim'); ?>
</div>
<?php
get_footer();
?>
