<?php get_header(); ?>

    <div class="offer">
        <div class="offer__wrap">
            <div class="offer__header">
                <div class="offer__box offer__box--one">
                    <div class="offer_picture">
                        <img class="offer__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
                    </div>
                    <div class="offer__desc">Ремонт и покраска бамперов</div>
                </div>
                <?php $truecustoms_options = get_option('truecustoms_option_name');
                $address = $truecustoms_options['_0']; // Адрес
                $phone = $truecustoms_options['_1']; // Телефон ?>
                <div class="offer__box offer__box--two">
                    <div class="offer__address">
                        <?php if (empty($address)): echo 'г. Екатеринбург, ул. Лукиных, 1а'; else: echo $address; endif; ?>
                    </div>
                </div>
                <div class="offer__box offer__box--three">
                    <div class="offer__phone">
                        <?php $phone_href = '+73433725517';
                        $phone_text = '+7 (343) 372-55-17';
                        if (!empty($phone)): $phone_href = preg_replace("/[^0-9+]+/i", "", $phone);
                            $phone_text = $phone;
                        endif; ?>
                        <a href="tel:<?php echo $phone_href ?>" class="offer__link"><?php echo $phone_text ?></a>
                    </div>
                </div>
            </div>

            <div class="offer__container">
                <h1 class="offer__title">
                    <span class="offer__selection">Починим и покрасим Ваш бампер</span><br/>
                    <span class="offer__text">за 6 тысяч рублей всего за 3 дня</span>
                </h1>
                <a href="#"
                   class="pure-button pure-button-primary offer__btn--big hvr-sweep-to-right modal-open"
                   onclick="this.blur(); return false">
                    Записаться на ремонт</a>
                <div class="offer__work">
                    <div class="offer__holder">
                        <div class="offer__icon">
                            <i class="sprite sprite-003"></i>
                        </div>
                        <div class="offer__subject">Полный<br/>комплекс работ</div>
                    </div>
                    <div class="offer__holder">
                        <div class="offer__icon">
                            <i class="sprite sprite-006"></i>
                        </div>
                        <div class="offer__subject">Все работы<br/>за 3 дня</div>
                    </div>
                    <div class="offer__holder">
                        <div class="offer__icon">
                            <i class="sprite sprite-002"></i>
                        </div>
                        <div class="offer__subject">Лучшие<br/>материалы</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="opportunity">
        <div class="opportunity__wrap">
            <h2 class="opportunity__title">Наши возможности</h2>
            <div class="opportunity__box">
                <div class="opportunity__holder">
                    <div class="opportunity__icon">
                        <i class="sprite sprite-004"></i>
                    </div>
                    <div class="opportunity__container">
                        <div class="opportunity__subtitle">Полное восстановление</div>
                        <div class="opportunity__text">Выполним любые работы по восстановлению бампера: сшивание,
                            выгибание,
                            покраска и др.
                        </div>
                    </div>
                </div>
                <div class="opportunity__holder">
                    <div class="opportunity__icon">
                        <i class="sprite sprite-005"></i>
                    </div>
                    <div class="opportunity__container">
                        <div class="opportunity__subtitle">12 автомобилей одновременно</div>
                        <div class="opportunity__text">Вместимость нашего автоцентра позволяет выполнять работу сразу и
                            для
                            большого количества клиентов.
                        </div>
                    </div>
                </div>
                <div class="opportunity__holder">
                    <div class="opportunity__icon">
                        <i class="sprite sprite-001"></i>
                    </div>
                    <div class="opportunity__container">
                        <div class="opportunity__subtitle">Нормо-час<br/>от 300 рублей</div>
                        <div class="opportunity__text">Практичные цены на другие дополнительные работы, если они вам
                            потребуются.
                        </div>
                    </div>
                </div>
                <div class="opportunity__holder">
                    <div class="opportunity__icon">
                        <i class="far fa-clock fa-4x"></i>
                    </div>
                    <div class="opportunity__container">
                        <div class="opportunity__subtitle">60 машин в месяц</div>
                        <div class="opportunity__text">Именно столько машин, минимум, проходит через наш автоцентр.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="better">
        <div class="better__wrap">
            <h2 class="better__title">Почему клиенты выбирают нас</h2>
            <div class="better__box">
                <div class="better__holder">
                    <div class="better__icon">
                    </div>
                    <div class="better__container">
                        <div class="better__subtitle">60 машин в месяц</div>
                        <div class="better__text">Именно столько машин, минимум, проходит через наш автоцентр.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
