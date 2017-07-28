
<?php
$leftMenu = array(
'home'=>'index.php', 
'about'=>'about.php', 
'contacts'=>'contact.php',
'table'=>'table.php',
'calc'=>'calc.php'
);
?>
<li><a href='<?= $leftMenu['home']?>'>Домой</a></li> 
<li><a href='<?= $leftMenu['about']?>'>Подробнее</a></li>
<li><a href='<?= $leftMenu['contact']?>'>Контакты</a></li>
<li><a href='<?= $leftMenu['table']?>'>Таблица</a></li>
<li><a href='<?= $leftMenu['calc']?>'>Калькулятор</a></li><br><br><br><br><br>



<html> 
<head> 
<meta charset="utf-8"> 
</head> 
<body> 
<?php
/*
* Получаем текущий час в виде строки от 00 до 23
* и приводим строку к целому числу от 0 до 23
*/

$hour = (int)strftime('%H');
$welcome = '';
 if($hour>0 && $hour <6) {
 	$welcome = 'доброй ночи';
}
elseif ($hour>=6 && $hour<12) {
 	$welcome = 'доброе утро';
}
elseif ($hour>=12 && $hour < 18) {
 	$welcome = 'добрый день';
}
elseif ($hour>=18 && $hour <23) {
 	$welcome = 'доброй ночи';

} else{
	$welcome = 'доброй ночи';
}
echo $welcome, ", пользователь!"; 
?><br><br><br><br>
</body> 
</html>
  



<?php
/*Задача 7
Написать код, который выбирает из трех чисел то, которое находится между двумя другими. 
*/
$a = 15;
$b = 120;
$c = 23;
if ($a>$b && $a>$c)
{
 if($b>$c)
 {
  echo $b;
 }
 elseif($c>$b)
 {
  echo $c;
 }
}
elseif ($b>$a && $b>$c)
{
 if($a>$c)
 {
  echo $a;
 }
 elseif($c>$a)
 {
  echo $c;
 }
}
elseif ($c>$a && $c>$b)
{
 if($b>$a)
 {
 	echo $b;
 }
 elseif($a>$b)
 {
 	echo $a;
 }
}
?>
