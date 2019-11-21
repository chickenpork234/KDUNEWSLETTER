<?php

require_once("../conn.php");
include "detailsfunc.php";

$article_id = $_GET['article_id'];
$user_id = $_SESSION['MemberID'];

if (isset($_POST['liked'])) {

    $sql = "UPDATE article SET likes=likes+1 WHERE article_id=$article_id" ;
    $sql1 = "INSERT INTO likes(`memberid`, `articleid`) VALUES ('$user_id','$article_id')";
    
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql1);

    echo ('<script>
    location.href="memberpage.php";
                    </script>');

    exit();
}

if (isset($_POST['unliked'])) {

    $sql = "UPDATE article SET likes=likes-1 WHERE article_id=$article_id";
    $sql1 = "DELETE FROM likes WHERE memberid = $user_id AND articleid=$article_id";
    
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql1);

    echo ('<script>
    location.href="memberpage.php";
                    </script>');
    exit();
}