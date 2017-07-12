<?php
require_once "lib.inc.php";
require_once "data.inc.php";
$title = 'Сайт нашей школы';
$header = "$welcome, Гость";
$id = strtolower(cleanStr($_GET['id']));

switch ($id){
	case 'about':
		$title = 'О сайте';
		$header = 'О нашем сайте';
		break;
	case 'contacts':
		$title = 'Контакты';
		$header = 'Обратная связь';
		break;
	case 'table':
		$title = 'Таблица умножения';
		$header = 'Таблица умножения';
		break;
	case 'calc':
		$title = 'Онлайн калькулятор';
		$header = 'Калькулятор';
		break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title><?= $title?></title>
		<meta http-equiv="content-type"
			content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<?php require_once "top.inc.php";?>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1><?= $header?></h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<?php
			switch ($id){
				case 'about':
					include 'about.php';
					break;
				case 'contacts':
					include 'contact.php';
					break;
				case 'table':
					include 'table.php';
					break;
				case 'calc':
					include 'calc.php';
					break;
				default:
					include 'index.inc.php';
			}
			?>
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<?php require_once "menu.inc.php";?>
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			<?php require_once "bottom.inc.php";?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>