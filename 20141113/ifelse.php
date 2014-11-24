<?php
function textByAge($age = 99)
$age = '26';
if ($age<20) {
	echo "Всё впереди Jack";
} elseif ($age>20 && $age<30) {
	echo "Самое время взяться за ум";
} elseif ($age>30) {
	echo "У вас есть чему поучиться, Jack";
}

for ($i =1; $i<=100; $i++){
	textByAge($i);
	echo "br/>";
}