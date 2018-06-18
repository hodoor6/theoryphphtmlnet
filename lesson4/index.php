<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');


//$a = 0;

/*
	Если переменная $a НЕ равна нулю, то выведи 'верно',
	иначе (если не равна нулю) выведи 'неверно'
//*/
//if ($a == 0) echo 'Верно!'; else echo 'Неверно!';
//
//$a = 1;
//
///*
//	Если переменная $a НЕ равна нулю, то выведи 'верно',
//	иначе (если не равна нулю) выведи 'неверно'
//*/
//if ($a === '1') echo 'Верно!'; else echo 'Неверно!';



//	$a = null ;
//	//Если $a пустое, то...
//	if (!empty($a)) echo 'Верно!'; else echo 'Неверно!'; //выведет 'Верно!'

//
//$a = 3;

////Если $a НЕ существует то...
//if (!isset($a)) echo 'Верно!'; else echo 'Неверно!';

/*
	Выведет 'Неверно!', так как $a существует.
*/

//	$a = 66;
//	//Если $a пустое, то...
//	if (!isset($a)) echo 'Верно!'; else echo 'Неверно!'; //выведет 'Верно!'
//
//
//$a = -3;
//$b = -3;
///*
//	Если $a больше нуля ИЛИ $b меньше нуля - хотя бы один из них, то...
//	выведет 'Верно!', так как хотя $a и не больше нуля,
//	но одно из условий -  $b < 0 - выполнится!
//*/
//if ($a > 0 or $b < 0) echo 'Верно!'; else echo 'Неверно!';
//
//
//$a = 2;
//if ($a > 0 and $a < 5) {
//	echo 'Верно';
//} else {
//	echo 'Неверно';
//}

//
//$a= 4;
//
//if($a==0 or $a==4){
//	 $a+=7;
//
//}
////else{
////	echo $a/=10;
////}
////
////echo $a;
////
//
//
//$num = 7;
//
//switch($num) {
//	case $num >= 1 && $num <= 10:
//		 $result = '1Зима';
//		echo $result;
//		break;
//
//	case 2:
//		$result = '2Весна';
//		return $result;
//		break;
//
//	case 3:
//		$result = 'Лето';
//		return $result;
//		break;
//
//	case $num >= 21 && $num <= 31:
//		$result = 'Осень';
//
//		break;
//
//	default:
//		echo $result = 'Не сезон';
//		break;
//}
//
//echo $result;

//$num = 24;
//
//if($num >= 1 && $num <= 10){
//	echo $result = '1Не сезон';
//}elseif($num >= 11 && $num <= 20){
//	echo $result = '2Не сезон';
//}elseif($num >= 21 && $num <= 31){
//	echo $result = '3Не сезон';
//}


//$var = 'abvcde';
//
//
//if($var[0] == 'v' and $var[1] == 'e' and $var[2] == 'v' ){
//	echo 'да'; //
//	}else{
//	echo 'нет'; //
//}


$var = '123326';


if($var[0] + $var[1] + $var[2] == $var[3] + $var[4] + $var[5]){
	echo 'да';
}else

	echo 'нет';

$year = 2000;
if ($year % 4 == 0 or ($year % 400 == 0 and $year % 100 != 0)) {
	echo 'Високосный';
} else {
	echo 'Не високосный';
}


//$lang ='ru';
//
//switch ($lang) {
//	case 'ru':
//		echo 'Русский текст';
//		break;
//	case 'en':
//		echo 'Английский текст';
//		break;
//	case 'de':
//		echo 'Немецкий текст';
//		break;
//	default:
//		echo 'Данный язык не поддерживается';
//		break;
//}