<?php
/**
 * Created by PhpStorm.
 * User: leviathan
 * Date: 1/9/2019
 * Time: 8:28 PM
 */

namespace App\PrepareData;


class PrepareAuthorData
{
    public static function prepareAuthorPageData($authorId, $authorName)
    {
        $author = Author::where([
            ["AuthorID", "=", $authorId],
            ["AuthorName", "=", $authorName]
        ])->get();
        if (count($author) == 0) {
            abort(404);
        } else {
            $author = $author->toArray();
        }

        $comics = Author::find($authorId)->comic();
        return [
            "author" => $author,
            "comics" => $comics
        ];
    }

}