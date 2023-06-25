<!-- Урок 4. Основы бэкенда: PHP и MySQL
Задача №1: сформировать массив с данными для блока «Опыт работы».
Вывести данные массива в HTML-шаблоне. -->
<?php

$my_name = 'Андрей'; // строка

$my_city = 'Москва, Россия'; // строка

$my_profession = 'Студент'; // строка

$my_email = 'email@email.com'; // строка

$my_phone = 89037778866; // десятичное число

$my_age = 2022 - 1979;

$my_days = (2022 - 1979) * 365;

$skills = [

	'skill_name' => ['Adobe Photoshop', 'Фотография', 'JavaScript', 'C#'],

	'level' => [11, 12, 10, 5]

]

?>
<?php

$my_work = 'Опыт работы';
$my_current = 'jan 2022-';
$my_work2 = 'Mar 2012 - Dec 2014';
$my_work1 = 'Jun 2010 - Mar 2012';
$skills1 = [

	'skill_language' => ['Английский', 'Русский',  'Славянский'],

	'level1' => [10, 9, 99]

]



?>


<!DOCTYPE html>

<html>

<head>

	<title>Мое резюме</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="./seminar_4.php">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		html,
		body,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: 'Jost', sans-serif;
		}
	</style>

</head>

<body class="w3-light-grey">

	<!-- Page Container -->

	<div class="w3-content w3-margin-top" style="max-width:1400px;">

		<!-- The Grid -->

		<div class="w3-row-padding">

			<!-- Left Column -->

			<div class="w3-third">

				<div class="w3-white w3-text-grey w3-card-4">

					<div class="w3-display-container">

						<img src="https://www.ejin.ru/wp-content/uploads/2019/05/bez-nazvanija-3.jpg" style="width:100%" alt="Avatar">

						<div class="w3-display-bottomleft w3-container w3-text-black">

							<h2><?php echo $my_name; ?></h2>

						</div>

					</div>

					<div class="w3-container">

						<p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $my_profession; ?></i></p>

						<p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $my_city ?></p>

						<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $my_email ?></p>

						<p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $my_phone ?></p>

						<p><i class="fa fa-hourglass-half fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $my_age ?> лет (<?php echo $my_days ?> дней)</p>

						<hr>

						<p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>

						<p><?php echo $skills['skill_name'][0]; ?></p>

						<div class="w3-light-grey w3-round-xlarge w3-small">

							<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][0]; ?>%"><?php echo $skills['level'][0]; ?>%</div>

						</div>

						<p><?php echo $skills['skill_name'][1]; ?></p>

						<div class="w3-light-grey w3-round-xlarge w3-small">

							<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][1]; ?>%">

								<div class="w3-center w3-text-white"><?php echo $skills['level'][1]; ?>%</div>

							</div>

						</div>

						<p><?php echo $skills['skill_name'][2]; ?></p>

						<div class="w3-light-grey w3-round-xlarge w3-small">

							<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][2]; ?>%"><?php echo $skills['level'][2]; ?>%</div>

						</div>

						<p><?php echo $skills['skill_name'][3]; ?></p>

						<div class="w3-light-grey w3-round-xlarge w3-small">

							<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][3]; ?>%"><?php echo $skills['level'][3]; ?>%</div>

						</div>

						<br>

						<p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>

						<p><?php echo $skills1['skill_language'][0]; ?></p>

						<div class="w3-light-grey w3-round-xlarge">

							<div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $skills1['level1'][0]; ?>%"></div>

						</div>

						<p><?php echo $skills1['skill_language'][1]; ?></p>

						<div class="w3-light-grey w3-round-xlarge">

							<div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $skills1['level1'][1]; ?>%"></div>

						</div>

						<p><?php echo $skills1['skill_language'][2]; ?></p>

						<div class="w3-light-grey w3-round-xlarge">

							<div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $skills1['level1'][2]; ?>%"></div>

						</div>

						<br>

					</div>

				</div><br>

				<!-- End Left Column -->

			</div>

			<!-- Right Column -->

			<div class="w3-twothird">

				<div class="w3-container w3-card w3-white w3-margin-bottom">

					<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i><?php echo $my_work; ?></h2>

					<div class="w3-container">

						<h5 class="w3-opacity"><b>Front End Developer </b></h5>

						<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $my_current; ?> <span class="w3-tag w3-teal w3-round">Current</span></h6>

						<p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste</p>

						<hr>

					</div>

					<div class="w3-container">

						<h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>

						<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $my_work2; ?></h6>

						<p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>

						<hr>

					</div>

					<div class="w3-container">

						<h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>

						<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>

					</div>

				</div>

				<div class="w3-container w3-card w3-white">

					<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>

					<div class="w3-container">

						<h5 class="w3-opacity"><b>gb.ru</b></h5>

						<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>

						<p>Web Development! All I need to know in one place</p>

						<hr>

					</div>

					<div class="w3-container">

						<h5 class="w3-opacity"><b>London Business School</b></h5>

						<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>

						<p>Master Degree</p>

						<hr>

					</div>

					<div class="w3-container">

						<h5 class="w3-opacity"><b>School of Coding</b></h5>

						<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>

						<p>Bachelor Degree</p><br>

					</div>

				</div>

				<!-- End Right Column -->

			</div>

			<!-- End Grid -->

		</div>

		<!-- End Page Container -->

	</div>

	<!-- Footer -->

	<footer class="w3-container w3-teal w3-center w3-margin-top">

		<p>Find me on social media.</p>

		<i class="fa fa-pinterest-p w3-hover-opacity"></i>

		<i class="fa fa-twitter w3-hover-opacity"></i>

		<i class="fa fa-linkedin w3-hover-opacity"></i>

		<!-- End footer -->

	</footer>

</body>

</html>