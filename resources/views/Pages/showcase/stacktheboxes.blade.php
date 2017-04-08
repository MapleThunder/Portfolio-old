@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="infoVideo">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-0daPDm12tU" frameborder="0" allowfullscreen></iframe>
            </div>
            <br>
            <div class="writtenInfo">
                <div class="videoText">
                    <div class="desc">
                        <h2>Description</h2>
                        <p>
                            A small 2D physics game I made as practice with with Unity. Currently it is a work in
                            progress, but I have many ideas for the future. Boxes are launched into the air and you
                            must stack them before the next one is thrown ! Keep a sharp eye out as sometimes a tip
                            is thrown because of your immacculate stacking.<br>
                            But beware ! If you drop any of the boxes then it's game over !
                        </p>
                        <p class="marginbot-50">
                            A zip folder containing the Unity project is available <a href="http://nikobentley.ca/Unity/StackTheBoxes.zip">here</a>.
                        </p>
                    </div>
                </div><!-- End row-->
            </div>
        </div>
    </div>

@endsection