<?php 
    $servername = "localhost";
    $username = "id11078550_newsletter";
    $password = "lwk980903";
    $dbname = "id11078550_newsletter";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        printf('No');
} 

    else {

    }

?>