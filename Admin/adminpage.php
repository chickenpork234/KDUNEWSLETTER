<html>

<?php require_once("../loginfuncadmin.php"); ?>

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

        <button class="tablink"  onclick="homeFunction()">Home</button>
                <div id="homeDropdown" class="dropdown-content-home">
                        <a onclick=" window.location.href='../Categories/business.php'">Business</a>
                        <a onclick=" window.location.href='../Categories/design.php'">Built Environment & Interior Design</a>
                        <a onclick=" window.location.href='../Categories/arts.php'">Communication & Creative Arts</a>
                        <a onclick=" window.location.href='../Categories/computing.php'">Computing & Creative Media</a>
                        <a onclick=" window.location.href='../Categories/engineering.php'">Engineering</a>
                        <a onclick=" window.location.href='../Categories/hospitality.php'">Hospitality, Tourism & Culinary Arts</a>
                        <a onclick=" window.location.href='../Categories/health.php'">Health Science</a>
                        <a onclick=" window.location.href='../Categories/law.php'">Law</a>
                        <a onclick=" window.location.href='../Categories/pre-u.php'">Pre-University Studies</a>
                        <a onclick=" window.location.href='../Categories/accountancy.php'">Professional Accountancy</a>    
                </div> 
        <button class="tablink" onclick="window.location.href='adminevent.php'" >Event</button>
        <button class="tablink" onclick="window.location.href='memberstable.php'" >Members</button> 
        <button class="tablink" onclick="submissionFunction()" >Submission</button>
                <div id="submissionDropdown" class="dropdown-content-submission">
                        <a onclick=" window.location.href='articlesubmission.php'">Articles</a>
                        <a onclick=" window.location.href='eventsubmission.php'">Events</a>
                </div> 
                
        <div id="home">
        <h1 class="title">Articles</h1> 
        <?php require_once("adminpagefunc.php");?>
        </div>

        <div id="date">
        <h3>Search by Month</h3>
        <a href="../Month/january.php">January</a><br>
        <a href="../Month/february.php">February</a><br>
        <a href="../Month/march.php">March</a><br>
        <a href="../Month/april.php">April</a><br>
        <a href="../Month/may.php">May</a><br>
        <a href="../Month/june.php">June</a><br>
        <a href="../Month/july.php">July</a><br>
        <a href="../Month/august.php">August</a><br>
        <a href="../Month/september.php">September</a><br>
        <a href="../Month/october.php">October</a><br>
        <a href="../Month/november.php">November</a><br>
        <a href="../Month/december.php">December</a><br>
        </div>

</body>

</html>