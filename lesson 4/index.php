<?php
/*Задача 2
Cоздать массив из 1000 чисел каждый элемент которого равен квадрату своего номера.
Результат вывести в виде таблицы (офорить ее рамкой)

*/
echo 'zadacha 2';
$r = array();
for ($i=0;$i<100;$i++){
    $r[$i]=$i*$i;
}
echo "<pre>";
print_r($r);
echo "</pre>";
echo "<br>";

/*Задача 3
Создайте массив из 1000 случайных чисел. Определите, есть ли в массиве повторяющиеся элементы*/

echo 'zadacha 3', "<br>";
$ar = array();
for ($i=0; $i <1000; $i++) { 
 	$ar[$i] = rand(1,1000);
 } 
echo "<pre>";
print_r(array_count_values($ar));
echo "</pre>";
echo "<br>";


/*Задача 4
Создать массив из 100 случайных чисел. Найти сумму чисел, которые кратны 5-ти(пяти)*/
echo 'zadacha 4', "<br>";
$arr = array();
$s = 0;
for ( $i = 1; $i < 101; $i++) 
{ 
 	$arr[$i] = rand(1,100);
 if ($arr[$i]%5 == 0) 
 	{
 	$s += $arr[$i];
    }
}	
echo $s;
echo "<br>","<br>","<br>";


/*задача 5
*/
echo 'zadacha 5', "<br>";
$stroka="zdarova"; 
if ( strlen($stroka) > 10) { 
for ($i=0; $i < 6; $i++) { 
echo $stroka[$i]; 
} 
} else { 
for ($i = 0; $i < 12; $i++) { 
$stroka = $stroka."o"; 
} 
echo $stroka; 
}
echo "<br>","<br>","<br>";





/*Задача 6
Сгенерировать массив из 10-ти случайных чисел. 
После этого, сгенерировать одно случайно число и проверить, входи ли оно в данный массив.
*/
echo 'zadacha 6', "<br>";
$mas = array();
for ( $i = 0; $i < 10; $i++) 
{ 
 	$mas[$i] = rand(1,100);
}
 $chislo = rand(1,100);
 if (in_array($chislo, $mas)) 
    {
    echo "chislo  $chislo   vhodit v masiv";
    }
 else 
    {
 	echo "chislo $chislo  ne vhodit v masiv";
 	} 
 	echo "<br>","<br>";




/*Задача 7
Создать массив из 100 случайных как чисел так и ключей. После этого выполнить:
Сортировку массива по значению
Сортировку массива по ключу.
*/
echo 'zadcha 7',"<br>";
echo 'po klutchu',"<br>";
$massiv = array();
for ($i=0; $i <100; $i++) { 
    $massiv[rand(1,1000)] = rand(1,1000);
 } 
   ksort($massiv);
foreach ($massiv as $key => $value) {

    echo $value = $key . "<br>" ;
}
echo "<br>","<br>";

echo 'po znacheniu',"<br>";
$massiv = array();
for ($i=0; $i <100; $i++) { 
    $massiv[rand(1,1000)] = rand(1,1000);
 } 
  asort($massiv);
foreach ($massiv as $key => $value) {

    echo $kay = $value . "<br>" ;
}
echo "<br>","<br>";


/*Задача 8
Создать два массива из 10-ти случайных чисел.
Выполнить сравнения массивов по двум критеряим: вычислить схождение массива, вычислить расхождение массива.
*/
echo 'zadanie 8', "<br>";
echo 'rashozdenie massivov' , "<br>";
$task8 = array();
$zad8 = array();
for ($i=0; $i <10; $i++) { 
    $task8[$i] = rand(1,100);
 } 
for ($i=0; $i <10; $i++) { 
    $zad8[$i] = rand(1,100);
 } 
$result = array_diff($task8, $zad8);
echo "<pre>";
print_r ($result) ;
echo "</pre>";
echo 'shozdenie massivov' , "<br>" , "<br>";
$result2 = array_intersect($task8, $zad8);
echo "<pre>";
print_r ($result2);
echo "</pre>";
echo "<br>";

/*Задача 9
Создать массив из 50-ти случайных чисел. Генерируя случайно число, проверять есть ли такой ключ в данном массив.
array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс
*/
echo 'zadanie 9', "<br>";
$zad9 = array();
for ($i=0; $i <50; $i++) { 
    $zad9[$i] = rand(1,100);
 } 
 $sl = rand(1,100);
 if (array_key_exists($sl, $zad9) == 1 ) {
      echo 'dannui cluch presutstvuet v massive';
  } 
  else {
    echo 'dannui cluch ne presutstvuet v massive';
  }
  echo "<br>","<br>","<br>";

  /*Задача 10
Создать массив из 100 случайных ключей. Создать еще один массив, 
который будет содержать все ключи первого массива. 
Использовать функции php, не писать «велосипед»

*/
echo 'zadanie 10', "<br>";
$zad10 = array();
$task10 = array();
for ($i=0; $i < 100; $i++) { 
 $zad10[rand(1,9000)] = rand(1,9000) ;
 }
$result = array_merge($zad10, $task10);
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<br>","<br>","<br>";

/*Задача 11
Создать массива з 10-ти чисел. Вычислить произведение значений массива. Не использовать для решения задачи циклы.
*/
echo 'zadanie 11', "<br>";
echo 's ciklom',"<br>";
$zad11 = array();
for ($i=0; $i < 10; $i++) { 
     $zad11[$i] = rand(1,10);
 }
 echo "<pre>";
print_r(array_product($zad11));
echo "</pre>";

 array_product($zad11);
echo 'bez cikla', "<br>";
$task11 = array(1,123,2,4,3,45,36,34,66,24);
echo "<pre>";
print_r(array_product($task11));
echo "</pre>";
echo "<br>","<br>","<br>";


/*Задача 12
задание с треугольником единичками*/
echo 'zadacha 12', "<br>";

$height=10;


for($y=1; $y<=$height; $y++){
    
    echo str_repeat(' ',$height-$y);
    echo str_repeat('1',$y*2-1). "<br>";
    
     
}

echo "<br>","<br>";
 

















