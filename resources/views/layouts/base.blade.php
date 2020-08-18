<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Jeremiah Heck's Portfolio</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/app.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="container-fluid">

            <div id="nameRow" class="row p-0 nameRow">
                <div class="col-12 nameText text-center">
                    JEREMIAH HECK
                </div>
            </div>
            
                @php
                $makeMenu = new App\Classes\MegaMenu;
                $makeMenu->menuCreation();
                @endphp


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
            
            
            

            <div id="footer" class="row footerRow">
               <div id="bottomLeftFooter" class="col">
                    
               </div>
                <div class="col-8 footerText">
                       Made with the Laravel Framework
                        <a href="https://laravel.com/"> <img class=" footerIcon img-fluid" src="{{ asset('public/images/laravel.png') }}"></a>
                </div>
                <div id="bottomRightFooter" class="col">
                   
                </div>
            </div>


            @yield('content')

            
        </div> 
    </body>
</html>