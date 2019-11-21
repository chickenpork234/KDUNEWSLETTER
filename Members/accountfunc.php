<?php

require_once("../conn.php");
include 'detailsfunc.php';
		
if (isset($_POST['save'])){

	$member_id = $_SESSION['MemberID'];
	$fn = $_POST['FirstName'];
	$ln = $_POST['LastName'];
	$dob = $_POST['DateOfBirth'];
	
		$validation =  true;

		if(empty($fn)){
			$validation = false;
		}
		if(empty($ln)){
			$validation = false;
		}		
		if(empty($dob)){
			$validation = false;
		}
		if($validation == true){

			$sql = "UPDATE member SET fn = '$fn', ln = '$ln', dob='$dob' WHERE uid='$member_id'";
			
			mysqli_query($conn, $sql);			

			
			echo ('<script>
					window.alert("Profile successfully updated!");
					location.href="account.php";
									</script>');

		}
		else{		
			echo ('<script>
					window.alert("Error, please try again!")
					</script>');
		
		
		}
	}
?>