<?php 
error_reporting(0);
ini_set('display_errors', 0);

require_once("../conn.php");
session_start();
        
        $Email = $_SESSION['Email'];

        $sql = "SELECT * FROM member WHERE email='$Email'";
        $result = mysqli_query($conn, $sql);
       
    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

        $_SESSION['MemberID'] = $row[6];
        $_SESSION['LastName'] = $row[0];
        $_SESSION['FirstName'] = $row[1];
        $_SESSION['Email'] = $row[2];
        $_SESSION['Password'] = $row[3];
        $_SESSION['DateOfBirth'] = $row[4];
    }
?>