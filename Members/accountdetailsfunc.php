<?php 

require_once("../conn.php");
        
        $Email = $_SESSION['Email'];

        $sql = "SELECT * FROM member WHERE email='$Email'";
        $result = mysqli_query($conn, $sql);
       
    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

        echo "<form method='post'>

        <label for='FirstName'>First Name</label><br>
        <input type='text' name='FirstName' id='FirstName' value=".$row[1]." required><br><br>
        
        <label for='LastName'>Last Name</label><br>
        <input type='text' name='LastName' id='LastName' value=".$row[0]." required><br><br>

        <label for='DateOfBirth'>Date Of Birth</label><br>
        <input type='date' name='DateOfBirth' id='DateOfBirth' value=".$row[4]." required><br><br>

        <a class='link' href='changepassword.php'>Change Password</a><br><br>

        <input type='submit' class='btn btn-dark' name='save' id='save' value='Save Profile Details'>
        
        </form>";
    }
?>