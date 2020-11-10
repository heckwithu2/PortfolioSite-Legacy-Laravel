
    <head>
        <meta charset="UTF-8">
        <title>Jeremiah Heck's Portfolio</title>
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