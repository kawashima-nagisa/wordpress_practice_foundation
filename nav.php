<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <?php
        //メニューIDを取得
        $menu_name = 'globalnav';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        //var_dump($menu);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        //var_dump($menu_items);

        ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php foreach ($menu_items as $item) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_attr($item->url); ?>">
                            <?php echo esc_html($item->title); ?>
                        </a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</nav>