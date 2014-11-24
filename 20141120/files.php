<?php

$text = file_get_contents('hipster.txt');
// var_dump($dataString);
$paragraph = explode("\n\n" , $text);
krsort($paragraph);
$newtext = implode("\n\n" , $paragraph);

$newtext = str_replace("the", "чебурашка", $newtext);


file_put_contents('result.txt', $newtext);

// сделать count()


var_dump($newtext);
