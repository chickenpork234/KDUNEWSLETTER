<html>

<?php require_once("submitarticlefunc.php"); ?>

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
        <form method="post">
                <h1 id="title">Post Article</h1><br>

                <label for="ArticleTitle">Title</label><br>
                <input class="article-input" type="text" name="ArticleTitle" id="ArticleTitle" required><br><br>
                
                <label for="Details">Details</label><br>
                <textarea class="article-input-details" name="Details" id="Details" required></textarea><br><br>
                
                <label for="Author">Author</label><br>
                <input class="article-input" type="text" name="Author" id="Author" pattern="[a-zA-Z][a-zA-Z ]{2,}" required><br><br>

                <label for="Category">Category</label><br>
                <select class="article-input" name="Category">
                <option class="article-input" value="Business">Business</option>
                <option class="article-input" value="Built Environment & Interior Design">Built Environment & Interior Design</option>
                <option class="article-input" value="Communication & Creative Arts">Communication & Creative Arts</option>
                <option class="article-input" value="Computing & Creative Media">Computing & Creative Media</option>
                <option class="article-input" value="Engineering">Engineering</option>
                <option class="article-input" value="Hospitality, Tourism & Culinary Arts">Hospitality, Tourism & Culinary Arts</option>
                <option class="article-input" value="Health Science">Health Science</option>
                <option class="article-input" value="Law">Law</option>
                <option class="article-input" value="Pre-University Studies">Pre-University Studies</option>
                <option class="article-input" value="Professional Accountancy">Professional Accountancy</option>
                </select>

                <br><br><input type="submit" class="btn btn-default" name="SubmitPost" id="SubmitPost" value="Submit">
        </form>
        </div>
    </div>
</body>
</html>