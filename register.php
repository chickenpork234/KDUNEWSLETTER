<html>

<?php require_once("registerfunc.php") ?>

<head>

        <?php include "links.html" ?>
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/Script.js"></script>

</head>

<body style="background-color: #e6e6e6">
    <div class="articles">
        <img class="logo" src="images/KDU Logo.png"><br><br><br>

        <div class="register">
        <form method="post">
                <h1 id="title">Register</h1><br>

                <label for="FirstName">First Name</label><br>
                <input class="register-input" type="text" name="FirstName" id="FirstName" pattern="[a-zA-Z][a-zA-Z ]{2,}" required><br><br>
                
                <label for="LastName">Last Name</label><br>
                <input class="register-input" type="text" name="LastName" id="LastName" pattern="[a-zA-Z][a-zA-Z ]{2,}" required><br><br>

                <label for="DateOfBirth">Date Of Birth</label><br>
                <input class="register-input" type="date" name="DateOfBirth" id="DateOfBirth" required><br><br>

                <label for="Email">Email</label><br>
                <input class="register-input" type="text" name="Email" id="Email" required><br><br>

                <label for="Password">Password</label><br>
                <input class="register-input" type="password" name="Password" id="Password" required><br><br>
                
                <label for="Password">Re-type Password</label><br>
                <input class="register-input" type="password" name="rePassword" id="rePassword" required><br><br>

                <br><br><input type="submit" class="btn btn-default" name="register" id="register" value="Submit">
        </form>
        </div>
    </div>
</body>
</html>