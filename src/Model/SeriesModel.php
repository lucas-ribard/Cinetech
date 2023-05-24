<?php
namespace App\Model;

class SeriesModel
{
    public function GetLastTwentyFR()
    {
        $date = date('Y-m-d');
        // récupere les 20 dernieres series
        $requete = 'https://api.themoviedb.org/3/discover/tv?api_key=' . $_ENV['TMDB_API_KEY'] . ' &first_air_date.lte=2023-05-22';

        $response = file_get_contents($requete);

        $response = json_decode($response, true);
        return $response;
    }

    public function GetLastTwentyENG()
    {
        $date = date('Y-m-d');
        // récupere les 20 dernieres series
        $requete = 'https://api.themoviedb.org/3/discover/tv?api_key=' . $_ENV['TMDB_API_KEY'] . '&with_original_language=en&page=1&sort_by=popularity.desc&primary_release_date.gte='.$date;

        $response = file_get_contents($requete);

        $response = json_decode($response, true);
        return $response;
    }

    public function GetPopularFR()
    {
     // récupere les 20 series les plus populaires 
        $requete = 'https://api.themoviedb.org/3/discover/tv?api_key=' . $_ENV['TMDB_API_KEY'] . '&with_original_language=fr&sort_by=popularity.desc&include_adult=false';

        $response = file_get_contents($requete);

        $response = json_decode($response, true);
        return $response;
    }

    public function GetPopularENG()
    {
     // récupere les 20 series les plus populaires 
        $requete = 'https://api.themoviedb.org/3/discover/tv?api_key=' . $_ENV['TMDB_API_KEY'] . '&with_original_language=en&sort_by=popularity.desc&include_adult=false';

        $response = file_get_contents($requete);

        $response = json_decode($response, true);
        return $response;
    }

    public function SeeFilmInfo($id)
    {
        $requete = 'https://api.themoviedb.org/3/tv/' . $id . '?api_key=' . $_ENV['TMDB_API_KEY'];
        $response = file_get_contents($requete);
        $response = json_decode($response, true);
        return $response;
    }

    public function GetRecommendations($id)
    {
        $requete = 'https://api.themoviedb.org/3/tv/' . $id . '?api_key=' . $_ENV['TMDB_API_KEY'] . '/recommendations&include_adult=false';
        $response = file_get_contents($requete);
        $response = json_decode($response, true);
        return $response;
    }
}


