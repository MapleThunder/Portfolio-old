@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h4 class="desc-title text-center">Tunnel Bird</h4>
            <p class="text-center">
                Tunnel Bird was a game I made as an assignment for my PROG2200 Advanced Object Oriented Programming. The
                point of this assignment was to compile all of our knowledge of object oriented programming and C# and
                use that to create something fun. I decided to create a simple helicopter style game where you are a bird
                flying through a tunnel trying to avoid flaming skulls.
            </p>
            <p class="text-center">
                A copy of the source code is available on my
                <a href="https://github.com/NSCC-Winter2017-PROG2200-700/Bentley-Niko-w0286227/tree/master/NikoBentley_PROG2200_Game">Github</a>.
            </p>
        </div>
    </div>

    <div class="row" style="padding-top: 50px">
        <div class="col-md-5 col-md-offset-1">
            <h3 class="desc-title">Creating the Game</h3>
            <p>
                The concept behind the game is simple, I have objects representing the player, the enemies, and the wall
                pieces. To give the player the illusion of moving, I gave everything else a movement in the opposite
                direction. If the player hits the ceiling, floor, or any enemies result in game over.
            </p>
            <p>
                The controls for the game are very simple:
                <ul>
                    <li><strong>Space:</strong> Flap your wings and move up.</li>
                    <li><strong>Enter:</strong> Pause the game, or start.</li>
                    <li><strong>R:</strong> Restart the game.</li>
                </ul>
            </p>
        </div>
        <div class="col-md-5">
            <figure>
                <img src="/img/portfolio/TunnelBird/TunnelBirdIcon.png" style="width: 60%" />
                <figcaption class="text-center"></figcaption>
            </figure>
        </div>
    </div>

    <!-- Wall Generation -->
    <div class="row" style="padding-top: 50px">
        <div class="col-md-5 col-md-offset-1">
            <figure>
                <img src="/img/portfolio/TunnelBird/WallGeneration.png" class="nscc-app-img" />
                <figcaption class="text-center">Bottom Wall Generation Block</figcaption>
            </figure>
        </div>
        <div class="col-md-5">
            <h3 class="desc-title">Wall Generation</h3>
            <p>
                To get the walls to generate in a semi-random pattern for each level wasn't too difficult. How I handled it
                was by making the walls put of many thin, and tall rectangles. This way by altering the height of the
                rectangles being instantiated for the wall I could give it the illusion of growing or shrinking. The
                changing of the heights was handled in the form during the loop that instantiates all of the wall objects.
                I have 2 boolean values that determine whether the wall is growing or shrinking, and after a certain number
                of loops those booleans have a 50/50 chance to change or remain the same.
            </p>
            <p>
                I found that occasionally a wall could grow or shrink past the window boundaries, which was problematic.
                To fix this I gave the walls a minimum height they had to be, and if that height requirement was broken
                then I set the booleans to grow and forbade them from being switched until the wall had reached a minimum
                height high enough that it would be safe to allow the growth boolean to allow a decrease in height again.
            </p>
        </div>
    </div>

    <!-- Animation -->
    <div class="row" style="padding-top: 50px">
        <div class="col-md-5 col-md-offset-1">
            <h3 class="desc-title">Animation</h3>
            <p>
                To make the game a little more engaging and nice looking, I added in sprite animations for the player and
                enemy objects. The player's animation was only a second image that appears when the user presses the space bar
                to go up, this is all that is needed for the illusion of a bird flapping it's wings. The enemy animations
                were a bit more in depth, for this I had 3 separate images that I rotated through based on a pseudo-timer.
                I accomplished this by adding an iterator to the Enemy object that would increase every time the Draw method
                is called and use the value of that iterator to determine which image to use for the sprite.
            </p>
            <p>

            </p>
        </div>
        <div class="col-md-5">
            <figure>
                <img src="/img/portfolio/TunnelBird/DrawEnemy.png" style="width: 70%" />
                <figcaption class="text-center">Enemy Object Draw Function</figcaption>
            </figure>
        </div>
    </div>

@endsection