<?php
use App\Controller\SeriesController;

$FilmsController = new SeriesController;
$FilmInfo = $FilmsController->SeeFilmInfo($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="../includes/header.css" rel="stylesheet" type="text/css" />
    <link href="../style/Details.css" rel="stylesheet" type="text/css" />
    <link href="../includes/footer.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Share+Tech&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

    <title>
        <?= $FilmInfo['title'] ?>
    </title>
</head>

<body>

    <!-- header -->
    <?php require_once("includes/header.php"); ?>

    <section>

        <style type="text/css">
            section {
                background-image: url("https://image.tmdb.org/t/p/original<?= $FilmInfo['backdrop_path'] ?>");
            }
        </style>
        <div id=Description>
            <div id="poster">
                <img src="https://image.tmdb.org/t/p/original<?= $FilmInfo['poster_path'] ?>">
            </div>
            <div id="FilmInfo">
                <detail>
                    <h1>
                        <?= $FilmInfo['title'] ?>
                    </h1>
                </detail>
                <h3>
                    <?= $FilmInfo['tagline'] ?><br>
                    <?= $FilmInfo['release_date'] ?>
                </h3>

                NOTE : <detail>
                    <?= round($FilmInfo['vote_average'], 1) ?>/10
                </detail> avec
                <detail>
                    <?= $FilmInfo['vote_count'] ?> Votes
                </detail>


                <br><br>
                <?= $FilmInfo['overview'] ?><br><br>

                <div id='studios'>
                    <?php
                    foreach ($FilmInfo['production_companies'] as $Studio) {
                        if(isset($Studio['logo_path'])){
                            echo '<img id="CompaniesLogo" src="https://image.tmdb.org/t/p/original' . $Studio['logo_path'] . '">&emsp;&emsp;';
                        }else{
                            echo $Studio['name'].'&emsp;&emsp;';
                        }
                    }

                    ?>
                </div>

            </div>

        </div>
    

    </section>
    <!-- footer -->
    <?php require_once("includes/footer.php"); ?>
</body>

</html>