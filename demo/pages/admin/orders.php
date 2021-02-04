<script>
	function changeStatus(id,id_user){//id - это id статуса заказа
		location.href="/?page=edit_orders&id_order="+id+"&id_user="+id_user;
	}
</script>
<?php 

include 'engine/functions.php';
if(isset($_GET['id_order'])){
    updateOrder($connect,$_GET['id_order'],$_GET['id_user']);
    echo "<h2 style='color:green;'>Статус заказа успешно изменён!</h2>";
}
/*
if(isset($_GET['details'])){
    header("Location: pages/admin/detail.php");
    detailOrder($connect,$_GET['id_user']));
}
*/
?>
<h1>Управление заказами</h1><br>
<table border='1' width='800'>
<tr>
	<th>№ заказа</th>
	<th>ФИО заказчика</th>
	<th>Телефон</th>
	<th>Адрес доставки</th>
	<th>Статус заказа</th>
	<th>Общая сумма заказа</th>
	<th>Подробная информация</th>
</tr>
<?php 
    $orders = getAllOrders($connect);
    foreach ($orders as $key => $order){//$key - индекс массива, начиная с 0,$order - значение каждого элемента массива
        $user = getInfoUser($connect,$order['id_user']);//получили массив со всеми свойствами юзера
    ?>
       <tr>
       		<td><?= $key + 1?></td>
       		<td><?=$user['fio']?></td>
       		<td><?=$user['phone']?></td>
       		<td><?= $user['address']?></td>
       		<td><select onchange="changeStatus(value,<?= $order['id_user']?>)"><?= getTextStatusOrder($connect,$order['status_order'])?></select></td>
       		<td><?= $order['TotalSum']?></td>
       		<td><a type="button" class="btn btn-block btn-light" href="?page=details_order&details=true&id_user=<?= $order['id_user']?>">Детали заказа</a></td>
       </tr> 
    <?php }
    
    //print_r($orders);
?>
</table>