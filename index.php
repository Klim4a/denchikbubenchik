<!DOCTYPE html>
<html lang="en">
<head>
	<title>Heros</title>
	<meta charset="utf-8">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;600;700&display=swap" rel="stylesheet">
	<!-- CSS Files -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<!-- header Section -->
	<header>
			
			<!-- Logo  -->
			<a href="#" class="logo">
				<img src="img/logo.png" alt="Heros"/>
			</a>

			<!-- Navigation Menu  -->
			<nav>
				<ul>
					<li><a href="index.html" class="selected">Главная</a></li>
					<li><a href="about.html">О нас</a></li>
					<li><a href="contact.html">Контакты</a></li>
					<li><a href="login.html">
						<?php 
					if (empty($_POST['login'])) {
    					echo "Войти";
					}
					if (isset($_POST['login'])) {
    					echo $_POST['login'];
					} ?>
					</a></li>
				</ul>
			</nav>

	</header><!-- end header -->

	<!-- Slider Section -->
	<section class="slider middle">
   <div class="slides">
      <input type="radio" name="r" id="r1" checked>
      <input type="radio" name="r" id="r2">
      <input type="radio" name="r" id="r3">
      
      <div class="slide s1">
         <img src="img/1234.jpg" alt="Изображение" class="img">
         <h3 class="caption">Cтиль</h3>
      </div>
      <div class="slide">
         <img src="img/12345.jpg" alt="Изображение" class="img">
         <h3 class="caption">Мода</h3>
      </div>
      <div class="slide">
         <img src="img/123456.jpg" alt="Изображение" class="img">
         <h3 class="caption">Heros.</h3>
      </div>
   </div>
   <div class="navigation">
      <label for="r1" class="bar"></label>
      <label for="r2" class="bar"></label>
      <label for="r3" class="bar"></label>
   </div>
</section>







	<section class="main">
		<h1>Варианты нашей одежды</h1>
		<p>Вы можете выбрать всё, что захотите</p>
	</section>
	<br>
		<div class="row3">
			<div class="main-col1">
				<h3>Официальная</h3>
				<p>Пиджаки, жилетки, брюки, рубашки с короткими и длинными рукавами, галстуки, пальто.</p>
				<br>
				<div class="line"></div>
				<div class="row1">
				<div class="main-col">
					<img src="11.jpg">
				</div>
								<div class="main-col">
					<img src="22.jpg">
				</div>
								<div class="main-col">
					<img src="33.jpg">
				</div>
				</div>
				<div class="line"></div>
			</div>
						<div class="main-col1">
				<h3>Повседневная</h3>
				<p>Джинсы, футболки, худи, свитшоты, куртки.</p>
				<br>
				<div class="line"></div>
				<div class="row1">
				<div class="main-col">
					<img src="44.jpg">
				</div>
								<div class="main-col">
					<img src="55.jpg">
				</div>
								<div class="main-col">
					<img src="66.jpg">
				</div>
				</div>
				<div class="line"></div>
			</div>
						<div class="main-col1">
				<h3>Спортивная</h3>
				<p>Спортивные штаны, шорты, бейсболки, гетры, футболки.</p>
				<br>
				<div class="line"></div>
				<div class="row1">
				<div class="main-col">
					<img src="77.jpg">
				</div>
								<div class="main-col">
					<img src="88.jpg">
				</div>
								<div class="main-col">
					<img src="99.jpg">
				</div>
				</div>
				<div class="line"></div>
			</div>
		</div>


	<section class="main">
		<h1>Отзывы наших клиентов</h1>
		<p>Отзывы отражают нашу репутацию и нашу гордость</p>
		<div class="row">
			<div class="testimonial-col">
				<img src="kai.jpg">
				<div>
					<p>Одежда очень понравилась, просто шик и блеск. Буду и дальше здесь покупать. Всем советую и ставлю 5 звёзд</p>
					<h3>Дмитрий Ицков</h3>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>					
				</div>
			</div>
			<div class="testimonial-col">
				<img src="9mice.jpg">
				<div>
					<p>Очень понравилось, покупал штаны. Штаны отличные, красивые, качество ткани тоже супер, отлично впишутся в любой аутфит и прекрасно дополнят ваш образ. Из минусов только то, что они безумно дорогие, за это ставлю 4,5 звезды</p>
					<h3>Сергей Дмитриев</h3>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>				
				</div>
			</div>
		</div>
	</section>



	<footer class="clearfix">
		<div class="container">
			
			<div class="footer_links">

				<!-- Social Media Links  -->
				<div class="sm columns">
					<h3 class="columns_title">Контакты</h3>
					<ul>
						<li>
							<a class="inst" href="https://instagram.com/dxmnch">Instagram</a>
						</li>
						<li>
							<a class="twitter" href="https://instagram.com/dxmnch">Twitter</a>
						</li>
						<li>
							<a class="fb" href="https://instagram.com/dxmnch">Facebook</a>
						</li>

					</ul>
				</div>

				<!-- About Links  -->
				<div class="about columns">
					<h3 class="columns_title">О нас</h3>
					<ul>
						<li>
							<a href="#">Наша компания</a>
						</li>
						<li>
							<a href="#">Контакты</a>
						</li>
						<li>
							<a href="#">Блог</a>
						</li>
					</ul>
				</div>

				<!-- Address  -->
				<div class="address columns">
					<h3 class="columns_title">Адрес</h3>
					<p>Ул. Советская</p>
					<p>Пинск</p>
					<p class="phone">(29) 542-85-02</p>
				</div>

			</div>

		</div>

	</footer><!-- end footer -->



</body>
</html>
