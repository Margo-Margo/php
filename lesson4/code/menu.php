<?php
echo "<hr/>";
	$menu = ['Курсы' => ['Программирование' => 'https://geekbrains.ru/courses/14', 'Web-дизайн' => 'https://geekbrains.ru/courses/484'],
		'Вебинары' => ['Создание сайта за час' => 'https://geekbrains.ru/events/741', 'Создание игры на Android' => 'https://geekbrains.ru/events/682'],
		'Форум' => 'https://geekbrains.ru/topics'];
	$str = "<ul>";
	foreach($menu as $item => $subitem) {
		if(is_array($subitem)) {
			$str .= "<li>$item</li><ul>";
			foreach($subitem as $iitem => $ssubitem) {
				$str .= "<a href=$ssubitem><li>$iitem</li></a>";
			}
			$str .= "</ul>";
		} else {
			$str .= "<a href=$subitem><li>$item</li></a>";
		}
	}
	$str .= "</ul>";
	echo $str;