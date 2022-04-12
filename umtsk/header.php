<header class="header">
    <nav class="menu">
        <?php if (has_custom_logo()) {
            echo get_custom_logo();
        } ?>
        <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'list',
            'menu_id' => false,
            'echo' => true,
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ]); ?>
        <!-- <ul class="list">
            <li class="list-item">
                <a class="list-item__link" href="#" data-hover="Раздел на реконструкции">
                    Услуги
                </a>
            </li>
            <li class="list-item">
                <a class="list-item__link" href="#" data-hover="Раздел на реконструкции">
                    Портфолио
                </a>
            </li>
            <li class="list-item">
                <a class="list-item__link" href="#" data-hover="Раздел на реконструкции">
                    Блог
                </a>
            </li>
            <li class="list-item">
                <a class="list-item__link" href="#" data-hover="Раздел на реконструкции">
                    Юмор
                </a>
            </li>
            <li class="list-item">
                <a class="list-item__link" href="#" data-hover="Раздел на реконструкции">
                    Контакты
                </a>
            </li>
        </ul> -->
    </nav>
</header>