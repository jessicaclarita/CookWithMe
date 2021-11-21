<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

    include "db_connect.php";

if (isset($_POST['name'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
    
    if(empty($name)){
      header("Location: change-name.php?error=Old Name is required");
	  exit();
    }else {

        $email = $_SESSION['email'];

        $sql = "SELECT name
                FROM users WHERE 
                email='$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE users
        	          SET name='$name'
        	          WHERE email='$email'";
        	mysqli_query($conn, $sql_2);
        	header("Location: change-name.php?success=Your name has been changed successfully");
	        exit();

        }else {
        	header("Location: change-name.php?error=Error 404 - account not found. Please Sign Up.");
	        exit();
        }

    }

    
}else{
	header("Location: change-name.php");
	exit();
}

}else{
     header("Location: forms.php");
     exit();
}