@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Data Migration</h2>
            <p>
                This was my final project for my Database Development 1100 class. In this project
                I was given a database with data already in it, along with requests for four upgrades.
                I then had to create the scripts to make the updated database and then test the data integrity.
                Alongside my work I have included a copy of the assignment, script for creating and populating
                the original database, and the original ERD.
            </p>
            <p>
                A copy of the source code is available on my <a href="https://github.com/MapleThunder/DataMigration">Github</a>.
            </p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <br>
            <figure>
                <img src="/img/portfolio/DataMigration/ERD-samples-small.png" />
                <figcaption>A comparison of tables between the original and updated ERDs.</figcaption>
            </figure>
        </div>
        <div class="col-md-5">
            <h3>Analysis and ERD creation</h3>
            <p>
                To start the project I had to <strong>analyse</strong> the existing system and determine how it worked. After I felt like
                I had a decent understanding of the database, I started from the original ERD and added or edited
                tables as needed to implement the desired improvements.
            </p>
            <p>
                To illustrate some changes I had to make are two samples of tables from both ERDs, pictured left.
                The grey table on the left of the red line is the original. One requirement was the addition of
                a Warehouse table and an ability to record stock per warehouse. This means I had to remove the fields
                regarding stock levels from the Products table, and put it in a new junction table Product_Location.
            </p>
        </div>
    </div> <!-- End ERD Row -->
    <br>
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <h3>DDL Script</h3>
            <p>
                After drawing out the ERD I could get started on writing the script that would
                construct the updated database. For the purpose of this assignment I assumed
                all datatypes were used for a specific reasons and left them almost entirely the
                same as in the original database.
            </p>
            <p>
                Pictured to the right is an excerpt from the DDL script for the updated database.
                I chose the Products and Product_Location tables because they show examples of
                some constraints I had to use in the upgrading of the database. The constraint at the
                bottom of the Products table <strong>checks</strong> to guarantee that only a 1 or 0
                are entered into the discontinued field, effectively creating a boolean. At the end of the
                Product_Location table I needed to include a constraint that <strong>combined</strong>
                the unique pairing of the two foreign keys into a primary key for the entry.
            </p>
        </div>
        <div class="col-md-5">
            <br>
            <figure>
                <img src="/img/portfolio/DataMigration/sampleDDL.JPG" />
                <figcaption>Creation of updated Products and Product_Location tables.</figcaption>
            </figure>
        </div>
    </div>	<!-- End DDL Row -->
    <br>
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <figure>
                <img src="/img/portfolio/DataMigration/Countries-DML-Sample.PNG" />
                <figcaption>DML script to fill the newly created Countries table.</figcaption>
            </figure>
        </div>
        <div class="col-md-5">
            <h3>DML Script</h3>
            <p>
                Once all of the tables were created successfully it was time to migrate the client's
                data from the original database into the new structure. This was a straight forward
                operation involving insert statements. There weren't many tricky satements, then one
                that gave me the most trouble was inserting the used countries into the newly created
                Countries table.
            </p>
            <p>
                Pictured to the left is my insert statement for the Countries table. Using union statements
                allowed me to acquire a complete list of countries they have used, without any repetition.
                My statement takes the list of countries that it collects, and gives it a unique ID and adds
                it to the new table.
            </p>
        </div>
    </div> <!-- End DML Row -->
    <br>
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <h3>Test Script</h3>
            <p>
                The test script was created to help verify the integrity of the data and updated tables.
                There are various statements that are commented in the code as to their use. Pictured on
                the right is a short snippet of code <strong>comparing the count</strong> of entries in the 'Categories'
                table in both databases, displaying the results in labelled columns.
            </p>
        </div>
        <div class="col-md-5">
            <br><br>
            <figure>
                <img src="/img/portfolio/DataMigration/TestCount-Sample.PNG" />
                <figcaption>An excerpt from my test script.</figcaption>
            </figure>
        </div>
    </div>

@endsection