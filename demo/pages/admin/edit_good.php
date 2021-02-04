<?php
include_once "engine/functions.php";
if($_GET['success'] == 1){?>
    <h1 style="color: red;">Товар успешно обновлен!</h1><br>
<?php }



if($_GET['action'] != "edit") {
    $goods = getGoods($connect);//получаем массив всех товаров
}
else{
    $good = getGoods($connect,$_GET['id']);//получаем массив из 1 товара?>

    <form method="post" action="engine/edit_goods.php" enctype="multipart/form-data">
        <input name="id" type="hidden" value="<?= $_GET['id']?>">
        <p>Название товара</p>
        <input class="form-control" name="title" type="text" value="<?= $good['title']?>">
        <p>Стоимость товара</p>
        <input class="form-control" name="price" type="text" value="<?= $good['price']?>">
        <p>Информация о товаре</p>
        <textarea class="form-control" name="info" cols="30" rows="10" value="<?= $good['info']?>"><?= $good['info']?></textarea>
        <p>Подробное описание</p>
        <textarea class="form-control" name="description" cols="30" rows="10" value="<?= $good['description']?>"><?= $good['description']?></textarea>
        <p>Изображение товара</p>
        <img name="img" width="100" src="images/goods/<?= $good['img']?>" alt="">
        <input type="file" accept="image/*" name="photo"><br><br>
        <input type="submit" class="btn btn-warning mt-4" value="Сохранить">
    </form>

    <?php
}


if($_GET['action'] == 'delete'){
    if(deleteGood($connect,(int)$_GET['id']) == 1){?>
        <h1 style="color:red;">Товар удален</h1>
   <?php }
}

if($_GET['action'] != "edit") {
?>

<h1>Редактирование товаров</h1><br>

<table align="center" border="1" width="600">
    <tr>
        <th>Название товара</th>
        <th>Действие</th>
    </tr>
    <?php
    if(!empty($goods)){
    foreach ($goods as $id => $title){?>
        <tr>
            <td><?= $title?></td>
            <td>
                <a type="button" class="btn btn-light" href="/?page=edit_good&action=delete&id=<?= $id?>">Удалить товар</a>
                <a type="button" class="btn btn-light" href="/?page=edit_good&action=edit&id=<?= $id?>">Редактировать товар</a>
            </td>
        </tr>
    <?php
    }
    }
    else{?>
        <h1>Товары отсутствуют!</h1>
    <?php
    }
    ?>

</table>
<?php
}
?>