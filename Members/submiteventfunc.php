<?php

require_once("../conn.php");

	session_start();

if (isset($_POST['SubmitPost'])){

	function clean($str){
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {$str = stripslashes($str);  }
		return mysql_real_escape_string($str);
	}
	
	$title = $_POST['EventTitle'];
	$details = mysqli_real_escape_string($conn, $_POST['Details']);
	$organizer = $_POST['Organizer'];
	$images = $_FILES['Images']['name'];
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$date = date("Y-m-d");
	
	$target_dir = "../images/";
  	$target_file = $target_dir . basename($_FILES["Images"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$extensions_arr = array("jpg","jpeg","png","gif");
	
		$validation =  true;

		if(empty($title)){
			$validation = false;
		}
		if(empty($details)){
			$validation = false;
		}		
		if(empty($organizer)){
			$validation = false;
		}
		if(empty($images)){
			$validation = false;
		}
		if($validation == true){
			if(in_array($imageFileType,$extensions_arr)){

			$sql = "INSERT INTO submitted_event( `title`, `details`, `organizer`, `images`, `date`) 
            VALUES ('$title', '$details', '$organizer', '".$images."', '$date')";
			mysqli_query($conn, $sql);

			move_uploaded_file($_FILES['Images']['tmp_name'],$target_dir.$images);

			
			echo ('<script>
					window.alert("Event details successfully submitted!");
					location.href="submitevent.php";
									</script>');
			}
			else{
				echo ('<script>
					window.alert("Image file type does not match!");
					location.href="submitevent.php";
									</script>');
			}

		}
		else{		
			echo ('<script>
					window.alert("Some textbox didnt input, Please reinput again!")
					</script>');
		
		
		}
	}
?>