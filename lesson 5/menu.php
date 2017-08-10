<html>
<head>
    <meta charset="utf-8">
</head>
<?php
$leftMenu = array(
    'home'=>'index.php',
    'about'=>'about.php',
    'contacts'=>'contact.php',
    'table'=>'table.php',
    'calc'=>'calc.php'
);


MainMenu($leftMenu,true);

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
    <li><a href='<?php $leftmenu['calc']?>'>Калькулятор</a></li>
</ul>
<?php

}

?>
</html>
