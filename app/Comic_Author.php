<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic_Author extends Model
{
    //
    protected $table = "comic_author";
    protected $primaryKey = 'ComicAuthorID';

    public function tacgia()
    {
      return $this->belongsTo("App\Author", 'AuthorID', 'AuthorID');
    }

    public function truyen()
    {
      return $this->belongsTo("App\Comic", 'ComicID', 'ComicID');
    }
}
