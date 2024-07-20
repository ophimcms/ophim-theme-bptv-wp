<?php
get_header();
?>

<div class="breadcrumb block md:flex items-center container mx-auto mt-2 w-full line-clamp-1">
    <div class="ml-2 md:ml-0">
        <ol class="flex flex-wrap items-center gap-1" itemScope itemType="https://schema.org/BreadcrumbList">
            <li itemProp="itemListElement" itemScope itemType="http://schema.org/ListItem">
                <a class="flex items-center gap-x-1" itemProp="item" title="Xem phim" href="/">
                        <span class="flex items-center gap-x-1 text-main-primary hover:text-main-warning" itemProp="name">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                            </svg>
                            Xem phim
                        </span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                    <meta itemProp="position" content="1" />
                </a>
            </li>
            <li class="inline text-gray-400" itemprop="itemListElement" itemscope=""
                itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="" title="Tất cả phim">
                        <span itemprop="name">
                            Tất cả phim
                        </span>
                </a>
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>
</div>
<div class="w-full container mx-auto mt-2 bg-main-800/40">
    <div class="text-gray-50">
        <form id="form-filter" class="lg:flex flex-wrap gap-1 items-center">
            <div class="p-2 flex justify-between">
                Lọc Phim
            </div>
            <div class="p-2">
                <select name="filter[categories]" form="form-search" class="scroll bg-main-700 p-2 outline-none">
                    <option value="">Mọi định dạng</option>
                    <?php $categories = get_terms(array('taxonomy' => 'ophim_categories', 'hide_empty' => false,));?>
                    <?php foreach($categories as $category) { ?>
                        <option value='<?php echo $category->name; ?>' ><?php echo $category->name ; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="p-2">
                <select name="filter[genres]" form="form-search" class="scroll bg-main-700 p-2 outline-none">
                    <option value="">Tất cả thể loại</option>
                    <?php $genres = get_terms(array('taxonomy' => 'ophim_genres', 'hide_empty' => false,));?>
                    <?php foreach($genres as $genre) { ?>
                        <option value='<?php echo $genre->name; ?>' ><?php echo $genre->name ; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="p-2">
                <select name="filter[regions]" form="form-search" class="scroll bg-main-700 p-2 outline-none">
                    <option value="">Tất cả quốc gia</option>
                    <?php $regions = get_terms(array('taxonomy' => 'ophim_regions', 'hide_empty' => false,));?>
                    <?php foreach($regions as $region) { ?>
                        <option value='<?php echo $region->name; ?>' ><?php echo $region->name ; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="p-2">
                <select name="filter[years]" form="form-search" class="scroll bg-main-700 p-2 outline-none">
                    <option value="">Tất cả năm</option>
                    <?php $years = get_terms(array('taxonomy' => 'ophim_years', 'hide_empty' => false,));?>
                    <?php foreach($years as $year) { ?>
                        <option value='<?php echo $year->name; ?>'><?php echo $year->name ; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="p-2">
                <button type="submit" form="form-search"
                        class="w-content text-center bg-main-labelbgSecondary text-white hover:shadow-menu hover:bg-main-primary duration-150 p-1.5 overflow-hidden overflow-ellipsis whitespace-nowrap">
                    <span>Duyệt phim</span>
                </button>
            </div>
        </form>
    </div>
</div>

<div class="container mx-auto lg:flex px-2 md:px-0">
    <div class="lg:w-3/4 lg:pr-4">
        <section class="w-full mt-2">
            <div class="flex justify-between">
                <div class="py-2 w-max">
                    <h3
                            class="text-base md:text-2xl uppercase font-semibold text-transparent bg-clip-text bg-gradient-to-r from-[#7367F0] to-[#8e84fc]">
                        </h3>
                    <div class="w-full h-0.5 bg-main-indigo bg-gradient-to-r from-[#7367F0] to-[#8e84fc]"></div>
                </div>
            </div>

            <?php
            if (have_posts()) { echo ' <div
                    class="grid grid-flow-row grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-6 gap-2">';
                while (have_posts()) {
                    the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="overflow-hidden relative group"
                       title="<?php the_title(); ?>">
                        <img style="aspect-ratio: 256/340" data-src="<?= op_get_thumb_url() ?>"
                             alt="<?php the_title(); ?>"
                             class="group-hover:opacity-60 transition-all duration-500 transform group-hover:scale-110 lazyload" />
                        <span
                                class="absolute bottom-0 px-2 pb-2 pt-16 bg-gradient-to-t from-main-900 w-full text-main-warning">
                            <div class="font-bold overflow-hidden overflow-ellipsis whitespace-nowrap"><?php the_title(); ?>
                            </div>
                            <div class="text-sm text-gray-300 italic overflow-hidden overflow-ellipsis whitespace-nowrap">
                                <?= op_get_original_title() ?> (<?= op_get_year() ?>)
                            </div>
                        </span>
                        <span class="absolute top-0 left-0 p-0.5 bg-main-primary text-sm">
                            <?= op_get_episode() ?>
                        </span>
                        <div class="absolute hidden top-1/3 left-1/3 animate-pulse group-hover:block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-16 h-16 text-main-warning">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                            </svg>
                        </div>
                    </a>

                <?php } wp_reset_postdata(); echo '</div>'; }
            else { ?>
                <div class="flex flex-row flex-wrap flex-grow h-50 mt-10">
                    <p class="w-full text-center text-white">Rất tiếc, không có nội dung nào trùng khớp yêu cầu.</p>
                </div>
            <?php } ?>

            <?php ophim_pagination(); ?>

        </section>
    </div>
    <aside class="lg:w-1/4">
        <?php get_sidebar('ophim'); ?>
    </aside>
</div>
<?php
get_footer();
?>
