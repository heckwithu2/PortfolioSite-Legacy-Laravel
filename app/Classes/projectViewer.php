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
        
        //projectsForCategory( $nameArray );
        echo "<div id='portfolioClient' class='row' >";

        echo "<div id='portfolioMenu' class='col-3 portfolioMenu  container-fluid '>";

        echo "<div id='portfolioHeader' class='row portfolioHeader'>";
        echo "<div class='p-0 col-2 '>";
        echo "<a id='home' href='https://jeremiahheck.tech'><img class='homeIcon icon img-fluid' src='" . asset('public/images/Home.png') . "'></a>";
        echo "</div>";

        echo "<div id='resume' class='p-0 col  headerElement headerTitle '>";
        echo "Portfolio";
        echo "</div>";


        echo "<div class='p-0 col-5'>";
        echo "<div class=' iconRow d-flex justify-content-end'>";
        echo "<a id='git' href='https://github.com/heckwithu2?tab=projects'><img class='socialIcon icon img-fluid' src='" . asset('public/images/github.png')  . "'></a>";
        echo "<a id='li' href='https://www.linkedin.com/in/jeremiah-heck-498b1a184/'><img class='socialIcon icon img-fluid' src='" . asset('public/images/linkedin2.png') . "'> </a>";                           
        echo "<a id='mail' href='mailto: jheck10@kent.edu'><img class='socialIcon icon img-fluid' src='" . asset('public/images/gmail.png') . "'></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        echo "<div id='portfolioList' class='row portfolioList'>";
        echo "<div class='col-12 container-fluid '>";



        for ($i = 1;$i < count($this->subcategoriesArray)+1;++$i) {

            $untrimmedName = $this->nameArray[$i];
            $trimmedName = str_replace(' ', '', $untrimmedName);
            
            echo "<div  class='row categoryRow p-0'>";
                
                    echo "<div class='col-12 categoryTitle'>";
                    echo "<a class='aTagRemove' id='" . $this->nameArray[$i] . "' onclick='categoryToProject(this.id)' href='#" . $trimmedName . "'>";
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
         echo "<div class='text-center col-12 nametag'>";
         echo "Jeremiah Heck";
         echo "</div>";
         echo "</div>";
         echo "</div>";

        //beginning of Project Viewer
        //make area for javascript to put the data into
        echo "<div id='projectViewer' class='col projectViewer'>";
        echo "<div class='container-fluid p-0'>";
        echo "<div class='row projectTitleBox'>";
            echo "<divv style='text-transform: uppercase;' id='titleProject' class='col-12 text-center projectBox'>";

            echo "</div>";
        echo "</div>";
        echo "<div class='row projectDetailsBox'>";
            echo "<div style='border-right: solid 1px #c3c7d5;' id='techProject' class='col-3 text-center projectBox'>";

            echo "</div>";
            echo "<div style='border-right: solid 1px #c3c7d5;' id='descProject' class='col-6 text-center projectBox'>";

            echo "</div>";
            echo "<div id='gitDownProject' class='col-3 text-center projectBox'>";

            echo "</div>";
        echo "</div>";
        echo "<div class='row projectPictureBox'>";
            echo "<div id='picProject' class='col-12 text-center projectBox'>";

            echo "</div>";
        echo "</div>";
        echo "<div class='row projectFooterBox' >";
            
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>"; 

    }
}

?>