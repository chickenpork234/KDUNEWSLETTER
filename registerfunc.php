<?php

require_once("conn.php");

	session_start();


if (isset($_POST['register'])){
	
	$fn = $_POST['FirstName'];
	$ln = $_POST['LastName'];
	$email = $_POST['Email'];
	$dob = $_POST['DateOfBirth'];
    $password = $_POST['Password'];
    $repassword = $_POST['rePassword'];
    $mydate = "2002-01-01";
	
		$validation =  true;

		if(empty($fn)){
			$validation = false;
		}
		if(empty($ln)){
			$validation = false;
		}		
		if(empty($email)){
			$validation = false;
		}
		if(empty($dob)){
			$validation = false;
		}
		if(empty($password)){
			$validation = false;
		}
		if(empty($repassword)){
			$validation = false;
		}
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$validation = false;

			echo "<div class='alert alert-danger' role='alert'>
                Error, please enter a valid email
            </div>";
		}
		
		elseif($dob > $mydate){
		    $validation = false;
		    
		    echo "<div class='alert alert-danger' role='alert'>
                You need to be at least 17 to join
            </div>";
		    
		}
		
		elseif($password != $repassword){
		    $validation = false;
		    
		   echo "<div class='alert alert-danger' role='alert'>
                Passwords do not match
            </div>";
		    
		}
		
		elseif($validation == true){

			$sql = "INSERT INTO member (ln, fn, email, password, dob, access) VALUES ('$ln', '$fn', '$email', '$password', '$dob', 0)";
			
			mysqli_query($conn,$sql);
			
			
			echo ('<script>
					window.alert("Registration successful");
					location.href="login.php";
									</script>');

		}
		else{		
		    
			echo "<div class='alert alert-danger' role='alert'>
                Error, please re-input
            </div>";
		
		
		}
	}
?>