<?php 


require_once("../conn.php");

if (isset($_POST['post_submitted_event'])){
    $event_id = $_GET['event_id'];
    $sql = "INSERT INTO event(`title`, `details`, `organizer`, `images`,`date`, `going`)
    SELECT title, details, organizer, images, date, 0 FROM submitted_event
    WHERE event_id=$event_id";
    mysqli_query($conn, $sql);

    $sql2 = "DELETE FROM submitted_event WHERE event_id=$event_id";
    mysqli_query($conn, $sql2);

    echo ('<script>
            window.alert("Event posted successfully!");
            location.href="eventsubmission.php";
                            </script>');
}

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
            echo "<h5>". $row[5] ."</h5>
            <form onClick=\"javascript: return confirm('Are you sure you want to delete this post?');\" 
            action='deletepostfunc.php?event_id=".$row[0]."' method='post'>
            <input class='btn btn-danger' type='submit' name='delete_event' id='delete_event' value='Delete Post'>
            </form> 
            </br>";
        }
    
        echo "</div>";

    
        
?>