<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Classes\MegaMenu;
use App\Finder;


class homeController extends Controller
{

    //default for website
    public function home() {
      
      return view('home');
    }
}
