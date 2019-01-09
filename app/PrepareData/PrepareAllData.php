<?php


namespace App\PrepareData;


use App\Comic;
use App\Genre;

class PrepareAllData
{
    public static function getAllGenre()
    {
        return Genre::all()->toArray();
    }

    public static function getAllComic()
    {
        return Comic::paginate(20);
    }

}
