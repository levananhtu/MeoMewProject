<?php
/**
 * Created by PhpStorm.
 * User: leviathan
 * Date: 1/9/2019
 * Time: 8:29 PM
 */

namespace App\PrepareData;


use App\Translator;

class PrepareTranslatorData
{
    public static function prepareTranslatorPageData($translatorId, $translatorName)
    {
        $translator = Translator::where([
            ["TranslatorID", "=", $translatorId],
            ["TranslatorName", "=", $translatorName]
        ])->get();
        if (count($translator) == 0) {
            abort(404);
        } else {
            $translator = $translator->toArray();
        }

        $comics = Translator::find($translatorId)->comic();
        return [
            "translator" => $translator,
            "comics" => $comics
        ];


    }

}