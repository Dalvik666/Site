

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Тестовое задание</title>

</head>

<body>
<center><div id="div1">
<?php
echo '<h3>'."Подсчет чисел в диапазоне".'</h3>';
echo "Все числа - ";
for($i = 10; $i <= 53;$i++){

echo $i.' ';

}
echo '<br />';
echo "Простые - ";
for($i = 10; $i <=53; $i++){
	for($j = 2; $j <=53; $j++){
	if ($i%$j>=1)
 
				
     echo $i." ";
}}
echo '<hr />';
?>

<?php
echo '<h3>'."Функция возведения в степень".'</h3>';
function func($m, $st){
	$sum2 = 1;
	for($i = 0; $i < $st; $i++){
	$sum2 = $sum2*$m;
	}
	return $sum2;
}
echo "Число в степени = ".func(3,3);
echo '<hr />';
?>



<?php
echo '<h3>'."Создание двумерного массива".'</h3>';
$arr = array(array('a' => 14, 'b' => 17,'c' => 21), array('a' => 15,'b' => 18,'c' => 22), array('a' => 11,'b' => 17,'c' => 20));
    foreach($arr as $base_key => $base_value){
		foreach($base_value as $key => $value){
			echo $value, ' ';
			
		}
		echo '<br />';
	}
echo '<hr />';
?>

<?php
echo '<h3>'."Посчитать площадь трапеции".'</h3>';

for($i = 0; $i < count($arr); $i++){
	
	$s1 = 0.5*$arr[$i]['c']*($arr[$i]['a']+$arr[$i]['b']);
		$arr[$i]['s'] = $s1;	
		echo $i+1 ." - ая трапеции = ".$arr[$i]['s'].'<br />';
}
echo '<hr />';
?>

<?php
echo '<h3>'."Минимальное число в массиве".'</h3>';
function minimum(){
	
$ch1 = func_get_arg(0);
   $n = func_num_args();
   for($i = 0; $i < $n; $i++)
	   
   if ($ch1 > func_get_arg($i)) $ch1 = func_get_arg($i);
      return "Minimum is - ".$ch1;
 

}
echo minimum(13, 42, 3);

echo '<hr />';
?>

<?php
echo '<h3>'."Формула".'</h3>';

	for($i = 0; $i <count($arr); $i++){
$f=($arr[$i]['a']*func($arr[$i]['b'], $arr[$i]['c'])+func((func($arr[$i]['a']/$arr[$i]['c'], $arr[$i]['b'])%3), minimum($arr[$i]['a'], $arr[$i]['b'], $arr[$i]['c'])));
$arr[$i]['f'] = $f;
echo $i+1 .' - ая формула = '.$arr[$i]['f'].'<br />';
		

	}

echo '<hr />';
?>

<?php

echo '<h3>'."Трапеции с нечетной площадью".'</h3>';

for ($i = 0; $i < count($arr); $i++){
	if ($arr[$i]['s'] % 2 == 1) echo $arr[$i]['s'].', ';
}

echo '<hr />';
?>
<h3>Таблица</h3>
<table>

<tr>
<th>a</th>
<th>b</th>
<th>c</th>
<th>s</th>
<th>f</th>
</tr>
</table>
<?php


for($i = 0; $i <count($arr); $i++){
	echo $arr[$i]['a'].' | '.$arr[$i]['b'].' | '.$arr[$i]['c']. ' | '.$arr[$i]['s'].' | '.$arr[$i]['f'].' | '.'<br />';
}
?>

</div></center>
</body>

</html>