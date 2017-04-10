@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h4 class="desc-title text-center">NSCC Digital Application Form</h4>
            <p class="text-center">
                This work example covers work done over a few projects in my DBAS3200 Data Driven Applications class.
                In the first assignment I was given an ERD and required to use the Entity Framework and a code first design
                to translate the ERD into a local database. After that the next assignment had me create an Azure Web
                Service and code a back end for that to connect into the database that I created in the first assignment.
                The final assignment had me create a program that would allow someone to submit an application using a
                Windows From application.
            </p>
            <p class="text-center">
                A copy of the source code is available on my
                <a href="https://github.com/NSCC-Winter2017-DBAS3200/Bentley-Niko-w0286227/tree/master/Assignment2_NSCC_Application">Github</a>.
                This project will have the source code for the first two assignments in separate libraries located within
                the same solution. For the windows for application I had to make a new solution, which you can find
                <a href="https://github.com/NSCC-Winter2017-DBAS3200/Bentley-Niko-w0286227/tree/master/NsccApplication">here</a>.
            </p>
        </div>
    </div>
    <br>

    <!-- Entity & Code First Explanation -->
    <div class="row">
        <div class="col-md-5 col-md-offset-1" style="padding-top: 50px">
            <figure>
                <img src="/img/portfolio/NsccApplication/NsccDbContext.png" />
                <figcaption>NsccDbContext</figcaption>
            </figure>
        </div>
        <div class="col-md-5">
            <div class="row">
                <h3 class="desc-title text-center">Entity Framework and Code First Design</h3>
                <p>
                    Initially I was <a href="/showcase/nsccerd">given an ERD</a> to base my database on. I was intended to
                    use a code first design using the Entity Framework. This allows the developer to write out the structure
                    for a database in a more readable format than blocks of SQL. To do this I created a class for almost
                    every table that I want in my database, I don't need to worry about explicitly creating the junction
                    tables as Entity will take care of that when it runs. To define fields in the table all that is needed is defining
                    a property in the class. Entity provides data annotations that allowed me to specify details or constraints
                    on the field. To define relationships I added navigation properties that are represented by either a
                    single object (connects to one) or by an ICollection (connects to many).
                </p>
                <p>
                    In order to create the database to match the ERD almost exactly (there was a typo or two that my teacher
                    clarified) I had to manually create the junction table between a few of the tables. To do this I used
                    the Entity model builder in the NsccDbContext (pictured left). I needed to use the model builder
                    because the naming conventions that Entity used for the tables and their fields didn't match the
                    desired naming convention in the ERD.
                </p>
                <p>
                    An example of a table class is pictured below with my class for the Campus table.
                </p>
            </div>
            <br>
            <div class="row">
                <figure>
                    <img src="/img/portfolio/NsccApplication/CampusEntity.png" />
                    <figcaption>Campus Table Class</figcaption>
                </figure>
            </div>
        </div>
    </div> <!-- End assignment 1 -->
    <br>

    <!-- Azure Explanation -->
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <h3 class="desc-title text-center">Azure Web Service</h3>
            <p>
                For the second assignment I was tasked with taking the database I had created and moving that up into the
                Azure cloud. I was able to use a free trial account from Azure to do some very basic work in the cloud.
                Because I couldn't push the database up to Azure due to the permissions on the free account, I had to create
                an empty database on Azure that will be filled with the tables. To get the database up to Azure I had to
                access the local database through SQL Manager to generate the code for database definition. SQL Manager
                has an option while generating the code to generate specifically for Azure, which removes the create
                code and only generates the code to define the tables. Then I connected to the database I created on Azure
                through SQL Manager and ran the table definition code to create the tables in the cloud.
            </p>
            <p>
                After I had the database created I needed to fill it in with some sample data provided by my instructor.
                I wrote a small python script that read the files provided line by line and created insert statements
                accordingly, writing them to a file. Once I had the insert statements in their own file I ran them against
                the Azure database to populate it.
            </p>
            <p>
                Once the data is populated I could start working on and building out the web service that would also be
                hosted on Azure. This was all very straight forward as all I had to do was create an OData web service
                template and fill that with my controllers. Since all of the controllers were basically identical I was
                able to copy and paste most of the code, changing naming where needed. The largest discrepancy in the
                controllers was with the ProvinceStates controller because it uses a compound primary key. This only matters
                in the functions that require a key (find individual, update, delete). To deal with this problem I had to
                specify which parameters were meant for which key fields in a data annotation over the function. You can
                see an example of this pictured on the right.
            </p>
        </div>
        <div class="col-md-5" style="padding-top: 50px">
            <figure>
                <img    src="/img/portfolio/NsccApplication/ProvinceStatesControllerPatch.png"
                        class="nscc-app-img" />
                <figcaption>Patch Function in the ProvinceStatesController</figcaption>
            </figure>
        </div>
    </div> <!-- End assignment 2 -->
    <br>

    <!-- Windows Form Explanation -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3 class="desc-title text-center">Windows Form Application</h3>
            <p class="text-center">
                In this final assignment I was tasked with using Windows Form to create a basic form that would take
                the Azure service created in the previous assignment, and use that for the back end database to store
                the information related to these applications.
            </p>
            <p class="text-center">
                Pictured below and on the left is the first tab of the application where a new application/applicant is
                created. Because this application is very basic, the method of editing a user is writing in all of their
                information and if the email matches an existing email it will overwrite the saved user data with the
                entered data. In an actual application there would be more safe guards around this, and also an easier way
                to populate the saved user data. Some of the fields are disabled at first, this is because they are not
                relevant at this time. For example, the Province/State is disabled because there is not Province/State data
                for the initial Country of Andorra. There is also no live validation, but if you click "Save" when there is
                missing information an alert will pop up telling you what is missing. Once all the required data is entered
                and the user is saved, an alert will inform the user of the saving success.
            </p>
            <p class="text-center">
                Pictured below and on the right is the second tab of the application where you can view information about
                the different applicants and their applications. On the left side of the screen is the list box containing
                a list of Applicants. when you select an applicant it will populate all of the fields with the relevant
                information for that applicant. To the right of that is a list box that contains a list of applications
                by the selected user, organized by date applied. Selecting different applications will populate the relevant
                information from the selected application.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <figure>
                <img    src="/img/portfolio/NsccApplication/NsccFormTab1.png"
                        class="nscc-app-img" />
                <figcaption>New Application Tab of the Form</figcaption>
            </figure>
        </div>
        <div class="col-md-5">
            <figure>
                <img    src="/img/portfolio/NsccApplication/NsccFormTab2.png"
                        class="nscc-app-img" />
                <figcaption>Applicants Tab of the Form</figcaption>
            </figure>
        </div>
    </div> <!-- End assignment 3 -->

@endsection