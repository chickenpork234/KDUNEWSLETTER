<?php

require_once("../conn.php");

$uid = $_GET['uid'];


    if(isset($_POST['block'])){


                            
    $sql = "UPDATE member SET access = 1 WHERE member.uid = $uid";
    $result = mysqli_query($conn, $sql);

    if($result){

        echo ('<script>
        window.alert("User blocked successfully!");
        location.href="memberstable.php";
                        </script>');

    }

    else{

        echo ('<script>
        window.alert("Error");
        location.href="memberstable.php";
                        </script>');

    }


}


?>