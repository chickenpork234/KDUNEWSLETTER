<?php 

require_once("conn.php");


  session_start();
   
    if (isset($_POST['submita'])){
        
        $Email = $_POST['emaila'];
        $Password = $_POST['passworda'];
       

        $sql = "SELECT * FROM admin WHERE email='$Email' AND password='$Password'";
        $result = mysqli_query($conn, $sql);

        if($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

       
            echo "<script>location.href='Admin/adminpage.php';</script>";
            $_SESSION['emaila'] = $row[1];
        }
    
        else{
    
            echo "<div class='alert alert-danger' role='alert'>
            Incorrect Email or password
            </div>";
    
    
            }
        
}

?>




