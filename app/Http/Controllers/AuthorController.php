<?php
/**
 * Created by PhpStorm.
 * User: leviathan
 * Date: 1/9/2019
 * Time: 7:58 PM
 */

namespace App\Http;


use App\Http\Controllers\Controller;
use App\PrepareData\PrepareAuthorData;

class AuthorController extends Controller
{
    public function actionAuthor($authorId, $authorName)
    {
        $values = PrepareAuthorData::prepareAuthorPageData($authorId, $authorName);
        return view("author", ["values" => $values]);
    }

}