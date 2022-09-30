<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class HomeController extends Controller
{
    public function index(){

        $train = Train::where('data_partenza', date('Y-m-d'))->get();

        return view('homepage', ['trains'=> $train]);
    }
}
