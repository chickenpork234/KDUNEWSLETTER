<?php 


require_once("conn.php");

session_start();
ob_start();

    if (isset($_POST['submit'])){
        
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        $sql = "SELECT * FROM member WHERE email='$Email' AND password='$Password'";
        $result = mysqli_query($conn, $sql);

        $sql1 = "SELECT * FROM member WHERE email='$Email' AND password='$Password' AND access = 0";
        $result1 = mysqli_query($conn, $sql1);

        
        if(!($row = mysqli_fetch_array($result, MYSQLI_NUM))){
            
            echo "<div class='alert alert-danger' role='alert'>
            Incorrect Email or password
            </div>";
                
          }

         else if (!($row = mysqli_fetch_array($result1, MYSQLI_NUM))){

            echo "<div class='alert alert-danger' role='alert'>
                You have been blocked by the administrator
            </div>";

         }
        
    
        else{

            echo "<script>location.href='Members/memberpage.php';</script>";
            $_SESSION['LastName'] = $row[0];
            $_SESSION['FirstName'] = $row[1];
            $_SESSION['Email'] = $row[2];
            $_SESSION['Password'] = $row[3];
            $_SESSION['DateOfBirth'] = $row[4];

        
        }

    
}

ob_end_flush();
?>