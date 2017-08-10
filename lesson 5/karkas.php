<!DOCTYPE >
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>skelet</title>
    <style>
        body {
            font-family : "Fira Code", 'serif', Times, Raavi;
            font-size : 20px;
            text-align : center;
            margin : 0 auto;
            padding : 0;
            width : 1000px;
        }
        header {
            height : 100px;
            border : 1px solid black;
        }
        .logo {
            background : #722caa;
            float : left;
            margin : 5px;
            padding : 25px;
            width : 180px;
        }
        .menu_site {
            position: relative;
            top:50px;
            height: 100px;
            float: none;
            margin-top: -20px;
            padding: 0;
            margin-left: 260px;
        }
        .product_categories, .content {
            height : 500px;
            margin : 0 auto;
            padding : 0;
            border : 1px solid black;
        }
        .product_categories {
            width : 300px;
            float : left;
        }
        li {
            list-style: none;
        }
        ul {
            margin-left : 0;
            padding-left : 0;
        }
        .content {
            float : none;
            margin-left: 303px;
        }
        footer {
            height : 50px;
            border : 1px solid black;
            font-size: 20px;
        }
    </style>
</head>
<body>
<div id = "wrapper">
    <div class = "page">
        <header>
            <div class="logo">
                Logo
            </div>
            <div class = "menu_site">
                <?php require_once("C:\OpenServer\domains\RKV\lesson 5\menu.php")?>
            </div>
        </header>
        <aside class="product_categories">

        </aside>
        <div class="content">

            <div class="inner">
                <p>Контент</p>
                <p>Товары</p>
            </div>
        </div>
        <footer>
            <p>Футер (подвал) сайта</p>
        </footer>
    </div>
</div>
</body>
</html>

