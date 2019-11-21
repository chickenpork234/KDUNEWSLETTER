<?php 

require_once("../conn.php");

		$event_id = $_GET['event_id'];
        if (isset($_POST['delete_event'])){
            $sql = "DELETE FROM event WHERE event_id=$event_id";
            mysqli_query($conn, $sql);

            echo ('<script>
					window.alert("Event post deleted successfully!");
					location.href="adminevent.php";
									</script>');
		}
		else{		
			echo ('<script>
					window.alert("Error, please try again!")
					</script>');
		}
        
?>