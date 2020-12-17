<?php
if(isset($_GET['id'])){
	$id= (int)($_GET['id']);
}
include_once "../models/db_goods.php";
$good = goodsGet($link, $id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Интернет-магазин ноутбуков</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <?php include "../templates/header.php"; ?>
    <div class="leftblock">
        <? include "../templates/menu.php"; ?>
    </div>
    <div class="content">
        <ul class="breadcrumbs">
            <li><a href="index.php">Главная</a></li> <span>&raquo;</span>
            <li><?= $good['name']?></li>
        </ul>
            <div class="item-content">
                <h2><?= $good['name']?></h2>
                <div class="img-big"><img src="<?=$good['src']?>" alt="<?=$good['name']?>" title="<?=$good['name']?>"></div>
                <div class="item_desc clearfix">
                    <h3>Описание товара:</h3>
                    <div class="short">
                        <p><?=$good['description']?></p>
                    </div>
                    <div class="o-pay">
                        <p class="price"><?=$good['price']?>р.</p>
                        <p class="add-to-basket"><a href="#" title="Добавить в корзину">Купить</a></p>
                    </div>
                </div>
            </div>
        </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>