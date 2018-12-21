<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = "author";
    protected $primaryKey = 'AuthorID';

    public function truyenTacgia()
    {
      return $this->hasMany("App\Comic_Author", 'AuthorID', 'AuthorID');
    }

}
