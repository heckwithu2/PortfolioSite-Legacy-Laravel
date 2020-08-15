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

        echo "<div id='portfolioClient' class='row' >";

        echo "<div id='portfolioMenu' class='col-3 portfolioMenu  container-fluid '>";

        echo "<div id='portfolioHeader' class='row portfolioHeader'>";
        echo "<div class='p-0 col-2 '>";
        echo "<a id='home' href='http://app.test/Home'><img class='homeIcon icon img-fluid' src='images/Home.png'></a>";
        echo "</div>";
        echo "<div id='resume' class='p-0 col  headerElement container-fluid '>";
        echo "<div class=' row headerRow'>";
        echo "<div onclick='routeParent(this.innerHTML)' class='col-12 dropdownContent'>";
        echo "Resume";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='p-0 col-5'>";
        echo "<div class=' iconRow d-flex justify-content-end'>";
        echo "<a id='git' href='https://github.com/heckwithu2?tab=projects'><img class='socialIcon icon img-fluid' src='images/github.png'></a>";
        echo "<a id='li' href='https://www.linkedin.com/in/jeremiah-heck-498b1a184/'><img class='socialIcon icon img-fluid' src='images/linkedin2.png'> </a>";                           
        echo "<a id='mail' href='mailto: jheck10@kent.edu'><img class='socialIcon icon img-fluid' src='images/gmail.png'></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        echo "<div id='portfolioList' class='row portfolioList'>";
        echo "<div class='col-12 container-fluid '>";



        for ($i = 0;$i < count($this->subcategoriesArray);++$i) {
            echo "<div  class='row subcategoryRow p-0'>";
            echo "<div class='col-12 subcategoryTitle'>";
            echo $nameArray[$i];
            echo "</div>";
            echo "</div>";
            //subSub
         }
         echo "</div>";
         echo "</div>";
         echo "</div>";

        //beginning of Project Viewer
        echo "<div class='col projectViewer'>";
        echo "<div class='container-fluid p-0'>";
        echo "<div class='row projectTitleBox'>";
        echo "<div class='col-12 '>";

        echo "</div>";
        echo "</div>";
        echo "<div class='row projectDetailsBox'>";

        echo "</div>";
        echo "<div class='row projectPictureBox'>";

        echo "</div>";
        echo "<div class='row projectFooterBox d-flex' >";

        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>"; 

    }
}

?>