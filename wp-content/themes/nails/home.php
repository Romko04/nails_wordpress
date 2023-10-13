<?php
/*
    Template Name: home
     */
?>
<?php
get_header();
?>
<main class="main">
    <section class="banner">
        <div class="container banner__container">
            <div class="banner__content-left">
                <h1 class="banner__title">
                    <?php the_field('title_banner') ?>
                </h1>
                <p class="banner__subtext">
                    <?php the_field('sub_title') ?>
                </p>
                <div class="banner__content-left__bottom">
                    <span class="banner__programs-title">Програма <b><?php the_field('programm_title') ?></b></span>
                    <span class="banner__text-start">Старт: <?php the_field('banner_start') ?></span>
                </div>
            </div>
            <div class="banner__content-right">
                <img class="banner__content-img" src="<?php the_field('photo_banner') ?>" alt="bannerImg">
                <a class="banner__btn-link anchor--additional" href="#price">
                    <button class="buy__btn banner__buy-btn ">Детальніше</button>
                </a>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container about__container">
            <h1 class="title  title__shine title--mobile">
                Про автора курсу
            </h1>
            <div class="about__content-left">
                <img class="about__content-img" src="<?php the_field('about_img') ?>" alt="aboutImg">
            </div>
            <div class="about__content-right">
                <h1 class="title about__title title__shine">
                    <?php the_field('about_title') ?>
                </h1>
                <ul class="about__list">
                    <?php
                    global $post;
                    $myposts = get_posts([
                        'post_type' => "about",
                        'orderby' => 'date',
                        'order' => isset($_POST['date']) && $_POST['date'] === 'DESC' ? 'DESC' : 'ASC', // Вибір напрямку сортування
                        'numberposts' => -1,
                        'offset' => -1,
                        'category' => -1
                    ]);

                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                    ?>
                            <li class="about__list-item">
                                <?php the_field('about_title') ?>
                            </li>
                    <?php
                        }
                        wp_reset_postdata(); // Сбрасываем $post
                    }
                    ?>
                </ul>
                <div class="about__content-right__bottom">
                        <?php the_field('about_text_bottom')?>
                </div>
            </div>
        </div>
    </section>
    <section id="who" class="who">
        <div class="container who__container">
            <div class="who__content-left">
                <div class="title__wrapper who__title__wrapper">
                    <h2 class="title who__title title--shine__two">
                        <?php the_field('who_title') ?>
                    </h2>
                </div>
                <ul class="who__list">
                    <?php
                    global $post;
                    $myposts = get_posts([
                        'post_type' => "who",
                        'orderby' => 'date',
                        'order' => isset($_POST['date']) && $_POST['date'] === 'DESC' ? 'DESC' : 'ASC', // Вибір напрямку сортування
                        'numberposts' => -1,
                        'offset' => -1,
                        'category' => -1
                    ]);

                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                    ?>
                            <li class="who__list-item">
                                <?php the_field('who_value') ?>
                            </li>
                    <?php
                        }
                        wp_reset_postdata(); // Сбрасываем $post
                    }
                    ?>
                </ul>
                <div class="who__link-wrapper">
                    <a class="who__link anchor--additional" href="#price">
                        <button class="buy__btn who__buy-btn">ХОЧУ ПОЧАТИ</button>
                    </a>
                </div>
            </div>
            <div class="who__content-right">
                <img class="about__content-img" src="<?php the_field('who_img') ?>" alt="whoImg">
            </div>
        </div>
    </section>
    <section id="moduls" class="moduls">
        <div class="container moduls__container">
            <h2 class="title moduls__title title__shine">Програма курсу</h2>
            <div class="moduls__accordeon">
                <?php
                global $post;
                $myposts = get_posts([
                    'post_type' => "programms",
                    'orderby' => 'date',
                    'order' => isset($_POST['date']) && $_POST['date'] === 'DESC' ? 'DESC' : 'ASC', // Вибір напрямку сортування
                    'numberposts' => -1,
                    'offset' => -1,
                    'category' => -1
                ]);

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                ?>
                        <div class="accordeon">
                            <button class="moduls__accordeon-btn">
                                <?php the_field('number_module') ?>: <b>“<?php the_field('modul_title') ?>”</b>
                            </button>
                            <div class="panel">
                                <div class="panel__content-top">
                                    <?php the_field('modul_lessons') ?>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                    wp_reset_postdata(); // Сбрасываем $post
                }
                ?>
            </div>
        </div>
    </section>
    <section id="cases" class="cases">
        <div class="container cases__container">
            <div class="title__wrapper">
                <h2 class="title cases__title title__shine-left">Відгуки</h2>
            </div>
            <div class="swiper__container">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php
                        global $post;
                        $myposts = get_posts([
                            'post_type' => "cases",
                            'orderby' => 'modified',
                            'numberposts' => -1,
                            'offset' => -1,
                            'category' => -1
                        ]);
                        if ($myposts) {
                            foreach ($myposts as $post) {
                                setup_postdata($post);
                        ?>
                                <div class="swiper-slide">
                                    <div class="swiper-slide__content">
                                        <div class="swiper__content-top">
                                            <div class="image-container"></div>
                                            <img class="swiper__content-img" src="<?php the_field('case_img') ?>" alt="image">
                                            <div class="swiper__content-top_text">
                                                <span class="swiper__content-name"><?php the_field('case_name') ?></span>
                                                <span class="swiper__content-location">
                                                    <?php the_field('city_case') ?>
                                                </span>
                                                <span class="swiper__content-instagram">
                                                    <?php the_field('case_instagram') ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="swiper__content-bottom">
                                            <p class="swiper__content-text">
                                                <?php the_field('case_testimonial') ?>
                                            </p>
                                            <div class="swiper__content-read--wrapper">
                                                <button class="swiper__content-read">ДЕТАЛЬНІШЕ ПРО КЕЙС</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                            wp_reset_postdata(); // Сбрасываем $post
                        }
                        ?>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <section id="price" class="price">
        <div class="container price__container">
            <div class="title__wrapper">
                <h2 class="title price__title title__shine">
                    Тарифи
                </h2>
            </div>
            <ul class="price__list">
                <?php
                global $post;
                $myposts = get_posts([
                    'post_type' => "price",
                    'orderby' => 'date',
                    'order' => isset($_POST['date']) && $_POST['date'] === 'DESC' ? 'DESC' : 'ASC', // Вибір напрямку сортування
                    'numberposts' => -1,
                    'offset' => -1,
                    'category' => -1
                ]);

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                ?>
                        <li class="price__list-item">
                            <div class="price__list-item__title">
                                <h4 class="price__list-item__title-value">
                                    <?php the_field('price_title') ?>
                                </h4>
                                <span class="price__list-item__title-subtext"><?php the_field('price_subtitle') ?></span>
                            </div>
                            <?php the_field('about_price') ?>
                            <span class="price__value">
                                <?php the_field('price_value') ?>
                            </span>
                            <span class="price__value-full">
                                <?php the_field('price_sale') ?>
                            </span>
                            <div class="price__buttons">
                                <a class="price__button-link" href="#">
                                    <button class="price__button">КУПИТИ</button>
                                </a>
                                <a class="price__button-link" href="#">
                                    <button class="price__button">РОЗСТРОЧКА</button>
                                </a>
                                <a class="price__button-link" href="#">
                                    <button class="price__button">ЗАБРОНЮВАТИ</button>
                                </a>
                            </div>
                        </li>
                <?php
                    }
                    wp_reset_postdata(); // Сбрасываем $post
                }
                ?>
            </ul>
        </div>
    </section>
    <section class="additional">
        <div class="title__wrapper">
            <h2 class="title">
                Додатково
            </h2>
        </div>
        <div class="container additional__container">
            <ul class="additional__list">
                <li class="additional__list-item">
                    <b>1.</b> До кожного тарифу після проходження навчання і заліку тестових завдань, видається <b>сертифікат</b> інструктора міжнародного зразку
                </li>
                <li class="additional__list-item">
                    <b>2.</b> Також надаються <b>методичні посібники</b> для ваших учнів для базових курсів, курсів підвищення кваліфікації, курсів по дизайнам які ви можете використовувати у вашій школі.
                </li>
            </ul>
        </div>
    </section>
</main>
<?php
get_footer();
?>