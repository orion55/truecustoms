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
				<?php $truecustoms_options = get_option( 'truecustoms_option_name' );
				$address                   = $truecustoms_options['_0']; // Адрес
				$phone                     = $truecustoms_options['_1']; // Телефон ?>
                <div class="offer__box offer__box--two">
                    <div class="offer__address">
						<?php if ( empty( $address ) ): echo 'г. Екатеринбург, ул. Лукиных, 1а'; else: echo $address; endif; ?>
                    </div>
                </div>
                <div class="offer__box offer__box--three">
                    <div class="offer__phone">
						<?php $phone_href = '+73433725517';
						$phone_text       = '+7 (343) 372-55-17';
						if ( ! empty( $phone ) ): $phone_href = preg_replace( "/[^0-9+]+/i", "", $phone );
							$phone_text                       = $phone;
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
                   class="pure-button pure-button-primary offer__btn--big hvr-sweep-to-right modal-open modal-blur">
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
                    <div class="better__number">26</div>
                    <div class="better__container">
                        <div class="better__subtitle">лет опыта</div>
                        <div class="better__text">У нашего самого опытного мастера!</div>
                    </div>
                </div>
                <div class="better__holder">
                    <div class="better__number">1578</div>
                    <div class="better__container">
                        <div class="better__subtitle">счастливых клиентов</div>
                        <div class="better__text">Именно такому количеству людей мы помогли за последние 3-и года нашей
                            работы
                        </div>
                    </div>
                </div>
                <div class="better__holder">
                    <div class="better__number">1760</div>
                    <div class="better__container">
                        <div class="better__subtitle">бамперов</div>
                        <div class="better__text">Мы перекрасили за последние 3-и года нашей работы</div>
                    </div>
                </div>
            </div>
            <a href="#"
               class="pure-button pure-button-primary better__btn hvr-sweep-to-right modal-open modal-blur">
                Записаться на осмотр</a>
        </div>
    </div>
    <div class="work">
        <div class="work__wrap">
            <h2 class="work__title">Несколько наших работ</h2>
            <div class="work__container">
                <div class="work__slider">
                    <div class="cocoen work__cocoen">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/car01-before.jpg"
                             alt="car01-before" class="work__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/car01-after.jpg"
                             alt="car01-after" class="work__img">
                    </div>
                    <div class="cocoen work__cocoen">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/car02-before.jpg"
                             alt="car02-before" class="work__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/car02-after.jpg"
                             alt="car02-after" class="work__img">
                    </div>
                    <div class="cocoen work__cocoen">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/car03-before.jpg"
                             alt="car03-before" class="work__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/car03-after.jpg"
                             alt="car03-after" class="work__img">
                    </div>
                </div>
                <div class="work__box">
                    <div class="work__row work__row--one">До ремонта</div>
                    <div class="work__row work__row--two">После ремонта</div>
                </div>
            </div>
        </div>
    </div>
    <div class="repairs">
        <div class="repairs__wrap">
            <h2 class="repairs__title">
                <span class="repairs__selection">Запишитесь на ремонт бампера прямо</span>
                <span class="repairs__text">сейчас и получите скидку по промо-коду</span>
            </h2>
            <a href="#"
               class="pure-button pure-button-primary repairs__btn hvr-sweep-to-right modal-promo modal-blur">
                Получить скидку</a>
        </div>
    </div>
    <div class="reviews">
        <div class="reviews__wrap">
            <div class="reviews__title">Отзывы о нас</div>
            <div class="reviews_container">
                <div class="reviews__slider">
					<?php
					global $post;
					$args    = array(
						'numberposts' => 10,
						'orderby'     => 'title',
						'order'       => 'ASC',
						'post_type'   => 'review'
					);
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) {
						setup_postdata( $post );
						?>
                        <div class="reviews__holder">
                            <div class="reviews__box">
								<?php $title     = get_the_title();
								$customer_photos = types_render_field( "customer_photos", array(
									"alt"   => $title,
									"class" => "reviews__img"
								) );
								if ( ! empty( $customer_photos ) ) : ?>
                                    <div class="reviews__picture">
										<?php echo $customer_photos ?>
                                    </div>
								<?php endif;
								$name = types_render_field( "name" );
								$name = trim( $name );
								$age  = types_render_field( "age" );
								$age  = trim( $age );
								if ( ! empty( $name ) ) : ?>
                                    <div class="reviews__name">
										<?php echo $name; ?>
										<?php if ( ! empty( $age ) ) : $age = " , " . $age . " лет"; ?>
                                            <span class="reviews__age"><?php echo $age ?></span>
										<?php endif; ?>
                                    </div>
								<?php endif; ?>
                            </div>
                            <div class="reviews__wrapper">
								<?php
								$damaged_car  = types_render_field( "damaged_car", array(
									"alt"   => 'car-before',
									"class" => "reviews__img--car"
								) );
								$finished_car = types_render_field( "finished_car", array(
									"alt"   => 'car-after',
									"class" => "reviews__img--car"
								) );
								if ( ! ( empty( $damaged_car ) && empty( $finished_car ) ) ) :
									?>
                                    <div class="reviews__col reviews__col--one">
                                        <div class="cocoen reviews__coc">
											<?php if ( ! empty( $damaged_car ) ) : echo $damaged_car; endif; ?>
											<?php if ( ! empty( $finished_car ) ) : echo $finished_car; endif; ?>
                                        </div>
                                        <div class="reviews__cube">
                                            <div class="reviews__row work__row--one">До ремонта</div>
                                            <div class="reviews__row work__row--two">После ремонта</div>
                                        </div>
                                    </div>
								<?php endif; ?>
                                <div class="reviews__col reviews__col--two">
									<?php $brand = types_render_field( "brand" );
									if ( ! empty( $brand ) ) :?>
                                        <div class="reviews__label">Марка авто</div>
                                        <div class="reviews__text"><?php echo $brand; ?></div>
									<?php endif;
									$list_of_works = types_render_field( "list_of_works" );
									if ( ! empty( $list_of_works ) ) :
										?>
                                        <div class="reviews__label">Список работ</div>
                                        <div class="reviews__text"><?php echo $list_of_works; ?></div>
									<?php endif; ?>
                                </div>
								<?php $content = get_the_content();
								if ( ! empty( $content ) ) :?>
                                    <div class="reviews__col reviews__col--three">
                                        <div class="reviews__text">
											<?php echo $content; ?>
                                        </div>
                                    </div>
								<?php endif; ?>
                            </div>
                            <i class="fas fa-quote-left reviews__quote-left fa-4x"></i>
                            <i class="fas fa-quote-right reviews__quote-right fa-4x"></i>
                        </div>
					<?php }
					wp_reset_postdata();
					?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
