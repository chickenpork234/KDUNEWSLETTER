<html>

<?php require_once("../loginfuncadmin.php"); 
       ?>

<head>
        
        <?php include "../links.html" ?>
        <link rel="stylesheet" href="../css/styles.css">
        <script src="../js/Script.js"></script>
        
        <div class="header">
                <i><h1 id="title"><b>KDU NEWSLETTER PAGE</b></h1></i>
                <h2 id="motto">"HIT THE GROUND RUNNING"</h2>
                <h4 class="welcome">Welcome, <?php echo $_SESSION['emaila']?> </h4>
                <h4 class="welcome"><button class="btn btn-primary" onclick="window.location.href='../logout.php'">Logout</button> </h4>
        </div>

</head>

<body style="background-color: #e6e6e6">

        <button class="tablink" onclick="window.location.href='adminpage.php'">Home</button>
        <button class="tablink" onclick="window.location.href='adminevent.php'">Event</button>
        <button class="tablink" onclick="window.location.href='memberstable.php'">Members</button> 
        <button class="tablink" onclick="submissionFunction()">Submission</button>
                <div id="submissionDropdown" class="dropdown-content-submission">
                        <a onclick=" window.location.href='articlesubmission.php'">Articles</a>
                        <a onclick=" window.location.href='eventsubmission.php'">Events</a>
                </div> 
                
   <br><br><br><br><br><br>
   <?php  require_once("memberstablefunc.php"); ?>

</body>

</html>