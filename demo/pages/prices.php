<?php
include "config.php";


$sql = "SELECT * from goods";

$res = mysqli_query($connect,$sql);//запустили запрос sql на сервере
?>
<h1>Каталог товаров</h1><br>
<?php
if(!isset($_SESSION['id_user'])){?>
<p>Товары можно приобрести только авторизованным пользователям</p>
<?php
}


if(isset($_GET['success'])){
    if($_GET['success'] == 1){
    echo "<h1 style='color:green;'>Товар успешно добавлен в корзину!</h1>";
   
    } else{
        echo "<h1>Ошибка при добавлении товара</h1>";
    }
}
?>


<div class="d-flex flex-wrap justify-content-between">
    <?php
        while($data = mysqli_fetch_assoc($res)){//$data - ассоциативный массив каждой строки таблицы?>

    <div class="item card border-secondary p-4 m-2" style="width: 17rem;">

       <a href="/?page=good&id=<?=$data['id']?>"><img class="card-img-top" src="images/goods/<?= $data['img']?>" alt="<?=$data['title']?>" title="<?=$data['title']?>"></a>
       
        <!--<img class="card-img-top" src="images/goods/<?= $data['img']?>"> -->
        <div class="card-body">
            <h4 class="card-title"><?= $data['title']?></h4>
            <p class="card-text"><?= $data['info']?></p>
        </div>
            <div>

            <h3 class="card-title"><?= $data['price']?> руб.</h3>

                <?php
                if(isset($_SESSION['id_user'])){?>
                    <a class="btn btn-block btn-warning" href="engine/goods.php?id=<?= $data['id']?>">Купить</a>
                <?php
                }
                ?>


        </div>
    </div>

<?php
}
?>
</div>


