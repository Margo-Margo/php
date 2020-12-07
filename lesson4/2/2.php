<?php

$dir = 'small/';
$images = scandir($dir);
for ($i = 0; $i < count($images); $i++) {
  if ($images[$i] != '.' && $images[$i] != '..') {
    echo '<a href="' . $dir . $images[$i] . '"><img src=' . $dir . $images[$i] . '></a>';
  }
}

?>



