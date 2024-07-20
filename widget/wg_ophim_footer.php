<?php
class WG_oPhim_Footer extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'wg_footer', // Base ID
            __( 'Ophim Footer', 'ophim' ), // Name
            array( 'description' => __( 'Mẫu footer', 'ophim' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract($args);
        ob_start();
        echo $instance['footer'] ?? '';
        echo $after_widget;
        $html = ob_get_contents();
        ob_end_clean();
        echo $html;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    function form($instance)
    {
        $instance = wp_parse_args( (array) $instance, array(
            'title' 	=> '',
            'slug' 	=> '#',
            'postnum' 	=> 5,
            'style'		=> '1',
            'status'		=> 'all',
            'orderby'		=> 'new',
            'categories'		=> 'all',
            'actors'		=> 'all',
            'directors'		=> 'all',
            'genres'		=> 'all',
            'regions'		=> 'all',
            'years'		=> 'all',
        ) );
        extract($instance);

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('footer'); ?>"><?php _e('Footer', 'ophim') ?></label>
            <br />
            <textarea class="widefat" rows="10" id="<?php echo $this->get_field_id('footer'); ?>" name="<?php echo $this->get_field_name('footer'); ?>"  ><?php if(isset($instance['footer']) && $instance['footer']){ echo $instance['footer'];}else{ ?> <div class="MnBrCn BgA">
                    <div class="MnBr EcBgA">
                    <div class="Container">
                    <figure class="Logo">
                    <a href="/"
                    title="BlogPhim | Phim Mới | Xem Phim online | Phim HD | Phim Hay Vietsub Thuyết Minh"
                    rel="home">
                    <img title="BlogPhim | Phim Mới | Xem Phim online | Phim HD | Phim Hay Vietsub Thuyết Minh"
                    src="/wp-content/themes/ophim-bptv/assets/images/icon.png"
                    alt="BlogPhim | Phim Mới | Xem Phim online | Phim HD | Phim Hay Vietsub Thuyết Minh">
                    </a>
                    </figure>
                    <div class="Rght">
                    <nav class="Menu">
                    <ul>
                    <li
                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home menu-item-490">
                    <a href="/">XEM PHIM</a>
                    </li>

                    </ul>
                    </nav>
                    <ul class="ListSocial">

                    <li>
                    <a href="javascript:void(0)" class="Up AAIco-arrow_upward" title="Cuộn lên trên"></a>
                    </li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="WebDescription">
                    Phim Chiếu Rạp | <a href="#" class="z-link" target="blank"
                    title="mPhimMoi | Xem Phim Online | Phim Hay | Phim Mới">Phim Mới</a>
                    <br>
                    <a href="#" tag="" title="" target="_blank">Text Link</a>,
                    <a href="#" tag="" title="" target="_blank">Text Link</a>,
                    <a href="#" tag="" title="" target="_blank">Text Link</a>,
                    <a href="#" tag="" title="" target="_blank">Text Link</a>,
                    </div>
                    <p class="Copy">
                    Copyright ® 2021. All Rights Reserved...
                    </p><?php } ?></textarea>
        </p>

        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['footer'] = $new_instance['footer'];
        return $instance;
    }

}
function register_new_widget_Footer() {
    register_widget( 'WG_oPhim_Footer' );
}
add_action( 'widgets_init', 'register_new_widget_Footer' );
