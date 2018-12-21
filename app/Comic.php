<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    protected $table = "comic";
    protected $primaryKey = 'ComicID';

    public function truyenTacgia()
    {
      return $this->hasMany("App\Comic_Author", 'ComicID', 'ComicID');
    }

    public function truyenTheloai()
    {
      return $this->hasMany("App\Comic_Genre", 'ComicID', 'ComicID');
    }

    public function truyenDichgia()
    {
      return $this->hasMany("App\Comic_Translator", 'ComicID', 'ComicID');
    }

    public function chuong()
    {
      return $this->hasMany("App\Chapter", 'ComicID', 'ComicID');
    }
}
