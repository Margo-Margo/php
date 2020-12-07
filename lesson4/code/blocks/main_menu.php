<?php

$menu = ["Фотогалерея"=>"/?page=gallery","Загрузить фото"=>"/?page=load","Перейти в поисковик"=>"https://google.com"];
?>
<ul>
<?php
foreach($menu as $title => $link):?>
    <li><a href="<?= $link?>"><?= $title?></a></li><br>
<?php
endforeach;
?>
</ul>