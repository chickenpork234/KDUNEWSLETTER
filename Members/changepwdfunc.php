<?php

require_once("../conn.php");
session_start();

        $Email = $_SESSION['Email'];

        $sql = "SELECT * FROM member WHERE email='$Email'";
        $result = mysqli_query($conn, $sql);
       
    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

        $pwd = $row[3];
    }

if (isset($_POST['change'])){

	$oldpwd = $_POST['OldPassword'];
    $newpwd = $_POST['NewPassword'];
    $repeatpwd = $_POST['RepeatPassword'];
	
		$validation =  true;

		if(empty($oldpwd)){
			$validation = false;
		}
		if(empty($newpwd)){
			$validation = false;
		}
		if($validation == true){

            if($oldpwd == $pwd){

                if($newpwd == $repeatpwd){
                    $sql = "UPDATE member SET password = '$newpwd' WHERE email='$Email'";
                    mysqli_query($conn, $sql);
                    
                    echo ('<script>
                    window.alert("Password changed successfully!");
                    location.href="changepassword.php";
                    </script>');
                }else{
                    echo ('<script>
                    window.alert("New password does not match!")
                    </script>');
                }
            }
    else{
        echo ('<script>
        window.alert("Old password does not match!")
        </script>');
    }
}else{
    echo ('<script>
    window.alert("Not successful!")
    </script>');
		}
	}
?>