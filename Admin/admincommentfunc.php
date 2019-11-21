<?php

require_once("../conn.php");
include '../loginfuncadmin.php';
            
    $article_id = $_GET['article_id'];
    $user_id = $_SESSION['emaila'];
    date_default_timezone_set("Asia/Kuala_Lumpur");
	$date = date("Y-m-d");
        if (isset($_POST['submitcom'])){
            $comment = $_POST['comment'];

            $sql = "INSERT INTO comments( `artid`, `uid`, `date`, `message`) 
            VALUES ('$article_id', '$user_id', '$date', '$comment')";
            mysqli_query($conn, $sql);
            
            echo ('<script>
					window.alert("Comment posted successfully!");
					location.href="adminpage.php";
                                    </script>');
		}
?>