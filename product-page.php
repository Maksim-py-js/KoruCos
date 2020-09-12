<?php
/**
 * Template name: Product page
 */

get_header();
?>
<main>
	<div class="product">
		<div class="box">
			<div class="product__navButtons">
				<button class="product__prev">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26px" height="10px">
					<path fill-rule="evenodd"  fill="#716a6c" d="M26.000,6.000 L4.333,6.000 L7.000,8.000 L6.000,10.000 L-0.007,4.997 L6.000,-0.001 L7.000,2.000 L4.333,4.000 L26.000,4.000 L26.000,6.000 Z" class="prevArrow"/></svg>
					<span class="product__navText">Предыдущий</span>
				</button>
				<button class="product__next"> 
					<span class="product__navText">Следующий</span>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26px" height="10px">
						<path fill-rule="evenodd"  fill="#716a6c" d="M20.000,10.000 L19.000,8.000 L21.667,6.000 L-0.000,6.000 L-0.000,4.000 L21.667,4.000 L19.000,2.000 L20.000,-0.001 L26.007,4.997 L20.000,10.000 Z" class="nextArrow"/>
					</svg>
				</button>
			</div>
			<div class="hr"></div>
			<div class="product__box">
				<div class="product__rightContent">
					<div class="product__gallery">
						<span class="product__image">
							<div class="product__salePercent">10%</div>
							<div class="product__label">
								<div class="product__labelText blue">New</div>
								<div class="product__labelText red">Sale</div>
							</div>
							<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
						</span>
						<span class="product__image">
							<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
						</span>
						<span class="product__image">
							<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
						</span>
						<span class="product__image">
							<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
						</span>
					</div>
					<div class="product__social">
						<div class="product__share">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21px" height="29px">
								<path fill-rule="evenodd"  fill="rgb(113, 106, 108)" d="M16.000,10.498 C14.854,10.498 13.811,10.098 12.968,9.450 L9.423,12.215 C9.779,12.902 10.000,13.671 10.000,14.499 C10.000,15.612 9.624,16.630 9.009,17.461 L12.368,20.081 C13.280,19.113 14.565,18.500 16.000,18.500 C18.761,18.500 21.000,20.738 21.000,23.499 C21.000,26.260 18.761,28.499 16.000,28.499 C13.239,28.499 11.000,26.260 11.000,23.499 C11.000,22.897 11.123,22.327 11.319,21.792 L7.493,18.808 C6.757,19.236 5.913,19.498 5.000,19.498 C2.239,19.498 -0.000,17.260 -0.000,14.499 C-0.000,11.738 2.239,9.500 5.000,9.500 C6.210,9.500 7.305,9.947 8.170,10.663 L11.567,8.013 L11.881,8.327 C11.327,7.522 11.000,6.550 11.000,5.499 C11.000,2.738 13.239,0.500 16.000,0.500 C18.761,0.500 21.000,2.738 21.000,5.499 C21.000,8.260 18.761,10.498 16.000,10.498 ZM16.000,26.499 C17.654,26.499 19.000,25.154 19.000,23.499 C19.000,21.845 17.654,20.500 16.000,20.500 C14.346,20.500 13.000,21.845 13.000,23.499 C13.000,25.154 14.346,26.499 16.000,26.499 ZM5.000,11.500 C3.345,11.500 2.000,12.845 2.000,14.499 C2.000,16.153 3.345,17.499 5.000,17.499 C6.654,17.499 8.000,16.153 8.000,14.499 C8.000,12.845 6.654,11.500 5.000,11.500 ZM16.000,2.500 C14.346,2.500 13.000,3.845 13.000,5.499 C13.000,7.153 14.346,8.499 16.000,8.499 C17.654,8.499 19.000,7.153 19.000,5.499 C19.000,3.845 17.654,2.500 16.000,2.500 Z"/>
						</svg>
						</div>
						<span class="product__icon">
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons/icon-1.png" alt="Facebook">
						</span>
						<span class="product__icon">
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons/icon-2.png" alt="Twitter">
						</span>
						<span class="product__icon">
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons/icon-3.png" alt="Pinterest">
						</span>
						<span class="product__icon">
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons/icon-4.png" alt="+">
						</span>
						<span class="product__icon">
								<div class="counter">0</div>
						</span>
					</div>
				</div>
				<div class="product__leftContent">
					<div class="product__stars">
						<span class="product__starIcon">
							<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
						</span>	
						<span class="product__starIcon">
							<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
						</span>	
						<span class="product__starIcon">
							<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
						</span>	
						<span class="product__starIcon">
							<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
						</span>	
						<span class="product__starIcon">
							<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
						</span>	
					</div>	
					<h2 class="product__title">
						Микроигольные патчи от синяков под глазами с янтарной кислотой BLOM Microneedle Eye Patches Succinic Acid
					</h2>
					<ul class="product__data">
						<li>
							<span class="product__dataName">Артикул:</span>
							<span class="product__dataMean">0177/409</span>
						</li>
						<li>
							<span class="product__dataName">Бренд:</span>
							<span class="product__dataMean">Anita</span>
						</li>
						<li>
							<span class="product__dataName">Страна:</span>
							<span class="product__dataMean">Южная Корея</span>
						</li>
						<li>
							<span class="product__dataName">Тип кожи:</span>
							<span class="product__dataMean">Комбинированная</span>
						</li>
						<li>
							<span class="product__dataName">Объем:</span>
							<span class="product__dataMean">1 уп - 4 пары</span>
						</li>
						<li>
							<span class="product__dataName">Срок годности:</span>
							<span class="product__dataMean">36 месяцев</span>
						</li>
					</ul>
					<div class="product__price">
						<span class="product__priceSum">924 р.</span>
						<strike class="product__sale"><span class="product__saleText">1500 р.</span></strike>
					</div>
					<div class="product__buttons">
						<button class="product__btnCart">
							<span class="product__btnText">В корзину</span>
							<span class="product__btnIcon">
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/icons/cart.png" alt="R">
							</span>
						</button>
						<button class="product__btnOneClick">
							<span class="product__btnText">Купить в 1 клик</span>
							<span class="product__btnIcon">
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/icons/rocket.png" alt="R">
							</span>
						</button>
					</div>	
					<ul class="product__information">
						<li class="product__list">
							<div class="product__listItem">
								<span class="product__listText">Описание</span>
								<div class="product__listIcon">
									<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/sterlka.svg" alt=".">
								</div>
							</div>
							<div class="product__discriptionText">
								В этом описание описывается описание товара у которого есть свои данные и описание в котором описывается описание товара у которого есть есть свои данные и описание в описание в котором описывается описание товара у которого есть есть свои данные и описание в котором описывается описание товара у которого есть описание в котором все описывается.
							</div>
						</li>
						<li class="product__list">
							<div class="product__listItem">
								<span class="product__listText">Параметры</span>
								<div class="product__listIcon">
									<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/sterlka.svg" alt=".">
								</div>
							</div>
							<div class="product__parameters">
								<ul class="product__data">
									<li class="parametersList">
										<span class="product__dataName">Тип кожи:</span>
										<span class="product__dataMean parametrsItem">Комбинированная</span>
									</li>
									<li class="parametersList">
										<span class="product__dataName">Объём:</span>
										<span class="product__dataMean parametrsItem">1 уп - 4 пары</span>
									</li>
									<li class="parametersList">
										<span class="product__dataName">Условия хранения:</span>
										<span class="product__dataMean parametrsItem">Хранить в плотно закупоренных флаконах из темного стекла при комнатной температуре </span>
									</li>
									<li class="parametersList">
										<span class="product__dataName">Особые условия:</span>
										<span class="product__dataMean parametrsItem">Эфирное масло чабреца не рекомендуется использовать при гипертонической болезни, эпилепсии.</span>
									</li>
									<li class="parametersList">
										<span class="product__dataName">Фармакологическое действие:</span>
										<span class="product__dataMean parametrsItem">Эфирное масло чабреца обыкновенного оказывает высокое бактерицидное, противогрибковое, противовирусное, иммуностимулирующее, противовоспалительное, отхаркивающее, бронхолитическое, анальгезирующее, антимутагенное, ветрогонное, дезодорирующее, спазмолитическое действие.</span>
									</li>
								</ul>
							</div>
						</li>
						<li class="product__list">
							<div class="product__listItem">
								<span class="product__listText">Доставка</span>
								<div class="product__listIcon">
									<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/sterlka.svg" alt=".">
								</div>
							</div>
							<div class="product__deliveryText">
								Обращаем Ваше внимание, что текстовая информация на сайте должна быть индивидуальной, не скопированной с других интернет-ресурсов, о чем указано в рекомендациях Яндекса: «Мы стараемся не индексировать или не ранжировать высоко сайты, копирующие информацию с других ресурсов и не создающие оригинального контента или сервиса».
								<br><br>
								<strong>Курьерская доставка</strong><br>
								Доставка осуществляется курьером транспортной компании. В день доставки с вами свяжется курьер для уточнения времени и места доставки. 
								<br><br>
								<strong>Самовывоз</strong><br>Самовывоз
								Самовывоз доступен по будням в рабочее время. Удобное время получения с Вами согласует консультант магазина. 
								<br><br>
								<strong>Доставка почтой</strong><br>
								Доставка осуществляется транспортной компании. В день доставки с вами свяжется менеджер для уточнения времени и места доставки. 
							</div>
						</li>
						<li class="product__list">
							<div class="product__listItem">
								<span class="product__listText">Отзывы</span>
								<div class="product__listIcon">
									<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/sterlka.svg" alt=".">
								</div>
							</div>
							<div class="product__reviewsForm">
								<strong>Авторизуйтесь, чтобы оставить комментарий</strong>
								<input type="text" placeholder="логин" class="product__input">
								<input type="text" placeholder="пароль" class="product__input">
								<button class="product__btnEnter">Войти</button>
								<a href="#" class="product__link">Забыли пароль?</a>
								<a href="#" class="product__link">Регистация</a>
							</div>
						</li>
						<li class="product__list">
							<div class="product__listItem">
								<span class="product__listText">Отзывы 2</span>
								<div class="product__listIcon">
									<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/sterlka.svg" alt=".">
								</div>
							</div>
							<ul class="product__reviewsMessage">
								<li class="product__reviewsItem">
									<strong class="product__reviewsName">
										Распутин
									</strong>
									<div class="product__reviewsDate">
										12.01.2020
									</div>
									<div class="product__reviewsStars">
										<span class="product__starIcon">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</span>	
										<span class="product__starIcon">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</span>	
										<span class="product__starIcon">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</span>	
										<span class="product__starIcon">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</span>	
										<span class="product__starIcon">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</span>	
									</div>	
									<p class="product__reviewsText">
										Интересно: пиксель изображения на мониторе/дисплее имеет 256 градаций яркост и белого цвета и еще меньше градаций любого другого цвета. Откуда берутся эти вот 1:1000хх…?
									</p>
								</li>
								<li class="product__reviewsItem">
									<strong class="product__reviewsName">
										Влад
									</strong>
									<div class="product__reviewsDate">
										12.01.2020
									</div>
									<div class="product__reviewsStars">
										<span class="product__starIcon">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</span>	
										<span class="product__starIcon">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</span>	
										<span class="product__starIcon">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</span>	
										<span class="product__starIcon">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</span>	
										<span class="product__starIcon">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</span>	
									</div>	
									<p class="product__reviewsText">
										Интересно: пиксель изображения на мониторе/дисплее имеет 256 градаций яркост и белого цвета и еще меньше градаций любого другого цвета. Откуда берутся эти вот 1:1000хх Интересно: пиксель изображения на мониторе/дисплее имеет 256 градаций яркост и белого цвета и еще меньше градаций любого другого цвета. Откуда берутся эти вот 1:1000хх
									</p>
								</li>
								<li class="product__yourReviews">
									<strong class="product__reviewsTitle">Оставьте отзыв</strong>
									<textarea class="product__textarea" placeholder="Текст вашего отзыва" rows="10"></textarea>
									<div class="product__starButtons">
										<button class="product__starButton">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</button>
										<button class="product__starButton">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</button>
										<button class="product__starButton">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</button>
										<button class="product__starButton">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</button>
										<button class="product__starButton">
											<img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
										</button>
									</div>
									<button class="product__reviewsButton">
										Оставить отзыв
									</button>
								</li>
							</ul>
						</li>
					</ul>	
				</div>
			</div>
		</div>
		<div class="similar">
			<div class="box">
				<div class="similar__top">
					<h2 class="similar__title">
						Похожие товары 
					</h2>
					<button class="similar__more">
						Смотреть все
					</button>
				</div>	
				<div class="hr"></div>
				<div class="similar__wrapper">
					<div class="similar__slideButtonPrev-2">‹</div>
					<div class="similar__slider">
						<div class="similar__item">
							<div class="similar__image">
								<div class="similar__itemHover">
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="similar__price">924 р.</p>
							<strike class="similar__sale"><span class="similar__saleText">1555 р.</span></strike>
							<p class="similar__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="similar__item">
							<div class="similar__image">
								<div class="similar__itemHover">
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="similar__price">924 р.</p>
							<strike class="similar__sale"><span class="similar__saleText">1555 р.</span></strike>
							<p class="similar__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="similar__item">
							<div class="similar__image">
								<div class="similar__itemHover">
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="similar__price">924 р.</p>
							<strike class="similar__sale"><span class="similar__saleText">1555 р.</span></strike>
							<p class="similar__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="similar__item">
							<div class="similar__image">
								<div class="similar__itemHover">
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="similar__price">924 р.</p>
							<strike class="similar__sale"><span class="similar__saleText">1555 р.</span></strike>
							<p class="similar__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="similar__item">
							<div class="similar__image">
								<div class="similar__itemHover">
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="similar__price">924 р.</p>
							<strike class="similar__sale"><span class="similar__saleText">1555 р.</span></strike>
							<p class="similar__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="similar__item">
							<div class="similar__image">
								<div class="similar__itemHover">
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="similar__price">924 р.</p>
							<strike class="similar__sale"><span class="similar__saleText">1555 р.</span></strike>
							<p class="similar__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="similar__item">
							<div class="similar__image">
								<div class="similar__itemHover">
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="similar__price">924 р.</p>
							<strike class="similar__sale"><span class="similar__saleText">1555 р.</span></strike>
							<p class="similar__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="similar__item">
							<div class="similar__image">
								<div class="similar__itemHover">
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="similar__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="similar__price">924 р.</p>
							<strike class="similar__sale"><span class="similar__saleText">1555 р.</span></strike>
							<p class="similar__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
					</div>
					<div class="similar__slideButtonNext-2">›</div>
				</div>
			</div>
		</div>		
		<div class="recommend">
			<div class="box">
				<div class="recommend__top">
					<h2 class="recommend__title">
						Рекомендуем 
					</h2>
					<button class="recommend__more">
						Смотреть все
					</button>
				</div>	
				<div class="hr"></div>
				<div class="recommend__wrapper">
					<div class="recommend__slideButtonPrev-2">‹</div>
					<div class="recommend__slider">
						<div class="recommend__item">
							<div class="recommend__image">
								<div class="recommend__itemHover">
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="recommend__price">924 р.</p>
							<strike class="recommend__sale"><span class="recommend__saleText">1555 р.</span></strike>
							<p class="recommend__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="recommend__item">
							<div class="recommend__image">
								<div class="recommend__itemHover">
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="recommend__price">924 р.</p>
							<strike class="recommend__sale"><span class="recommend__saleText">1555 р.</span></strike>
							<p class="recommend__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="recommend__item">
							<div class="recommend__image">
								<div class="recommend__itemHover">
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="recommend__price">924 р.</p>
							<strike class="recommend__sale"><span class="recommend__saleText">1555 р.</span></strike>
							<p class="recommend__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="recommend__item">
							<div class="recommend__image">
								<div class="recommend__itemHover">
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="recommend__price">924 р.</p>
							<strike class="recommend__sale"><span class="recommend__saleText">1555 р.</span></strike>
							<p class="recommend__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="recommend__item">
							<div class="recommend__image">
								<div class="recommend__itemHover">
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="recommend__price">924 р.</p>
							<strike class="recommend__sale"><span class="recommend__saleText">1555 р.</span></strike>
							<p class="recommend__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="recommend__item">
							<div class="recommend__image">
								<div class="recommend__itemHover">
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="recommend__price">924 р.</p>
							<strike class="recommend__sale"><span class="recommend__saleText">1555 р.</span></strike>
							<p class="recommend__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="recommend__item">
							<div class="recommend__image">
								<div class="recommend__itemHover">
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="recommend__price">924 р.</p>
							<strike class="recommend__sale"><span class="recommend__saleText">1555 р.</span></strike>
							<p class="recommend__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
						<div class="recommend__item">
							<div class="recommend__image">
								<div class="recommend__itemHover">
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
									<button class="recommend__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
								</div>
								<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="Img">
							</div>
							<p class="recommend__price">924 р.</p>
							<strike class="recommend__sale"><span class="recommend__saleText">1555 р.</span></strike>
							<p class="recommend__about">Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream</p>
						</div>
					</div>
					<div class="recommend__slideButtonNext-2">›</div>
				</div>
			</div>
		</div>		
	</div>
</main>
<?php get_footer();?>