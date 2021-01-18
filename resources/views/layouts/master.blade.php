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

        function takeMeHere( string ) {
            window.location = string;
        }

        function addOntoUrl( addString) {
            urlHash = window.location;
            urlHash += "/" + addString;
            window.location = urlHash;
        }
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
        <script type="text/javascript">
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

                var finalHeight = totalheight - finalHeaderHeight - 51;
                var myStringHeight = finalHeight.toString();
                myStringHeight += "px";
                document.getElementById('portfolioList').style.height = myStringHeight; 
            }
            

            
        </script>
    </body>
</html>