<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function alpha(){

        $name= 'Davide';
        $surname= 'Bianchi';

        return view('home', compact('name', 'surname'));
    }

    public function about(){
        return view('about');
    }

    public function where(){
        return view('where');
    }
}
