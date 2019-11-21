<?php 


require_once("../conn.php");

        $sql = "SELECT * FROM event ORDER BY date DESC";
        $result = mysqli_query($conn, $sql);

        echo "<div class='posts'>";

        while($row = mysqli_fetch_array($result, MYSQLI_NUM))
        {  
            $image = $row[4];
            $image_src = "../images/".$image;
            echo "<h1><u>". $row[1] ."</u></h1>
            <img src= '".$image_src."'</img>
            <h4>". $row[3] ."</h4>";
            echo nl2br($row[2]);
            echo "<h5>". $row[5] ."</h5><hr>
            </br>";
        }
    
        echo "</div> ";

    
        
?>