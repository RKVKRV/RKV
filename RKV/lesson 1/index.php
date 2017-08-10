<html>
<head>
</head>
<body>
<form name="a" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
 months: January, February, March, April, May, June, July, August, September ,October,November, December <br>
<input type="text" name="a">
<input type="submit">
</form>
<?php 
 
if($_GET['a']=="January")
{
echo "now is winter ";
}
	else if($_GET['a'] == "February")
{
	echo "now is winter";
}
		else if($_GET['a'] == "March")
{
		echo "now is spring";
}			else if($_GET['a'] == "April")
{
			echo "now is spring";
}				else if($_GET['a'] == " May")
{
				echo "now is  spring";
}					else if($_GET['a'] == "June")
{
					echo "now is summer";
}						else if($_GET['a'] == "July")
{
						echo "now is summer";
}							else if($_GET['a'] == "August")
{
							echo "now is summer";
}								else if($_GET['a'] == "September")
{
								echo "now is Autumn";
}
									else if($_GET['a'] == "October")
{
									echo "now is Autumn";
}
										else if($_GET['a'] == "November")
{
										echo "now is Autumn";
}
											else if($_GET['a'] == "December")
{
											echo "now is winter";
}

echo "<br>","<br>";



/*задача 3
С помощью конструкции Switch
Выведите фразу «это рабочий день» или «это выходной день»
В зависимости от дня недели. 
Сами создайте переменную date и запишите в нее случайное число от 1 до 7
*/
$date = 3;
switch ($date){
	case ($date >= 1 && $date <= 5):
	echo 'seichas bydni den';
	break;
		case($date >= 6 && $date <= 7):
		echo 'seichas vihodnoi den';
		break;
			default:
			echo 'vvedeno ne pravelnoe znachenie';
			}

/*1.	Даны натуральные числа. 
Найдите остатки от деления этих чисел на 3 и на 5. 
*/
$a = 143;
$b = 127;
echo $a%3,"\n", $a%5,"\n", $b%3,"\n", $b%5;
/*
2.	Дано число. Увеличьте его на 30%, на 120%. 
*/

$chislo = 1000;
echo $chislo*1.3,'  ', 'yvelichenie na 30%',"\n";
echo $chislo*2.2,'  ', 'yvelichenie na 120%',"\n";
echo $chislo*1.3+$chislo*2.2 ,'  ', 'summa',"\n";
$procent = $chislo*1.3;
echo $procent*2.2 ,'  ', 'yvelichenie s yvelicheniem';

/*3.	Дано два числа. 
Найдите сумму 40% от первого числа и 84% от второго числа.
*/

$pervoe = 10;
$vtoroe = 100;
echo $pervoe *0.4,'  ', '40% pervogo chisla',"\n";
echo $vtoroe*0.84,'  ', '84% vtorogo chisla',"\n";
echo $pervoe *0.4 + $vtoroe*0.84, '  ', 'summa procentov';

echo "<br>","<br>";


/*
Задача 5
1.	Дано число. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30. Дано натуральное число. 
Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза. 
2.	Дано число. Если оно не меньше 50, то выведите квадрат этого числа, если же это число больше 10 и меньше 30, то выведите ноль,
 в остальных случаях выведите слово "Ошибка" 
3.	Дано два числа. Вывести наибольшее из них. 
4.	Дано два числа. Вывести 'Да', если они отличаются на 100, иначе вывести 'Нет' Дано два числа. Вывести 'Да', если они отличаются не более чем на 20,
 иначе вывести 'Нет'. 
Дан номер месяца. Вывести название поры года (весна, лето и так далее) или слово 'Ошибка', если месяца с таким номером не существует.
   Вычислите значение выражения   Перед вычислением проверить корректность значений переменных.

*/

$a = 23;
switch ($a) {
		case ($a>10):
		echo $a+100;
		break;
			case ($a<10):
			echo $a-30;
			break;
	
default:
echo 'ne pravilno zadano chislo';
	
}





$nat = 234;
switch ($nat) {
	    case ($nat % 2 == 0):
		echo 'vvedennoe chislo chetnoe', '  ','ono delitsa na 2 i polychitsa','  ', $nat/2 ;
		break;
           case ($nat % 2 == 1):
		   echo 'vvedennoe chislo ne chetnoe', '  ','ono ymnojaetsa na 3 i polychitsa','  ', $nat*3;
		   break;
	          
}




/*2.	Дано число. Если оно не меньше 50, то выведите квадрат этого числа, если же это число больше 10 и меньше 30, то выведите ноль,
 в остальных случаях выведите слово "Ошибка"*/

 $a = 51;
 switch ($a) {
 		case ($a > 50):
 		echo pow($a, 2);
 		break;
 		  case ($a > 10 && $a < 30):
 		  echo '0';
 		  break;
 	
 			default:
 			echo 'failed';
 			break;
 }




/*3.	Дано два числа. Вывести наибольшее из них.*/

$a = 2;
$b = 5;
switch ($a) {
		case ($a>$b):
		echo $a;
		break;
			case ($a<$b):
			echo $b;
			break;
	
			default:
			echo 'chisla ravni';
			break;
}

echo "<br>","<br>";

/*4.	Дано два числа. Вывести 'Да', если они отличаются на 100, иначе вывести 'Нет' Дано два числа. Вывести 'Да', если они отличаются не более чем на 20,
 иначе вывести 'Нет'. */

 $a =10;
 $b=110;
 switch ($a) {
 	case ($a - $b == 100 || $b - $a == 100):
 		echo 'da';
 		break;
 	
 	default:
 		echo 'net';
 		break;
 }


echo "<br>","<br>";


/*Дано два числа. Вывести 'Да', если они отличаются не более чем на 20,
 иначе вывести 'Нет'. */
$a = 140;
$b = 120;
switch ($a) {
	case ($a - $b <= 20 && $b - $a <= 20):
		echo 'da';
		break;
	
	default:
		echo 'net';
		break;
}

echo "<br>","<br>";

/*Дан номер месяца. Вывести название поры года (весна, лето и так далее) или слово 'Ошибка', если месяца с таким номером не существует.
*/
$mes = 12;
switch ($mes) {
		case ($mes == 12 || $mes == 1 || $mes == 2):
		echo 'seithas zima';
		break;
			case ($mes == 3 || $mes == 4 || $mes == 5):
			echo 'seithas vesna';
			break;
				case ($mes == 6 || $mes == 7 || $mes == 8):
				echo 'seithas leto';
				break;
					case ($mes == 9 || $mes == 10 || $mes == 11):
					echo 'seithas osen';
					break;
	
	default:
		echo 'mesatsa s takim nomerom ne syschestvyet';
		break;
}





/* задание с формулой*/
$x = 30;
$y = 10;
echo (pow($x,2) - 4*sqrt($y-1))/ (sin(2*$x) +abs($x));
?>
</body>
</html>