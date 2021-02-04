<?php
if(!isset($_GET['img'])){
            $images = scandir("images/goods");//получили массив названий файлов из папки

            for($i=2,$n=1;$i<count($images);$i++,$n++){?>
            <a href="?page=gallery&img=<?=$images[$i]?>"><img style="padding-left:50px;" width="300" src="images/goods/<?=$images[$i] ?>"></a>
        <?php
            if($n % 3 == 0){//делаем перенос строки после каждой 3й картинки
                echo "<br>";
            }
        ?>
    <?php }
    }
else{

 $img = $_GET['img'];//получили название файла с картинкой, которую нужно отобразить в исходном размере
    ?>
    <div >
        <h1>Исходная картинка имет вид</h1><br>
        <img src="images/goods/<?=$img?>">
    <span class="d-block mt-5"> <a style="width: 262px;"  class="btn  btn-warning" href="?page=gallery">Вернуться в галерею</a></span>
    </div>
    <?php
}
?>