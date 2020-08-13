<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Jeremiah Heck's Portfolio</title>
        <link rel="stylesheet" type="text/css" href="http://app.test/css/app.css">
    
    </head>

    <body>
        <div class="container-fluid">
            
                @php
                $makeMenu = new App\Classes\MegaMenu;
                $makeMenu->menuCreation();
                @endphp


            <script type="text/javascript">

                function routeParent( parentString ) {
                    window.location = "/" + parentString;
                }

                function routeChild( childString, parentString) {
                    window.location = "/" + parentString + "/" + childString;
                }
            </script>
            
            @yield('content')
            <div class="col-12 row footerRow">
                <div class="col-12 footerText">
                        Made with the Laravel Framework
                <img class="icon" src="/images/laravel.png">
                </div>
            </div>
        </div> 
    </body>
</html>