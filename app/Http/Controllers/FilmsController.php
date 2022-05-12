<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class FilmsController extends Controller
{

    public function index(){

        $films = Movie::all();

        $data = [
            "film" => new Movie(),
            "films" => $films,
        ];

        return view("films.index", $data);
    }
}
