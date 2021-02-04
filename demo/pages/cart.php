<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script> -->
<script>
    function save(id){
       var count = document.getElementById("good_"+id).value;//получили актуальное количество товаров
       location.href = "/?page=cart&id_good="+id+"&count="+count;//после этой инструкции запускается инструкция на строке 28

       /* $.ajax({
            type: "POST",
            url: "cart.php",
            data: "action=cart&id="+id+"&good="+good,
            success: function(data){
                $("h2").html(data);
            }
        });*/
    }
</script>
<?php
/*
В данном скрипте реализуется:
1) Вывод корзины покупок
2) Обновление количества товаров
3) Заказ товара
*/


include "config.php";
include "engine/functions.php";
//Обработка заказа
if(isset($_GET['order'])){
    createOrder($connect);
}

if(isset($_GET['finish'])){
    echo "<h1 style='color:green;'>Заказ находится в обработке! Общая стоимость заказа ".$_GET['finish']."<br>Ожидайте звонка! Спасибо за Ваш заказ!</h1>";
}

//Обработка обновления количества товаров
if(isset($_GET['count'])){
    updateCountInCart($connect,$_GET['id_good'],$_GET['count']);
    
}?>
<?php 
        if(!isset($_SESSION['order'])){?>
<h1 align="center">Корзина покупок</h1> <br>
<?php
        }else{?>
        <h1 align="center">Ваши заказанные товары</h1><br>
        <?php }
$sql = "SELECT id_good, title,price*count as sum,count from goods inner join cart ON cart.id_good = goods.id and id_user=".$_SESSION['id_user'];
$res = mysqli_query($connect,$sql);

?>

<table border="1" width="90%" align="center">
    <tr>
        <th>Название товара</th>
        <th>Стоимость товара</th>
        <th>Количество товаров</th>
        <?php 
        if(!isset($_SESSION['order'])){?>
        	<th>Действие</th>
        <?php 
        }?>
        
    </tr>
<?php
    while($data = mysqli_fetch_assoc($res)){?>
    <tr>
        <td><?= $data['title']?></td>
        <td><?= $data['sum']?></td>
        <td><input id="good_<?= $data['id_good']?>" style="width:40px;" type="number" value="<?= $data['count']?>"></td>
        <?php 
        if(!isset($_SESSION['order'])){
        ?>
        <td><a type="button" class="btn btn-block btn-light"  href="#" onclick="save(<?= $data['id_good']?>)">Сохранить</a></td>
  		<?php 
        }
  		?>
    </tr>
<?php
}
?>
</table><br>
<?php
if(empty($_SESSION['order'])){
    
    ?>
<a class="btn btn-warning mt-4" href="/?page=cart&order=true">Заказать</a>
<?php
    }
?>