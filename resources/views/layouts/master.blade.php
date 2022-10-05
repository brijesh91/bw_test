<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape Calculator</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="container" style="margin-top: 2px;">
            <img src="{{ asset('images/header_bg.gif') }}" alt="header" style="width:100%">
            <h1 class="header-text">Shape Calculator</h1>
        </div>
        <br><br>
        <div class="container">
            <div class="row" style="padding:20px;">
                <div class="col-xs-6">
                    <h3>Welcome to Shape Calculator</h3>
                    <p>
                        <strong>
                            Shape Calculator is an interactive web application. To the right you will
                            find the 3 step application. Follow the instructions in each step.
                            Clicking cancel will take you back to step 1. Enjoy!
                        </strong>
                    </p>
                    <p>
                        A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country, in which roasted parts of
                        sentences fly into your mouth.
                    </p>
                    <p>
                        Even the all-powerful Pointing has no control about the blind texts it is an
                        almost unorthographic life One day however a small line of blind text by the
                        name of Lorem Ipsum decided to leave for the far World of Grammar. The
                        Big Oxmox advised her not to do so, because there were thousands of bad
                        Commas.
                    </p>
                </div>
                @yield('content')
                <div class="col-xs-2 banner" style="height: 330px; background-color:darkgray;">
                    <p>120 x 240 Ad (Vertical Banner)</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
