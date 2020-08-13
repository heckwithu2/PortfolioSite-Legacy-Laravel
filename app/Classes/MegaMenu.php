<?php

namespace App\Classes;

use App\Menu;
use Illuminate\Support\Facades\DB;

class MegaMenu {

    private $headerArray;

    function __construct() {
        //make array out of parent names in header
        $names = Menu::get('name');
        $rawMenuArray = json_decode($names, true);
        $menuArray = array();
        for ($i = 0;$i < count($rawMenuArray); $i++) {
          $menuArray[$i] = $rawMenuArray[$i]['name'];
        } 
        $this->headerArray = $menuArray;
    }
    
    //create megaMenu
    function menuCreation() {
        echo "<div id='headerRow' class='row p-0 header'>"; 
        //display menu from server
        for ($i = 0;$i < count($this->headerArray);++$i) {
            //build parent menu elements
            echo "<div id='header' class='col-3 headerElement container-fluid '>";
            echo "<div class='row headerRow'>";
            echo "<div id='" . $this->headerArray[$i] . "'onclick='routeParent(this.innerHTML)' class='col-12 dropdownContent'>". $this->headerArray[$i];
            echo "</div></div>";
            
            

            
                //grab id of the parent menu
            $rawId = DB::table('menu')
            ->select('id')
            ->where('name', '=', $this->headerArray[$i])
            ->get();

            //clean raw JSON    
            $tmp = json_decode($rawId, true);
            $id = array();
            $id[0] = $tmp[0]['id'];

            //use the id to link the subcat table 
            $rawCats = DB::table('subcategories')
                ->select('sub_name')
                ->where('parent_id', '=', $id[0])
                ->get();

            //clean raw JSON
            $tmp = json_decode($rawCats, true);
            $subCats = array();
            $parentName = $this->headerArray[$i];

            if (count($tmp) > 0) {
                for ($x = 0;$x < count($tmp);++$x) {
                    $subCats[$i] = $tmp[$x]['sub_name'];
                    //add child elements to curent parent
                    echo "<div class='row dropdownRow '>";
                    echo "<div id='" . $this->headerArray[$i] . "'onclick='routeChild(this.innerHTML,this.id)' class='col-12 dropdownContent'>" . $subCats[$i];
                    echo "</div></div>";
                }
            }
            echo "</div>";
        }
        echo "</div>";
    }   
}

?>