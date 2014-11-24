<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Header</title>
</head>
<body>
	<div class="header">
		<h1>Заголовок сайта</h1>
		<nav>
			<ul>
			<?php foreach ($pages as $key => $value): ?>
			<li>
				<a href="?page=<?php echo $key; ?>"><?php echo $value; ?></a>
			</li>
			<?php endforeach; ?>
			</ul>
		</nav>
	</div>

