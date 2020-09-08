<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package korucos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> id="overflov-hidden">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- styles -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/adaptive.css">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>	

	<div class="rightSideBar">
		<div class="rightSideBar__nav-top">
			<div class="rightSideBar__register register-top">
				<div class="rightSideBar__registerButton button-2">
					<button 
						id="closeRegister-top"
						onclick="
							document.querySelector('#hideRegister').classList.toggle('hideRegister'),
							document.querySelector('#hideRegisterBg').classList.toggle('hideRegisterBg'),
							document.querySelector('#closeRegister-top').classList.toggle('closeRegister-top'),
							document.querySelector('#overflov-hidden').classList.toggle('overflov-hidden')
						"
					></button>
				</div>
			</div>
			<div class="rightSideBar__compare compare-top">
				<div class="rightSideBar__compareButton button">
					<button></button>
				</div>
				<div class="rightSideBar__compareQuantity quantity">4</div>				
				<div class="rightSideBar__hideCompare"></div>
			</div>
			<div class="rightSideBar__cart cart-top" id="closeCart-top">
				<div class="rightSideBar__cartButton button">
					<button 
						onclick="
							document.querySelector('#hideCart').classList.toggle('hideCart'),
							document.querySelector('#hideCartBg').classList.toggle('hideCartBg'),
							document.querySelector('#closeCart-top').classList.toggle('closeCart-top')
						"
					></button>
				</div>
				<div class="rightSideBar__cartQuantity quantity">155</div>				
			</div>
			<div class="rightSideBar__menu menu-top">
				<div class="rightSideBar__menuButton">
					<button 
						id="closeMenu-icon-top"
						onclick="
							document.querySelector('#hideMenu').classList.toggle('hideMenu'),
							document.querySelector('#hideBg').classList.toggle('hideBg'),
							document.querySelector('#closeMenu-icon-top').classList.toggle('closeMenu-icon-top')
						"
					></button>
				</div>				
			</div>
			
			
			
		</div>
		<div class="rightSideBar__nav">
			<div class="rightSideBar__menu">
				<div class="rightSideBar__menuButton">
					<button 
						id="closeMenu-icon"
						onclick="
							document.querySelector('#hideMenu').classList.toggle('hideMenu'),
							document.querySelector('#hideBg').classList.toggle('hideBg'),
							document.querySelector('#closeMenu-icon').classList.toggle('closeMenu-icon'),
						document.querySelector('#overflov-hidden').classList.toggle('overflov-hidden')
						"
					></button>
				</div>				
			</div>
			<div class="rightSideBar__cart" id="closeCart">
				<div class="rightSideBar__cartQuantity quantity">155</div>
				<div class="rightSideBar__cartButton button">
					<button 
						onclick="
							document.querySelector('#hideCart').classList.toggle('hideCart'),
							document.querySelector('#hideCartBg').classList.toggle('hideCartBg'),
							document.querySelector('#closeCart').classList.toggle('closeCart'),
						document.querySelector('#overflov-hidden').classList.toggle('overflov-hidden')
						"
					></button>
				</div>
			</div>
			<div class="rightSideBar__compare">
				<div class="rightSideBar__compareQuantity quantity">4</div>
				<div class="rightSideBar__compareButton button">
					<button></button>
				</div>
				<div class="rightSideBar__hideCompare"></div>
			</div>
			<div class="rightSideBar__register">
				<div class="rightSideBar__registerButton button-2">
					<button 
						id="closeRegister"
						onclick="
							document.querySelector('#hideRegister').classList.toggle('hideRegister'),
							document.querySelector('#hideRegisterBg').classList.toggle('hideRegisterBg'),
							document.querySelector('#closeRegister').classList.toggle('closeRegister'),
						document.querySelector('#overflov-hidden').classList.toggle('overflov-hidden')
						"
					></button>
				</div>
				<div class="rightSideBar__registerButton-rotate">
					<button 
						id="closeRegister-rotate"
						onclick="
							document.querySelector('#hideRegister').classList.toggle('hideRegister'),
							document.querySelector('#hideRegisterBg').classList.toggle('hideRegisterBg'),
							document.querySelector('#closeRegister-rotate').classList.toggle('closeRegister-rotate'),
						document.querySelector('#overflov-hidden').classList.toggle('overflov-hidden')
						"
					>Вход</button>
					<button>Регистрация</button>
				</div>
			</div>
			<div class="rightSideBar__number">
				<div style="display: flex; align-items: center;">
					<div>
						<a href="tel:+7 (000) 598-08-48">+7 (000) 598-08-48</a>	
					</div>
					<button 
						class="leftSideBar__openButton" 
						id="closeNumber"
						onclick="
							document.querySelector('#hideNumber').classList.toggle('hideNumber'),
							document.querySelector('#hideNumberBg').classList.toggle('hideNumberBg'),
							document.querySelector('#closeNumber').classList.toggle('closeNumber'),
						document.querySelector('#overflov-hidden').classList.toggle('overflov-hidden')
						"
					></button>
				</div>				
			</div>
		</div>	
		<div class="rightSideBar__pull-outs">
			<!-- <div class="rightSideBar__hideMenu" id="hideMenu">
				<ul>
					<li>
						<a href="#">
							Акция
							<img src="<?php bloginfo('template_directory') ?>/assets/img/png/stock.png" alt="">
						</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
					<li>
						<a href="#">Уход за лицом</a>
						<div class="rightSidebar__hideMenu-items">
							<div class="row"> 
								<div class="column column-1">
									<ul>
										<a href="#">Меню второй уровень</a>
										<li><a href="#">Наполнение тестовое</a></li>
										<li><a href="#">Наполнение тестовое</a></li>
										<li><a href="#">Наполнение тестовое</a></li>
									</ul>
									<ul>
										<a href="#">Второй уровень</a>
										<li><a href="#">Наполнение тестовое</a></li>
										<li><a href="#">Наполнение тестовое</a></li>
										<li><a href="#">Наполнение тестовое</a></li>
									</ul>
								</div>							
								<div class="column column-2">
									<ul>
										<a href="#">Меню второй уровень</a>
										<li><a href="#">Наполнение тестовое</a></li>
										<li><a href="#">Наполнение тестовое</a></li>
										<li><a href="#">Наполнение тестовое с примером ыорматирования</a></li>
										<li><a href="#">Наполнение тестовое</a></li>
									</ul>
									<ul>
										<a href="#">Второй уровень</a>
										<li><a href="#">Наполнение тестовое</a></li>
										<li><a href="#">Наполнение тестовое</a></li>
									</ul>
								</div>	
								<div class="column column-3">
									<ul>
										<a href="#">Меню второй уровень</a>
										<li><a href="#">Наполнение тестовое</a></li>
										<li><a href="#">Наполнение тестовое</a></li>
										<li><a href="#">Наполнение тестовое</a></li>
									</ul>
									<ul>
										<a href="#">Второй уровень</a>
										<li><a href="#">Наполнение тестовое</a></li>
										<li><a href="#">Наполнение тестовое</a></li>
										<li><a href="#">Наполнение тестовое</a></li>
									</ul>
									<ul>
										<a href="#">Текст</a>
									</ul>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<a href="#">Уход за телом</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
					<li>
						<a href="#">Уход вокруг глаз</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
					<li>
						<a href="#">Улиточная косметика</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
					<li>
						<a href="#">Для волос</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
					<li>
						<a href="#">Для мужчин</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
					<li>
						<a href="#">Для детей</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
					<br>
					<li>
						<a href="#">Главная</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
					<li>
						<a href="#">О компании</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
					<li>
						<a href="#">Доставка</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
					<li>
						<a href="#">Оплата</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
					<li>
						<a href="#">Контакты</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
					<li>
						<a href="#">Новости</a>
						<div class="rightSidebar__hideMenu-items"></div>
					</li>
				</ul>
			</div>	 -->
			<div class="rightSideBar__hideMenu-wp" id="hideMenu">
				<?php wp_nav_menu("menu=nav-menu");?>
			</div>

			<div class="rightSideBar__bg" id="hideBg"></div>

			<div class="rightSideBar__hideCart" id="hideCart">
				<div class="top">
					<div class="title">Корзина</div>
					<a href="#">очистить</a>
				</div>
				<div class="products">
					<div class="products-cart">
						<div class="image">
							<img src="<?php bloginfo('template_directory') ?>/assets/img/jpg/cart-1.jpeg" alt="">
						</div>
						<div class="right">
							<div class="description">
								Крем для глаз The Face Shop Calendula Essential
							</div>
							<div class="quantity">
								<input type="number">
							</div>
							<div class="price">924 р.</div>
						</div>
					</div>
					<div class="products-cart">
						<div class="image">
							<img src="<?php bloginfo('template_directory') ?>/assets/img/jpg/cart-2.jpeg" alt="">
						</div>
						<div class="right">
							<div class="description">
								Крем для глаз The Face Shop Calendula Essential
							</div>
							<div class="quantity">
								<input type="number">
							</div>
							<div class="price">1894 р.</div>
						</div>
					</div>
				</div>
				<div class="total">
					<div class="title">Сумма заказа:</div>
					<div class="price">4 234 р.</div>
				</div>	
				<div class="buttons">
					<a href="#">						
						<button>Оформить заказ</button>
					</a>
					<a href="#">
						<button>Перейти в корзину ></button>
					</a>
				</div>	
			</div>
			<div class="rightSideBar__hideCartBg" id="hideCartBg"></div>

			<div class="rightSideBar__hideRegister" id="hideRegister">
				<div class="title">Вход</div>
				<form>
					<input type="text" placeholder="Логин">
					<input type="password" placeholder="Пароль">
				</form>
				<button>Войти</button>
				<div class="link">
					<a href="#">Забыли пароль?</a>
				</div>
				<div class="link">					
					<a href="#">Регистрация</a>
				</div>
				<div class="socials">
					<div class="sub-title">Также Вы можете войти через:</div>
					<div class="social-items">
						<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/icons/icon-1.png" alt=""></a>
						<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/icons/icon-2.png" alt=""></a>	
						<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/icons/icon-3.png" alt=""></a>
						<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/icons/icon-4.png" alt=""></a>
						<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/icons/icon-5.png" alt=""></a>
						<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/icons/icon-6.png" alt=""></a>
						<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/icons/icon-7.png" alt=""></a>
						<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/icons/icon-8.png" alt=""></a>
					</div>
				</div>
				<div class="confirm">
					Я согласен(на) на обработку моих персональных данных.
					<a href="#">Подробнее</a>
				</div>
			</div>	
			<div class="rightSideBar__hideRegisterBg" id="hideRegisterBg"></div>
			
			<div class="rightSideBar__hideNumber" id="hideNumber">
				<div class="rightSideBar__open">
					<div class="rightSideBar__open-content"> 
						<div class="block">
							<div class="title">Телефон:</div>
							<div class="a"><a href="tel:+7 (000) 598-08-48">+7 (000) 598-08-48</a></div>
							<div class="a"><a href="tel:+7 (000) 598-08-48">+7 (000) 598-08-48</a></div>
						</div>
						<div class="block">
							<div class="title">Адрес:</div>
							<div class="text">Текстовый адрес компании, пример наполнения</div>
						</div>
						<div class="block">
							<div class="title">E-mail:</div>
							<div class="text">testpochta@mail.ru</div>
						</div>
						<div class="block">
							<div class="title">Мы в соцсетях</div>
							<div class="socials">
								<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons-grey/1.png" alt=""></a>
								<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons-grey/2.png" alt=""></a>
								<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons-grey/3.png" alt=""></a>
								<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons-grey/4.png" alt=""></a>
								<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons-grey/5.png" alt=""></a>
							</div>
						</div>
					</div>		
				</div>
			</div>
			<div class="rightSideBar__hideNumberBg" id="hideNumberBg"></div>

		</div>
	</div>
	
	<header class="header">
		<div class="header__top" id="adaptiveSearch">
			<div class="header__logo">
				<a href="/">
					<img src="<?php bloginfo('template_directory') ?>/assets/img/png/logo.png" alt="">
				</a>
			</div>
			<div class="header__search">
				<input class="searchInput" type="text" placeholder="Поиск по магазину">
				<div class="header__buttons">
					<div class="advancedSearch">
						<div class="hideMenu">
							<div class="title">Расширенный поиск</div>
							<div class="block">								
								<div class="name">Цена (руб.):</div>
								<div class="inputs">
									<input class="select-price" type="number" placeholder="От">
									<input class="select-price" type="number" placeholder="До">
								</div>
							</div>
							<div class="block">								
								<div class="name">Название:</div>
								<div><input type="text"></div>
							</div>
							<div class="block">							
								<div class="name">Артикул:</div>
								<div><input type="text"></div>
							</div>
							<div class="block">								
								<div class="name">Текст:</div>
								<div><input type="text"></div>
							</div>
							<div class="block">								
								<div class="name">Выберите категорию:</div>
								<div>
									<select>
										<option>Пункт 1</option>
										<option>Пункт 2</option>
									</select>
								</div>
							</div>
							<hr>
							<div>
								<button class="button-search" style="margin: 20px 0;">Найти</button>
							</div>
						</div>
					</div>
					<button class="button-search buttonDisplayNone">Искать</button>
				</div>
			</div>
			<div class="header__nav">
				<nav>
					<li><a href="#" class="danger">% Акция</a></li>
					<li><a href="#">Доставка</a></li>
				</nav>
				
				<button 
					class="button-adaptiveSearch"
					id="adaptiveSearch-hover"
					onclick="
						document.querySelector('#adaptiveSearch').classList.toggle('adaptiveSearch'),
						document.querySelector('#adaptiveSearch-hover').classList.toggle('adaptiveSearch-hover')
					"
				></button>				
			</div>
		</div>		
		<div class="header__menu-wp">
			<?php wp_nav_menu("menu=menu");?>
			<div class="button">
				<button class="points"></button>
			</div>
		</div>	
	</header>
	
	<div class="leftSideBar">
		<div class="leftSideBar__menu">			
			<div class="leftSideBar__menu-items">
				<a href="#">INSTAGRAM</a>
				<a href="#">FACEBOOK</a>
				<a href="#">VK</a>
				<a href="tel:+7 (000) 598-08-48">+7 (000) 598-08-48</a>			
				<button 
					class="leftSideBar__openButton" 
					id="close"
					onclick="
						document.querySelector('#active').classList.toggle('active'),
						document.querySelector('#close').classList.toggle('close'),
						document.querySelector('#overflov-hidden').classList.toggle('overflov-hidden')
					"
				></button>
			</div>			
		</div>
		<div class="leftSideBar__pull-out" id="active">
			<div class="leftSideBar__bg"></div>
			<div class="leftSideBar__open">
				<div class="leftSideBar__open-content"> 
					<div class="block">
						<div class="title">Телефон:</div>
						<div class="a"><a href="tel:+7 (000) 598-08-48">+7 (000) 598-08-48</a></div>
						<div class="a"><a href="tel:+7 (000) 598-08-48">+7 (000) 598-08-48</a></div>
					</div>
					<div class="block">
						<div class="title">Адрес:</div>
						<div class="text">Текстовый адрес компании, пример наполнения</div>
					</div>
					<div class="block">
						<div class="title">E-mail:</div>
						<div class="text">testpochta@mail.ru</div>
					</div>
				</div>		
			</div>	
		</div>
	</div>

