<?php
if(isset($_SESSION['admin'])){?>
	<h1>Админка</h1><br>
	<div style="width:220px;">
	<ul style="list-style-type: none;  margin-left: 0; padding-left: 0;">
		<li><a type="button" class="btn btn-block btn-light" href="?page=edit_good">Редактирование товаров</a></li>
		<li><a type="button" class="btn btn-block btn-light" href="?page=add_good">Добавить новый товар</a></li>
		<li><a type="button" class="btn btn-block btn-light" href="?page=edit_orders">Управление заказами</a></li>
	</ul>
    </div>
<?php
} else{?>
   <div id="banners">
       <a href="?page=prices"> <img class="m-3" width="200" src="images/content/sale.jpg"></a><br>
   		<img class="m-3" width="200" src="images/content/credit.jpg"><br>
   		<img class="m-3" width="200" src="images/content/delivery.jpg"></div>
<?php 
}?>