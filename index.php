<?
	include "header.php";
?>

<div class="b-content">
	<div class="b b-1">
		<div class="b-block">
			<h2 class="center">Почему <b>нам доверяют</b> клиенты?</h2>
			<div class="b-1-list">
				<div class="b-1-item">
					<div class="b-img" style="background-image: url(i/b-1-worker.svg);"></div>
					<h3>Проверенные профессионалы</h3>
					<p>Вы не усомнитесь в профессионализме наших специалистов. Каждый из них <b>дважды в год проходит обучение </b> и подтверждает свою квалификацию.</p>
				</div>
				<div class="b-1-item">
					<div class="b-img" style="background-image: url(i/b-1-medal.svg);"></div>
					<h3>Честная гарантия</h3>
					<p>Гарантия на капитальный ремонт двигателя <b>500 моточасов</b>. Ваша техника может годами стоять после ремонта, но гарантия будет все еще действовать!</p>
				</div>
				<div class="b-1-item">
					<div class="b-img" style="background-image: url(i/b-1-tools.svg);"></div>
					<h3>Техническая оснащенность</h3>
					<p>Наша мастерская оборудована <b>всем необходимым инструментом</b>  для капитального ремонта вашей техники.  Мы исправим любую поломку!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-2">
		<div class="b-block clearfix">
			<div class="b-2-content">
				<h2><b>Скорая помощь </b><br> в «полевых условиях»!</h2>
				<p>Вам не обязательно пригонять технику к нам.<br> В период сельскохозяйственных работ наши специалисты  по первому звонку и в кратчайшие сроки проведут <b>выездное  обслуживание вашей техники с полной гарантией качества!</b></p>
			</div>
		</div>
	</div>
	<div class="b b-3">
		<div class="b-block clearfix">
			<div class="b-3-left">
				<h2>Вам <b>срочно требуется</b>  ремонт техники?</h2>
				<p>Заполните форму, специалист компании «ТехПартнер» свяжется с Вами и рассчитает стоимость ремонта</p>
				<div class="b-3-manager">
					<div class="b-img" style="background-image: url(i/b-3-man.jpg);"></div>
					<div class="b-3-manager-text">
						<h3>Александр Петров</h3>
						<p>Менджер отдела по ремонту</p>
					</div>
				</div>
			</div>
			<div class="b-3-right">
				<form class="b-3-form" action="callback.php" method="post">
					<div class="b-input">
						<input type="text" name="name" class="b-input-name" placeholder="Ваше имя" required>
					</div>
					<div class="b-input">
						<input type="text" name="phone" class="b-input-phone" placeholder="Ваш телефон" required>
					</div>
					<input type="text" name="MAIL" required placeholder="Ваш e-mail">
					<a href="#" class="b-btn-orange b-btn-input ajax"><span>Перезвоните мне</span></a>
					<div class="b-checkbox">
						<input id="b-3-checkbox" type="checkbox" name="politics" checked required>
						<label for="b-3-checkbox">
							<div class="b-checked icon-check"></div>
							<p>Я принимаю условия передачи информации</p>
						</label>
					</div>
				</form>
				<div class="b-3-contacts">
					<p>или позвоните нам: <a href="tel:+79205783725"><b>+7 (920) 578 37 25</b></a></p>
					<p>Работаем по будням с 10:00 до 18:00</p>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-reviews">
		<div class="b-back-dark"></div>
		<div class="b-block">
			<h2 class="center white"><b>Отзывы</b> наших клиентов</h2>
			<div class="b-reviews-list">
				<div class="b-reviews-item">
					<div class="b-img" style="background-image: url(i/review-1.jpg);"></div>
					<p>15 ноября 2019 г.</p>
					<h3>Отзыв о канатах «Мобидик»</h3>
				</div>
				<div class="b-reviews-item">
					<div class="b-img" style="background-image: url(i/review-2.jpg);"></div>
					<p>25 декабря 2019 г.</p>
					<h3>Отзыв от ООО «Национальная Контейнерная Компания»</h3>
				</div>
				<div class="b-reviews-item">
					<div class="b-img" style="background-image: url(i/review-3.jpg);"></div>
					<p>10 октября 2019 г.</p>
					<h3>Отзыв от ОАО «ВВМЭСС»</h3>
				</div>
			</div>
			<div class="center">
				<a href="reviews.php" class="b-btn-tr white">Смотреть все отзывы</a>
			</div>
		</div>
	</div>
	<div class="b-news">
		<div class="b-block">
			<h2 class="center"><b>Новости</b></h2>
			<div class="b-news-list">
				<a href="detail.php" class="b-news-item">
					<div class="b-img-cont">
						<div class="b-img" style="background-image: url(i/news-1.jpg);"></div>
					</div>
					<div class="b-news-item-content">
						<div class="date">25 декабря 2019 г.</div>
						<h3>Очередное поступление редукторов и концевых передач на наш склад</h3>
					</div>
				</a>
				<a href="detail.php" class="b-news-item">
					<div class="b-img-cont">
						<div class="b-img" style="background-image: url(i/news-2.jpg);"></div>
					</div>
					<div class="b-news-item-content">
						<div class="date">15 ноября 2019 г.</div>
						<h3>Партия оригинальных гидроцилиндров DOOSAN на нашем складе</h3>
					</div>
				</a>
				<a href="detail.php" class="b-news-item">
					<div class="b-img-cont">
						<div class="b-img" style="background-image: url(i/news-3.jpg);"></div>
					</div>
					<div class="b-news-item-content">
						<div class="date">5 июня 2019 г.</div>
						<h3>12 июня – День России! График работы.</h3>
					</div>
				</a>
			</div>
			<div class="center">
				<a href="news.php" class="b-btn-tr">Смотреть все новости</a>
			</div>
		</div>
	</div>
	<div class="b-seo">
		<div class="b-block b-text">
			<h2>Сервисное обслуживание и продажа запчастей для сельхозтехники</h2>
			<p>Разнообразный и богатый опыт начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании модели развития. С другой стороны дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям. С другой стороны дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения.</p>
			<p>Повседневная практика показывает, что дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание системы обучения кадров, соответствует насущным потребностям. Таким образом новая модель организационной деятельности играет важную роль в формировании направлений прогрессивного развития. Не следует, однако забывать, что рамки и место обучения кадров влечет за собой процесс внедрения и модернизации соответствующий условий активизации.</p>
		</div>
	</div>
</div>

<?
	include "footer.php";
?>
