<?php

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
//$sqrt = 1000;
//	$arr = [sqrt($sqrt), floor($sqrt), ceil($sqrt)];
//var_dump( $arr );

//$a=81;
//$b=3;
//
//echo $c = $a % $b;
//
//if($c==0){
//	echo 'делится';
//}else{
//	echo 'net';
//}
//
//echo $st = sqrt(245);
////echo $st = pow(2,3);

//$arr = [4, 2, 5, 19, 13, 0, 10];
//$r=0;
//
//foreach($arr as $v){
//	echo $r += pow($v,2). '<br>';
//
//}
//
//echo sqrt($r);
//
//echo '<br>';
//
//$arr = [4, 2, 5, 19, 13, 0, 10];
//$sum = 0;
//
//foreach ($arr as $elem) {
//	$sum += $elem * $elem;
//}
//
//$result = sqrt($sum);
//echo $result;

//echo sqrt(587);
//echo '<br>';
//echo $arr['floor']= floor(sqrt(587));
//echo '<br>';
//echo $arr['ceil']= ceil(sqrt(587));
//
//
//var_dump( $arr);
//
//echo max([4, -2, 5, 19, -130, 0, 10]);
//echo min(4, -2, 5, 19, -130, 0, 10);

//for ( $i = 1, $j= 15; $i <=10; $i ++) {
//	echo $arr[] = mt_rand($i,$j). '<br>';
//}
//var_dump( $arr);
//
//$i = 0;
//$j= 10;
//$arr = ['1'=>'50'];
//while (  $i < 10) {
//	echo $arr[] = mt_rand(1,1000). '<br>';
//
//	$i ++;
//}
//var_dump( $arr);

//
//$a = -5;
//$b= 10;
//
//echo abs($a-$b);

//$arr = ['1', 2, -1, -2, 3, -3];
//
//foreach ($arr as $v=>$k){
//$res[] = abs($k);
//}
//var_dump( $res );



//$a = 30;
////
//$arr =[1=>1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//$r=0;
//foreach ($arr as $k=>$v){
//	$r+=$v;
//if ($r==10) {
//	echo $k;
//}
//}


//$num = 1000;
//$i = 0;
//while ($num > 10) {
//	$num /= 2;
//	$i++;
//}
//
//echo $i.'<br>'; //кол-во итераций
//echo $num; //число, которое получилось


//$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//$sum = 0;
//$i = 0;
//
//foreach ($arr as $elem) {
//	$i++; //считает количество элементов
//	$sum += $elem;
//
//	if ($sum > 10) {
//		break; //выйдем из цикла - цель достигнута
//	}
//}
//
//echo $i;


$arr = [];
$num = 30;

for ($i = 1; $i <= $num; $i++) {
	if ($num % $i==0) {
		$arr[] = $i;
	}
}

var_dump($arr);


$a=20;
$b=1.5;

echo $c = floor($a / $b);