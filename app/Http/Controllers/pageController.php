<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Classes\MegaMenu;
use App\Classes\projectViewer;
use App\Finder;
use Symfony\Component\HttpFoundation\Response;

class pageController extends Controller
{
    //
    public function home() {
      
        return view('homepage');
    }

    public function portfolio() {
        $projectData = new projectViewer;
        $categories = array();
        $projects = array();
       
        $categories = $projectData->subcategoriesArray;
        $projects = $projectData->fullProjectsArray;
        $nameArray = $projectData->nameArray;
        return view('portfolio', compact('categories', 'projects', 'nameArray'));
    }
    
    public function about() {
        $filename = 'Resume.pdf';
        $path = storage_path($filename);

        return response()->file($path);
    }

}
