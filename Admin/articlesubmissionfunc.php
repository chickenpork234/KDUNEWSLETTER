<?php 

require_once("../conn.php");

        $sql = "SELECT * FROM submitted_article";
        $result = mysqli_query($conn, $sql);

        echo "<div class='posts'>";

        while($row = mysqli_fetch_array($result, MYSQLI_NUM))
        {  
            echo "<h1><u>". $row[1] ."</u></h1>
            <h4>". $row[4] ."</h4>";
            echo nl2br($row[3]);
            echo "<h5>". $row[2] ."</h5>
            <h5>". $row[5] ."</h5>
            <form onClick=\"javascript: return confirm('Are you sure you want to delete this post?');\" action='deletesubmittedarticlefunc.php?article_id=".$row[0]."' method='post'>
            <input class='btn btn-default' type='submit' name='delete_submitted_article' id='delete_submitted_article' value='Delete'>
            </form>  
            <form action='adminpagefunc.php?article_id=".$row[0]."' method='post'>
            <input class='btn btn-default' type='submit' name='post_submitted_article' id='post_submitted_article' value='Post'>
            </form> 
            </br>";
        }
    
        echo "</div>"
        
?>
    