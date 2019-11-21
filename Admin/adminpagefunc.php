<?php 

require_once("../conn.php");

        if (isset($_POST['post_submitted_article'])){
            $article_id = $_GET['article_id'];
            $sql = "INSERT INTO article(`title`, `categories`, `details`, `author`, `date`, `likes`)
            SELECT title, categories, details, author, date, 0 FROM submitted_article 
            WHERE article_id=$article_id";
            mysqli_query($conn, $sql);
            

            $sql2 = "DELETE FROM submitted_article WHERE article_id=$article_id";
            mysqli_query($conn, $sql2);
            
            			


            echo ('<script>
					window.alert("Article posted successfully!");
					location.href="articlesubmission.php";
									</script>');
        }

        $sql = "SELECT * FROM article ORDER BY date DESC";
        $result = mysqli_query($conn, $sql);
        
        echo "<div class='posts'>";

        while($row = mysqli_fetch_array($result, MYSQLI_NUM))
        {  
            echo "<h1><u>". $row[1] ."</u></h1>
            <h4>". $row[4] ."</h4>";
            echo nl2br($row[3]);
            echo "<h5>". $row[2] ."</h5>
            <h5>". $row[5] ."</h5>
            <form onClick=\"javascript: return confirm('Are you sure you want to delete this post?');\" action='deletearticlefunc.php?article_id=".$row[0]."' method='post' style='display:inline'>
                <input class='btn btn-danger' type='submit' name='delete_article' id='delete_article' value='Delete Post' style='float:right'>
                <br>
            </form>
            &nbsp <h4>".$row[6]." likes </h4>

            

            <form action='admincommentfunc.php?article_id=".$row[0]."' method='post'>
                <textarea name='comment' id='comment' required></textarea><br><br>
                <input type='submit' class='btn btn-primary' id='submitcom' name='submitcom' value='Comment' style='float:right'>   
                <br>
                <br>
            </form>";
            
            $article_id = $row[0];
            
        $sql2 = "SELECT * FROM comments";
        $result2 = mysqli_query($conn, $sql2);

        while($row = mysqli_fetch_array($result2, MYSQLI_NUM))
        {
            if($row[1]==$article_id){
            echo "<div class='comment-box'><p>";
            echo "". $row[2] ."";
            echo "<form onClick=\"javascript: return confirm('Are you sure you want to delete this comment?');\" action='deletecommentfunc.php?comment_id=".$row[0]."' method='post'>
             <input class='btn btn-danger' type='submit' name='delete_comment' id='delete_comment' value='Delete' style='float:right'>
            </form>";
            
            echo "". $row[3] ."<br>";
            echo $row[4]."

            

            </p></div>";
            }
        }

        echo"<br><hr><br>";
        
    }
        echo "</div>";
        
?>
    

    
    