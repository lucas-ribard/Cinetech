<?php
namespace App\Model;

class FilmsModel
{
    public function GetLastTwentyFilms()
    {
        // récupere les 20 derniers films (affiche 20 film par page, cette requete n'affiche que la premiere page)
        $requete = 'https://api.themoviedb.org/3/discover/movie?api_key=' . $_ENV['TMDB_API_KEY'] . '&sort_by=release_date.desc&page=1&include_adult=false';

        $response = file_get_contents($requete);

        $response = json_decode($response, true);
        return $response;
    }

    public function GetPopular()
    {
     // récupere les 20 films les plus populaires (affiche 20 film par page, cette requete n'affiche que la premiere page)
        $requete = 'https://api.themoviedb.org/3/movie/popular?api_key=' . $_ENV['TMDB_API_KEY'] . '&include_adult=false';

        $response = file_get_contents($requete);

        $response = json_decode($response, true);
        return $response;
    }

    public function SeeFilmInfo($id)
    {
        $requete = 'https://api.themoviedb.org/3/movie/' . $id . '?api_key=' . $_ENV['TMDB_API_KEY'];
        $response = file_get_contents($requete);
        $response = json_decode($response, true);
        return $response;
    }

    public function GetRecommendations($id)
    {
        $requete = 'https://api.themoviedb.org/3/movie/' . $id . '?api_key=' . $_ENV['TMDB_API_KEY'] . '/recommendations&include_adult=false';
        $response = file_get_contents($requete);
        $response = json_decode($response, true);
        return $response;
    }
}


