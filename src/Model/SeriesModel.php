<?php
namespace App\Model;

class SeriesModel
{
    public function GetLastTwenty()
    {
        // récupere les 20 dernieres series
        $requete = 'https://api.themoviedb.org/3/discover/tv?api_key=' . $_ENV['TMDB_API_KEY'] . '&sort_by=release_date.desc&page=1&include_adult=false';

        $response = file_get_contents($requete);

        $response = json_decode($response, true);
        return $response;
    }

    public function GetPopular()
    {
     // récupere les 20 series les plus populaires 
        $requete = 'https://api.themoviedb.org/3/tv/popular?api_key=' . $_ENV['TMDB_API_KEY'] . '&include_adult=false';

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


