<?php
include_once "../models/db_goods.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Интернет-магазин новогодних ёлок</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>

<body> 
<div id="container">
    <? include "../templates/header.php"; ?>
    <div class="leftblock">
        <? include "../templates/menu.php"; ?>
    </div>
    <div class="content">
        <h1>Интернет-магазин новогодних ёлок</h1>
        <p class="hello">Праздник Нового Года всегда ассоциировался со временем, когда оживает сказка. В этот день хочется волшебства не только детям, но и взрослым, а потому они стремятся создать соответствующую атмосферу, чтобы прочувствовать все чудеса самого главного дня в году.

Приглашаем вас воспользоваться услугами нашего интернет-магазина елочных украшений и новогоднего декора «Eli-Store». Здесь вы найдете уникальные коллекции украшений для елок от европейских производителей из Бельгии, Англии, Германии и Нидерландов. </p>
        <hr>
        <?php
        $goods = goodsAll($link);
        if($goods){
            foreach ($goods as $good){?>
                <div class="item">
                    <a href="item.php?id=<?=$good['id']?>"><img src="<?=$good['small_src']?>" alt="<?=$good['name']?>" title="<?=$good['name']?>"></a>
                    <h3 class="item-name"><a href="item.php?id=<?=$good['id']?>"><?=$good['name']?></a></h3>
                    <p class="price"><?=$good['price']?>р.</p>
                    <p class="add-to-basket"><a href="#" title="Добавить в корзину">Купить</a></p>
                </div>
            <?}
        }
        ?>
    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>