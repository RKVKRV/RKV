<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/*Задание 1*/
echo 'zadanie 1', "<br>","<br>";
table(10,10,"7100ff");

table(5,7,"000");

table(8,4,"8fff00");
function table($col,$row,$color){
    $data = '<table style="color:'. $color.';border: 10px solid Blue;">';
    for($i =1; $i <= $col; $i++){
        $data .= '<tr>';
        for($j =1; $j <= $row; $j++) {
            $data .= '<td style="border: 2px solid black;">';
            $data .= $i*$j;
            $data .= '</td>';
        }
        $data .= '</tr>';
    }
    $data .= '</table>';
    echo $data;
}
 echo "<br>","<br>","<br>";

/*рекурсия*/

echo 'zadanie 3',"<br>","<br>";
$cat_1 = new stdClass();
$cat_1->name = 'Бытовая техника';
$cat_1->url = 'url_1';
$cat_1->visible = 1;

$cat_4 = new stdClass();
$cat_4->name = 'A5';
$cat_4->url = 'url_1';
$cat_4->visible = 1;

$cat_3 = new stdClass();
$cat_3->name = 'Samsung';
$cat_3->url = 'url_3';
$cat_3->visible = 1;
$cat_3->subcategories = array(0=>$cat_4);

$cat_2 = new stdClass();
$cat_2->name = 'Мобильные телефоны';
$cat_2->url = 'url_2';
$cat_2->visible = 1;
$cat_2->subcategories = array(0=>$cat_3);

$cat_5 = new stdClass();
$cat_5->name = 'Пылесосы';
$cat_5->url = 'url_5';
$cat_5->visible = 1;

/*Создание массива с обьектами категорий START*/
$categories = array(
    0 => $cat_1,
    1 => $cat_2,
    2 => $cat_5,
);
/*Создание массива с обьектами категорий END*/

/*
 * В данном примере я создал массиов обьектов, для того что показать работу
 * рекурсивной функции именно с таким форматом данных.
 * В нашей CMS мы будем строить именно таким образом данные.
 *
 * */
function getCategories($categories) {
    if($categories) { // проверка лишней не бывает
        echo "<ul>";
        foreach ($categories as $category) {
            if($category->visible) { //важная проверка, которая позволит выводит только включенные категории на сайте
                echo "<li>$category->name </li>";
                if(isset($category->subcategories)) {
                    if ( $category->subcategories ) {
                        // проверяем есть ли подкатегории и вызываем заново функцию для вывода
                        getCategories( $category->subcategories ); // передаем в функцию уже массив обьектов покатегорий
                    }
                }
            }
        }
        echo "</ul>";
    }
}
getCategories($categories);

echo "<br>","<br>","<br>";

/*Создайте функцию MainMenu() с двумя аргументами.
Первый аргумент $menu - в него будет передаваться массив, содержащий структуру меню
Второй аргумент $type со значением по умолчанию равным true.
Данный параметр указывает, каким образом будет отрисовано меню -
вертикально или горизонтально.
Измените код таким образом, чтобы меню отрисовывалось в зависимости от
входящего параметра $type - либо вертикально, либо горизонтально
Отрисуйте оба таких меню.
*/
$leftMenu = array(
    'home'=>'index.php',
    'about'=>'about.php',
    'contacts'=>'contact.php',
    'table'=>'table.php',
    'calc'=>'calc.php'
);

MainMenu($leftMenu,true);
MainMenu($leftMenu,false);

function MainMenu($leftmenu,$type){	?>
<style>
    ul.MainMenu li {
        list-style-type: none; /* Убираем маркеры */
    }
    ul.headerVert {
        margin: 0; /* Обнуляем значение отступов */
        padding: 4px; /* Значение полей */
    }
    ul.headerVert li {
        display: inline; /* Отображать как строчный элемент */
        margin-right: 5px; /* Отступ слева */
        border: 1px solid #000; /* Рамка вокруг текста */
        padding: 3px; /* Поля вокруг текста */
    }
</style>
<ul class="MainMenu <?php if($type==true){?> headerVert  <?php }  ?>">
    <li><a href='<?php $leftmenu['home']?>'>Домой</a></li>
    <li><a href='<?php $leftmenu['about']?>'>Подробнее</a></li>
    <li><a href='<?php $leftmenu['contacts']?>'>Контакты</a></li>
    <li><a href='<?php $leftmenu['table']?>'>Таблица</a></li>
    <li><a href='<?php $leftmenu['calc']?>'>Калькулятор</a></li><br>
</ul>
<?php

}

?>