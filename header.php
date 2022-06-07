<?php

/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="body">
	<div class="mmenu">
		<div class="close"><img src="<?php echo get_image('close.svg') ?>" alt=""></div>
		<img class="mob01" src="<?php echo get_image('m01.svg') ?>" alt="">
		<img class="mob02" src="<?php echo get_image('m02.svg') ?>" alt="">
		<img class="mob03" src="<?php echo get_image('m03.svg') ?>" alt="">
		<nav class="mnav">
			<ul>
				<li><a href="<?php echo get_home_url(); ?>#us">О нас </a></li>
				<li><a href="<?php echo get_home_url(); ?>#services">Услуги</a></li>
				<li><a href="<?php echo get_home_url(); ?>#hot">Акции и скидки</a></li>
				<li><a href="<?php echo get_home_url(); ?>#portfolio">Портфолио</a></li>
				<li><a href="<?php echo get_home_url(); ?>blogs/start">Блог</a></li>
				<li><a href="<?php echo get_home_url(); ?>#footer">Контакты</a></li>
			</ul>
		</nav>
		<div class="mtel">
			<a href="tel:74994442813">+7 499 444-28-13</a>
		</div>
	</div>
	<header class="header">
		<div class="banner">
			<div class="container">
				<div class="m12"><img src="<?php echo get_image('in12.svg') ?>" alt=""></div>
				<div class="row">
					<h3>Видео на выпускной вечер со скидкой 20%</h3>
					<a href="http://d.medcongress.su/services/semka-i-montazh-meropriyatij-i-prazdni/">
						<div class="butt">ЗАКАЗАТЬ</div>
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php echo get_image('logo.svg') ?>" alt=""></a>
				<nav class="dtnav">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>#us">О нас </a></li>
						<li><a href="<?php echo get_home_url(); ?>#services">Услуги</a></li>
						<li><a href="<?php echo get_home_url(); ?>#hot">Акции и скидки</a></li>
						<li><a href="<?php echo get_home_url(); ?>#portfolio">Портфолио</a></li>
						<li><a href="<?php echo get_home_url(); ?>/blogs/start">Блог</a></li>
						<li><a href="<?php echo get_home_url(); ?>#footer">Контакты</a></li>
					</ul>
				</nav>
				<div class="tel">
					<a href="tel:74994442813">+7 499 444-28-13</a>
				</div>
				<div class="burger"><img src="<?php echo get_image('burger.svg') ?>" alt=""></div>
			</div>
		</div>
	</header>
	<main class="main">