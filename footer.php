		<div class="b-footer">
			<div class="b-block">
				<div class="b-footer-top">
					<a href="/" class="b-logo b-footer-logo clearfix">
						<div class="text">г. Белгород</div>
						<div class="logo"></div>
					</a>
					<ul class="b-footer-menu">
						<li><a href="services.php">Услуги сервиса</a></li>
						<li><a href="about.php">О компании</a></li>
						<li><a href="news.php">Новости</a></li>
						<li><a href="contacts.php">Контакты</a></li>
					</ul>
					<div class="b-footer-right">
						<a href="tel:+79205783725" class="b-footer-phone">+7 (920) 578 37 25</a>
						<br>
						<a href="mailto:info@tehpartner.ru" class="b-footer-email">info@tehpartner.ru</a>
					</div>
				</div>
				<div class="b-footer-bottom clearfix">
					<div class="b-footer-bottom-left">
						<div class="b-copyright">© 2019 ООО «Техпартнер»</div>
						<a href="policy.pdf">Политика конфиденциальности</a>
					</div>
					<a href="//redder.pro/" class="b-redder" target="_blank"></a>
				</div>
			</div>
		</div>
		<div class="b-menu-overlay" id="b-menu-overlay"></div>
	</div>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<!-- <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false&key=AIzaSyD6Sy5r7sWQAelSn-4mu2JtVptFkEQ03YI"></script> -->
	<? if($_SERVER['REQUEST_URI'] == "/contacts.php"): ?>
		<script src="https://api-maps.yandex.ru/2.0-stable/?apikey=dcf82496-06b7-476e-b6f8-0078e5d46b67&load=package.standard&lang=ru-RU&onload=yandexMapInit" type="text/javascript"></script>
	<? endif; ?>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/slideout.min.js"></script>
	<script type="text/javascript" src="js/jquery.touch.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<? if( !(strpos($_SERVER['HTTP_USER_AGENT'],'MSIE')!==false || strpos($_SERVER['HTTP_USER_AGENT'],'rv:11.0')!==false) ): ?>
		<script type="text/javascript" src="js/imask.min.js"></script>
	<? else: ?>
		<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<? endif; ?>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>