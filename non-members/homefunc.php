<?php 

require_once("../conn.php");

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
            &nbsp <h4>".$row[6]." likes</h4>
            <br>";
            $article_id = $row[0];
            
            $sql2 = "SELECT * FROM comments";
            $result2 = mysqli_query($conn, $sql2);

        while($row = mysqli_fetch_array($result2, MYSQLI_NUM))
        {
            if($row[1]==$article_id){
            echo "<div class='comment-box'><p>";
            echo "". $row[2] ."<br>";
            echo "". $row[3] ."<br>";
            echo nl2br($row[4]);
            echo "</p></div> ";
            }
        }
        echo"<br><hr><br>";
    }
    
        echo "</div> ";
        
?>
    