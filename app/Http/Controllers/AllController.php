<?php
/**
 * Created by PhpStorm.
 * User: leviathan
 * Date: 1/9/2019
 * Time: 8:07 PM
 */

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