<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Comic;
use App\PrepareData\PrepareComicData;
use App\PrepareData\PrepareData;

class ComicController extends Controller
{

    public function actionComic($comicId, $comicName)
    {
        $values = PrepareComicData::prepareComicPageData($comicId, $comicName);
//        var_dump($values);
//        echo "<br>";
//        echo "<br>";
//        var_dump($comic = $values["comic"]);
//        echo "<br>";
//        echo "<br>";
//
//        var_dump($chapters = $values["chapters"]);
//        echo "<br>";
//        echo "<br>";
//
//        var_dump($genres = $values["genres"]);
//        echo "<br>";
//        echo "<br>";
//
//        var_dump($translators = $values["translators"]);
//        echo "<br>";
//        echo "<br>";
//
//        var_dump($authors = $values["authors"]);
//        echo "<br>";
//        echo "<br>";
//
//        var_dump($finishStatus = $values["finishStatus"]);
//        echo "<br>";
//        echo "<br>";
//
//
        return view("comic", ["values" => $values]);
    }

}
