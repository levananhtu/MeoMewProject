<?php
/**
 * Created by PhpStorm.
 * User: leviathan
 * Date: 1/9/2019
 * Time: 8:04 PM
 */

namespace App\Http\Controllers;


use App\PrepareData\PrepareGenreData;

class GenreController extends Controller
{
    public function actionGenre($genreId, $genreName)
    {
        $values = PrepareGenreData::prepareGenrePageData($genreId, $genreName);
        return view("genre", ["values" => $values]);
    }

}