<?php
namespace App\Controller;
use App\Model\SeriesModel;


class SeriesController
{
    public function GetLastTwenty()
    {
        $SeriesModel = new SeriesModel;
        $response = $SeriesModel->GetLastTwenty();
        return $response;
    }

    public function GetPopular()
    {
        $SeriesModel = new SeriesModel;
        $response = $SeriesModel->GetPopular();
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