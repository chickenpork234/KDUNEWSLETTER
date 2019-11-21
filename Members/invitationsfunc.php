<?php 

require_once("../conn.php");
require_once("detailsfunc.php");


        $email = $_SESSION['Email'];
        $sql = "SELECT * FROM event, invitations WHERE event.event_id = invitations.eventid AND joinmember='$email'";
        $result = mysqli_query($conn, $sql);

        echo "<div class='posts'>";

        while($row = mysqli_fetch_array($result, MYSQLI_NUM))
        {  
            $eventid = $row[0];
            $image = $row[4];
            $image_src = "../images/".$image;
            echo "<h2><b>".$row[9]."</b> invited you to this event!</h2>
            <h1><u>". $row[1] ."</u></h1>
            <img src= '".$image_src."'</img>
            <h4>". $row[3] ."</h4>
            <h4>". $row[2] ."</h4>
            <h5>". $row[5] ."</h5>

            <form action='invitationsfunc.php?eventid=".$eventid."' method='post'>

                <button type='submit' class='btn btn-primary' id='join' name='join'>Join</button>
                <button type='submit' class='btn btn-primary' id='join' name='reject'>Reject</button>
            
            </form>";


        $sql1 = "SELECT * FROM going WHERE eventid=$eventid";
        $result1 = mysqli_query($conn, $sql1);

        echo"<h2><u> Going </u></h2>";
        while($row = mysqli_fetch_array($result1, MYSQLI_NUM)){

            
                echo "<h4>".$row[1]."<h4>";

            }

            echo"<hr>";
        
        }
        echo "</div>";



        if(isset($_POST['join'])){

           $eventid = $_GET['eventid'];
            
            $sql2 = "INSERT INTO going (`goingmem`, `eventid`) VALUES ('$email', '$eventid')";
            $sql3 = "DELETE FROM invitations WHERE joinmember='$email' AND eventid='$eventid'";
            mysqli_query($conn, $sql2);
            mysqli_query($conn, $sql3);

            echo "<script>location.href='invitations.php'</script>";

        }


        if(isset($_POST['reject'])){

            $eventid = $_GET['eventid'];
             
             $sql3 = "DELETE FROM invitations WHERE joinmember='$email' AND eventid='$eventid'";
             mysqli_query($conn, $sql3);
 
             echo "<script>location.href='invitations.php'</script>";
 
         }


?>