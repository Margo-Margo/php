<?php
include_once $_SERVER['DOCUMENT_ROOT']."/config.php";
function updateCountInCart($connect,$id_good,$count){
    $sql = "update cart set count = $count where
    id_good=$id_good and id_user=".$_SESSION['id_user'];
    
    $res = mysqli_query($connect,$sql);
    if(mysqli_affected_rows($connect)>0){
       // echo "<script>alert('Сохранено!')</script>";
        echo "<h2 style='color:green;'>Количество товаров обновлено!</h2>";
    }
}

function createOrder($connect){
     $sql = "UPDATE cart SET status = 1 where status=0 and id_user=".$_SESSION['id_user'];
     $res = mysqli_query($connect,$sql);
     $check = true;//предположим, что все будет успешно
     if($res){
        $getTotal = "SELECT SUM(goods.price * cart.count) as 'total' from goods inner join cart ON cart.id_good = goods.id where id_user=".$_SESSION['id_user']; 
        $r = mysqli_query($connect, $getTotal);
        $total = mysqli_fetch_assoc($r)['total']; 
         
         
         $createOrder = "INSERT INTO orders(id_user,status_order,TotalSum) 
                         VALUES(".$_SESSION['id_user'].",2,$total)";
         $r = mysqli_query($connect,$createOrder);
         if(mysqli_affected_rows($connect)>0){
             $_SESSION['order'] = "finish";
             echo "<script>location.href = '/?page=cart&finish=$total'</script>";
         }
         else{
             $check = false;
         }
     }
     else{
         $check = false;
     }
     
     if(!$check){
         echo "<script>alert('Возникла ошибка при заказе!')</script>";
     }
}

function getInfoUser($connect,$id_user){//по ID получаем всю информацию о юзере в виде ассоц. массива
    $sql = "SELECT * from users WHERE id_user=$id_user";
    $res = mysqli_query($connect,$sql);
    $data = mysqli_fetch_assoc($res);//data - массив со всеми свойствами юзера
    return $data; 
}

function getTextStatusOrder($connect,$id_status){//по ID получим текст статуса заказа
    $sql = "select * from orderstatus";
    $res = mysqli_query($connect,$sql);
    $option = "";
    while($statuses = mysqli_fetch_assoc($res)){ 
        if($statuses['id'] == $id_status){
            $option .= "<option style='color:red;' value={$statuses['id']} selected>{$statuses['status']}</option>";
        }
        else{
            $option .= "<option value={$statuses['id']}>{$statuses['status']}</option>";
        }
    }
    return $option;
}
function getAllOrders($connect){
    $sql = "SELECT * from orders";
    $res = mysqli_query($connect,$sql);
    
    while($order = mysqli_fetch_assoc($res)){
        $orders[] = $order;//добавление элементов в массив
    }
    return $orders;
}

function updateOrder($connect,$id_order,$id_user){
    $sql = "UPDATE orders SET status_order=$id_order where id_user=$id_user";
    
    $res = mysqli_query($connect,$sql);
    
}

function detailOrder($connect,$id_user){
    $sql = "select id_good, title,price*count as sum,count from goods inner join cart ON cart.id_good = goods.id where id_user=$id_user";
    $res = mysqli_query($connect,$sql);
    while($good = mysqli_fetch_assoc($res)){
        $goods[] = $good;//добавление элементов в массив
    }
    return $goods;
}

function addGood($connect,$title,$description,$price,$info,$img){
    $sql = "insert into goods(title,description,info,price,img) value('$title','$description','$info',$price,'$img')";
    $res = mysqli_query($connect,$sql);
    if($res){
        return 1;
    }
    return 0;
}

function getGoods($connect,$id=0){
    if($id == 0) {
        $sql = "select * from goods";
        $res = mysqli_query($connect,$sql);
        while($good = mysqli_fetch_assoc($res)){//каждую строку в базе с товаром преобразовали в массив $good
            $goods[$good['id']] = $good['title'];//каждый товар добавили в массив товаров $goods
        }
        return $goods;
    }
    else{
        $sql = "select * from goods where id=$id";
        $res = mysqli_query($connect,$sql);
        return mysqli_fetch_assoc($res);//вернули массив из 1 элемента
    }
}

function getOne($connect, $id, $goods){
    $sql = sprintf("SELECT * FROM {$goods} where id=%d",(int)$id);
    $result = mysqli_query($connect, $sql);

    if(!$result)
        die(mysqli_error($connect));

    $res = mysqli_fetch_assoc($result);

    return $res;
}

function deleteGood($connect,$idGood){
    $sql = "delete from goods where id=$idGood";
    $res = mysqli_query($connect,$sql);
    if($res){
        return 1;
    }
    return 0;
}

function updateGood($connect,$title,$description,$price,$info,$img,$id){
    $sql = "update goods set title='$title',description='$description',info='$info',price=$price,img='$img' where id=$id";

    $res = mysqli_query($connect,$sql);
    if($res){
        return 1;
    }
    return 0;
}

function getAll($connect, $table, $orderby='id'){
    $query = "SELECT * FROM {$table} order by {$orderby} desc";
    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

    $n = mysqli_num_rows($result);
    $res = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $res[] = $row;
    }

    return $res;
}

function newComment($connect, $fio, $email, $text){

    $t = "INSERT INTO coments (fio, email, text) VALUES ('%s','%s','%s')";

    $query = sprintf($t, mysqli_real_escape_string($connect, $fio),mysqli_real_escape_string($connect, $email),mysqli_real_escape_string($connect, $text));

    $result = mysqli_query($connect, $query);

    if(!$result){
        die(mysqli_error($connect));
    }
}

