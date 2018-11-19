<?php include('staff_index.php') ?>
<!DOCTYPE HTML>
<?php session_start(); ?>
<?php
include('include.php');
if (isset($_SESSION['valid'])) {
    include('include.php');
    $ID = $_SESSION['valid'];
    $sql = "SELECT * FROM ADMIN_PROFILE WHERE Admin_Id='$ID'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    print_r($row);

    $name = $row['Admin_name'];


} ?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#checked").click(function () {
                if ($(this).is(":checked")) {
                    $("#manda").show();
                    $("#enter").hide();
                    $("#volun").hide();
                    $("#about").hide();
                    $("#faculty").hide();

                } else {
                    $("#manda").hide();

                }
            });
        });
        $(function () {
            $("#entertain").click(function () {
                if ($(this).is(":checked")) {
                    $("#enter").show();
                    $("#volun").hide();
                    $("#about").hide();
                    $("#faculty").hide();
                    $("#manda").hide();

                } else {
                    $("#enter").hide();
                }
            });
        });
        $(function () {
            $("#vol").click(function () {
                if ($(this).is(":checked")) {
                    $("#volun").show();
                    $("#enter").hide();
                    $("#about").hide();
                    $("#faculty").hide();
                    $("#manda").hide();

                } else {
                    $("#volun").hide();

                }
            });
        });
        $(function () {
            $("#other").click(function () {
                if ($(this).is(":checked")) {
                    $("#about").show();
                    $("#enter").hide();
                    $("#volun").hide();
                    $("#faculty").hide();
                    $("#manda").hide();

                } else {
                    $("#about").hide();

                }
            });
        });
        $(function () {
            $("#checkFaculty").click(function () {
                if ($(this).is(":checked")) {
                    $("#faculty").show();
                    $("#enter").hide();
                    $("#volun").hide();
                    $("#about").hide();
                    $("#manda").hide();

                } else {
                    $("#faculty").hide();

                }
            });
        });

    </script>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;

        }

        input[type=url] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type=date] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 50px;
            display: inline-block;
            color: #4267B2;
            font-weight: bold;
            font-size: 18px;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 25px;
            margin-left: 150px;
            margin-top: 150px;
            width: 900px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 55%;
            margin-top: 6px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

    </style>
</head>

<body>
<div class="main">
    <div class="container">
        <form enctype="multipart/form-data" action="staff_myevents.php" method="POST">
            <div class="row">
                <div class="col-25">
                    <label>Event Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="eventName" class="event_name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Event Date:</label>
                </div>
                <div class="col-75">
                    <input type="date" name="eventDate" class="event_date">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Time:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="eventTime" class="event_time">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Venue:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="eventVenue" class="event_venue">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Event Type:</label>
                </div>
                <div class="col-75">
                    <label>
                        <input type="radio" id="checked" name="eventType" value="Mandatory" class="event_type">Mandatory
                        <span class="checkmark"></span>
                    </label>
                    <div class="row" id="manda" style="display: none;">
                        <div class="col-25">
                            <label>Dress Code: &nbsp; &nbsp;</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="DressCode" class="DressCode">
                        </div>
                    </div>
                    <label>
                        <input type="radio" id="entertain" name="eventType" value="Entertainment">Entertainment
                        <span class="checkmark"></span>
                    </label>
                    <div class="row" id="enter" style="display: none;">
                        <div class="col-25">
                            <label>Entrance cost: &nbsp; &nbsp;</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="Cost">
                        </div>
                    </div>
                    <label>
                        <input type="radio" id="vol" name="eventType" value="Volunteer">Volunteer
                        <span class="checkmark"></span>
                    </label>
                    <div class="row" id="volun" style="display: none;">
                        <div class="col-25">
                            <label>Number of Volunteers: &nbsp; &nbsp;</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="Cost">
                        </div>
                    </div>
                    <label>
                        <input type="radio" id="other" name="eventType" value="Others">Others
                        <span class="checkmark"></span>
                    </label>
                    <div class="row" id="about" style="display: none;">
                        <div class="col-25">
                            <label>About: &nbsp; &nbsp;</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="Cost">
                        </div>
                    </div>
                    <label>
                        <input type="radio" id="checkFaculty" name="eventType" value="Faculty">Faculty
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="row" id="faculty" style="display: none;">
                <div class="col-25">
                    <label>Faculty: </label>
                </div>
                <div class="col-75">
                    <select name="faculty">
                        <option value="selected" selected>Choose faculty</option>
                        <optgroup label="A">
                            <option value="Architecture">Architecture</option>
                            <option value="Arts">Arts</option>
                        </optgroup>
                        <optgroup label="B">
                            <option value="BBA">BBA</option>
                            <option value="Bio Technology">Bio Technology</option>
                        </optgroup>
                        <optgroup label="C">
                            <option value="Communication">Communication</option>
                        </optgroup>
                        <optgroup label="E">
                            <option value="Engineering">Engineering</option>
                            <option value="English Studies">English Studies</option>
                        </optgroup>
                        <optgroup label="L">
                            <option value="Laws">Laws</option>
                        </optgroup>
                        <optgroup label="M">
                            <option value="Music">Music</option>
                        </optgroup>
                        <optgroup label="N">
                            <option value="Nursing">Nursing</option>
                        </optgroup>
                        <optgroup label="S">
                            <option value="Science and Technology">Science and Technology</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Description:</label>
                </div>
                <div class="col-75">
                    <textarea name="description" style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Link:</label>
                </div>
                <div class="col-75">
                    <input type="url" name="link">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Select image to upload:</label>
                </div>
                <div class="col-75">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
            </div>
            <div class="row"><br>
                <a href="staff_home.php" class="btn btn-lg btn-danger" disabled="disabled"
                   style="margin-right: 30px; float: right; ">Cancel</a>
                <button value="Upload file " type="submit" class="btn btn-lg btn-success"
                        style="margin-right: 30px;float: right;"> Create New
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
