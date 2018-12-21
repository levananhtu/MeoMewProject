<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic_Genre extends Model
{
    //
    protected $table = "comic_genre";
    protected $primaryKey = 'ComicGenreID';

    public function theloai()
    {
      return $this->belongsTo("App\Genre", 'GenreID', 'GenreID');
    }

    public function truyen()
    {
      return $this->belongsTo("App\Comic", 'ComicID', 'ComicID');
    }


}
