<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Elen - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.php">SSV<span>.</span></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
                    <li class="colorlib-active"><a href="index.php">Главная</a></li>
					<li><a href="photography.php">Галерея</a></li>
					<li><a href="guestbook.php">Гостевая книга</a></li>
					<li><a href="about.php">About</a></li>

                 <?php if (isset($_SESSION['Admin'])) { ?>

                    <li><a href="adminPanel.php">Админ панель</a></li>
                    <li><a href="formHandlers/signOut.php">Выход</a></li>

                 <?php } else { ?>

                     <li><a href="login.php">Войти</a></li>

                  <?php } ?>

				</ul>
			</nav>

			<div class="colorlib-footer">
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>
		</aside> 