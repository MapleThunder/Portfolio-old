@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <h2>More Information</h2>
            <p>
                You enter a name for your hero, and then choose a trait and a weapon for your hero. Then battle as many
                food theme'd monsters as you can until death !<br>
                The <span class="desc-em">trait</span> choice determines which type of monster your hero is weak against.
                Currently there is only one monster per trait choice.<br>
                The <span class="desc-em">weapon</span> choice will give you an attack advantage depending on the type of
                monster you are facing. Currently there is only 3 types of weapons, so the "Bare Hands" are effective against 2
                of the enemies.
            </p>

        </div>
        <div class="col-md-5">
            <img src="/img/portfolio/FoodFight/food_fight.jpg" style="width: 400px" />
        </div>
    </div>

    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <h2>Source</h2>
            <p>
                A copy of the source code is available on my <a href="https://github.com/MapleThunder/FoodFight">Github</a>.
            </p>
        </div>
    </div>

@endsection