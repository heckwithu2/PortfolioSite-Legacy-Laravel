<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\MegaMenu;
use App\Finder;

class baseController extends Controller
{
    public function base() {
      return view('layouts.base');
    }
}
