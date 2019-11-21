<html>

<?php require_once("submiteventfunc.php"); ?>

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
    <button class="tablink" onclick="window.location.href='invitations.php'" style="width:20%">Invitations</button>

    <div class="articles">
        <div class="post-article">
        <form method="post" enctype="multipart/form-data">
                <h1 id="title">Post Event Details</h1><br>

                <label for="EventTitle">Title</label><br>
                <input class="article-input" type="text" name="EventTitle" id="EventTitle" required><br><br>
                
                <label for="Details">Details</label><br>
                <textarea class="article-input-details" name="Details" id="Details" required></textarea><br><br>

                <label for="Organizer">Organizer</label><br>
                <input class="article-input" type="text" name="Organizer" id="Organizer" required><br><br>
                
                <label for="Images">Images</label><br>
                <input class="article-input" type="file" name="Images" id="Images" required>

                <br><br><input type="submit" class="btn btn-default" name="SubmitPost" id="SubmitPost" value="Submit">
        </form>
        </div>
    </div>
</body>
</html>