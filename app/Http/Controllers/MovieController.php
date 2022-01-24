<?php

namespace App\Http\Controllers;


// questo deve essere OBBLIGATORIO
use App\movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movies(){

        $movies = movie::all();

        dump($movies);

        return view('movies');
    }
}
