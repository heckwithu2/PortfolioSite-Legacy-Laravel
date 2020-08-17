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
            //display data of given project name
            function displayProject( project ) {
               //grab categories array and Projects array from php
                //var projects = [];
                var projects = @json($projects);
                var categories = @json($categories);
                 
                for(var i = 0;i < projects.length;++i) {
                    var projectObj = [];
                    projectObj = projects[i];
                    if (projectObj.name == project) {
                        if (projectObj.name != null) {
                            document.getElementById("titleProject").innerHTML = "<h1 class='projectTextTitle'>" + projectObj.name + "</h1>";
                        }
                        if (projectObj.technology != null) {
                            document.getElementById("techProject").innerHTML = "<h2 class='projectText'>" + projectObj.technology + "</h2>";
                        }
                        if (projectObj.description != null) {
                            document.getElementById("descProject").innerHTML = "<h2 class='projectText'>" + projectObj.description + "</h2>";
                        }
                        if (projectObj.picture != null) {
                           document.getElementById("picProject").innerHTML = "<p class='projectText'>" + projectObj.picture + "</p>";
                        }
                        if (projectObj.github != null) {
                            document.getElementById("gitDownProject").innerHTML = "<a href='" + projectObj.github + "'>" + projectObj.github + "</a>";
                        }
                    }
                }
            }
             
            function categoryToProject( category ) {
                //given category, find first project
                //displayProject( project )
            }

             //display default project depending on URL
            function loadCategoryProject() {
                //parse URL for name of category
                //get category name, if none give default

                //categoryToProject( category )
            }

            //OPEN LIST FOR ACTIVATED PROJECT
            //page load open whatever is displayed
            function onLoadOpenCategory() {
                //WHEN PROJECT IS LOADED, ACTIVATE THE ITEM WITH THAT ID IN THE LIST
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
                viewerWidth(.99);
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


 