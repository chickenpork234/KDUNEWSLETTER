<?php

require_once("../conn.php");

session_start();

        $Email = $_SESSION['Email'];
        $Password = $_SESSION['Password'];

        $sql = "SELECT * FROM member WHERE email='$Email' AND password='$Password'";
        $result = mysqli_query($conn, $sql);
       
    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

        $_SESSION['password'] = ".$row[4].";
    }
?>