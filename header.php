<?
$arPage = explode('/', $_SERVER['REQUEST_URI']);
$isMain = ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">

	<link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1204px)" href="css/layout-tablet.css">
	<link rel="stylesheet" media="screen and (min-width: 240px) and (max-width: 767px)" href="css/layout-mobile.css">

	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
</head>
<body>
	<div id="panel-menu" class="panel-menu slideout-menu slideout-menu-right"> 
		<h2>Меню</h2>
	</div>
	<div id="panel-page" class="slideout-panel slideout-panel-right">
		<div class="b b-header <?if(!$isMain) echo 'b-header-inner'?>">
			<div class="b-back-dark"></div>
			<div class="b-block">
				<div class="b-header-top clearfix">
					<a href="/" class="b-logo clearfix">
						<div class="text">г. Белгород</div>
						<div class="logo"></div>
					</a>
					<ul class="b-menu-desktop">
						<li><a href="about.php">О компании</a></li>
						<li><a href="catalog.php">Каталог запчастей</a></li>
						<li><a href="services.php">Услуги</a></li>
						<li><a href="news.php">Новости</a></li>
						<li><a href="contacts.php">Контакты</a></li>
					</ul>
					<div class="b-menu-mobile">
						<span class="b-menu-button icon-burger"></span>
						<p>Меню</p>
					</div>
					<div class="b-header-right">
						<a href="tel:+79205783725" class="b-head-phone">+7 (920) 578 37 25</a>
						<br>
						<a href="#" class="b-btn-orange"><span>Заказать звонок</span></a>
					</div>
				</div>
				<div class="b-header-search-cont clearfix">
					<div class="b-header-search">
						<div class="b-btn-header-catalog-cont">
							<a href="#" class="b-btn-header b-btn-header-catalog">
								<span class="b-header-catalog-text">Каталог запчастей</span>
								<span class="icon-menu"></span>
							</a>
							<ul class="catalog-submenu">
								<li>
									<a href="#">Claas</a>
									<ul class="catalog-submenu">
										<li><a href="#">MLT741 120 LSU</a></li>
										<li><a href="#">MLT735 120 LSU</a></li>
										<li><a href="#">MLT735 T LSU</a></li>
										<li><a href="#">MLT731 T</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Monitou</a>
									<ul class="catalog-submenu">
										<li><a href="#">MLT741 120 LSU</a></li>
										<li><a href="#">MLT735 120 LSU</a></li>
										<li><a href="#">MLT735 T LSU</a></li>
										<li><a href="#">MLT731 T</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Кировец</a>
									<ul class="catalog-submenu">
										<li><a href="#">MLT741 120 LSU</a></li>
										<li><a href="#">MLT735 120 LSU</a></li>
										<li><a href="#">MLT735 T LSU</a></li>
										<li><a href="#">MLT731 T</a></li>
									</ul>
								</li>
								<li>
									<a href="#">TERRION</a>
									<ul class="catalog-submenu">
										<li><a href="#">MLT741 120 LSU</a></li>
										<li><a href="#">MLT735 120 LSU</a></li>
										<li><a href="#">MLT735 T LSU</a></li>
										<li><a href="#">MLT731 T</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="b-input-search">
							<input type="text" name="q" placeholder="Поиск по номеру запчасти">
						</div>
						<a href="#" class="b-btn-header b-btn-header-search">Найти</a>
					</div>
				</div>
				<?if($isMain):?>
					<div class="b-header-content">
						<h1><b>Сервисное обслуживание и продажа запчастей</b> <br>для сельхозтехники в Белгороде </h1>
						<div class="b-header-adv-list">
							<div class="b-header-adv-item">
								<div class="b-img" style="background-image: url(i/header-img-1.svg);"></div>
								<div class="b-header-adv-item-right">
									<h3>Большой ассортимент</h3>
									<p>Более 5000 позиций в наличии,<br> как оригинальных так и аналогов</p>
								</div>
							</div>
							<div class="b-header-adv-item">
								<div class="b-img" style="background-image: url(i/header-img-2.svg);"></div>
								<div class="b-header-adv-item-right">
									<h3>Высокое качество работ</h3>
									<p>Гарантия на ремонт двигателя –<br> 500 моточасов</p>
								</div>
							</div>
						</div>
					</div>
				<?endif;?>
			</div>
		</div>

	