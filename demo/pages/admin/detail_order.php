<?php
include 'engine/functions.php';
if(isset($_GET['details'])){
   $goods = detailOrder($connect,$_GET['id_user']);
}
?>
<h1>Детали заказа</h1><br>
<table align="center" border='1' width='800'>
<tr>
	<th>Название товара</th>
	<th>Стоимость товара</th>
	<th>Количество</th>
</tr>
<?php
foreach ($goods as $good) {?>
   <tr>
   		<td><?= $good['title']?></td>
   		<td><?= $good['sum']?></td>
   		<td><?= $good['count']?></td>
   </tr> 
<?php 
}
?>
</table>
<a type="button" class="btn btn-warning mt-4" href="<?= $_SERVER['HTTP_REFERER']?>">Вернуться к заказам</a>
