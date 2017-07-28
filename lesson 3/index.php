<?php
/*Задание 1.
 Вывести четные числа от 0 до 101, с помощью цикла while.*/
$i = 0;
echo 'zadanie 1', "</br>";
while ($i <= 101) 
{
	if ($i%2 == 0) 
	{
		echo $i;
	}
	$i++;
} 
?><br><br><br><br>
<?php
/*Задание 2.
Вывести числа в следущей последовательности: 200 199 198 … 0. Задание решите с помощью цикла for*/
echo 'zadanie 2', "</br>";
for ($i=200; $i >= 0; $i--) 
{ 
	echo  $i;
} 
?>
<br><br><br><br>

<?php
/*Задание 3.
 Найти сумму чисел от 0 до 100 (включительно). (0+1+2+3+4+5).Задачу решите с помощью цикла for.*/
echo 'zadanie 3', "</br>";
 for ($summa = 0,$i=0; $i < 101; $i++) 
 { 
 	 $summa= $summa + $i;;
 }
 echo $summa;
?>
<br><br><br><br>

 <?php
/*
Задание 4
 дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. 
 С помощью цикла foreach выведите эти слова в столбик.
*/
echo 'zadanie 4', "</br>";
$arr = array('css', 'php', 'js', 'jq');
foreach ($arr as $kay =>$value )
{
	echo $value ."<br>";
}
?>
<br><br><br><br>


<?php 
/*Задача 5
Вывести строку Hello World! в столбец при помощи цикла for*/

echo "Zadanie 5 <br>"; 
$vivod="Hello World!"; 
for ($i=0; $i < 12; $i++){ 
echo $vivod[$i]."<br>"; 
} 
?> 

<br><br><br><br>


<html> 
<head> 
<meta charset="utf-8"> 
</head> 
<body> 
<?php

/*Задача 6
Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'.
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
*/
echo 'zadanie 6', "</br>";
$arr3 = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr3 as $value =>$kay )
{
	echo $value,'-', $kay . "<br>";
}
?>
</body>
</html>
<br><br><br><br>



<?php


/*Задача 7
Создать массив из 100 случайных чисел используя функцию rand. Ключи массива должны быть созданы в обратном порядке. [100]=> число, [99]=> число.*/

	echo 'zananie 7' ."<br>";
 $r = array();
for($i = 0; $i < 100; $i++){
	 $r[$i] = rand(0,1000) ;
}
	foreach ($r as $kay => $value){
		echo (100-$kay) ,'  -  ', $value . '<br>';
	}

echo "<br>","<br>";
/*Задача 8
Создать таблицу умножения 10 на 10 при помощи цикла for и разукрасить каждое число разным цветом.
Подсказка: создайте массив из 10 кодов разных цветов, и меняйте цвет текста каждого числа, выбирая его из массива цветов.*/
echo 'zadanie 8';
echo '<table>'; 
$chisla = array(array()); 
$colors = array(array()); 
for ($i=1; $i <=10 ; $i++) { 
	for ($j=1; $j <=10 ; $j++) { 
	$chisla [$i][$j] = $i*$j; 
	} 
} 
for ($i=1; $i <=10 ; $i++) { 
	for ($j=1; $j <=10 ; $j++) { 
	$colors [$i][$j] = rand(100, 999); 
	} 
} 
for ($i=1; $i <=10 ; $i++) { 
	for ($j=1; $j <=10 ; $j++) { 
	echo '<td style="border:1px solid black; background:#',$colors[$i][$j],';">', $chisla [$i][$j] , '</td>' ; 
	} 
echo '<tr>' ; 
}
?>