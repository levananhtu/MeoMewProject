<?php
/**
 * Created by PhpStorm.
 * User: leviathan
 * Date: 1/9/2019
 * Time: 8:28 PM
 */

namespace App\PrepareData;


use App\Genre;

class PrepareGenreData
{
    public static function prepareGenrePageData($genreId, $genreName)
    {
        $genre = Genre::where([
            ["GenreID", "=", $genreId],
            ["GenreName", "=", $genreName]
        ])->get();
        if (count($genre) == 0) {
            abort(404);
        } else {
            $genre = $genre->toArray();
        }

        $comics = Genre::find($genreId)->comic();
        return [
            "genre" => $genre,
            "comics" => $comics
        ];

    }

}