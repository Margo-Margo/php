<?php 
if($_GET['success'] == 1){?>
    <h1 style="color: red;">Товар успешно добавлен!</h1><br>
<?php }
?>
<h1>Добавление нового товара</h1><br>
<div class="form-group">
<form action="engine/admin_goods.php" method="post" enctype="multipart/form-data">
	<p>Название товара</p>
	<input type="text" class="form-control" name="title">
	<p>Стоимость товара</p>
	<input type="text" class="form-control" name="price">
	<p>Информация о товаре</p>
	<textarea name="info" class="form-control" rows="10" cols="30"></textarea>
    <p>Подробное описание</p>
    <textarea name="description" class="form-control"  rows="10" cols="30"></textarea>
	<p>Загрузить фото</p>
	<input type="file" name="photo" accept="image/*"><br><br>
	<input type="submit" class="btn btn-warning mt-4" value="Сохранить">
</form>
</div>
