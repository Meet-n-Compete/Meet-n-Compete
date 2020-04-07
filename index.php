<?php
//include 'header.php';
//header("refresh:0");
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Meet-N-Compete</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>



    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/hover-min.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/vendor/fontawesome-free-5.12.0-web/css/all.min.css" />
    <link rel="stylesheet" href="css/dropdown.css" />
    <link rel="stylesheet" href="style.css" />
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <link rel="stylesheet" href="css/jquery.timepicker.css" />
    
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js" async defer></script>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcp7a_Sb-9QaDw_u_wp1esshBVYYbRhl4&libraries=places" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src = "meetncompete.js" async defer> </script>
    <script src = "js/jquery.timepicker.min.js"> </script>

</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a href=""><img id="logo" src="img/logo.png" alt=""></a>
                </div>
                <div class="col-sm-6">
                    <div id="header-right" class="vertical-center">
                        <ul class = "nav-login"><li><a href=\'register.php\'>Login</a></li></ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Upcoming Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">My Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/basketball.jpg" alt="#">		
            </div>
            <div class="carousel-item">
                <img src="img/soccer.jpg" alt="#">
            </div>
            <div class="carousel-item">
                <img src="img/playbasketball.jpg" alt="#">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

    <main id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" id="mInfo">
                    <div id="map"></div>

                    <div class="detail-container">
                        <div class="event-box">
                            <a href=""><img src="https://via.placeholder.com/200" alt=""></a>
                            <div class="title-box"><a href=""><h3>Event Title</h3></a></div>
                        </div>
                        <div class="event-box">
                            <a href=""><img src="https://via.placeholder.com/200" alt=""></a>
                            <div class="title-box"><a href=""><h3>Event Title</h3></a></div>
                        </div>
                        <div class="event-box">
                            <a href=""><img src="https://via.placeholder.com/200" alt=""></a>
                            <div class="title-box"><a href=""><h3>Event Title</h3></a></div>
                        </div>
                    </div>
                    <div class="button-box">
                        <a class="button" href="upcoming-events.php">Learn More</a>
                        <a class="button" href="">Create Event</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-container">
                    <h2>Preferences</h2>
                    Baseball <input type = "checkbox" id="baseball" class="checkbox"/> <br></br>
                    Basketball <input type = "checkbox" id="basketball" class="checkbox"/> <br></br>
                    Billiards (Pool) <input type = "checkbox" id="billiards" class="checkbox"/> <br></br>
                    Bowling <input type = "checkbox" id="bowling" class="checkbox"/><br></br>
                    Climbing <input type = "checkbox" id="climbing" class="checkbox"/><br></br>
                    Cricket <input type = "checkbox" id="cricket" class="checkbox"/><br></br>
                    Curling <input type = "checkbox" id="curling" class="checkbox"/><br></br>
                    Football <input type = "checkbox" id="football" class="checkbox"/><br></br>
                    Golf/Discgolf <input type = "checkbox" id="golf" class="checkbox"/><br></br>
                    Rugby <input type = "checkbox" id="rugby" class="checkbox"/><br></br>
                    Skateboarding <input type = "checkbox" id="skateboarding" class="checkbox"/><br></br>
                    Skiing <input type = "checkbox" id="skiing" class="checkbox"/><br></br>
                    Snowboarding <input type = "checkbox" id="snowboarding" class="checkbox"/><br></br>
                    Soccer <input type = "checkbox" id="soccer" class="checkbox"/> <br></br>
                    Swimming <input type = "checkbox" id="swimming" class="checkbox"/><br></br>
                    Tennis/Table Tennis <input type = "checkbox" id="tennis" class="checkbox"/><br></br>
                    Volleyball <input type = "checkbox" id="volleyball" class="checkbox"/><br></br>
                    Weightlifting <input type = "checkbox" id="weight_lifting" class="checkbox"/><br></br>               
                    Radius: <input type = "text" class = "allText" id = "radius" value="2" required minlength="1" maxlength="2" size="4" <p> miles</p>
                    <a id="search" class="button">Search</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="promptAccountPopup">
            <!-- Popup Div Starts Here -->
            <div id="popupAccount">
            <form action="#" id="createEventForm" method="post" name="createEventForm">
            <a class="boxclose" id="boxclose" onclick= "div_hide()"></a>
            <p id="promptForAccount"></p>
            <a href="register.php" class="loginSignup button" id="redirectButton">Login/Signup</a>
            </form>
            </div>
        </div>
        <!-- Popup Div Ends Here -->
    </main>';

include 'footer.php';

?>
