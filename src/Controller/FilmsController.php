<?php
namespace App\Controller;
use App\Model\FilmsModel;


class FilmsController
{
    public function GetLastTwentyFilms()
    {
        $FilmsModel = new FilmsModel;
        $response = $FilmsModel->GetLastTwentyFilms();
        return $response;
    }

    public function GetPopular()
    {
        $FilmsModel = new FilmsModel;
        $response = $FilmsModel->GetPopular();
        return $response;
    }

    public function SeeFilmInfo($id)
    {
        $FilmsModel = new FilmsModel;
        $response = $FilmsModel->SeeFilmInfo($id);
        return $response;
    }


    public function GetRecommendations($id)
    {
        $FilmsModel = new FilmsModel;
        $response = $FilmsModel->GetRecommendations($id);
        return $response;
    }
}