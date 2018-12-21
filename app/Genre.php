<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    protected $table = "genre";
    protected $primaryKey = 'GenreID';

    public function truyenTheloai()
    {
      return $this->hasMany("App\Comic_Genre", 'GenreID', 'GenreID');
    }

}
