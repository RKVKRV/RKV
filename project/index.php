<?php require_once 'html/functions.php' ?>
<!DOCTYPE >
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>skelet</title>
    <link  rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body>
<div id = "wrapper">
    <div class = "page">
        <header>
            <div class="logo">
                Logo
            </div>
            <div class = "menu_site">
                <?php viewMenu($pages) ?>
            </div>
        </header>
        <aside class="product_categories">
            <?php
            $categories_tree = makeTree($categories);
            viewCategories($categories_tree);
            ?>
        </aside>
        <div class="content">

            <div class="inner">

                <p>Контент</p>
                <p>Товары</p>
                <div class="cont">
                    <div class="img">
                        <p style="float: right; font-size: 7px; margin-top: 2px;">09/10/17</p>
                        <p style=" margin-top :40px; ">изображение товара</p>
                    </div>

                    <p>название товара</p>
                    <p style="float:left ">цена</p>
                    <p style="float:right ">артикул</p>

                        <div class="var">
                            <p style="font-size: 7px; line-height: 0.4;  ">Название варианта, цена варианта</p>

                        </div>

                </div>
                <div class="cont">
                    <div class="img">
                        <p style="float: right; font-size: 7px; margin-top: 2px;">09/10/17</p>
                        <p style=" margin-top :40px; ">изображение товара</p>
                    </div>

                    <p>название товара</p>
                    <p style="float:left ">цена</p>
                    <p style="float:right ">артикул</p>

                    <div class="var">
                        <p style="font-size: 7px; line-height: 0.4;  ">Название варианта, цена варианта</p>

                    </div>

                </div>
                <div class="cont">
                    <div class="img">
                        <p style="float: right; font-size: 7px; margin-top: 2px;">09/10/17</p>
                        <p style=" margin-top :40px; ">изображение товара</p>
                    </div>

                    <p>название товара</p>
                    <p style="float:left ">цена</p>
                    <p style="float:right ">артикул</p>

                    <div class="var">
                        <p style="font-size: 7px; line-height: 0.4;  ">Название варианта, цена варианта</p>

                    </div>

                </div>

            </div>
        </div>
        <footer>
            <p>Футер (подвал) сайта</p>
        </footer>
    </div>
</div>
</body>
</html>
