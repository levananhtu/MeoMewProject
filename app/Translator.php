<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translator extends Model
{
    //
    protected $table = "translator";
    protected $primaryKey = 'TranslatorID';

    public function truyenDichgia()
    {
      return $this->hasMany("App\Comic_Translator", 'TranslatorID', 'TranslatorID');
    }
}
