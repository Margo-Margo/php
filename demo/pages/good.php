<?php
include "config.php";
include_once "engine/functions.php";

if(!isset($_SESSION['id_user'])){?>
    <p>Товары можно приобрести только авторизованным пользователям</p>
    <?php
}
$goods = getGoods($connect,'goods');

if(isset($_GET['id'])){
$id= $_GET['id'];
}
$good = getOne($connect, $id, 'goods');
?>



         <? if(!$good){die("Ошибка 404");} ?>
        <div class="card  mb-3 border-secondary p-4 m-2" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-5">
            <img class="card-img-top" src="images/goods/<?= $good['img']?>">
                </div>
                <div class="col-md-7">
            <div class="card-body">
                <h4 class="card-title"><?= $good['title']?></h4>
                <p class="card-text"><?= $good['info']?></p>
                <p style="text-align: left;" class="card-text"><?= $good['description']?></p>
            </div>
            <div class="card-body">

                <h3><?= $good['price']?> руб.</h3>

                <?php
                if(isset($_SESSION['id_user'])){?>
                    <a style="width: 262px;"  class="btn  btn-warning" href="engine/goods.php?id=<?= $good['id']?>">Купить</a>
                    <?php
                }
                ?>
                <span class="d-block mt-2"> <a style="width: 262px;"  class="btn  btn-outline-dark" href="?page=prices">Вернуться в каталог</a></span>
            </div>
            </div>
            </div>
        </div>




