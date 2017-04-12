@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Programming</div>
                    <div class="panel-body skill-panel">
                        <img class="skill-img" src="img/skills/csharp.png" alt="C Sharp" />
                        <img class="skill-img" src="img/skills/python.png" alt="Python" />
                        <img class="skill-img" src="img/skills/java.png" alt="Java" />
                        <img class="skill-img" src="img/skills/ms-net.png" alt="Microsoft .Net" />
                    </div>
                </div>
            </div> <!-- End Programming -->

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Software</div>
                    <div class="panel-body skill-panel">
                        <img class="skill-img" src="img/skills/vs.jpg" alt="Visual Studio" />
                        <img class="skill-img" src="img/skills/eclipse.png" alt="Eclipse" />
                        <img class="skill-img" src="img/skills/phpstorm.png" alt="PhpStorm" />
                        <img class="skill-img" src="img/skills/xamarin.png" alt="Xamarin Studio" />
                        <img class="skill-img" src="img/skills/oracle.jpg" alt="Oracle" />
                        <img class="skill-img" src="img/skills/adobe.jpg" alt="Adobe Suite" />
                        <img class="skill-img" src="img/skills/mysql.jpg" alt="MySql" />
                        <img class="skill-img" src="img/skills/ms-sqlsvr.jpg" alt="Microsoft SQL Server" />
                        <img class="skill-img" src="img/skills/android-studio.jpg" alt="Android Studio" />
                    </div>
                </div>
            </div> <!-- End Software -->

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Web</div>
                    <div class="panel-body skill-panel">
                        <img class="skill-img" src="img/skills/phalcon.png" alt="Phalcon" />
                        <img class="skill-img" src="img/skills/php.png" alt="Php" />
                        <img class="skill-img" src="img/skills/jquery.png" alt="jQuery" />
                        <img class="skill-img" src="img/skills/laravel.png" alt="Laravel" />
                        <img class="skill-img" src="img/skills/web-langs.png" alt="HTML, CSS, and JavaScript" />
                    </div>
                </div>
            </div> <!-- End Web -->
        </div>
    </div>
@endsection