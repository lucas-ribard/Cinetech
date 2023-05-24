<?php

use App\Controller\SeriesController;
use App\Controller\FilmsController;



$FilmsController = new FilmsController;
$PopularMovies = $FilmsController->GetPopular();
$LastMovies = $FilmsController->GetLastTwentyFilms();
//var_dump($LastMovies['results'][0]) ;


$SeriesController = new SeriesController;
$PopularSeriesFR = $SeriesController->GetPopularFR();
$PopularSeriesENG = $SeriesController->GetPopularENG();
$LastSeriesFR = $SeriesController->GetLastTwentyFR();
$LastSeriesENG = $SeriesController->GetLastTwentyENG();
//var_dump($PopularSeries['results'][0]) ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="includes/header.css" rel="stylesheet" type="text/css" />
    <link href="style/Acceuil.css" rel="stylesheet" type="text/css" />
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


    <title>Acceuil CineTech</title>
</head>

<body>
    <!-- Header -->
    <?php require_once("includes/header.php"); ?>

    <section id="SortiesPopulaires">
        <div id="SortiesPopulairesSlider">
            <swiper-container class="mySwiper" loop="true" autoplay-delay="3000" keyboard="true">

                <?php
                //  A chaque film récupéré :
                foreach ($PopularMovies['results'] as $film) {
                    //affiche l'image Backdrop, la banniere du film ( plus large que haute )
                    echo ' <swiper-slide><img src=" https://image.tmdb.org/t/p/original' . $film['backdrop_path'] . '">';
                    ?>
                    <div class='FilmInfo'>
                        <h2>
                            <?= $film['title'] ?>
                        </h2>
                        <h3>Sortit le :
                            <?= $film['release_date'] ?>
                        </h3>
                        Note moyenne :
                        <?= $film['vote_average'] ?>/10 &emsp; nombres de notes :
                        <?= $film['vote_count'] ?>

                    </div>
                    </swiper-slide>
                    <?php
                }
                ?>

            </swiper-container>
        </div>
    </section>

    <section class="Sections">
    <h2><b>Nouveautés</b></h2>
        <div id="UpcomingContainer">
          
        <swiper-container class="mySwiper" loop="true" autoplay-delay="3000" keyboard="true" slides-per-view="5">
            <?php
            foreach ($LastMovies['results'] as $film) {
                echo '<swiper-slide class="swiperposter"><div class="class="poster""><a href=""><img  src="https://image.tmdb.org/t/p/original' . $film['poster_path'] . '"></a>&nbsp;
                Sortie le :<br><b>'.$film['release_date'].'</b></div></swiper-slide>';
            }
            ?>
        </div>
    </section>

    <section class="Sections">
    <h2><b>Séries Populaires Françaises</b></h2>
        <div id="UpcomingContainer">
          
        <swiper-container class="mySwiper" loop="true" autoplay-delay="3000" keyboard="true" slides-per-view="5">
            <?php
            foreach ($PopularSeriesFR['results'] as $Series) {
                echo '<swiper-slide class="swiperposter"><div class="class="poster""><a href=""><img  src="https://image.tmdb.org/t/p/original' . $Series['poster_path'] . '"></a>&nbsp;
                Débuté le :<br><b>'.$Series['first_air_date'].'</b></div></swiper-slide>';
            }
            ?>
        </div>
            <br><br>
        <h2><b>Séries Populaires Anglaises/Américaines</b></h2>
        <div id="UpcomingContainer">
          
        <swiper-container class="mySwiper" loop="true" autoplay-delay="3000" keyboard="true" slides-per-view="5">
            <?php
            foreach ($PopularSeriesENG['results'] as $Series) {
                echo '<swiper-slide class="swiperposter"><div class="class="poster""><a href=""><img  src="https://image.tmdb.org/t/p/original' . $Series['poster_path'] . '"></a>&nbsp;
                Débuté le :<br><b>'.$Series['first_air_date'].'</b></div></swiper-slide>';
            }
            ?>
        </div>
    </section>




</body>

</html>