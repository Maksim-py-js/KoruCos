<?php
/**
 * Template name: Cart page
 */

get_header();
?>

<main>
	<div class="cart">
		<div class="box">
			<h2 class="cart__title">Корзина</h2>
			<div class="hr"></div>
			<p class="cart__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<ul class="cart__table">
				<ul class="cart__rowName">
					<ul class="cart__columnItem long">
						<strong>Товар</strong>
					</ul>
					<ul class="cart__columnDiscriptionName">
						<li class="cart__columnItem"></li>
						<li class="cart__columnItem"><strong>Цена</strong></li>
						<li class="cart__columnItem"><strong>кол-во.</strong></li>
						<li class="cart__columnItem"><strong>Сумма</strong></li>
					</ul>
					<ul class="cart__columnBasket">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="21px">
							<path fill-rule="evenodd"  fill="rgb(113, 106, 108, 0)" d="M-0.000,4.001 L-0.000,2.001 L5.000,2.001 L5.000,1.981 C5.000,0.888 5.886,0.001 6.980,0.001 L9.020,0.001 C10.113,0.001 11.000,0.888 11.000,1.981 L11.000,2.001 L16.000,2.001 L16.000,4.001 L-0.000,4.001 ZM15.000,18.998 C15.000,20.103 14.105,20.998 13.000,20.998 L3.000,20.998 C1.895,20.998 1.000,20.103 1.000,18.998 L1.000,6.000 L15.000,6.000 L15.000,18.998 ZM13.000,8.000 L11.000,8.000 L11.000,16.998 L9.000,16.998 L9.000,8.000 L7.000,8.000 L7.000,16.998 L5.000,16.998 L5.000,8.000 L3.000,8.000 L3.000,18.998 L13.000,18.998 L13.000,8.000 Z"/>
						</svg>
					</ul>
				</ul>
				<ul class="cart__rowProduct">
					<ul class="cart__columnItem">
						<li class="cart__image">
							<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="">
						</li>
					</ul>
					<ul class="cart__columnDiscription">
						<li class="cart__columnItem long">
							<p class="cart__poroductText">Микроигольные патчи от синяков под глазами с янтарной кислотой BLOM Microneedle Eye Patches Succinic Acid</p>
							<div class="cart__productArticul">
								<strong>Артикул: </strong> 
								<span>0177/409</span>
							</div>
							<ul class="cart__data">
								<li>
									<span class="cart__dataName">Артикул:</span>
									<span class="cart__dataMean">0177/409</span>
								</li>
								<li>
									<span class="cart__dataName">Бренд:</span>
									<span class="cart__dataMean">Anita</span>
								</li>
								<li>
									<span class="cart__dataName">Страна:</span>
									<span class="cart__dataMean">Южная Корея</span>
								</li>
								<li>
									<span class="cart__dataName">Тип кожи:</span>
									<span class="cart__dataMean">Комбинированная</span>
								</li>
								<li>
									<span class="cart__dataName">Объем:</span>
									<span class="cart__dataMean">1 уп - 4 пары</span>
								</li>
								<li>
									<span class="cart__dataName">Срок годности:</span>
									<span class="cart__dataMean">36 месяцев</span>
								</li>
							</ul>
							<span class="cart__allOptionsBtn">
								Все параметры
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8px" height="5px">
								<path fill-rule="evenodd"  fill="rgb(10, 161, 152)" d="M-0.008,1.009 L0.994,0.014 L3.997,3.001 L7.000,0.014 L8.001,1.009 L3.998,5.000 L-0.008,1.009 Z"/>
								</svg>
							</span>
						</li>
						<li class="cart__columnItem">
							<span class="cart__itemName"><strong>Цена: </strong></span>
							<span> 1 130 р.</span>
						</li>
						<li class="cart__columnItem">
							<span class="cart__itemName"><strong>Кол-во: </strong></span>
							<span> Кол-во</span>
						</li>
						<li class="cart__columnItem">
							<span class="cart__itemName"><strong>Сумма: </strong></span>
							<span> 1 130 р.</span>
						</li>
					</ul>
					<ul class="cart__columnBasket">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="21px">
							<path fill-rule="evenodd"  fill="rgb(113, 106, 108)" d="M-0.000,4.001 L-0.000,2.001 L5.000,2.001 L5.000,1.981 C5.000,0.888 5.886,0.001 6.980,0.001 L9.020,0.001 C10.113,0.001 11.000,0.888 11.000,1.981 L11.000,2.001 L16.000,2.001 L16.000,4.001 L-0.000,4.001 ZM15.000,18.998 C15.000,20.103 14.105,20.998 13.000,20.998 L3.000,20.998 C1.895,20.998 1.000,20.103 1.000,18.998 L1.000,6.000 L15.000,6.000 L15.000,18.998 ZM13.000,8.000 L11.000,8.000 L11.000,16.998 L9.000,16.998 L9.000,8.000 L7.000,8.000 L7.000,16.998 L5.000,16.998 L5.000,8.000 L3.000,8.000 L3.000,18.998 L13.000,18.998 L13.000,8.000 Z"/>
						</svg>
					</ul>
				</ul>
			</ul>
			<!-- <ul class="cart__table">
				<ul class="cart__rowNames row">
					<li class="cart__culmnItem">Товар</li>
					<div class="cart__adaptivBlock">
						<li class="cart__culmnItem">Цена</li>
						<li class="cart__culmnItem">кол-во</li>
						<li class="cart__culmnItem">сумма</li>
					</div>
					<li class="cart__culmnItem"></li>
				</ul>
				<ul class="cart__rowProduct row">
					<li class="cart__culmnItem">
						<span class="cart__image">
							<img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide.png" alt="">
						</span>
					</li>
					<div class="cart__adaptivBlock">
						<li class="cart__culmnItem row">
							<span class="cart__productDiscription">
								<p class="cart__poroductText">Микроигольные патчи от синяков под глазами с янтарной кислотой BLOM Microneedle Eye Patches Succinic Acid</p>
								<div class="cart__productArticul">
									<strong>Артикул: </strong> 
									<span>0177/409</span>
								</div>
								<ul class="cart__data">
									<li>
										<span class="cart__dataName">Артикул:</span>
										<span class="cart__dataMean">0177/409</span>
									</li>
									<li>
										<span class="cart__dataName">Бренд:</span>
										<span class="cart__dataMean">Anita</span>
									</li>
									<li>
										<span class="cart__dataName">Страна:</span>
										<span class="cart__dataMean">Южная Корея</span>
									</li>
									<li>
										<span class="cart__dataName">Тип кожи:</span>
										<span class="cart__dataMean">Комбинированная</span>
									</li>
									<li>
										<span class="cart__dataName">Объем:</span>
										<span class="cart__dataMean">1 уп - 4 пары</span>
									</li>
									<li>
										<span class="cart__dataName">Срок годности:</span>
										<span class="cart__dataMean">36 месяцев</span>
									</li>
								</ul>
								<span class="cart__allOptionsBtn">
									Все параметры
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8px" height="5px">
									<path fill-rule="evenodd"  fill="rgb(10, 161, 152)" d="M-0.008,1.009 L0.994,0.014 L3.997,3.001 L7.000,0.014 L8.001,1.009 L3.998,5.000 L-0.008,1.009 Z"/>
									</svg>
								</span>
							</span>
						</li>
						<li class="cart__culmnItem">1 130 р.</li>
						<li class="cart__culmnItem">кол-во</li>
						<li class="cart__culmnItem">1 130 р.</li>
					</div>
					<li class="cart__culmnItem">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="21px">
							<path fill-rule="evenodd"  fill="rgb(113, 106, 108)" d="M-0.000,4.001 L-0.000,2.001 L5.000,2.001 L5.000,1.981 C5.000,0.888 5.886,0.001 6.980,0.001 L9.020,0.001 C10.113,0.001 11.000,0.888 11.000,1.981 L11.000,2.001 L16.000,2.001 L16.000,4.001 L-0.000,4.001 ZM15.000,18.998 C15.000,20.103 14.105,20.998 13.000,20.998 L3.000,20.998 C1.895,20.998 1.000,20.103 1.000,18.998 L1.000,6.000 L15.000,6.000 L15.000,18.998 ZM13.000,8.000 L11.000,8.000 L11.000,16.998 L9.000,16.998 L9.000,8.000 L7.000,8.000 L7.000,16.998 L5.000,16.998 L5.000,8.000 L3.000,8.000 L3.000,18.998 L13.000,18.998 L13.000,8.000 Z"/>
						</svg>
					</li>
				</ul>
			</ul> -->
			<div class="cart__priceTeg">
				<div class="cart__reloadBtn">
					Пересчитать
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14px" height="13px">
						<path fill-rule="evenodd"  fill="rgb(113, 106, 108)" d="M6.571,13.008 C8.567,13.008 10.431,12.125 11.684,10.586 L10.127,9.343 C9.255,10.414 7.959,11.028 6.571,11.028 C4.050,11.028 1.999,8.995 1.999,6.499 C1.999,4.002 4.050,1.971 6.571,1.971 C8.621,1.971 10.338,3.324 10.916,5.167 L8.999,7.066 L13.999,7.066 L13.999,2.115 L12.463,3.636 C11.391,1.481 9.155,-0.009 6.571,-0.009 C2.948,-0.009 -0.000,2.909 -0.000,6.499 C-0.000,10.088 2.948,13.008 6.571,13.008 Z"/>
					</svg>
				</div>	
				<ul class="cart__priceList">
					<ul class="row cart__priceItem">
						<li class="cart__priceOption">Сумма</li>
						<li class="cart__price">1 115 р.</li>
					</ul>
					<ul class="row cart__priceItem">
						<li class="cart__priceOption">Скидка <span class="question">?</span></li>
						<li class="cart__price">1 115 р.</li>
					</ul>
					<ul class="row cart__priceItem">
						<li class="cart__priceOption">НДС 20%:</li>
						<li class="cart__price">1 115 р.</li>
					</ul>
					<ul class="row cart__priceItem">
						<li class="cart__priceOption">Итог:</li>
						<li class="cart__price cart__result">1 115 р.</li>
					</ul>
				</ul>
			</div>
			<div class="cart__form box">
				<div class="cart__formTitle">
					Оформить заказ
				</div>
				<div class="cart__formBlock">
					<div class="cart__formWrapper">
						<input type="text" class="cart__formInput" placeholder="Логин">
						<input type="text" class="cart__formInput" placeholder="Пароль">
						<button class="cart__formButton">
							<span class="cart__btnText">Войти и оформить заказ</span>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19px" height="20px">
								<path fill-rule="evenodd"  opacity="0.851" fill="rgb(255, 255, 255)" d="M17.000,20.000 L6.000,20.000 C4.758,20.000 4.000,19.278 4.000,18.000 L4.000,13.000 L6.000,13.000 L6.000,17.000 C6.000,17.426 6.585,18.000 7.000,18.000 L16.000,18.000 C16.414,18.000 17.000,17.426 17.000,17.000 L17.000,3.000 C17.000,2.574 16.414,2.000 16.000,2.000 L7.000,2.000 C6.585,2.000 6.000,2.574 6.000,3.000 L6.000,7.000 L4.000,7.000 L4.000,2.000 C4.000,0.721 4.758,-0.000 6.000,-0.000 L17.000,-0.000 C18.242,-0.000 19.000,0.721 19.000,2.000 L19.000,18.000 C19.000,19.278 18.242,20.000 17.000,20.000 ZM9.000,7.000 L10.000,6.000 L14.000,10.000 L10.000,14.000 L9.000,13.000 L11.000,11.000 L-0.000,11.000 L-0.000,9.000 L11.000,9.000 L9.000,7.000 Z"/>
							</svg>
						</button>
					</div>
					<div class="cart__footer">
						<div class="box">
							<p class="cart__footerText">
								Для получения персональных и сезонных скидок, а также уникальных предложений предлагаем Вам пройти несложную процедуру <a href="#" class="cart__linkSignUp">Регистрация&nbsp;в&nbsp;магазине</a>
							</p>
							<button class="cart__btnWithout">Купить без регистрации</button>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="block">
				<div class="cart__form">
					<div class="cart__formWrapper">
						<div class="cart__formTitle">
							Оформить Заказ
						</div>
						<input type="text" placeholder="Логин" class="cart__formInput">
						<input type="text" placeholder="Пароль" class="cart__formInput">
						<button class="cart__formButton">
							<span class="cart__btnText">Войти и оформить заказ</span>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19px" height="20px">
								<path fill-rule="evenodd"  opacity="0.851" fill="rgb(255, 255, 255)" d="M17.000,20.000 L6.000,20.000 C4.758,20.000 4.000,19.278 4.000,18.000 L4.000,13.000 L6.000,13.000 L6.000,17.000 C6.000,17.426 6.585,18.000 7.000,18.000 L16.000,18.000 C16.414,18.000 17.000,17.426 17.000,17.000 L17.000,3.000 C17.000,2.574 16.414,2.000 16.000,2.000 L7.000,2.000 C6.585,2.000 6.000,2.574 6.000,3.000 L6.000,7.000 L4.000,7.000 L4.000,2.000 C4.000,0.721 4.758,-0.000 6.000,-0.000 L17.000,-0.000 C18.242,-0.000 19.000,0.721 19.000,2.000 L19.000,18.000 C19.000,19.278 18.242,20.000 17.000,20.000 ZM9.000,7.000 L10.000,6.000 L14.000,10.000 L10.000,14.000 L9.000,13.000 L11.000,11.000 L-0.000,11.000 L-0.000,9.000 L11.000,9.000 L9.000,7.000 Z"/>
							</svg>
						</button>
					</div>
				</div>
				<div class="cart__footer">
					<div class="box">
						<p class="cart__footerText">
							Для получения персональных и сезонных скидок, а также уникальных предложений предлагаем Вам пройти несложную процедуру <a href="#" class="cart__linkSignUp">Регистрация&nbsp;в&nbsp;магазине</a>
						</p>
						<button class="cart__btnWithout">Купить без регистрации</button>
					</div>
				</div>
			</div> -->
			<button class="cart__prev">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26px" height="10px">
				<path fill-rule="evenodd"  fill="#716a6c" d="M26.000,6.000 L4.333,6.000 L7.000,8.000 L6.000,10.000 L-0.007,4.997 L6.000,-0.001 L7.000,2.000 L4.333,4.000 L26.000,4.000 L26.000,6.000 Z" class="prevArrow"/></svg>
				<span class="cart__navText">Назад</span>
			</button>
		</div>
	</div>
</main>

<?php
get_footer();
?>