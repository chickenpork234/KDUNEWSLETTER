<?php 

require_once("../conn.php");

		$comment_id = $_GET['comment_id'];
        if (isset($_POST['delete_comment'])){
            $sql = "DELETE FROM comments WHERE cid=$comment_id";
            mysqli_query($conn, $sql);

            echo ('<script>
					window.alert("Comment deleted successfully!");
					location.href="adminpage.php";
									</script>');
		}
		else{		
			echo ('<script>
					window.alert("Error, please try again!")
					</script>');
		}
        
?>