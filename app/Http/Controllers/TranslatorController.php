<?php
/**
 * Created by PhpStorm.
 * User: leviathan
 * Date: 1/9/2019
 * Time: 8:05 PM
 */

namespace App\Http\Controllers;


use App\PrepareData\PrepareTranslatorData;

class TranslatorController extends Controller
{
    public function actionTranslator($translatorId, $translatorName)
    {
        $values = PrepareTranslatorData::prepareTranslatorPageData($translatorId, $translatorName);
        return view("translator", ["values" => $values]);
    }

}