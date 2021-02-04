<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Demo</title>
  
</head>
<body>

    <table style="min-height: 100vh; position: relative; z-index: 1;" border="0" width="100%"  class=" container mt-5">
       <?php
        include "blocks/header.php"
        ?>

        <tr >
            <td >
            <!-- <?php
                include "blocks/left.php";
            ?> -->
            <?php
                include "blocks/content.php";
            ?>
            </td>
            <td style="vertical-align: top;" align="center" width="250">
                 <?php
                include "blocks/right.php";
            ?>
            </td>
        </tr>
    </table>

    <div style="height: 100px; margin-top: 100px; position: relative; z-index: 2;" class="bg-dark">
        <div  class="container d-flex justify-content-between">
            <a class="navbar-brand" href="index.php">
                <img src="images/content/online-shop.png" width="90" height="90" class="d-inline-block align-top" alt=""
                     loading="lazy">

            </a>
               <span style="height: 100%; display: inline-block; align-self: center; color: white;"> <h5>&copy; Все права защищены</h5></span>
        </div>
    </div>

</body>
</html>