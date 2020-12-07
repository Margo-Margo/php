<?php

$images = scandir("images");
//print_r($images);
for($i=2;$i<count($images);$i++){?>
    <a href="full_image.php?file=<?= $images[$i]?>"><img width="200" src="images/<?= $images[$i]?>" alt=""></a><hr>
<?php
}
?>