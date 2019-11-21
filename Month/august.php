<html>

<?php 
include "../Members/detailsfunc.php";
include "../loginfuncadmin.php"; 
?>


<head>
        
        <?php include "../links.html" ?>
        <link rel="stylesheet" href="../css/styles.css">
        <script src="../js/Script.js"></script>
        
        <div class="header">
                <i><h1 id="title"><b>KDU NEWSLETTER PAGE</b></h1></i>
                <h2 id="motto">"HIT THE GROUND RUNNING"</h2>

        <?php
                if(isset($_SESSION['FirstName']))
                {
               echo"<button class='btn btn-primary' onclick=window.location.href='../logout.php' style='float:right'>Logout</button>
                <br>
                <br>
                <h4 class='welcome'>Welcome, ".$_SESSION['FirstName']." </h4>";
                }
                elseif(isset($_SESSION['emaila'])){
                        echo" <h4 class='welcome'>Welcome, ".$_SESSION['emaila']." </h4>";
                        echo "<h4 class='welcome'><button class='btn btn-primary' onclick=window.location.href='logout.php'>Logout</button> </h4>";
                }
        ?>
        </div>
</head>

<body style="background-color: #e6e6e6">

        <?php
                if(isset($_SESSION['FirstName']))
                { 
                        echo '<button class="tablink" onclick=window.location.href="../Members/memberpage.php" style="width:20%"">Home</button>
                        <button class="tablink" onclick=window.location.href="../Members/eventlogin.php" style="width:20%"">Event</button>
                        <button class="tablink" onclick="myFunction()" style="width:20%">About Us</button>
                                    <div id="myDropdown" class="dropdown-content">
                                        <a onclick=window.location.href="../Members/campuslogin.php">Our Campus</a>
                                        <a onclick=window.location.href="../Members/contactUslogin.php">Contact Us</a>
                                    </div>  
                        <button class="tablink" onclick=window.location.href="../Members/account.php" style="width:20%"">My Account</button>
                        <button class="tablink" onclick=window.location.href="../Members/invitations.php" style="width:20%"">Invitations</button>';
                
                }
                
                elseif(isset($_SESSION['emaila'])){
                        echo "<button class='tablink' onclick=window.location.href='../Admin/adminpage.php'>Home</button>
                        <button class='tablink' onclick=window.location.href='../Admin/adminevent.php'>Event</button>
                        <button class='tablink' onclick=window.location.href='../Admin/memberstable.php'>Members</button> 
                        <button class='tablink' onclick='submissionFunction()'>Submission</button>
                        <div id='submissionDropdown' class='dropdown-content-submission'>
                                <a onclick= window.location.href='../Admin/articlesubmission.php'>Articles</a>
                                <a onclick= window.location.href='../Admin/eventsubmission.php'>Events</a>
                        </div> ";
                }
                else{
                        echo "<button class='tablink' onclick=window.location.href='../non-members/home.php'>Home</button>
                        <button class='tablink' onclick=window.location.href='../non-members/event.php'>Event</button>
                        <button class='tablink' onclick='myFunction()'>About Us</button>
                        <div id='myDropdown' class='dropdown-content'>
                                <a onclick=window.location.href='../non-members/campus.php'>Our Campus</a>
                                <a onclick=window.location.href='../non-members/contactUs.php'>Contact Us</a>
                        </div> 
                        <button class='tablink' onclick=window.location.href='../login.php'>Login</button>";
                }
        ?>
   
        <div class="articles">
        <h1 class="title">August</h1> 
        <?php require_once("augustfunc.php"); ?>
        </div>
</body>

</html>