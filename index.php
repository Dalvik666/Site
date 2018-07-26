 <?php
    $host="localhost";
    $user="root";
    $pass="root"; //установленный вами пароль
    $db_name="test_rubric";
    $link=mysql_connect($host,$user,$pass);
    mysql_select_db($db_name,$link);  
?> 

 <?php

    $sql = mysql_query("SELECT ID, Name, code, price FROM products", $link);
	
	$sq = mysql_query("SELECT MIN(price) FROM products", $link);
	while ($result = mysql_fetch_array($sql)) {	
	
	
        echo '<table>'.$result['ID'].": ".$result['Name'].": code: ".$result['code']." price: ".$result['price']." рублей".'</table>'."<br />";
		
    }
	
	
	while ($result = mysql_fetch_array($sq)) {	
	
	
        echo '<table>'."Minimal price - ".$result['MIN(price)']." рублей".'</table>'."<br />";
		
    }

	
	

	
?> 


<?php
echo '<h3>'."Сортировка двумерных массивов по заданному ключу".'</h3>';

$arr = array(array ('a' => 14, 'b' => 12), array('a' => 7, 'b' => 25), array('a' => 45, 'b' => 18), array('a' => 2, 'b' => 18));

$sort = ($arr[0]['a']);
for ($i = 0; $i < count($arr); $i++){
	if($arr[$i]['a'] < $sort) $sort = $arr[$i]['a']; sort($arr);
	
	
		echo $arr[$i]['a']." ".$arr[$i]['b'].'<br />';
	}
	
echo '<hr />';
?>



<?php
echo '<h3>'."Замена второго вхождения".'</h3>';
$mystring = 'coffeecoffee';
$findme   = 'of';
$findme2 = strrev($findme);
$pos1 = strpos($mystring, $findme);
$pos2 = strpos($mystring, $findme, $pos1 + strlen($findme));   
	if ($pos1 == true) echo substr_replace($mystring, $findme2, strpos($mystring, $findme, $pos1 + strlen($findme)), strlen($findme));
echo '<hr />';
?> 