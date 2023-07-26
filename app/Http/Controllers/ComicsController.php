<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicsController extends Controller
{
    public function index(){
        $comics = Comic::all();
        dd($comics);
        return view('home', compact('comics'));
    }
}
