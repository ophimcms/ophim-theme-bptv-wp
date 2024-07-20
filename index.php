<?php
get_header();
?>


<?php if ( is_active_sidebar('widget-slider-poster') ) {
    dynamic_sidebar( 'widget-slider-poster' );
} else {
    _e('This is widget poster. Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
<div class="TpRwCont">
    <main>
        <?php if ( is_active_sidebar('widget-area') ) {
            dynamic_sidebar( 'widget-area' );
        } else {
            _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
        }
        ?>
    </main>

    <?php get_sidebar('ophim'); ?>
</div>
<?php
get_footer();
?>
