<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\MegaMenu;
use App\Finder;

class baseController extends Controller
{
    //make mega menu
    public function base() {

      //call megaMenu class
      $makeMenu = new MegaMenu;
      $makeMenu->menuCreation();

      return view('layouts.base');
    }
}
