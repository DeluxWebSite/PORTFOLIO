<?php get_header();?>
    <div class="bread-crumbs container">
        Главная
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-arrow-rigth-black.svg" alt="" />
        Блог
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-arrow-rigth-black.svg" alt="" />
        <span>Декабрь-Пик продаж косметических средств</span>
    </div>
    <!-- main -->

    <div class="main-banner">
        <div class="main-banner__wrap-img">
            <img class="main-banner__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/main-banner.png" alt="Косметические товары"
                srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/main-banner-2x.png 2x" />
        </div>
        <div class="banner-description container">
            <h1 class="banner-description__title">
                Декабрь-Пик продаж косметических средств
            </h1>
            <br />
            <p class="description__text">
                По данным исследований аналитических агентств косметические средства
                чаще всего покупают в декабре. Лидерами продаж товаров категории
                <a href="#">«Косметика»</a>
                являются Москва и Санкт-Петербург.
            </p>
            <br />
            <p class="description__text">
                Доля их продаж относительно других городов России 27,2% в товарных
                единицах и 26,5% продаж в рублях. Среди регионов лидирующие позиции
                занимают Краснодар (2,9%), Челябинск(1,8%) и Екатеринбург (1,8%) в
                индексе относительного потребления косметики в штуках.
            </p>
        </div>
    </div>

    <div class="banner-skincare">
        <div class="skincare-description container">
            <p class="description__text">
                По данным 2020-2021 года снижение интереса к товарам категории
                наблюдается в сентябре, январе и мае-июне. Весной 2021 года также
                наблюдалось небольшое увеличение объема продаж.
            </p>
            <br />
            <p class="description__text">
                В большинстве исследуемых городов в октябре и декабре 2020 г.
                наблюдается заметное повышение доли предоплаченных заказов. Исключения
                - Красноярск, Новосибирск, Омск. Среднегодовая доля предоплаченных
                заказов для категории «Косметика» в исследуемых городах имеет разброс
                от 43 % до 54%.
            </p>
            <br />
            <a href="#" class="">
                См.подробнее данные Аналитики «Data Insight»
            </a>
        </div>
        <div class="banner-skincare__wrap-img">
            <img class="banner-skincare__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-skincare.png" alt="Косметические товары"
                srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-skincare-2x.png 2x" />
        </div>
    </div>

    <!-- end main -->
    <div class="back-to-list container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-arrow-left.svg" alt="" />
        Назад к списку
    </div>
   <?php get_footer(); ?>