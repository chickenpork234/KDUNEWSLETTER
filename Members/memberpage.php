<html>

<?php include "detailsfunc.php";?>

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

        <button class="tablink" onclick="homeFunction()" style="width:20%">Home</button>
                <div id="homeDropdown" class="dropdown-content-home">
                        <a onclick= "window.location.href='../Categories/business.php'">Business</a>
                        <a onclick= "window.location.href='../Categories/design.php'">Built Environment & Interior Design</a>
                        <a onclick= "window.location.href='../Categories/arts.php'">Communication & Creative Arts</a>
                        <a onclick= "window.location.href='../Categories/computing.php'">Computing & Creative Media</a>
                        <a onclick= "window.location.href='../Categories/engineering.php'">Engineering</a>
                        <a onclick= "window.location.href='../Categories/hospitality.php'">Hospitality, Tourism & Culinary Arts</a>
                        <a onclick= "window.location.href='../Categories/health.php'">Health Science</a>
                        <a onclick= "window.location.href='../Categories/law.php'">Law</a>
                        <a onclick= "window.location.href='../Categories/pre-u.php'">Pre-University Studies</a>
                        <a onclick= "window.location.href='../Categories/accountancy.php'">Professional Accountancy</a>     
                </div> 
        
    <button class="tablink" onclick="window.location.href='eventlogin.php'" style="width:20%">Event</button>
    <button class="tablink" onclick="myFunction()" style="width:20%">About Us</button>
                <div id="myDropdown" class="dropdown-content">
                    <a onclick=" window.location.href='campuslogin.php'">Our Campus</a>
                    <a onclick=" window.location.href='contactUslogin.php'">Contact Us</a>
                </div>  
    <button class="tablink" onclick="window.location.href='account.php'" style="width:20%">My Account</button>
    <button class="tablink" onclick="window.location.href='invitations.php'" style="width:20%">Invitations</button>

      
        <div id="home">
        <h1 class="title">Articles</h1> 
        <button class='btn btn-primary' onclick="window.location.href='submitarticle.php'">Submit Article</button><br><br>
            <?php require_once("memberpagefunc.php");?>
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