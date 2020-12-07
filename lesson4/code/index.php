<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1" width="100%" height="1000">
       <?php
        include "blocks/header.php";
        ?>
        <tr>
            <td style="vertical-align:top;" width="15%">
                <?php
                    include "blocks/main_menu.php";
                ?>
            </td>
            <td style="padding:30px">
                <?php
                    include "blocks/content.php";
                ?>
            </td>
          
            <td width="15%" style="padding:30px">Баннеры</td>
        </tr>
        <tr height="10%">
            <td colspan="3">
                Подвал сайта
            </td>
        </tr>
    </table>
</body>
</html>