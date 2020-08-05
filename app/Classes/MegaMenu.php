<?php

namespace App\Classes;

use Illuminate\Support\Facades\DB;

class MegaMenu {
    //create megaMenu
    function menuCreation( $headerArray ) {
        echo "<div class='container-fluid'><div id='headerRow' class='row p-0 header'>"; 
       
        //display menu from server
        for ($i = 0;$i < count($headerArray);++$i) {
            //build parent menu elements
            echo "<div id='header' class='col-3 headerElement'>" . $headerArray[$i] . "</div>";
            
            //grab id of the parent menu
            $rawId = DB::table('menu')
                ->select('id')
                ->where('name', '=', $headerArray[$i])
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
            if (count($tmp) > 0) {
                $subCats[$i] = $tmp[0]['sub_name'];
                //add child elements to curent parent
            }
            
            
            
            
        }

        echo "</div></div>";
    }   
}

?>