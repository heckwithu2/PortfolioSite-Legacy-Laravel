@extends('layouts.base')
<div class="container-fluid">

@section('content')

{{-- Place PHP HERE
Make scaffolding --}}

@php
    $makeProjectViewer = new App\Classes\projectViewer;
    $makeProjectViewer->makeProjectViewer();
    @endphp

      <script >
            //grab categories array and Projects array from php
            var categories = <?php echo json_encode($categories); ?>;
            var projects = <?php echo json_encode($projects); ?>;
            //display data of given project
            function displayProject( project ) {

            }
             //display default project
            function defaultCategoryProject( category ) {
                //displayProject();
            }
            //display default project
            function defaultProject( defaultProject ) {
                //displayProject();
            }
            

            //dynamic width of portfolio
            function viewerWidth( num ) {
                var w = window.innerWidth;
                var viewer = num * w;
                document.getElementById("projectViewer").style.width = viewer;
            }


            //make hide button
            document.getElementById("bottomLeftFooter").innerHTML = "<button class='hideButton' onclick='hideMenu()' ><img class='iconHider img-fluid' src='images/menu.png'>HIDE</button>";

            //hide button
            function hideMenu() {
                document.getElementById("portfolioMenu").style.minWidth  = "0px";
                document.getElementById("portfolioMenu").style.maxWidth  = "0%";
                document.getElementById("portfolioHeader").style.visibility  = "hidden";
                document.getElementById("portfolioList").style.display  = "none";
                document.getElementById("resume").style.display  = "none";
                document.getElementById("git").style.display  = "none";
                document.getElementById("li").style.display  = "none";
                document.getElementById("mail").style.display  = "none";
                document.getElementById("bottomLeftFooter").innerHTML = "<button class='hideButton' onclick='showMenu()' ><img class='iconHider img-fluid' src='images/menu.png'>SHOW MENU</button>";
                viewerWidth(1);
            }
            //show function 
            function showMenu() {
                //widthDynamic();
                document.getElementById("portfolioMenu").style.minWidth  = "420px";
                document.getElementById("portfolioMenu").style.maxWidth  = "25%";
                document.getElementById("portfolioHeader").style.visibility  = "visible";
                document.getElementById("portfolioList").style.display  = "block";
                document.getElementById("resume").style.display  = "block";
                document.getElementById("git").style.display  = "block";
                document.getElementById("li").style.display  = "block";
                document.getElementById("mail").style.display  = "block";
                document.getElementById("bottomLeftFooter").innerHTML = "<button class='hideButton' onclick='hideMenu()' ><img class='iconHider img-fluid' src='images/menu.png'>HIDE</button>";
                viewerWidth(.75);
            }
            
            //remove old menu
            document.getElementById("headerRow").style.display = "block";
            document.getElementById("headerRow").style.display = "none";

        </script>
@endsection
</div>


 