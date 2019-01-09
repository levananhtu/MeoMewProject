<?php


namespace App\Http\Controllers;


use App\PrepareData\PrepareAllData;

class AllController
{
    public function actionAll()
    {
        $values = PrepareAllData::getAllComic();
        //var_dump($values);
        return view("all", ["values" => $values]);
    }

}
