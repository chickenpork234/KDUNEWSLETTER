<html>
<head>
<?php 
include "../Members/detailsfunc.php";
?>
        
        <?php include "../links.html" ?>
        <link rel="stylesheet" href="../css/styles.css">
        <script src="../js/Script.js"></script>

    <div class="header">

        <i><h1 id="title"><b>KDU NEWSLETTER PAGE</b></h1></i>
        <h2 id="motto">"HIT THE GROUND RUNNING"</h2> 
        
        <?php
                if(isset($_SESSION['FirstName']))
                {
               echo" <h4 class='welcome'>Welcome, ".$_SESSION['FirstName']." </h4>";

                }
        ?>
        </div>
</head>



<body style="background-color: #e6e6e6">

                <button class="tablink" onclick="window.location.href='home.php'">Home</button> 
                <button class="tablink" onclick="window.location.href='event.php'">Event</button>
                <button class="tablink" onclick="myFunction()">About Us</button>
                        <div id="myDropdown" class="dropdown-content">
                                <a onclick= "window.location.href='campus.php'">Our Campus</a>
                                <a onclick= "window.location.href='contactUs.php'">Contact Us</a>
                        </div> 
                <button class="tablink" onclick="window.location.href='../login.php'">Login</button>
        
        <div class="articles">
        <h1 class="title">Events</h1> 
        <?php require_once("eventfunc.php"); ?>
        </div>
</body>
</html>