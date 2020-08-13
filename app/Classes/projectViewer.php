<?php


namespace App\Classes;

use App\Projects;
use App\Subcategories;
use Illuminate\Support\Facades\DB;

class projectViewer {
    //grab data
    public $subcategoriesArray;
    public $fullProjectsArray;

    function __construct(){
        $names = Subcategories::all();
        $idNames = json_decode($names, true);
        $menuArray = array();
        for ($i = 0;$i < count($idNames); $i++) {
            //make sure category is Portfolio child
            if ($idNames[$i]['parent_id'] == 2) {
                $menuArray[$i] = $idNames[$i]['sub_name'];
                $final[$menuArray[$i]] = $idNames[$i]['id'];
            }
          } 
          $this->subcategoriesArray = $final;

          $rawProjects = Projects::all();
          $projectsData = json_decode($rawProjects, true);
          $this->fullProjectsArray = $projectsData;
    }

    //create basic html for viewer
    public function makeProjectViewer(){
        $nameArray = array();
        $i = 0;
        foreach ($this->subcategoriesArray as $name => $id) {
            $nameArray[$i] = $name;
            $i++;
        }

        echo "<div class='container-fluid'>";
        echo "<div class='row'>";
        for ($i = 0;$i < count($this->subcategoriesArray);++$i) {
            echo "<div class='col-12'>";
            echo "<div class='projectBox'>";
            echo "<div class='container-fluid'>";
            echo "<div class='row titleRow'>";
            echo "<div class='col-4 text-center title'>";
            echo "More " . $nameArray[$i];
            echo "</div>";
            echo "<div class='col-8 text-center title'>";
            echo $nameArray[$i];
            echo "</div>";
            echo "</div>";
            echo "<div class='row'>";
            echo "<div class='col-4 m-0 colPaddingLeft'>";
            echo "<div class='innerProjectBox'>";
            echo "</div>";
            echo "</div>";
            echo "<div class='col-8 m-0 colPaddingRight'>";
            echo "<div class='innerProjectBox'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
         }
        echo "</div>";
        echo "</div>";
    }
}

?>