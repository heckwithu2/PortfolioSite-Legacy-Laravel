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
                var nameArray = @json($nameArray);
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
                            if (projectObj.name == "Portfolio-Site") {
                                document.getElementById("picProject").innerHTML = "<p class='projectText'><img style='max-height: 750px;' class='img-fluid' src='public/images/portfolioPic2.png'><img style='max-height: 750px;' class='img-fluid' src='public/images/" + projectObj.picture + "'></p>";
                            } else {
                                document.getElementById("picProject").innerHTML = "<p class='projectText'><img style='max-height: 750px;' class='img-fluid' src='public/images/" + projectObj.picture + "'></p>";
                            }
                           
                        }
                        if (projectObj.github != null) {
                            document.getElementById("gitDownProject").innerHTML = "<a href='" + projectObj.github + "'>" + projectObj.github + "</a>";
                        }
                        //this is the project to link to parent
                        
                        
                        for (var g = 0;g < projects.length;++g) {
                            var projectObj2 = [];
                            projectObj2 = projects[g];

                            var name = nameArray[projectObj.parent_id];//returns name


                            if (projectObj2.parent_id == categories[name]) {
                                var string = projectObj2.name + "Sub";
                                document.getElementById(string).style.height = "25px";
                                document.getElementById(string).style.fontSize = "18px";
                            }
                        }
                    }
                }
            }
             
            function categoryToProject( categoryName ) {
                //given category, find first project
                var projects = @json($projects);
                //var nameArray = @json($nameArray);
                var categories = @json($categories);

                for(var i = 0;i < projects.length;++i) {
                    var parentId = categories[categoryName];
                    var projectObj = [];
                    projectObj = projects[i];
                    if (projectObj.parent_id == parentId) {
                        displayProject( projectObj.name );
                    }
                }
            }
            
            window.onload = function () {
                var url = window.location.hash;
                if (url == "") {
                    displayProject("Portfolio-Site");
                }

                var space = false;
                for (x = 0; x < url.length; ++x) {
                   if (url[x] == " ") {
                       space = true;
                   }
                }
                if (space == true) {
                    var capitals = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    for (i = 0; i < capitals.length; ++i) {
                        for (x = 0; x < url.length; ++x) {
                            if (url[x] == capitals[i]) {
                                var left = url.substr(0,x);
                                var right = url.substr(x,url.length-1);
                                var space = ' ';
                                url = left + space + right;
                                break;
                            }
                        }
                    }
                }
                    
                
                var pos = url.search("/");
                if (pos != -1) {
                    var lengthUrl = url.length-1;
                    var trimmedUrl = url.substr(pos+1,lengthUrl);
                    displayProject( trimmedUrl );
                } else {
                    var lengthUrl = url.length-1;
                    if (space == true) {
                        var trimmedUrl = url.substr(2,lengthUrl);
                    } else {
                        var trimmedUrl = url.substr(1,lengthUrl);
                    }
                    
                    categoryToProject( trimmedUrl );
                }
                
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
            document.getElementById("nameRow").style.visibility = "hidden";
            document.getElementById("headerRow").style.display = "none";

        </script>
@endsection
</div>


 