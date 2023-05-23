<?php

use App\Controller\SeriesController;
use App\Controller\FilmsController;



$FilmsController = new FilmsController;
$GetPopular = $FilmsController->GetPopular();

//var_dump($GetPopular['results'][0]) ;


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
            <swiper-container class="mySwiper" pagination="true" loop="true" autoplay-delay="3000" keyboard="true">
               
                <?php     
                //  A chaque film récupéré :
                foreach($GetPopular['results'] as $film){
                    //affiche l'image Backdrop, la banniere du film ( plus large que haute )
                    echo ' <swiper-slide><img src=" https://image.tmdb.org/t/p/original'. $film['backdrop_path'] .'">';
                    ?>
                    <div class='FilmInfo'>
                        <h2><?= $film['title'] ?></h2>
                        <h3>Sortit le : <?= $film['release_date'] ?></h3>
                        Note moyenne : <?= $film['vote_average'] ?> nombres de notes : <?= $film['vote_count'] ?>     
                       
                    </div>
                    </swiper-slide>
                    <?php
                }
                ?>

            </swiper-container>
        </div>
    </section>


</body>

</html>