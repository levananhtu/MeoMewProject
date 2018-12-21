<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class PagesController extends Controller
{
    //

    public function getAuthor()
    {
      return view('layouts.header');
    }
}
