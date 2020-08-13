<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Jeremiah Heck's Portfolio</title>
        <link rel="stylesheet" type="text/css" href="http://app.test/css/app.css">
    </head>

    <body>

        @php
        $makeMenu = new App\Classes\MegaMenu;
        $makeMenu->menuCreation();
        @endphp

        <script type="text/javascript">

            function routeParent( parentString ) {
                window.location = "/" + parentString;//here double curly bracket
            }

            function routeChild( childString, parentString) {
                window.location = "/" + parentString + "/" + childString;//here double curly bracket
            }
        </script>

        @yield('content')
    </body>
</html>