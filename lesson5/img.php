<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

    <div >

        <header>
            <div class="logo">Birds</div>

            <div class="clearfix"></div>
        </header>

        <main>
            <div class="image_big container w-100 d-flex-column">
                <a class="btn btn-light m-1" href="index.php">Вернуться в галерею</a>

                <?php
                include_once("config.php");

                $idImage = $_GET['id'];
                $sqlImg = "SELECT * FROM gallery WHERE id=$idImage";
                $image = mysqli_fetch_assoc(mysqli_query($connect, $sqlImg));
                $update = "UPDATE gallery SET count=count+1 WHERE id=$idImage";
                mysqli_query($connect, $update);

                ?>

                <img src="<?= $image['big'] ?>" alt="image<?= $idImage ?>">

                <h2 class="count mt-5 mb-5">Количество просмотров: <?= ++$image['count'] ?></h2>
            </div>
        </main>

        <footer class="page-footer">
            <p class="page-footer__text">Copyright &copy; 2020. Education Work On Geekbrains | PHP pt.1</p>
        </footer>

    </div>

</body>

</html>