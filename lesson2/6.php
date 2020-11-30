<?php 

/* 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты */


$hours = date ("G");
$mins = date ("i");


if($hours == 1 || $hours == 21) {
    $hours =  " час ";
}
elseif($hours == 2 || $hours == 3 || $hours == 4 || $hours == 23) { 
    $hours =  " часа ";
}
else { 
$hours = " часов ";
}

if($mins == 01 || $mins == 21 || $mins == 31 || $mins == 41 || $mins == 51 ) {
    $mins = " минута ";
}
elseif($mins == 02 || $mins == 03 || $mins == 04 || $mins == 22 || $mins == 23 || 
$mins == 24 || $mins == 32 || $mins == 33 || $mins == 34 || $mins == 42 || $mins == 43 ||
 $mins == 44 || $mins == 52 || $mins == 53 || $mins == 54) {
    $mins = " минуты ";
}
else { 
    $mins = " минут ";
}


echo date ("Текущее время: G $hours i $mins");

?>