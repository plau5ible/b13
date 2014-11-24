<form action="" method="post">
	<input type="text" name="title"/>
	<textarea name="content"></textarea>
	<input type="submit" name="Yeah"/>
</form>

<?php

if (!empty($_POST['title']) && !empty($_POST['content'])){
var_dump($_POST);
	$filename = 'post.txt';
	$fileContents = file_get_contents($filename);
	$fileContents = $_POST['title'] . "\n-----\n" . $_POST['content'] . "\n=====\n" . $fileContents;

	file_put_contents('post.txt', $fileContents);
}