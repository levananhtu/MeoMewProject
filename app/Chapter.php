<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    //
    protected $table = "chapter";
    protected $primaryKey = 'ChapterID';

    public function truyen()
    {
      return $this->belongsTo("App\Comic", 'ComicID', 'ComicID');
    }
    
}
