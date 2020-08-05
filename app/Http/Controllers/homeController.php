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

      //grab JSON
      $names = Finder::get('name');
      $rawMenuArray = json_decode($names, true);
      
      ////take what I want from JSON
      $menuArray = array();
      for ($i = 0;$i < count($rawMenuArray); $i++) {
        $menuArray[$i] = $rawMenuArray[$i]['name'];
      } 
      
      //send Clean array to member to create menu
      $makeMenu = new MegaMenu;
      $makeMenu->menuCreation($menuArray);
      
      return view('homepage');
    }
}
