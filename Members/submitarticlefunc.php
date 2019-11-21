<?php

require_once("../conn.php");

	session_start();


if (isset($_POST['SubmitPost'])){

	function clean($str){
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {$str = stripslashes($str);  }
		return mysql_real_escape_string($str);
	}
	
	$title = $_POST['ArticleTitle'];
	$details = mysqli_real_escape_string($conn, $_POST['Details']);
	$author = $_POST['Author'];
	$category = $_POST['Category'];
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$date = date("Y-m-d H:i:s");
	
		$validation =  true;

		if(empty($title)){
			$validation = false;
		}
		if(empty($details)){
			$validation = false;
		}		
		if(empty($author)){
			$validation = false;
		}
		if(empty($category)){
			$validation = false;
		}
		if($validation == true){

			$sql = "INSERT INTO submitted_article( `title`, `categories`, `details`, `author`, `date`) 
            VALUES ('$title', '$category', '$details', '$author', '$date')";
			mysqli_query($conn, $sql);
		
			echo ('<script>
					window.alert("Article successfully submitted!");
					location.href="submitarticle.php";
									</script>');

		}
		else{		
			echo ('<script>
					window.alert("Some textbox didnt input, Please reinput again!")
					</script>');
		
		
		}
	}
?>