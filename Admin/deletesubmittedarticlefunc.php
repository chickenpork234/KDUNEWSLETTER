<?php 

require_once("../conn.php");

		$article_id = $_GET['article_id'];
        if (isset($_POST['delete_submitted_article'])){
            $sql = "DELETE FROM submitted_article WHERE article_id=$article_id";
            mysqli_query($conn, $sql);

            echo ('<script>
					window.alert("Article deleted successfully!");
					location.href="articlesubmission.php";
									</script>');
		}
		else{		
			echo ('<script>
					window.alert("Error, please try again!")
					</script>');
        }
?>