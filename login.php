<html>

<?php require_once("loginfunc.php");  ?>

<head>
    
    <?php include "links.html" ?>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/Script.js"></script>
       

        <?php require_once("conn.php")?> 

    <div class="header">
        <i><h1 id="title"><b>KDU NEWSLETTER PAGE</b></h1></i>
        <h2 id="motto">"HIT THE GROUND RUNNING"</h2>
    </div>

</head>

<body style="background-color: #e6e6e6">


    <button class="tablink" onclick="window.location.href='non-members/home.php'">Home</button>
    <button class="tablink" onclick="window.location.href='non-members/event.php'">Event</button>
    <button class="tablink" onclick="myFunction()">About Us</button>
                <div id="myDropdown" class="dropdown-content">
                    <a onclick=" window.location.href='non-members/campus.php'">Our Campus</a>
                    <a onclick=" window.location.href='non-members/contactUs.php'">Contact Us</a>
                </div>  
    <button class="tablink" onclick="window.location.href='login.php'">Login</button>

                <div class="column" >
            <form method="post">
                    <img class="logo-2" src="images/KDU Logo.png"><br>
                </div>
            <div class="column">
                        <label for="email">Email:</label>
                        <input class="form-control" type="text" name="Email" id="Email" required><br>

                        <label for="password">Password:</label>
                        <input class="form-control" type="password" name="Password" id="Password" required><br>

                        <button type="submit" class="btn btn-primary" id="submit" name="submit">Login</button>
                        <b>OR</b> <a class="link" href="loginAdmin.php">Login as Admin</a><br>

                        <h4>Don't have an account? <a href="register.php">Register Here</a></h4>
                        
                
            </form>
        </div>
</body>
</html>