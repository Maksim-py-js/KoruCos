<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package korucos
 */

?>

	<footer class="footer">		
		<div class="footer__submit">
			<div class="footer__submit-box box">
				<div class="hr"></div>
				<div class="footer__submit-title">Подпишись на нашу рассылку</div>
				<div class="footer__submit-subTitle">Подпишись на нашу рассылку и получи доступ к скидкам до 50% каждую неделю!</div>
				<div class="footer__submit-form">
					<input type="text" placeholder="Имя *">
					<input type="text" placeholder="E-mail *">
					<button class="footer__submit-button">Подписаться</button>
				</div>
			</div>			
		</div>
		<div class="footer__main">			
			<div class="footer__scrollTop">
				<button class="footer__scrollTop-button" id="scrollTop-button"></button>
			</div>
			<div class="footer__box">
				<div class="footer__row">
					<div class="footer__column footer__column-menu  footer__column-menu-1">
						<div class="footer__menu">
							<ul>
								<li><a href="#">Главная</a></li>
								<li><a href="#">О компании</a></li>
								<li><a href="#">Доставка</a></li>
								<li><a href="#">Оплата</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</div>
					</div>
					<div class="footer__column footer__column-menu  footer__column-menu-2">
						<div class="footer__menu">
							<ul>
								<li><a href="#">Новости</a></li>
								<li><a href="#">Акция</a></li>
								<li><a href="#">Адреса</a></li>
								<li><a href="#">Вопрос-ответ</a></li>
								<li><a href="#">Отзывы о нас</a></li>
							</ul>
						</div>
					</div>
					<div class="footer__column">
						<div class="footer__container">
							<div class="footer__title">Санкт-Петербург</div>
							<div class="footer__subTitle">Ленинский просп.,151, офис 711</div>
						</div>
						<div class="footer__container">
							<div class="footer__subTitle">Работаем с 10:00 до 22:00</div>
							<div class="footer__title">8 (000) 000-00-00</div>
							<div class="footer__title">8 (000) 123-45-67</div>
						</div>
						<div class="footer__container">
							<div class="footer__subTitle">Мы в соцсетях</div>
							<div class="footer__socials">
								<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons/1.png" alt=""></a>
								<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons/2.png" alt=""></a>
								<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons/3.png" alt=""></a>
								<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons/4.png" alt=""></a>
								<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/social-icons/5.png" alt=""></a>
							</div>
						</div>
					</div>
					<div class="footer__column">
						<div class="footer__container">
							<div class="footer__title">Способы оплаты</div>
							<div class="footer__pay">
								<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/icons/9.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer__row">				
					<div class="footer__copyright">
						<div class="footer__logo">
							<a href="/">
								© 2020 KORU<span>COS</span>
							</a>
						</div>
						<div class="footer__copyright-text">
							<p>Интернет-магазин</p>
							<p>Корейской косметики</p>
						</div>	
					</div>
					<div class="footer__sketches">
						<img src="<?php bloginfo('template_directory') ?>/assets/img/png/footer__sketches.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- scripts -->
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/jQuery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/plugin/slick-1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/slider-horizontal.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				

	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/plugin/slick-1.8.1/slick/slick-theme.css
	">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/plugin/slick-1.8.1/slick/slick.css">
</body>
</html>
