<?php
header('Content-Type: text/html; charset=utf-8');


require_once __DIR__.'\..\data\menu.php';
require_once __DIR__.'\..\data\categories.php';
require_once __DIR__.'\..\data\products.php';

/*Построение дерева категорий*/
function makeTree($categories,$parent_id=0) {
    $results=array();
    if ($categories) {
        foreach ($categories as $key => $category) {
            if ($category->parent_id==$parent_id) {
                if ($category->id!=$parent_id) {
	                $subcategories = makeTree( $categories, $category->id );
	                if ( !empty( $subcategories ) ) {
			                $category->subcategories = $subcategories;
		                }
	                }
                $results[]=$category;
                unset($category);
            }
        }
    }
    return $results;
}

/*Вывод дерева категорий*/
function viewCategories($categories) {
    if($categories) { // проверка лишней не бывает
        echo "<ul>";
        foreach ($categories as $category) {
            if($category->visible) { //важная проверка, которая позволит выводит только включенные категории на сайте
                echo
                "<li><a href='?r=categories&id=".$category->id."'>$category->name</a></li>";
                if(isset($category->subcategories)) {
                    // проверяем есть ли подкатегории и вызываем заново функцию для вывода
                    viewCategories($category->subcategories); // передаем в функцию уже массив обьектов покатегорий
                }
            }
        }
        echo "</ul>";
    }
}
/*функция меню*/

function viewMenu($pages) {
	echo '<ul class="nav navbar-nav">';
    if($pages) {
        foreach ($pages as $page) {
            if ($page->visible && $page->menu_id == 1) {
                if($page->url == '') {
                    echo "<li class='nav-link'><a href='".$_SERVER['SCRIPT_NAME']."'>$page->name</a></li>";
                } else {
                    echo "<li class='nav-link'><a href='?r=pages&id=".$page->id."'>$page->name</a></li>";
                }

            }
        }
        echo '</ul>';
    }
}

function getPage($pages,$page_id) {
    if($page_id) {
        return $pages[$page_id];
    }
}
///*функция для товаров*/
//function getProduct($products,$id) {
//    if($id) {
//        return $products[$id];
//    }
//}

/*функция для товаров*/
function vievProduct($products) {
	if($products) {
		foreach ($products as $product) {
			if ($product->visible == 1) {
				$respons = '<div class="cont">';
				$respons .= '<div class="img">';
				if($product->images){

				}
				if($product->created){
					$respons .= '<p style="float: right; font-size: 7px; margin-top: 2px;">.'.$product->created.'</p>';
				}
				$respons .= '</div>';
				if($product->name){
					$respons .= '<p>'.$product->name.'</p>';
				}
				if($product->id){
					$respons .= '<p style="float:right ">'.$product->id.'</p>';
				}
				if(isset($product->price)){
					$respons .= '<p style="float:left ">'.$product->price.'</p>';
				}
				if($product->variants){
					$respons .= ' <div class="var">';
					foreach ($product->variants as $variants) {
						$respons .= '<p style="font-size: 7px; line-height: 0.4;  ">'.$variants->name.','. $variants->price.'</p>';
					}
					$respons .= '</div>';
				}
				$respons .= '</div>';
				echo $respons;
			}
		}
	}
}
