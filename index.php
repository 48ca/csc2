<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TJ CSC</title>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="James Houghton" name="author" />
        <meta content="tj, tjhsst, computer, security, club, csc, tjcsc, tjctf, ctf" name="keywords" />
        <meta content="TJHSST Computer Security Club is designed to introduce students to and pique their interests in a field which is readily gaining importance in an increasingly technology-dependant world." name="Description" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/main.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/carousel.css" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <header style="margin-bottom:0;" id="top" class="navbar navbar-static-top nav">
            <div class="container">
                <div class="navbar-header">
                    <a href="" class="dropdown-toggle navbar-brand" data-toggle="dropdown" style="margin-left:7px;">
                        TJCSC
                        <!--<span class="caret"></span>-->
                    </a>
                    <!--
                    <ul class="dropdown-menu" style="left:inherit;">
                        <li><a href="//activities.tjhsst.edu/csc/old">Old CSC Site</a></li>
                    </ul> -->
                    <button class="navbar-toggle collapsed" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <nav class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#club">The Club</a></li>
                        <li><a href="#officers">Officers</a></li>
                        <li><a href="#schedule">Schedule</a></li>
                        <li><a href="#ctf">CTF</a></li>
                        <li><a href="#info">Extra Information</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right"></ul>
                </nav>
            </div>
        </header>
        <div class="title">
            <div class="container">
                <h1 class="title">TJ Computer Security Club</h1>
            </div>
        </div>
        <div class="main" id="content" role="main">
            <div id="club">
                <div class="container start">
                    <div class="row">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">The Club</h2>
                            <div class="lead description">
                                TJHSST Computer Security Club is designed to introduce students to and pique their interests in a field which is readily gaining importance in an increasingly technology-dependant world.
                                Most blocks are spent as lectures on security topics chosen by club attendees.
                                Occasionally, blocks may be spent participating in CTFs, watching pertinent videos, or listening to guest speakers.
                                We meet <b>Wednesdays</b> during 8th periods both <b>A and B block</b>.
                                <br /><br />
                                <a href="https://drive.google.com/folderview?id=0B5DvBrjbHOdPZjBPZldPUGg1eHc" class="btn btn-primary btn-outline btn-lg" target="_blank">Current Presentations</a>
                                <div class="dropdown" style="display:inline-block">
                                    <button class="btn btn-primary btn-outline btn-lg dropdown-toggle" type="button" id="dropdownOld" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Old Presentations
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownOld">
                                        <li><a href="https://drive.google.com/folderview?id=0B5DvBrjbHOdPVTNIZzFxU01NWFE" target="_blank">2015 - 2016</a></li>
                                        <li><a href="https://drive.google.com/drive/folders/0B1fA1ynKhdPtMUVOVGhsVTNvbWc" target="_blank">2014 - 2015</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img class="featurette-image img-responsive shadow-image" src="images/csc.png" alt="TJCSC" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider" />
            <div id="officers">
                <div class="container">
                    <h2 class="featurette-heading" style="margin-top:0;">Officers</h2>
                    <p class="lead description">
                        CSC's officers are elected yearly and are tasked with managing CSC, developing and presenting club lectures, and running TJCTF.  Feel free to ask club officers any computer security-related questions you have!
                    </p>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-xs-6 officer">
                                    <p class="lead">Eric Wang</p>
                                    <h4>President</h4>
                                    <img class="img-responsive img-circle" src="images/officers/eric.jpg" alt="Eric Wang">
                                </div>
                                <div class="col-xs-6 officer">
                                    <p class="lead">Alex Sun</p>
                                    <h4>Chief Lecturer</h4>
                                    <img class="img-responsive img-circle" src="images/no_image_available.jpg" alt="Alex Sun">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-xs-6 officer">
                                    <p class="lead">Emily Quan</p>
                                    <h4>Treasurer</h4>
                                    <img class="img-responsive img-circle" src="images/no_image_available.jpg" alt="Emily Quan">
                                </div>
                                <div class="col-xs-6 officer">
                                    <p class="lead">James Houghton</p>
                                    <h4>Webmaster</h4>
                                    <img class="img-responsive img-circle" src="images/officers/james.jpg" alt="James Houghton">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="col-md-4 col-xs-6 officer">
                                <p class="lead">Evan Shi</p>
                                <h4>Lecturer</h4>
                                <img class="img-responsive img-circle" src="images/officers/evan.png" alt="Evan Shi">
                            </div>
                            <div class="col-md-4 col-xs-6 officer">
                                <p class="lead">Joseph Chen</p>
                                <h4>Lecturer</h4>
                                <img class="img-responsive img-circle" src="images/officers/joseph.jpg" alt="Joseph Chen">
                            </div>
                            <div class="col-md-4 col-xs-6 officer">
                                <p class="lead">Neil Thistlethwaite</p>
                                <h4>Lecturer</h4>
                                <img class="img-responsive img-circle" src="images/no_image_available.jpg" alt="Neil Thistlethwaite">
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider" />
            <div id="schedule">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="featurette-heading">Schedule</h2>
<?php
$data = json_decode(file_get_contents("lectures.json"));
foreach ($data as $key => $val) {
    echo '<div class="panel' . (time() > strtotime($val->date) ? ' done': '') . '">
        <div class="panel-heading">' . $key . '<span class="pull-right">' . $val->date . '</span></div>
        <div class="panel-body">
            <p>' .$val->body . '</p>';
    if (property_exists($val, "links")) {
        foreach ($val->links as $val2) {
            if (count($val2) == 1) {
                echo '<a class="btn btn-primary disabled">' .$val2[0] . '</a> ';
            }
            else {
                echo '<a class="btn btn-primary" href="' . $val2[1] . '" target="_blank">' . $val2[0] . '</a> ';
            }
        }
    }
    echo '</div></div>';
}
?>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider" />
            <div id="ctf">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-push-5">
                            <h2 class="featurette-heading">Capture the Flag</h2>
                            <p class="lead description ctf">
                                Capture the Flag (CTF) competitions are fun, online computer security contests that often include problems ranging widely in category and difficulty.
                                TJCSC is proud to host one of the few high school managed CTFs in the country, TJCTF! Interested in getting started? Check out this year's introCTF.
                            </p>
                                <a style="margin-bottom:5px;" class="btn-fw btn btn-primary btn-outline btn-lg" href="//introctf.herokuapp.com" target="_blank">introCTF</a>
                                <a style="margin-bottom:5px;" class="btn-fw btn btn-primary btn-outline btn-lg" href="//tjctf.org" target="_blank">TJCTF</a>
                                <br/>
                        </div>
                        <div class="col-md-5 col-md-pull-7">
                            <img class="featurette-image img-responsive" src="images/tjctf2016.png" alt="TJCTF 2016"></img>
                            <img src="images/tjctf2015.svg" style="vertical-align:top;margin-top:7px" alt="TJCTF 2015" /> <span style="color:#78F8FF; font-size: 60px">TJCTF</span>
                        </div>
                    </div>
                    <div id="ctf-list" class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <br>
                            <p class="lead">Past and Upcoming High School CTFs</p>
                            <ul class="list-group">
<?php
$data = json_decode(file_get_contents("ctfs.json"));
foreach ($data as $key => $val) {
    echo '<li class="list-group-item">';
    echo '<div class="info"><h4 class="list-group-item-heading"><a href="' . $val->url . '" target="_blank">' . $key . '</a></h4>';
    echo '<p class="list-group-item-text">Date: ' . $val->date . '</p></div>';
    echo '<h3 class="status">' . $val->status . '</h3>';
    if (property_exists($val, "participants")) {
        echo '<div class="participants"><b>Participants</b><table class="table">';
        echo '<thead><tr><th>Rank</th><th>Team Name</th></tr></thead><tbody>';
        foreach($val->participants as $val2) {
            echo '<tr>';
            foreach ($val2 as $val3) {
                echo '<td>' . $val3 . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody></table></div>';
    }
    echo '</li>';
}
?>
                            </ul>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider" />
            <div>
                <div id="info">
                    <div class="container">
                        <div class="row">
                            <h2 class="featurette-heading" style="margin-top:0;">Extra Information</h2>
                            <p class="lead description">
                                Join our mailing list to receiving club announcements:
                                <br /><br />
                                <a href="//lists.tjhsst.edu/listinfo/csc" class="btn btn-primary btn-outline btn-lg" target="_blank">
                                    Mailing list
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="half-rule" style="margin-bottom:0;" />
        <div class="footer" role="contentinfo">
            <div class="container" style="margin-right:0;">
                <div class="row">
                    <div class="col-md-12">
                        <p style="font-size:10px;">TJCSC 2016<br />James Houghton</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>