<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<ul>
	<li><a href="?action=list">Главная</a></li>
	<li><a href="?action=add">Добавить пост</a></li>
</ul>
<?php
$actions = ['list', 'delete', 'post', 'add', 'edit'];
$action = isset($_GET['action']) ? $_GET['action'] : 'list';
if (in_array($action, $actions)){
		require_once $action . '.php';
} else {
	echo 'not found';
}


?>	
</body>
</html>


