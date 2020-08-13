<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Classes\MegaMenu;
use App\Finder;

class pageController extends Controller
{
    //
    public function home() {
      
        return view('homepage');
    }

    public function portfolio() {

        return view('portfolio');
    }
    
    public function about() {
        
        return view('resume');
    }

}
