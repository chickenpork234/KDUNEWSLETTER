<html>

<?php include "detailsfunc.php";
include "accountfunc.php"; ?>

<head>
        
        <?php include "../links.html" ?>
        <link rel="stylesheet" href="../css/styles.css">
        <script src="../js/Script.js"></script>
        
         <div class="header">
                <i><h1 id="title"><b>KDU NEWSLETTER PAGE</b></h1></i>
                <h2 id="motto">"HIT THE GROUND RUNNING"</h2>
                <button class="btn btn-primary" onclick="window.location.href='../logout.php'" style="float:right">Logout</button>
                <br>
                <br>
                <h4 class="welcome">Welcome, <?php echo $_SESSION['FirstName']?> </h4> 
                
        </div>

</head>

<body style="background-color: #e6e6e6">

        <button class="tablink" onclick="window.location.href='memberpage.php'" style="width:20%">Home</button>
    <button class="tablink" onclick="window.location.href='eventlogin.php'" style="width:20%">Event</button>
    <button class="tablink" onclick="myFunction()" style="width:20%">About Us</button>
                <div id="myDropdown" class="dropdown-content">
                    <a onclick=" window.location.href='campuslogin.php'">Our Campus</a>
                    <a onclick=" window.location.href='contactUslogin.php'">Contact Us</a>
                </div>  
    <button class="tablink" onclick="window.location.href='account.php'" style="width:20%">My Account</button>
    <button class="tablink" onclick="window.location.href='invitations.php'" style="width:20%">Invitations</button>
                
                <div class="column-acc2">
                <h3><?php echo $_SESSION['FirstName']?></h3>
                <!--<button class="btn btn-primary" onclick="window.location.href='../logout.php'">Logout</button>-->
                </div> 
        
                <div class="column-acc">

                <h1>My Profile</h1><br>
                <?php require_once("accountdetailsfunc.php"); ?>
        </form>
        </div>

</body>

</html>