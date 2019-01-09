<?php
/**
 * Created by PhpStorm.
 * User: leviathan
 * Date: 1/9/2019
 * Time: 8:20 PM
 */

namespace App\PrepareData;


use App\Comic;

class PrepareComicData
{
    public static function prepareComicPageData($comicId, $comicName)
    {
        $comic = Comic::where([
            ["ComicID", "=", $comicId],
            ["ComicName", "=", $comicName]
        ])->get();

        if (count($comic) == 0) {
            abort(404);
        } else {
            $comic = $comic->toArray();
        }
        $raw = Comic::find($comicId);

        $chapters = $raw->chapter->toArray();
        $genres = $raw->genre->toArray();
        $translators = $raw->translator->toArray();
        $authors = $raw->author->toArray();
        $finishStatus = $raw->finishStatus->toArray();
        return [
            "comic" => $comic,
            "chapters" => $chapters,
            "genres" => $genres,
            "translators" => $translators,
            "authors" => $authors,
            "finishStatus" => $finishStatus
        ];
    }

}