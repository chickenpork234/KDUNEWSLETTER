<html>

<?php require_once("changepwdfunc.php"); 
include "detailsfunc.php";?>

<head>
        
        <?php include "../links.html" ?>
        <link rel="stylesheet" href="../css/styles.css">
        <script src="../js/Script.js"></script>
        
        <div class="header">
                <i><h1 id="title"><b>KDU NEWSLETTER PAGE</b></h1></i>
                <h2 id="motto">"HIT THE GROUND RUNNING"</h2>
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
    <button class="tablink" onclick="window.location.href='invitations.php'" style="width:20">Invitations</button>
                
                <div class="column">
                <h1>Change Password</h1><br>
                <form method="post">

                <label for="OldPassword">Old Password*</label><br>
                <input type="password" name="OldPassword" id="OldPassword" required><br><br>
                
                <label for="NewPassword">New Password*</label><br>
                <input type="password" name="NewPassword" id="NewPassword" required><br><br>

                <label for="RepeatPassword">Repeat New Password*</label><br>
                <input type="password" name="RepeatPassword" id="RepeatPassword" required><br><br>

                <input type="submit" class="btn btn-primary" name="change" id="Change Password" value="Change Password">
       
        </form>
        </div>

</body>

</html>