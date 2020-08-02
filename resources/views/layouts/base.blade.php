<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Jeremiah's App</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/base.css')}}">

    <div id="header" class="container-fluid header">

    </div>
</head>

<body>

    <script>
        document.getElementById("header").innerHTML = "Thank you for browsing!" ;
    </script>

    <div class="menuShell">
        <div class="menu">

        </div>
    </div>

    <div class="back">
        Im Here
    </div>

@yield('content')
</body>
</html>