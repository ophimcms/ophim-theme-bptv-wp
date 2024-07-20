<section>
    <div class="Top">
        <h2>
            <a href="<?= $slug; ?>"><?= $title; ?> <i class=" fa fa-angle-right"></i></a>
        </h2>
    </div>
    <ul class="MovieList Rows AX A06 B04 C03 E20">
        <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++;
        include THEMETEMPLADE.'/section/section_thumb_item.php';
        endwhile; ?>
    </ul>
</section>
