<?php
namespace App\Controller;
use App\Model\SeriesModel;


class SeriesController
{
    public function GetLastTwentyFR()
    {
        $SeriesModel = new SeriesModel;
        $response = $SeriesModel->GetLastTwentyFR();
        return $response;
    }

    public function GetLastTwentyENG()
    {
        $SeriesModel = new SeriesModel;
        $response = $SeriesModel->GetLastTwentyENG();
        return $response;
    }

    public function GetPopularFR()
    {
        $SeriesModel = new SeriesModel;
        $response = $SeriesModel->GetPopularFR();
        return $response;
    }
    public function GetPopularENG()
    {
        $SeriesModel = new SeriesModel;
        $response = $SeriesModel->GetPopularENG();
        return $response;
    }

    public function SeeFilmInfo($id)
    {
        $SeriesModel = new SeriesModel;
        $response = $SeriesModel->SeeFilmInfo($id);
        return $response;
    }
 

    public function GetRecommendations($id)
    {
        $SeriesModel = new SeriesModel;
        $response = $SeriesModel->GetRecommendations($id);
        return $response;
    }
}