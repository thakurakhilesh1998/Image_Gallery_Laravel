<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Image Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <link href="{{url("Frontend/css/stylesheet.css")}}" type="text/css" rel="stylesheet">
    <script src="{{url("Frontend/js/bootstrap.min.js")}}">
    </script>
    <link href="{{url("Frontend/css/bootstrap.min.css")}}" type="text/css" rel="stylesheet">
</head>

<body>
    
    <div class="container-fluid">
        <div class="row header">
            <div class="col-md-3 col-sm-6 my-auto">
                <div class="logo">
                    <img class="img-fluid" src="{{url("Frontend/images/logo/logo.png")}}">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 my-auto">
                <div class="navigation">
                    <ul class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 bg-white my-auto">
                <div class="contact-us">
                    <ul class="menu">
                        <li>
                        <img class="img-fluid" src="{{url("Frontend/images/logo/facebook.png")}}">
                        </li>
                        <li>
                        <img class="img-fluid" src="{{url("Frontend/images/logo/instagram.png")}}">
                        </li>
                        <li>
                        <img class="img-fluid" src="{{url("Frontend/images/logo/pinterest.png")}}">
                        </li>
                        <li>
                        <img class="img-fluid" src="{{url("Frontend/images/logo/twitter.png")}}">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>