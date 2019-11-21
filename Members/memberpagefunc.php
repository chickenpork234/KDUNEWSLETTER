<?php 

require_once("../conn.php");
include "detailsfunc.php";

        $sql = "SELECT * FROM article ORDER BY date DESC";
        $result = mysqli_query($conn, $sql);
        $member_id = $_SESSION['MemberID'];
        
        echo "<div class='posts'>";

        while($row = mysqli_fetch_array($result, MYSQLI_NUM))
        {  
            echo "<h1><u>". $row[1] ."</u></h1>
            <h4>". $row[4] ."</h4>";
            echo nl2br($row[3]);
            echo "<h5>". $row[2] ."</h5>
            <h5>". $row[5] ."</h5>
            &nbsp <h4>".$row[6]." likes</h4>";

            $article_id = $row[0];

            $sql3 = "SELECT * FROM likes WHERE memberid= $member_id AND articleid =$article_id";
            $result3 = mysqli_query($conn, $sql3);

            if($row = mysqli_fetch_array($result3, MYSQLI_NUM)){
                echo "<form action='likefunc.php?article_id=$article_id' method='post'>
                <button type='submit' type='button' class='btn btn-default btn-info' name='unliked' id='unliked' onclick=window.location.href = 'memberpage.php' >
                            <span class='glyphicon glyphicon-thumbs-up'></span> Unlike
                </button>
            </form>";
        }else{
            echo "<form action='likefunc.php?article_id=$article_id' method='post'>
                <button type='submit' type='button' class='btn btn-default btn-sm' name='liked' id='liked' onclick=window.location.href = 'memberpage.php' >
                            <span class='glyphicon glyphicon-thumbs-up'></span> Like
                </button>
            </form>";
        }
        echo "<form action='../Members/commentfunc.php?article_id=$article_id' method='post'>
                <textarea name='comment' id='comment' required></textarea><br><br>
                <input type='submit' class='btn btn-primary' id='submitcom' name='submitcom' value='Comment' style='float:right'>   
            </form>
        
            <br><br>";
        
        $sql2 = "SELECT * FROM comments";
        $result2 = mysqli_query($conn, $sql2);
        

        while($row = mysqli_fetch_array($result2, MYSQLI_NUM))
        {
            if($row[1]==$article_id){
            echo "<div class='comment-box'><p>";
            echo "". $row[2] ."<br>";
            echo "". $row[3] ."<br>";
            echo nl2br($row[4]);
            echo "</p></div>";
            }
        }

        echo"<br><hr><br>";
    }
        echo "</div>";
        
?>
    