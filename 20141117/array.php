<?php
$friends = array(
	
	'00' => array(
		'firstName' => 'Глеб',
		'surname' => 'Пекный',
		'city' => 'Санкт-Петербург',
		'email' => 'mail@epsi1on.ru',
		'vk' => 'vk.com/epsi1on',
	),
	'01' => array(
		'firstName' => 'Алена',
		'surname' => 'Мамонова',
		'city' => 'Санкт-Петербург',
		'email' => 'alena@mail.ru',
		'vk' => 'vk.com/alena',
	),
	'02' => array(
		'firstName' => 'Даня',
		'surname' => 'Корольков',
		'city' => 'Санкт-Петербург',
		'email' => 'dania@gmail.com',
		'vk' => 'vk.com/daniakor',
	),
);
	echo '<pre>';
 	print_r($friends);
	echo '</pre>';
	echo '<a href="http://' . $friends['01']['vk'] . '">VK</a>';

foreach ($friends as $key => $friend) {
	$novoe_znachenie = $friend['city'];
	$friends[$key]['city'] = $friend['firstName'];

    $vremennoe_znachenie_novoe = $friend['surname'];
    $friends[$key]['surname'] = $novoe_znachenie;

    $friends[$key]['firstName'] = $vremennoe_znachenie_novoe;

}
echo '<pre>';
print_r($friends);
echo '</pre>';
