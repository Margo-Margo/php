<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>

<div class="container ">

        <header>
            <div class="logo">Birds</div>

            <div class="clearfix"></div>
        </header>

        <main>

            <div class="gallery  card-group  mt-3 mb-5">
                <?php
                include_once("config.php");

                $sql = "SELECT * FROM gallery ORDER BY count DESC";
                $table = mysqli_query($connect, $sql);

                while ($data = mysqli_fetch_assoc($table)) : ?>
                    <a href='img.php?id=<?= $data['id'] ?>' class='product'>
                        <img class="product_img m-2" src='<?= $data['small'] ?>' alt='img"<?= $data['name'] ?>'>
                    </a>
                <?php endwhile; ?>
            </div>
        </main>

        <footer class="page-footer">
            <p class="page-footer__text">Copyright &copy; 2020. Education Work On Geekbrains | PHP</p>
        </footer>

    </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>