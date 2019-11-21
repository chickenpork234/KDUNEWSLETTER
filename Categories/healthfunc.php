<?php 

require_once("../conn.php");

        $sql = "SELECT * FROM article WHERE categories='Health Science'";
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
            
            if(isset($_SESSION['emaila'])){
                echo"<form onClick=\"javascript: return confirm('Are you sure you want to delete this post?');\" action='../Members/deletearticlefunc.php?article_id=".$row[0]."' method='post'>
                <input class='btn btn-danger' type='submit' name='delete_article' id='delete_article' value='Delete Post'>
                </form>
                <form action='../Admin/admincommentfunc.php?article_id=".$row[0]."' method='post'>
                <textarea name='comment' id='comment' required></textarea><br><br>
                <input type='submit' class='btn btn-primary' id='submitcom' name='submitcom' value='Comment' >   
                </form>";
            }elseif(isset($_SESSION['FirstName'])){
            $sql3 = "SELECT * FROM likes WHERE memberid= $member_id AND articleid =$article_id";
            $result3 = mysqli_query($conn, $sql3);

            if($row = mysqli_fetch_array($result3, MYSQLI_NUM)){
                echo "<form action='../Members/likefunc.php?article_id=$article_id' method='post'>
                <button type='submit' type='button' class='btn btn-default btn-info' name='unliked' id='unliked' onclick=window.location.href = 'memberpage.php' >
                            <span class='glyphicon glyphicon-thumbs-up'></span> Unlike
                </button>
            </form>";
        }else{
            echo "<form action='../Members/likefunc.php?article_id=$article_id' method='post'>
                <button type='submit' type='button' class='btn btn-default btn-sm' name='liked' id='liked' onclick=window.location.href = 'memberpage.php' >
                            <span class='glyphicon glyphicon-thumbs-up'></span> Like
                </button>
            </form>";
        }
                echo"<form action='../Members/commentfunc.php?article_id=$article_id' method='post'>
                <textarea name='comment' id='comment' required></textarea><br><br>
                <input type='submit' class='btn btn-primary' id='submitcom' name='submitcom' value='Comment' >   
                </form>";
            }

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
        }
    
        echo "</div>"
        
?>

    
    