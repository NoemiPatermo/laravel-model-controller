<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie; //in questo modo colleghi il tuo Model (Movie)


class HomeController extends Controller
{
    public function index() {

        $allMovies = Movie::all();// prendi tutti gli elementi all'interno della tua tabella [SELECT * FROM movies]

         return view('home', compact('allMovies')); //passa tutto l'array alla home
    }
     
}

// dump($allMovies[0]->title);//il model MOVIE ha già compilato in automatico la classe, popolandola con le proprietà
   