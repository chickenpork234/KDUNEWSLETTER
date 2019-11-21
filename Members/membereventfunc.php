<?php 

require_once("../conn.php");
include "detailsfunc.php";

        $sql = "SELECT * FROM event ORDER BY date DESC";
        $result = mysqli_query($conn, $sql);
        $email = $_SESSION['Email'];

        echo "<div class='posts'>";
      
        while($row = mysqli_fetch_array($result, MYSQLI_NUM))
        {  
            $_SESSION['eventid'] = $row[0];
            $event_id = $row[0];
            $image = $row[4];
            $image_src = "../images/".$image;

            echo "<h1><u>". $row[1] ."</u></h1>
            <img src= '".$image_src."'</img>
            <h4>". $row[3] ."</h4>
            <h4>". $row[2] ."</h4>
            <h5>". $row[5] ."</h5>";

            
            $sql2 = "SELECT * FROM going WHERE goingmem='$email' AND eventid=$event_id";
            $result2 = mysqli_query($conn, $sql2);

            if($row = mysqli_fetch_array($result2, MYSQLI_NUM)){
                echo "<form action ='membereventfunc.php?event_id=$event_id' method='post'>
                <button  type='submit' class='btn btn-primary' id='join' name='join' disabled>Join</button>
            </form>";
        }else{
            echo "<form action ='membereventfunc.php?event_id=$event_id' method='post'>
            <button type='submit' class='btn btn-primary' id='join' name='join' >Join</button>
        </form>";
        }

            $sql1 = "SELECT * FROM member WHERE email !='$email'";
            $result1 = mysqli_query($conn, $sql1);

            echo"<form action ='membereventfunc.php?event_id=$event_id' method='post'>
               
                   <select name='email'>";
                   while($row1 = mysqli_fetch_array($result1, MYSQLI_NUM)){

                       echo' <option value="'.$row1[2].'">'.$row1[2];
                   }
                    echo "</select>";

                echo"
                <button type='submit' class='btn btn-primary 'onclick= window.location.href='#id01' name='invite'>Invite</button>
            
            </form>
            
            <hr>";

        }
    
        echo "</div>";

    
        if(isset($_POST['join'])){

            $email = $_SESSION['Email'];
            $eventid = $_GET['event_id'];

            $sql = "INSERT INTO going (`goingmem`, `eventid`) VALUES ('$email','$eventid')";
            $sql1 = "UPDATE event SET going=going+1 WHERE event_id=$eventid";
            mysqli_query($conn, $sql);
            mysqli_query($conn, $sql1);

            echo "<script> 
            location.href = 'eventlogin.php' 
            </script>";

        }

        if(isset($_POST['invite'])){

            date_default_timezone_set("Asia/Kuala_Lumpur");
        
            $email = $_POST['email'];
            $inviter = $_SESSION['Email'];
            $eventid = $_GET['event_id'];
            $date = date("Y-m-d H:i:s");

            $sql = "INSERT INTO invitations (`eventid`, `inviter`, `joinmember`,`senddate`) VALUES ('$eventid','$inviter','$email','$date')";
            mysqli_query($conn, $sql);

            echo  $eventid;
                
            echo "<script> 
            location.href = 'eventlogin.php' 
            </script>";
                
            
        }
        
?>
