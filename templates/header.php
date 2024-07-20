<style>
    #result{
        margin-top: 20px;
        background-color: #333333;
        list-style-type: none;
        width: 400px;
        position: absolute;
        top: 32px;
        z-index: 100;
        padding-left: 0;
    }
    .column {
        float: left;
        padding: 5px;
    }

    .left {
        text-align: center;
        width: 20%;
    }

    .right {
        width: 80%;
    }
    .rowsearch:after {
        content: "";
        display: table;
        clear: both;
    }
    .rowsearch:hover {
        background-color: #181717;
    }
</style>
<header class="Header MnBrCn BgA">
    <div class="MnBr EcBgA">
        <div class="Container">
            <figure class="Logo" style="max-width: 268px;">
                <a href="/" title="" rel="home">
                    <?php op_the_logo('max-width:50px') ?>
                </a>
            </figure> <span class="Button MenuBtn AAShwHdd-lnk CXHd" data-shwhdd="Tp-Wp"><i></i><i></i><i></i></span>
            <span class="MenuBtnClose AAShwHdd-lnk CXHd" data-shwhdd="Tp-Wp"></span>
            <div class="Rght BgA">
                <div class="Search">
                    <form method="GET" id="form-search" action="/" autocomplete="off">
                        <label class="Form-Icon">
                            <input type="text" name="s" placeholder="Tìm kiếm phim..." onkeyup="fetch()" id="query_search" value="<?php echo "$s"; ?>">
                            <button id="searchsubmit" type="submit">
                                <i class="fa-search"></i>
                            </button>
                        </label>
                        <div class="search-suggest" style="display: none;width: 100%"></div>
                    </form>
                    <div id="result"></div>
                </div>

                <nav class="Menu">
                    <ul>
                        <?php
                        $menu_items = wp_get_menu_array('primary-menu');
                        foreach ($menu_items as $key => $item) : ?>
                           <?php if (empty($item['children'])) { ?>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-490">
                                    <a href="<?= $item['url'] ?>"> <?= $item['title'] ?></a>
                                </li>
                                <?php } else { ?>
                                <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="<?= $item['url'] ?>"> <?= $item['title'] ?></a>
                                    <ul class="sub-menu">
                                <?php foreach ($item['children'] as $k => $child): ?>
                                        <li class="sub-menu-item"><a
                                                    href="<?= $child['url'] ?>"><?= $child['title'] ?></a></li>
                                <?php endforeach; ?>
                                    </ul>
                                </li>

                                <?php } ?>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
