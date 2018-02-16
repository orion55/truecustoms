<?php get_header(); ?>

    <div class="offer">
        <div class="offer__header">
            <div class="offer__box offer__box--one">
                <div class="offer_picture">
                    <img class="offer__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
                </div>
                <div class="offer__desc">Ремонт и покраска бамперов</div>
            </div>
            <div class="offer__box offer__box--two">
                <div class="offer__address">
                    г. Екатеринбург, ул. Лукиных, 1а
                </div>
            </div>
            <div class="offer__box offer__box--three">
                <div class="offer__phone">
                    <a href="tel:+73433725517" class="offer__link">+7 (343) 372-55-17</a>
                </div>
            </div>
        </div>

        <div class="offer__container">
            <h1 class="offer__title">
                <span class="offer__selection">Починим и покрасим Ваш бампер</span><br/>
                <span class="offer__text">за 6 тысяч рублей всего за 3 дня</span>
            </h1>
            <a href="#" class="pure-button pure-button-primary offer__btn--big hvr-sweep-to-right">Записаться на ремонт</a>
            <div class="offer__work">
                <div class="offer__holder">
                    <div class="offer__icon">
                        <i class="fas fa-wrench fa-4x"></i>
                    </div>
                    <div class="offer__subject">Полный комплекс работ</div>
                </div>
                <div class="offer__holder">
                    <div class="offer__icon">
                        <i class="far fa-clock fa-4x"></i>
                    </div>
                    <div class="offer__subject">Все работы за 3 дня</div>
                </div>
                <div class="offer__holder">
                    <div class="offer__icon">
                        <i class="fas fa-cogs fa-4x"></i>
                    </div>
                    <div class="offer__subject">Лучшие материалы</div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
