<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Jeremiah Heck's Portfolio</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/app.css') }}">
        <link rel="icon" href="{{ asset('public/images/kentIcon.png') }}">
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <script type="text/javascript">
            var parentUntrimmed;
            var childUntrimmed;
            var urlHash;
            function routeParent( parentString ) {
                parentUntrimmed = parentString;
                var parent = parentString.split(" ").join("");
                var string = "/" + parent;
                window.location = string;  
                urlHash = "#" + parentUntrimmed + "/" + childUntrimmed;             
            }

            function routeChild( childString, parentString) {
                parentUntrimmed = parentString;
                childUntrimmed = childString;
                var parent = parentString.split(" ").join("");
                var child = childString.split(" ").join("");
                var string = "/" + parent + "#" + child;
                window.location = string;
                urlHash = "#" + parentUntrimmed + "/" + childUntrimmed;
            }
        </script>


    <body>
        <div class="container-fluid">

           @yield('content')

                <div id="footer" class=" footerRow row">
                    <div id="bottomLeftFooter" class="col">
                    </div>
                    <div class="col-12 footerText">
                        Made with the Laravel Framework
                            <a href="https://laravel.com/"> <img class=" footerIcon img-fluid" src="{{ asset('public/images/laravel.png') }}"></a>
                    </div>
                    <div id="bottomRightFooter" class="col">
                    </div> 
                </div>
        </div>
        <script>
            window.addEventListener("load", projectViewerResize);
            window.addEventListener("resize", projectViewerResize);
            
            function hideList() {
                var totalWidth = window.innerWidth;
                //grab list width
                var element = document.getElementById('portfolioList'),
                style = window.getComputedStyle(element),
                listWidth = style.getPropertyValue('width');
                var parsed = parseInt(listWidth);
                
                //if already hidden, extend
                if (parsed > 0) {
                    document.getElementById('portfolioList').style.width = "0px";
                    document.getElementById('portfolioList').style.display = "none";
                    document.getElementById('hideButton').innerHTML = "<img class='homeIcon icon mt-1' src='https://jeremiahheck.tech/public/images/menu.png'> Show Menu";
                } else {
                    if (totalWidth > 576) {
                        document.getElementById('portfolioList').style.width = "300px";
                        document.getElementById('portfolioList').style.display = "block";
                        document.getElementById('hideButton').innerHTML = "<img class='homeIcon icon mt-1' src='https://jeremiahheck.tech/public/images/menu.png'> Hide Menu";
                    } else {
                        document.getElementById('portfolioList').style.width = "100%";
                        document.getElementById('portfolioList').style.display = "block";
                        document.getElementById('hideButton').innerHTML = "<img class='homeIcon icon mt-1' src='https://jeremiahheck.tech/public/images/menu.png'> Hide Menu";
                    }
                }
                //re-evaluate viewer
                projectViewerResize()
            }

            function projectViewerResize() {
                var totalWidth = window.innerWidth;
                if (totalWidth > 576) {
                    var element = document.getElementById('portfolioList'),
                    style = window.getComputedStyle(element),
                    listWidth = style.getPropertyValue('width');
                    var parsed = parseInt(listWidth);
                    var finalNumber = totalWidth - parsed +12;
                    var myString = finalNumber.toString();
                    var final = myString + "px";
                    document.getElementById("projectViewer").style.width = final;
                } else {
                    document.getElementById("projectViewer").style.width = "100%";
                }

                var totalheight = window.innerHeight;

                var element = document.getElementById('portfolioHeader'),
                    style = window.getComputedStyle(element),
                    headerHeight = style.getPropertyValue('height');

                var finalHeaderHeight = parseInt(headerHeight);

                var finalHeight = totalheight - finalHeaderHeight - 50;
                var myStringHeight = finalHeight.toString();
                myStringHeight += "px";
                document.getElementById('portfolioList').style.height = myStringHeight; 
            }
            

            //display data of given project name
            function displayProject( project ) {
                
                //grab categories array and Projects array from php
                //var projects = [];
                var projects = [{"id":0,"name":"Fitting-In","parent_id":3,"description":"I made this game for the 2018 Kent State Global Game Jam with five others. We had 48 hours to make a game about what \u0022home\u0022 meant to us.","github":"https:\/\/globalgamejam.org\/2019\/games\/fitting","download":"https:\/\/globalgamejam.org\/2019\/games\/fitting","picture":"fittingInPic.png","technology":"Game Maker Language (GML)"},{"id":1,"name":"Gandacksu","parent_id":5,"description":"I made this website when I was the president of the Kent State Animation and Game Design Club! \u003Ca href=\u0022http:\/\/gandacksu.jeremiahheck.tech\/Homepage.html\u0022\u003E Website \u003C\/a\u003E ","github":"https:\/\/github.com\/heckwithu2\/Gandacksu","download":null,"picture":"gandacksuPic.png","technology":"JavaScript, Bootstrap4, HTML5, CSS3"},{"id":4,"name":"Stack(Data-Type)","parent_id":2,"description":"This is a custom-made stack class, used to convert a given .txt file\u0027s infix expression, convert it to postfix and then output the assembly instructions.","github":"https:\/\/github.com\/heckwithu2\/stack","download":null,"picture":"stackPic.png","technology":"C++"},{"id":5,"name":"String(Data-Type)","parent_id":2,"description":"This is a custom-made String class, made without the STL.","github":"https:\/\/github.com\/heckwithu2\/string","download":null,"picture":"stringPic.png","technology":"C++"},{"id":6,"name":"Bigint(Data-Type)","parent_id":2,"description":"This is a Bigint class, that allows you to have an number larger than the limit for INT(2147483647). IT accomplishes this with the use of arrays. It can add, subtract and multiply Bigint numbers.","github":"https:\/\/github.com\/heckwithu2\/bigint","download":null,"picture":"bigintPic.png","technology":"C++"},{"id":7,"name":"Battleship(Dynamic-arrays)","parent_id":2,"description":"This is a display of fully dynamic arrays. ","github":"https:\/\/github.com\/heckwithu2\/battleship","download":null,"picture":"battleshipPic.png","technology":"C++"},{"id":8,"name":"File(Input-Output)","parent_id":2,"description":"This is a display of file manipulation, reading and outputting.","github":"https:\/\/github.com\/heckwithu2\/fileIO","download":null,"picture":"fileIOPic.png","technology":"C++"},{"id":9,"name":"Portfolio-Site","parent_id":1,"description":"This is the website you are viewing! My inspiration for my Portfolio page came from the bottom picture, my school account. ","github":"https:\/\/github.com\/heckwithu2\/PortfolioSite","download":null,"picture":"portfolioPic.png","technology":"Laravel Framework, PHP, JavaScript, SASS, HTML5, CSS3"},{"id":10,"name":"Alien-Game","parent_id":3,"description":"This game was made during the 2019 Kent State Global Game Jam! Made with three others, it\u0027s a top-down, one level experience!","github":"https:\/\/globalgamejam.org\/2020\/games\/alien-go-home-2","download":"https:\/\/globalgamejam.org\/2020\/games\/alien-go-home-2","picture":"alienGoHomePic.png","technology":"Game Maker Language (GML)"},{"id":11,"name":"MatchEmScene(ios-Game)","parent_id":4,"description":"This is a game in which the player is challenged to match all triangles in an allotted time limit! More updates too come.","github":"https:\/\/github.com\/heckwithu2\/IosMatchEmScene","download":null,"picture":"MatchEmScene_PIC.png","technology":"Swift, Xcode"},{"id":12,"name":"OpenGL","parent_id":3,"description":"A basic Opengl program with a menu(displayed in the console) that allows the player to jump from robot to robot in the world! ","github":"https:\/\/github.com\/heckwithu2\/OpenGl","download":null,"picture":"openglPIC.PNG","technology":"OpenGL, C, C++, GLut"}];
                var nameArray = {"1":"Applications","2":"Computer Science Projects","3":"Games","4":"Mobile Apps","5":"Websites"};
                var categories = {"Applications":1,"Computer Science Projects":2,"Games":3,"Mobile Apps":4,"Websites":5};

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
                
            }
            
            function categoryToProject( categoryName ) {
                //given category, find first project
                var projects = [{"id":0,"name":"Fitting-In","parent_id":3,"description":"I made this game for the 2018 Kent State Global Game Jam with five others. We had 48 hours to make a game about what \u0022home\u0022 meant to us.","github":"https:\/\/globalgamejam.org\/2019\/games\/fitting","download":"https:\/\/globalgamejam.org\/2019\/games\/fitting","picture":"fittingInPic.png","technology":"Game Maker Language (GML)"},{"id":1,"name":"Gandacksu","parent_id":5,"description":"I made this website when I was the president of the Kent State Animation and Game Design Club! \u003Ca href=\u0022http:\/\/gandacksu.jeremiahheck.tech\/Homepage.html\u0022\u003E Website \u003C\/a\u003E ","github":"https:\/\/github.com\/heckwithu2\/Gandacksu","download":null,"picture":"gandacksuPic.png","technology":"JavaScript, Bootstrap4, HTML5, CSS3"},{"id":4,"name":"Stack(Data-Type)","parent_id":2,"description":"This is a custom-made stack class, used to convert a given .txt file\u0027s infix expression, convert it to postfix and then output the assembly instructions.","github":"https:\/\/github.com\/heckwithu2\/stack","download":null,"picture":"stackPic.png","technology":"C++"},{"id":5,"name":"String(Data-Type)","parent_id":2,"description":"This is a custom-made String class, made without the STL.","github":"https:\/\/github.com\/heckwithu2\/string","download":null,"picture":"stringPic.png","technology":"C++"},{"id":6,"name":"Bigint(Data-Type)","parent_id":2,"description":"This is a Bigint class, that allows you to have an number larger than the limit for INT(2147483647). IT accomplishes this with the use of arrays. It can add, subtract and multiply Bigint numbers.","github":"https:\/\/github.com\/heckwithu2\/bigint","download":null,"picture":"bigintPic.png","technology":"C++"},{"id":7,"name":"Battleship(Dynamic-arrays)","parent_id":2,"description":"This is a display of fully dynamic arrays. ","github":"https:\/\/github.com\/heckwithu2\/battleship","download":null,"picture":"battleshipPic.png","technology":"C++"},{"id":8,"name":"File(Input-Output)","parent_id":2,"description":"This is a display of file manipulation, reading and outputting.","github":"https:\/\/github.com\/heckwithu2\/fileIO","download":null,"picture":"fileIOPic.png","technology":"C++"},{"id":9,"name":"Portfolio-Site","parent_id":1,"description":"This is the website you are viewing! My inspiration for my Portfolio page came from the bottom picture, my school account. ","github":"https:\/\/github.com\/heckwithu2\/PortfolioSite","download":null,"picture":"portfolioPic.png","technology":"Laravel Framework, PHP, JavaScript, SASS, HTML5, CSS3"},{"id":10,"name":"Alien-Game","parent_id":3,"description":"This game was made during the 2019 Kent State Global Game Jam! Made with three others, it\u0027s a top-down, one level experience!","github":"https:\/\/globalgamejam.org\/2020\/games\/alien-go-home-2","download":"https:\/\/globalgamejam.org\/2020\/games\/alien-go-home-2","picture":"alienGoHomePic.png","technology":"Game Maker Language (GML)"},{"id":11,"name":"MatchEmScene(ios-Game)","parent_id":4,"description":"This is a game in which the player is challenged to match all triangles in an allotted time limit! More updates too come.","github":"https:\/\/github.com\/heckwithu2\/IosMatchEmScene","download":null,"picture":"MatchEmScene_PIC.png","technology":"Swift, Xcode"},{"id":12,"name":"OpenGL","parent_id":3,"description":"A basic Opengl program with a menu(displayed in the console) that allows the player to jump from robot to robot in the world! ","github":"https:\/\/github.com\/heckwithu2\/OpenGl","download":null,"picture":"openglPIC.PNG","technology":"OpenGL, C, C++, GLut"}];
                //var nameArray = {"1":"Applications","2":"Computer Science Projects","3":"Games","4":"Mobile Apps","5":"Websites"};
                var categories = {"Applications":1,"Computer Science Projects":2,"Games":3,"Mobile Apps":4,"Websites":5};

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
    </body>
</html>