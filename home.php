<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
            <main class="main">
                <section class="promo">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper__item-image">
                                    <picture>
                                        <source
                                            srcset="
                                                <?php bloginfo('template_url'); ?>/assets/img/promo/slider_large01.png
                                            "
                                            media="(min-width: 768px)"
                                        >
                                        <source
                                            srcset="<?php bloginfo('template_url'); ?>/assets/img/promo/slider_big01.png"
                                            media="(min-width: 1024px)"
                                        >
                                        <img
                                            src="<?php bloginfo('template_url'); ?>/assets<?php bloginfo('template_url'); ?>/assets/img/promo/slider_small01.png"
                                            alt="MDN"
                                        >
                                    </picture>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="swiper__item-image">
                                    <picture>
                                        <source
                                            srcset="
                                                <?php bloginfo('template_url'); ?>/assets/img/promo/slider_large02.png
                                            "
                                            media="(min-width: 768px)"
                                        >
                                        <source
                                            srcset="<?php bloginfo('template_url'); ?>/assets/img/promo/slider_big02.png"
                                            media="(min-width: 1024px)"
                                        >
                                        <img
                                            src="<?php bloginfo('template_url'); ?>/assets/img/promo/slider_small02.png"
                                            alt="MDN"
                                        >
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__item-image">
                                    <picture>
                                        <source
                                            srcset="
                                                <?php bloginfo('template_url'); ?>/assets/img/promo/slider_large03.png
                                            "
                                            media="(min-width: 768px)"
                                        >
                                        <source
                                            srcset="<?php bloginfo('template_url'); ?>/assets/img/promo/slider_big03.png"
                                            media="(min-width: 1024px)"
                                        >
                                        <img
                                            src="<?php bloginfo('template_url'); ?>/assets/img/promo/slider_small03.png"
                                            alt="MDN"
                                        >
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="promo__info">
                        <h2 class="promo__title">
                            Доступно на всех платформах
                        </h2>
                        <a class="btn" href="#">Узнать больше</a>
                    </div>
                </section>
                <section class="nightSity">
                    <div class="container">
                        <div class="nightSity__body">
                            <div class="nightSity__info">
                                <h2>Найт-Сити изменит тебя навсегда!</h2>
                                <p>
                                    Cyberpunk 2077 — приключенческая ролевая
                                    игра, действие которой происходит в
                                    мегаполисе Найт-Сити, где власть, роскошь и
                                    модификации тела ценятся выше всего. Ты
                                    играешь за V, наёмника в поисках устройства,
                                    позволяющего обрести бессмертие. Ты сможешь
                                    менять киберимпланты, навыки и стиль игры
                                    своего персонажа, исследуя открытый мир, где
                                    твои поступки влияют на ход сюжета и всё,
                                    что тебя окружает.
                                </p>
                            </div>
                            <div class="nightSity__image">
                                <picture>
                                    <source
                                        srcset="
                                            <?php bloginfo('template_url'); ?>/assets/img/nightSity/nightSity_large01.png
                                        "
                                        media="(min-width: 1024px)"
                                    >
                                    <source
                                        srcset="<?php bloginfo('template_url'); ?>/assets/img/promo/slider_big01.png"
                                        media="(min-width: 1440px)"
                                    >

                                    <img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/nightSity/nightSity_small01.png"
                                        alt="night city"
                                    >
                                </picture>
                                <picture>
                                    <source
                                        srcset="
                                            <?php bloginfo('template_url'); ?>/assets/img/nightSity/nightSity_large02.png
                                        "
                                        media="(min-width: 1024px)"
                                    >
                                    <source
                                        srcset="
                                            <?php bloginfo('template_url'); ?>/assets/img/nightSity/nightSity_big02.png
                                        "
                                        media="(min-width: 1440px)"
                                    >

                                    <img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/nightSity/nightSity_small02.png"
                                        alt="night city"
                                    >
                                </picture>

                                <picture>
                                    <source
                                        srcset="
                                            <?php bloginfo('template_url'); ?>/assets/img/nightSity/nightSity_large03.png
                                        "
                                        media="(min-width: 1024px)"
                                    >
                                    <source
                                        srcset="<?php bloginfo('template_url'); ?>/assets/img/nightSity/nightSity_big03"
                                        media="(min-width: 1440px)"
                                    >

                                    <img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/nightSity/nightSity_small03.png"
                                        alt="night city"
                                    >
                                </picture>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="play">
                    <div class="container">
                        <div class="play__promotion">
                            <img
                                src="<?php bloginfo('template_url'); ?>/assets/img/play/promotion.png"
                                alt="promotion"
                            >
                        </div>
                        <div class="play__body">
                            <div class="play__info">
                                <div class="play__info-content">
                                    <h2>Играй и выигрывай!</h2>
                                    <p>
                                        Играй в Cyberpunk 2077 и получи
                                        возможность выиграть консоль Xbox Series
                                        X или Sony PlayStation 5! Заполни форму
                                        ниже и приложи скриншот о покупке игры.
                                        Итоги розыгрыша будут подведены
                                        1 февраля. Удачи! ;)
                                    </p>
                                </div>
                                <div class="info-form">
                                    <form
                                        enctype="multipart/form-data"
                                        method="post"
                                    >
                                        <input
                                            type="text"
                                            placeholder="Как тебя зовут?"
                                        >
                                        <input
                                            type="email"
                                            placeholder="Твой е-mail"
                                        >
                                        <div class="input__wrapper">
                                            <label
                                                for="file"
                                                class="input__screenshot"
                                                >Прикрепить скриншот</label
                                            >
                                            <input
                                                type="file"
                                                class="input__file"
                                                id="screen"
                                                name="screen"
                                                accept="image/png, image/jpeg"
                                                multiple="multiple"
                                            >
                                        </div>

                                        <button type="submit" class="btn">
                                            Отправить
                                        </button>
                                        <input
                                            type="checkbox"
                                            class="custom-checkbox"
                                            id="agreement"
                                            name="agreement"
                                        >
                                        <label for="agreement"
                                            >Согласен на обработку персональных
                                            данных</label
                                        >
                                    </form>
                                </div>
                            </div>
                            <div class="play__images">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/play/game01.png" alt="games" >
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/play/game02.png" alt="games" >
                            </div>
                        </div>
                    </div>
                </section>
                <section class="hp">
                    <div class="container">
                        <div class="hp__body">
                            <div class="hp__images">
                                <img
                                    class="hp__monitor"
                                    src="<?php bloginfo('template_url'); ?>/assets/img/hp/monitor.png"
                                    alt="monitor"
                                >
                                <img
                                    class="hp__logo-hp"
                                    src="<?php bloginfo('template_url'); ?>/assets/img/hp/hp-logo.png"
                                    alt="hp logo"
                                >
                                <img
                                    class="hp__line"
                                    src="<?php bloginfo('template_url'); ?>/assets/img/hp/line.svg"
                                    alt="line"
                                >
                                <img
                                    class="hp__logo"
                                    src="<?php bloginfo('template_url'); ?>/assets/img/logo/logo.svg"
                                    alt="logo"
                                >
                            </div>
                            <div class="hp__info">
                                <h2>Полное погружение вместе с HP</h2>
                                <p>
                                    Погрузись в современные экшен-игры с
                                    реалистичным изображением с помощью монитора
                                    с диагональю 23,8 дюйма, созданном для
                                    отображения максимально насыщенных цветов.
                                    Успевай реагировать на любые события с
                                    временем отклика 1 мс и частотой в 144 Гц!
                                </p>
                                <ul class="hp__list">
                                    <li>Яркие насыщенные цвета</li>
                                    <li>Кристальная четкость изображения</li>
                                    <li>Быстрые движения и плавный геймплей</li>
                                </ul>
                                <a href="#" class="btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="cyberpunk">
                    <div class="container">
                        <div class="cyberpunk__body">
                            <div class="cyberpunk__image">
                                <picture>
                                    <source
                                        srcset="<?php bloginfo('template_url'); ?>/assets/img/cyberpunk/play.png"
                                        media="(min-width: 1024px)"
                                    >
                                    <source
                                        srcset="<?php bloginfo('template_url'); ?>/assets/img/cyberpunk/play_big.png"
                                        media="(min-width: 1920px)"
                                    >
                                    <img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/cyberpunk/play_small.png"
                                        alt="play"
                                    >
                                </picture>
                            </div>
                            <div class="cyberpunk__info">
                                <h2>Купить игру Cyberpunk 2077</h2>
                                <div class="cyberpunk__set">
                                    <p>В комплект входит:</p>
                                    <ul>
                                        <li>Футляр с игровыми дисками</li>
                                        <li>
                                            Футляр с кодом для загрузки игры и
                                            дисками (pc)
                                        </li>
                                        <li>
                                            Справочник с информацией об игровом
                                            мире
                                        </li>
                                    </ul>
                                </div>
                                <div class="cyberpunk__platform">
                                    <p>Выберите платформу:</p>
                                    <div class="cyberpunk__playing">
                                        <img
                                            src="<?php bloginfo('template_url'); ?>/assets/img/cyberpunk/pc.png"
                                            alt="pc"
                                        >
                                        <img
                                            src="<?php bloginfo('template_url'); ?>/assets/img/cyberpunk/xbox-one.png"
                                            alt="xbox-one"
                                        >
                                        <img
                                            src="<?php bloginfo('template_url'); ?>/assets/img/cyberpunk/stadia.png"
                                            alt="stadia"
                                        >
                                        <img
                                            src="<?php bloginfo('template_url'); ?>/assets/img/cyberpunk/ps4.png"
                                            alt="ps4"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
<?php get_footer(); ?>