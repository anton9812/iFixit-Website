<!DOCTYPE html>
<html>

    <head>
        <!-- Covers all special symbols -->
        <meta charset="UTF-8">
        <!-- When turning to landscape or portrait the content does not zoom in -->
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <!-- In order for jQuery Mobile to work: -->
        <link rel="stylesheet" href="themes/ThemeRoller.min.css" />
        <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>



    </head>


    <style>

        .ui-content-a {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 80vh;
        } 

        .footer {
            position:fixed;
            bottom:0;
            width:100%;
            height:50px;
        }

        .div {
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -120px;
            margin-left: -200px;
        } 

        .ui-li-thumb {
            position: fixed;
            top: 50%;
            margin-top: 30px;
            margin-left: 10px;
        }

        .para {
            margin-left: 5%;
            margin-right: 5%;
        }

    </style>
    <body>        

        <!-- HOME PAGE -->
        <div data-role="page" id="Home">

            <div data-role="header" data-position="fixed" class="">
                <h1>ASAP Fix It</h1>
            </div><!-- /header -->

            <div role="main" class="ui-content-a" align="center">

                <div class="ui-grid-a">
                    <div class="ui-block-a"><img src="themes/images/individualpic.png" alt="Individual" height="60" width="75px"><br>
                        <a href="#Individual" class="ui-btn ui-btn-inline" data-transition="slide" style="font-size:125%;">Individual</a><br>
                    </div>

                    <div class="ui-block-b">
                        <img src="themes/images/contractorpic.png" alt="Contractor" height="60" width="75px"><br>
                        <a href="#Contractor" class="ui-btn ui-btn-inline" data-transition="slide" style="font-size:125%;">Contractor</a>
                    </div>

                </div>
            </div><!-- /content -->

            <div data-role="footer" data-position="fixed" class="footer"> <!-- makes the footer stay at the bottom -->
                <h4>Page Footer</h4>
            </div><!-- /footer -->
        </div><!-- /page -->

        <!-- INDIVIDUAL -->
        <div data-role="page" id="Individual">

            <div data-role="header">


                <h1>Individual</h1>
            </div><!-- /header -->
            <a href="#Home" data-transition="slide" data-direction="reverse" class="ui-btn ui-btn-inline">Back</a> <!-- Back button -->
            <div role="main" class="ui-content" align="center">

                <img src="themes/images/questionMark.png" alt="Tick" height="70%" width="70%"><br>
                <hr>
                <b>What do we do?</b>
                <hr>
                We're here to put you in touch with the right people. 
                <br>
                <br>
                Whether you need your house re-decorated or need a dishwasher installed... 
                <br>
                <br>
                <b>"We Know A Guy!"</b>
                <hr>
                <br>
                <a href="#Search" align="center" class="ui-btn ui-btn-inline">
                    <img src="themes/images/search.png" alt="search" height="20%" width="20%"><br>
                    Find a Professional
                </a>
                <br>
                <a href="#Search" align="center" class="ui-btn ui-btn-inline">
                    <img src="themes/images/booking.png" alt="booking" height="20%" width="20%"><br>
                    View Bookings 
                </a>
            </div><!-- /content -->

            <div data-role="footer" data-position="fixed" class="footer">
                <h4>Page Footer</h4>
            </div><!-- /footer -->
        </div><!-- /page -->


        <!-- INDIVIDUAL SEARCH -->
        <div data-role="page" id="Search" class="search">

            <div data-role="header">
                <h1>Services</h1>
            </div><!-- /header -->
            <a href="#Home" data-transition="slide" data-direction="reverse" class="ui-btn ui-btn-inline">Back</a> <!-- Back button -->

            <div role="main" class="ui-content" align="center" data-position="fixed">
                <ul class="ui-alt-thumb" data-role="listview" data-inset="true" data-position="fixed" >


                    <li><a href="#Plumbing"><img src="themes/images/Plumbing.jpg" class="ui-li-thumb">Plumbing</a></li>
                    <li><a href="#Repairs"><img src="themes/images/ASAPFixIT2.png" class="ui-li-thumb">Repairs</a></li>
                    <li><a href="#Electricals"><img src="themes/images/Electricals.jpg" class="ui-li-thumb">Electricals</a></li>
                    <li><a href="#Painting"><img src="themes/images/paint.jpg" class="ui-li-thumb">Painting</a></li>
                    <li><a href="#Tiling"><img src="themes/images/tiling.jpg" class="ui-li-thumb">Tiling</a></li>
                    <li><a href="#Outdoors"><img src="themes/images/Outdoors.jpg" class="ui-li-thumb">Repairs</a></li>

                </ul>

            </div><!-- /content -->

            <div data-role="footer" data-position="fixed">
                <h4>Page Footer</h4>
            </div><!-- /footer -->
        </div><!-- /page -->


        <!-- INDIVIDUAL PLUMBING -->
        <div data-role="page" id="Plumbing" class="plumbing">
            <div data-role="header">
                <h1>Plumbing</h1>
            </div><!-- /header -->

            <a href="#Search" data-transition="slide" data-direction="reverse" class="ui-btn ui-btn-inline">Back</a> <!-- Back button -->

            <div  data-filtertext = "true" data-filter="true" data-filter="true" data-inset="true">

                <ul data-role="listview" >
                    <li><a href="#profile">
                        <img src="themes/images/usericon.png" class="ui-li-thumb">
                        <h3 align="center">Jason Stanley</h3>
                        <hr>
                        <p align="center">
                            Price Range:£30 per hour
                            <br>
                            Years of experience:10
                            <br>
                            Available on:Tuesdays,Thursdays and Saturdays.
                            <br>
                        </p>
                        <hr>
                        <p align="center">View Profile</p>
                        </a>

                </ul>

                <ul data-role="listview">
                    <li><a href="#">
                        <img src="themes/images/usericon.png" class="ui-li-thumb">
                        <h3 align="center">Steve Johnson</h3>
                        <hr>
                        <p align="center">
                            Price Range:£15 per hour
                            <br>
                            Years of experience:7
                            <br>
                            Available on:Tuesdays,Wednesdays and Fridays.
                            <br>
                        </p>
                        <hr>
                        <p align="center">View Profile</p>
                        </a>
                </ul>

                <ul data-role="listview">
                    <li><a href="#">
                        <img src="themes/images/usericon.png" class="ui-li-thumb">
                        <h3 align="center">Ashleigh Jones</h3>
                        <hr>
                        <p align="center">
                            Price Range:£20 per hour
                            <br>
                            Years of experience:2
                            <br>
                            Available on: Fridays,Saturdays and Sundays.
                        </p>
                        <hr>
                        <p align="center">View Profile</p>
                        </a>
                </ul>

                <ul data-role="listview">
                    <li><a href="#">
                        <img src="themes/images/usericon.png" class="ui-li-thumb">
                        <h3 align="center">Damien White</h3>
                        <hr>
                        <p align="center">
                            Price Range:£25 per hour
                            <br>
                            Years of experience:20
                            <br>
                            Available on:Mondays,Thursdays and Saturdays.
                        </p>
                        <hr>
                        <p align="center">View Profile</p>
                        </a>
                </ul>
            </div>    

            <div data-role="footer" data-position="fixed" class="footer">
                <h4>Page Footer</h4>
            </div><!-- /footer -->
        </div><!-- /page -->


        <!-- INDIVIDUAL PROFILE -->

        <div data-role="page" id="profile">

            <div data-role="header" data-position="fixed">

                <h1>Profile</h1>
            </div><!-- /header -->

            <div role="main" align="center">
                <img src="themes/images/usericon.png" height="20%" width="20%">
                <div class="center">
                    <p>Jason Stanley</p>

                    <!--
<button href="#" class="ui-btn ui-btn-inline" style="float:right;">
<i class="fa fa-heart"></i>
</button>
-->

                    <fieldset data-role="controlgroup" data-type="horizontal" style="float:right;">
                        <input type="checkbox" name="favourite1" id="favourite1" class="custom">
                        <label for="favourite1"><span class="fa fa-heart"></span></label>
                    </fieldset>

                    <button href="#" class="ui-btn ui-btn-inline" style="float:left;">
                        <i class="material-icons" style="font-size:16px">add_location</i>
                    </button>
                </div>
                <br>
                <br>
                <b style="float:left;">London</b>
                <br>
                <hr>
                Price Range:£15 per hour
                <br>
                Years of experience:7
                <br>
                Available on:Tuesdays,Wednesdays and Fridays.
                <hr>
                <i style="float: left">+44 7722235321</i>
                <i style="float: right">JStanley@gmail.com</i>
                <br>
                <hr>
                <img src="themes/images/plumbingpic1.png" height="15%" width="100%">
                <hr>
                <img src="themes/images/plumbingpic.png" height="15%" width="100%">
                <hr>


            </div><!-- /content -->
            <p class="para">As you see above I am a specialist in plumbing, I have worked many years in the same field giving great customer service
                and recieving excellent feedback on my work.
                <br>
                If you wish to have anything fixed then go ahead and book.
            </p>
            <hr>
            <div class="ui-grid-a" align="center">
                <div class="ui-block-a"><a href="#favourites" class="ui-btn ui-btn-inline" data-transition="slide" style="font-size:150%;">Book Now</a><br>
                </div>

                <div class="ui-block-b">
                    <a href="#reviews" class="ui-btn ui-btn-inline" data-transition="slide" style="font-size:150%;">Reviews</a>
                </div>
            </div>


            <div data-role="footer" data-position="fixed" class="footer">
                <h4>Page Footer</h4>
            </div><!-- /footer -->
        </div><!-- /page -->

        <!-- FAVOURITES PAGE -->

        <div data-role="page" id="favourites">

            <div data-role="header" data-position="fixed" class="">
                <h1>Favourites</h1>
            </div><!-- /header -->

            <div role="main" class="ui-content" align="center">

                <div id="favourite-content"><p>My favourites: </p></div>
                <button>mailto</button>

                <!--
<form 
action="mailto:w1647965@my.westminster.ac.uk?subject=FavouritesList&body=favouite-content"
method="POST"
enctype="multipart/form-data"
name="EmailTestForm">

<input type="submit" value="Email Your Favourites List!">


</form>
-->
<!--

-->

                <form action="Favourite.php" method="POST">
                    First Name: <input type="text" name="first_name"><br>
                    Last Name: <input type="text" name="last_name"><br>
                    Email: <input type="text" name="email"><br>
                    Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
                    <input type="submit" name="submit" value="Submit">
                </form>

            </div> /content 

            <div data-role="footer" data-position="fixed" class="footer"> <!-- makes the footer stay at the bottom -->
                <h4>Page Footer</h4>
            </div><!-- /footer -->
        </div><!-- /page -->

        <!-- CONTRACTOR -->
        <div data-role="page" id="Contractor">

            <div data-role="header" data-position="fixed">
                <!--<a href="#Home" data-transition="slide" data-direction="reverse">Back</a>-->
                <h1>Contractor</h1>
            </div><!-- /header -->
            <a href="#Home" data-transition="slide" data-direction="reverse" class="ui-btn ui-btn-inline">Back</a><br>
            <div role="main" class="ui-content">

                <div align="center">
                    <img src="themes/images/handymanicons.png" alt="Individual" height="80%" width="80%"><br>

                    <hr>
                    What Services do you have to offer?<br>
                </div>
                <hr>
                Are you trained in one of the following:<br>

                <ul>
                    <li>Plumbing</li>
                    <li>Repairs</li>
                    <li>Electricals</li>
                    <li>Painting</li>
                    <li>Tiling</li>
                    <li>Outdoors</li>
                </ul>

                If so, you should apply to become a contractor!
                <hr>
                <div align="center">
                    <img src="themes/images/apply.png" alt="Apply" height="30%" width="30%"><br>
                    <a href="#Apply" class="ui-btn ui-btn-inline" data-transition="slide" width="50" height="60">Apply Here</a>
                </div>
                <hr>
            </div><!-- /content -->

            <div data-role="footer" data-position="fixed" class="footer">
                <h4>Page Footer</h4>
            </div><!-- /footer -->
        </div><!-- /page -->

        <!-- APPLICATION FORM -->
        <div data-role="page" id="Apply">

            <div data-role="header" data-position="fixed">
                <h1>Application Form</h1>
            </div><!-- /header -->

            <a href="#Home" data-transition="slide" data-direction="reverse" class="ui-btn ui-btn-inline">Back</a> <!-- Back button -->
            <div role="main" class="ui-content">
                <a href="#transitionExample" data-transition="slideup" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-rel="popup">   
                    Click me to see the benefits of working with us!
                </a>

                <div data-role="popup" id="transitionExample" class="ui-content" data-theme="a">
                    <p>
                        <li>Opportunities to interact with a large network of people</li>
                        <li>Progress and become recognized for the skills you have</li>
                        <li>Get jobs weekly</li>
                        <li>Obtain loyal customers</li>
                    </p>
                </div>
                <br>
                Please choose the service you would like to apply for:<br>
                <br>
                <!-- DROPDOWN -->
                <select>
                    <option value="Plumbing">Plumbing</option>
                    <option value="Repairs">Repairs</option>
                    <option value="Electricals">Electricals</option>
                    <option value="Tiling">Tiling</option>
                    <option value="Outdoors">Outdoors</option>
                </select>

                <form>
                    First Name:<br>
                    <input type="text" name="firstname">
                    Last Name:<br>
                    <input type="text" name="lastname">
                    Email Address:<br>
                    <input type="text" name="emailaddress">
                    Phone Number:<br>
                    <input type="text" name="phonenumber">
                </form>

                <hr>
                <div align="center">
                    <img src="themes/images/upload.png" alt="Apply" height="15%" width="15%"><br>
                    Upload Previous Work
                </div>
                <hr>
                <div align="center">
                    <a href="#Success" data-transition="slide" class="ui-btn ui-btn-inline">Submit Application</a>
                </div>

            </div><!-- /content -->


            <div data-role="footer" class="footer">
                <h4>Page Footer</h4>
            </div><!-- /footer -->
        </div><!-- /page -->


        <!-- Successful Application -->
        <div data-role="page" id="Success">

            <div data-role="header" data-position="fixed">

                <h1>ASAP Fix It</h1>
            </div><!-- /header -->

            <div role="main" class="div" align="center">
                <hr>
                <img src="themes/images/tick.png" alt="Tick" height="15%" width="15%"><br>

                Your Application has been Submitted Successfully!<br>
                We will be in touch with you very soon!
                <hr>
                <a href="#Home" data-transition="slide" data-direction="reverse" class="ui-btn ui-btn-inline">Back to Home</a> <!-- Back button -->
                <hr>
            </div><!-- /content -->

            <div data-role="footer" data-position="fixed" class="footer">
                <h4>Page Footer</h4>
            </div><!-- /footer -->
        </div><!-- /page -->


        <!-- Individual Home Page -->

        <script>
            $(document).on( 'pagecontainerbeforehide', 'body', function( event, ui){
                //do something
                if ( ui.nextPage.attr('id')== "favourites") {
                    $("#favourite-content").html ("");
                    if ($( "#favourite1" ).is( ":checked" )) {
                        $("#favourite-content").append("<p>Jason Stanley</p>");
                    }
                    if ($( "#favourite2" ).is( ":checked" )) {
                        $("#favourite-content").append("<p>item2 details</p>");
                    }

                }

            });


        </script>

        <!--
<script>

var body_message = $("#favourite-content");
var email = 'w1647965@my.westminster.ac.uk';
var subject = 'Favourites';
$('form').click(function() {

var mailto_link = 'mailto:' + email + '?subject=' + subject + '&body=' + body_message;

win = window.open(mailto_link, 'emailWindow');
//                if (win && win.open && !win.closed) win.close();

});

</script>
-->


    </body>

</html>



