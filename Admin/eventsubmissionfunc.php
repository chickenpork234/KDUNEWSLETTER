<?php 


require_once("../conn.php");

        $sql = "SELECT * FROM submitted_event";
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
            echo "<h5>". $row[5] ."</h5>
            <form onClick=\"javascript: return confirm('Are you sure you want to delete this post?');\" action='deletesubmittedeventfunc.php?event_id=".$row[0]."' method='post' >
            <input class='btn btn-default' type='submit' name='delete_submitted_event' id='delete_submitted_event' value='Delete'>
            </form> 
            <form action='admineventfunc.php?event_id=".$row[0]."' method='post'>
            <input class='btn btn-default' type='submit' name='post_submitted_event' id='post_submitted_article' value='Post'  >
            </form> 
            </br>";
        }
    
        echo "</div>";

    
        
?>