<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Niko Bentley</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-dark navbar-static-top">
        <div>
            <img src="/img/nova-scotia-flag.png" style="height: 55px; float: left">
        </div>
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"><a href="{{ url('showcase') }}">Showcase</a></span>
                    <span class="icon-bar"><a href="{{ url('skills') }}">Skills</a></span>
                    <span class="icon-bar"><a href="{{ url('journey') }}">My Journey</a></span>
                    <span class="icon-bar"><a href="{{ url('resume') }}">Resumé</a></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Niko Bentley
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="nav-button"><a href="{{ url('showcase') }}">Work Examples</a></li>
                    <li class="nav-button"><a href="{{ url('skills') }}">Skills</a></li>
                    <li class="nav-button"><a href="{{ url('journey') }}">My Journey</a></li>
                    <li class="nav-button"><a href="{{ url('resume') }}">Resumé</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Social media links -->
                    <!--<li><a href="https://github.com/MapleThunder"><i class="fa fa-github"></i></a></li>-->
                    <!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

</body>
</html>
