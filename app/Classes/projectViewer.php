<?php


namespace App\Classes;

use App\Projects;
use App\Subcategories;
use Illuminate\Support\Facades\DB;

class projectViewer {
    //grab data
    public $subcategoriesArray;
    public $fullProjectsArray;
    public $nameArray;

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

        $nameArray = array();
        $i = 0;
        foreach ($this->subcategoriesArray as $name => $id) {
            $nameArray[$id] = $name;
            $i++;
        }
        $this->nameArray = $nameArray;
    }

    public function projectsForCategory( $id ) {
        $x = 0;
        $projects = array();
        for ($i = 0;$i < count($this->fullProjectsArray); ++$i) {
            if ($this->fullProjectsArray[$i]['parent_id'] == $id) {
                $projects[$x] = $this->fullProjectsArray[$i];
                $x++;
            }
        } return $projects;
    }


    //create basic html for viewer
    public function makeProjectViewer(){

        echo "<div id='portfolioMenu' class='row portfolioMenu p-0 container-fluid '>";

        echo "<div id='portfolioList' class='row portfolioList pr-0'>";
        echo "<div class='pl-3 col-12 container-fluid '>";

        for ($i = 1;$i < count($this->subcategoriesArray)+1;++$i) {

            $untrimmedName = $this->nameArray[$i];
            $trimmedName = str_replace(' ', '', $untrimmedName);
            
            echo "<div  class='row categoryRow p-0'>";
                
                    echo "<div class='col-12 categoryTitle'>";
                    echo "<a class='aTagRemove' id='" . $this->nameArray[$i] . "' onclick='categoryToProject(this.id)' href='#" . $trimmedName . "' >";
                    echo "<p  class='categoryText'>" . $this->nameArray[$i] . "</p>";
                        
                        $projects = array();
                        $projects = projectViewer::projectsForCategory( $this->subcategoriesArray[$this->nameArray[$i]] );
                            
                         for ($x = 0;$x < count($projects);++$x) {
                            $name = $projects[$x]['name'];
                                 //subcategory here
                                 echo "<a class='aTagRemove' id='" . $projects[$x]['name'] . "' href='#" . $trimmedName . "/" . $name . "' onclick='displayProject(this.id)'>";
                                     echo "<div id='" . $projects[$x]['name'] . "Sub' class='col-12 subcategoryTitle'>";
                                         echo "<ul >";
                                
                                             echo $projects[$x]['name'];
                                
                                         echo "</ul>"; 
                                     echo "</div>";
                                 echo "</a>";
                         }
            echo "</div></a>";
            echo "</div>";
            //subSub
         }
         echo "</div>";
         //project list end
         echo "</div>";
         //project menu end
         echo "</div>";
    }
}

?>