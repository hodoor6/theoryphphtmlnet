<?php

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');


//$name = 'Дима';
//echo 'Привет, '.$name.'!';
//echo'<br>';
//
//$text = 'abcde';
//$text[0] = '!';
//echo $text; //выведет '!bcde'

//$num ='12345';
//
//$num +=$num;
//
//
//echo $result;

//echo date('H:i:s -B' );
//
////date_default_timezone_set("UTC");
////echo "UTC:".time();
//echo "<br>";

/*$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -=15;
echo $var;*/
//$arr=['a', 'b', 'c'];
//
//var_dump($arr);

//$a = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
//echo $a[0].'+'.$a[1].'+'.$a[2];



///$num =['1''2''3''4'5];
//$num =[2,5,3,9];
//
//$num +=$num;
//
//$result = ($num[0]*$num[1])+($num[2]*$num[3]);
//
//
//echo $result;




//$arr = ['a'=>1, 'b'=>2, 'c'=>3];




//echo $arr['c']  + $arr['a'] + $arr['b'];

//var_dump($num);


//echo $arr['b'].'<br>';
//echo $arr['c'].'<br>';

//
//$a = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
//echo $a[1].$a[2];


//$arr = [1=>'пн', 2=>'вт', 3=>'ср', 4=>'чт', 5=>'пт', 6=>'сб', 7=>'вс'];
//$day =4;
//
//
//echo $arr[$day];



//$arr = [
//	'cms'=>['joomla', 'wordpress', 'drupal'],
//	'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
//];
//
//
//
//echo $arr['cms'][0].','."\r";
//echo $arr['cms'][2].','.PHP_EOL;
//echo $arr['colors']['green'].','.PHP_EOL;
//echo $arr['colors']['red'].','.PHP_EOL;




$arr = [
	'ru'=>[1=>'понедельник', 'wordpress', 'cреда'],
	'en'=>[1=>'joomla', 'wordpress', 'wednesday']
];

echo $arr['ru'][1].','."\r".'<br>';  //понедельник
echo $arr['en'][3].','.PHP_EOL.'<br>'; //wednesday


$lang = 'ru';
$day = 3;

$arr1 = [
	'ru'=>[1=>'понедельник', 'wordpress', 'cреда'],
	'en'=>[1=>'joomla', 'wordpress', 'wednesday']
];

echo $arr1[$lang][$day ]; //cреда
