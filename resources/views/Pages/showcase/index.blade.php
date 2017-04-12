@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="portfolio-title">
                            <a href="showcase/tunnelBird">Tunnel Bird</a>
                        </span>
                        <span class="pull-right">C#</span>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-3">
                            <img src="/img/portfolio/TunnelBird/TunnelBirdIcon.png" class="portfolio-img" />
                        </div>
                        <div class="col-md-7 col-md-offset-1 portfolio-desc">
                            <p>
                                A simple helicopter style game written in C# for my PROG 2200 Advanced OOP class.
                                In Tunnel Bird you must keep yourself from hitting the roof or floor while also dodging
                                flaming enemy skulls ! The game increases in difficulty for every level you complete.
                            </p>
                            <p>
                                This game was written in Visual Studio using Windows Forms to display the visuals.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="portfolio-title">
                            <a href="showcase/nsccapp">NSCC Mock Application Form</a>
                        </span>
                        <span class="pull-right">C#, Azure, Entity</span>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-7 portfolio-desc">
                            <p>
                                This project dealt with CRUD functionality through a Windows Form application front end
                                that talked to an Azure database in the cloud. For this project I worked with:
                                <ul>
                                    <li>Entity Framework</li>
                                    <li>Azure & Cloud Services</li>
                                    <li>Odata Web Routing</li>
                                    <li>Odata Template Connection</li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <img src="/img/portfolio/NsccApplication/nscclogo.png" class="portfolio-img" />
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="portfolio-title">
                            <a href="showcase/dataMigration">Database Migration</a>
                        </span>
                        <span class="pull-right">SQL, Oracle</span>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-3">
                            <img src="/img/portfolio/DataMigration/DataMigrationIcon.png" class="portfolio-img" />
                        </div>
                        <div class="col-md-7 col-md-offset-1 portfolio-desc">
                            <p>
                                For this project I had to start with an existing database that had data in it and
                                implement a few requested upgrades. This required me to:
                                <ul>
                                    <li>Create a new, upgraded database.</li>
                                    <li>Preform ETL from the old database into the new one, cleaning and transforming the data
                                        as needed.</li>
                                    <li>Test against the new database to ensure the data is intact.</li>
                                </ul>
                            </p>
                            <p>
                                This was all accomplished in Oracle.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="portfolio-title">
                            <a href="showcase/stack">Stack the Boxes</a>
                        </span>
                        <span class="pull-right">C#, Unity</span>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-7 portfolio-desc">
                            <p>
                                A small 2D physics game I made as practice with with Unity. Boxes are launched into the
                                air and you must stack them before the next one is thrown ! Keep a sharp eye out as
                                sometimes a coin is thrown because of your beautiful stacking.
                            </p>
                            <p>
                                But beware ! If you drop any of the boxes then it's game over !
                            </p>
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <img src="/img/portfolio/StackTheBoxes/StackTheBoxesIcon.png" class="portfolio-img" />
                        </div>
                    </div>
                </div>



                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="portfolio-title">
                            <a href="showcase/foodFight">Food Fight</a>
                        </span>
                        <span class="pull-right">Java</span>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-3">
                            <img src="/img/portfolio/FoodFight/FoodFightIconSquare.png" class="portfolio-img" />
                        </div>
                        <div class="col-md-7 col-md-offset-1 portfolio-desc">
                            <p>
                                A short battle game I made using Java swing as a project for my OOP class. This was my first foray
                                into programming with Java and a GUI. All of the assests are created by me, or altered from existing
                                open source sprites.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection