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
        <div class="dopsite">
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
	            <?php
	            vievProduct($products);
	            ?>
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

