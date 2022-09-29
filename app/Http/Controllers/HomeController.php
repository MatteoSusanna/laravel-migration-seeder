<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class HomeController extends Controller
{
    public function index(){

        $train = Train::all()->where('data_partenza', '2022-09-29');

        return view('homepage', ['trains'=> $train]);
    }
}
