<?php

function add_theme_widgets() {
    $activate = array(
        'widget-footer' => array(
            'wg_footer-0',
        )
    );
    update_option('widget_wg_footer', array(
        0 => array('footer' => '<div class="MnBrCn BgA">
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
                    </p>')
    ));
    update_option('sidebars_widgets',  $activate);

}

add_action('after_switch_theme', 'add_theme_widgets', 10, 2);