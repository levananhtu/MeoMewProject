<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic_Translator extends Model
{
    //
    protected $table = "comic_translator";
    protected $primaryKey = 'ComicTranslatorID';

    public function dichgia()
    {
      return $this->belongsTo("App\Translator", 'TranslatorID', 'TranslatorID');
    }

    public function truyen()
    {
      return $this->belongsTo("App\Comic", 'ComicID', 'ComicID');
    }
}
