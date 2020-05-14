<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Finder;
class finderController extends Controller
{
    //this shows the data from the finder Modal
    public function show() {
        $purchases = Finder::all();
        return view('show', ['purchases' => $purchases]);
    }
}
