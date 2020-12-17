<?php
require_once "db.php";
function goodsNew($link, $name, $description, $src, $small_src, $price){


    $t = "INSERT INTO goods (name, description, src, small_src, price) VALUES ('%s','%s','%s','%s','%s')";

    $query = sprintf($t, mysqli_real_escape_string($link, $name),mysqli_real_escape_string($link, $description),mysqli_real_escape_string($link, $src),mysqli_real_escape_string($link, $small_src),mysqli_real_escape_string($link, $price));

    $result = mysqli_query($link, $query);

    if(!$result){
        die(mysqli_error($link));
    }

    return true;
}

function goodsAll($link){
    $query = "SELECT * FROM goods order by id desc";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    while($data = mysqli_fetch_assoc($result)){
        $goods[] = $data;
    }

  /*  $n = mysqli_num_rows($result);
    $goods = [];

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $goods[] = $row;
    }*/

    return $goods;
}

function goodsGet($link, $id){
    $query = sprintf("SELECT * FROM goods where id=%d ",(int)$id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $good = mysqli_fetch_assoc($result);

    return $good;
}

function goodsDelete($link, $id){
    $id = (int)$id;

    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM goods where id='%d'", $id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
}

function goodsEdit($link, $id, $name, $description, $src, $small_src, $price){
    $id = (int)$id;

    $sql = "UPDATE goods SET name='%s',description='%s',src='%s',small_src='%s',price='%s' WHERE id='%d'";

    $query = sprintf($sql, mysqli_real_escape_string($link, $name),mysqli_real_escape_string($link, $description),mysqli_real_escape_string($link, $src),mysqli_real_escape_string($link, $small_src),mysqli_real_escape_string($link, $price),$id);

    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
}