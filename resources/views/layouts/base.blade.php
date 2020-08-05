<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Jeremiah's App</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

{{--    --------------------------------------------------------------------------}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/test.css')}}">
    {{--    --------------------------------------------------------------------------}}

    <div class="container-fluid ">
        <div id="headerRow" class="row p-0 header">            
        </div>
    </div>
    
</head>

 <script>
        
        

        //var headerNames[] = ;
        //var headerNames = ["Home", "Projects", "Resume", "Social"];
        var icons = ["GitHub", "LinkedIn"];
        //make my Menu
        function headerMenu( headerArray, icons ) {
            var menu = "";

            for (let i = 0;i < headerArray.length; ++i) {
                if (headerArray[i] == "Social") {
                    menu += "<div id='header' class='col-3'>";
                    menu += "<div class='container'>";
                    menu += "<div class='row m-0 p-0'>";
                    for (let x = 0;x < icons.length; ++x) {
                        menu += "<div class='col-6 socialBoxes'>" + icons[x] + "</div>";
                    }
                    menu += "</div>" + "</div>" + "</div>";
                } else {
                    menu += "<div id='header' class='col-3 headerElement'>" + headerArray[i] + "</div>";
                }
            }
            document.getElementById("headerRow").innerHTML = menu;
        }
        //headerMenu(headerNames, icons);

        //make dropdowns for menu
        
    </script>
<body>

@yield('content')
</body>
</html>