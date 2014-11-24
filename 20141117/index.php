<?php
header('Content-Type: text/html; charset=utf-8');

$page = isset($_GET['page']) ? $_GET['page'] : 'main';
$pages = array(
	'main' => 'Главная',
	'contacts' => 'Контакты',
	'about' => 'Обо мне'
);

	require 'header.php';
	$input = isset($_GET['page']) ? $_GET['page'] : 'main';
	
	if($input == "contacts"){
		require 'contacts.php';
	}
	elseif($input == "about"){
		require 'about.php';
	}
	elseif($input == "main"){
		require 'main.php';
	}
	else{
		require '404.php';
	}
	require 'footer.php';

	