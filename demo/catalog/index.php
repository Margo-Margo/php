<?php
include "config.php";

$sql = "select * from goods";

$res = mysqli_query($connect,$sql);//запустили запрос sql на сервере
?>
<table align="center" style="text-align:center;" border="1" width="800">
    <?php
        while($data = mysqli_fetch_assoc($res)){//$data - ассоциативный массив каждой строки таблицы?>
            <tr>
                <td><?= $data['id']?></td>
                <td><?= $data['title']?></td>
                <td><?= $data['price']?></td>
                <td><?= $data['info']?></td>
                <td><?= $data['date_create']?></td>
                <td><img width="200" src="catalog/images/<?= $data['img']?>"></td>
                <td>
                    <a href="server.php?id=<?= $data['id']?>">Удалить товар</a>
                </td>
            </tr>
  
<?php
}
?>
</table>


