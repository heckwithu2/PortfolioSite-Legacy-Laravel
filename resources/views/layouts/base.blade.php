<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Jeremiah Heck's Portfolio</title>
        <link rel="stylesheet" type="text/css" href="http://app.test/css/app.css">
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

                function routeParent( parentString ) {
                    
                    window.location = "/" + parentString;
                  
                   
                }

                function routeChild( childString, parentString) {
                    window.location = "/" + parentString + "/#" + childString;
                }
            </script>
            
            
            

            <div id="footer" class="row footerRow">
               <div id="bottomLeftFooter" class="col">
                    
               </div>
                <div class="col-8 footerText">
                       Made with the Laravel Framework
                        <a href="https://laravel.com/"> <img class=" footerIcon img-fluid" src="images/laravel.png"></a>
                </div>
                <div id="bottomRightFooter" class="col">
                   
                </div>
            </div>


            @yield('content')
        </div> 
    </body>
</html>