
@extends('layouts.master')

    @section('content')

                <div id="portfolioClient" class="row">
                    <div id="portfolioHeader" class="row portfolioHeader m-0 p-0 ">
                        <div class="p-0 col ">
                            <div class=" iconRow d-flex justify-content-start">
                                <a id="home" href="https://jeremiahheck.tech">
                                    <img class="homeIcon icon mt-1" src="https://jeremiahheck.tech/public/images/Home.png">
                                </a>
                                <div id="hideButton" class="footerText" onClick="hideList()">
                                    <img class="homeIcon icon mt-1" src="https://jeremiahheck.tech/public/images/menu.png">
                                    Hide Menu
                                </div>
                            
                            </div>
                        </div>          
                        <div class="p-0 col">         
                            <div class=" iconRow d-flex justify-content-end">
                                <a id="git" href="https://github.com/heckwithu2?tab=projects" target="_blank">
                                    <img class="socialIcon icon mt-1" src="https://jeremiahheck.tech/public/images/github.png">
                                </a>
                                <a id="li" href="https://www.linkedin.com/in/jeremiah-heck-498b1a184/" target="_blank">
                                    <img class="socialIcon icon mt-1" src="https://jeremiahheck.tech/public/images/linkedin2.png"> 
                                </a>
                                <a id="mail" href="mailto: jheck10@kent.edu">
                                    <img class="socialIcon icon mt-1" src="https://jeremiahheck.tech/public/images/gmail.png">
                                </a>
                            </div>                  
                        </div>
                    </div>


                    @php
                        $makeProjectViewer = new App\Classes\projectViewer;
                        $makeProjectViewer->makeProjectViewer();
                    @endphp

                    <div id='projectViewer' class='projectViewer'>
                        <div class='container-fluid p-0'>
                            <div class='row projectTitleBox'>
                                <div style='text-transform: uppercase;' id='titleProject' class='col-12 text-center projectBox'>
                        
                                </div>
                            </div>
                            <div class='row projectDetailsBox'>
                                <div style='border-right: solid 1px #c3c7d5;' id='techProject' class='col-3 text-center projectBox'>
                                </div>
                                <div style='border-right: solid 1px #c3c7d5;' id='descProject' class='col-6 text-center projectBox'>

                                </div>
                                <div class='col-3 text-center projectBox'>
                                    <a class='githubLink' id='gitDownProject' href='' target='_blank'> Github Link </a>
                                </div>
                            </div>
                            <div class='row projectPictureBox'>
                            </div>
                            <div id='picProject' class='col-12 text-center projectBox'>
                            </div>
                            <div class='row projectFooterBox' >
                            
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
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
                                    //document.getElementById("gitDownProject").href = "<a href='" + projectObj.github + "'> Github </a> ";
                                    document.getElementById("gitDownProject").href = projectObj.github;
                                // document.getElementById("gitDownProject").innerHTML = "<a href='https://catalog.uncc.edu/preview_program.php?catoid=26&poid=6466 '> GitHub </a> ";
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
                        if (window.innerWidth < 768) {
                            hideList();
                        }
                    }
                    
                    function categoryToProject( categoryName ) {
                        //given category, find first project
                        var projects = @json($projects);
                        //var nameArray = {"1":"Applications","2":"Computer Science Projects","3":"Games","4":"Mobile Apps","5":"Websites"};
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

                        //if no project specified, default
                        if (url == "") {
                            displayProject("Portfolio-Site");
                        }

                        //check url for spaces
                        var noSpace = true;
                        for (x = 0; x < url.length; ++x) {
                        if (url[x] == " ") {
                            //there is a space present, and the url doesnt need to expanded
                            noSpace = false;
                        }
                        }
                        if (noSpace == true) {
                            //the url needs expanded
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
                            if (noSpace == true) {
                                var trimmedUrl = url.substr(2,lengthUrl);
                            } else {
                                var trimmedUrl = url.substr(1,lengthUrl);
                            }
                            
                            categoryToProject( trimmedUrl );
                        }
                        
                    } 
                </script>
            
    @endsection



 