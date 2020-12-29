<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dual";
	$tbl_name="user"; // Table name 

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		echo "Database Connection failed ";
        echo '<a href="registration.html"><button>back</button></a>';
	}


	// username,password etc. sent from form 
	$myusername=$_POST['uName']; 
	$mypassword=$_POST['pass']; 
    $my_fullname=$_POST['tName']; 
    $email=$_POST['email']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
    $my_fullname = stripslashes($my_fullname);
    $email=stripslashes($email);

	$myusername = mysqli_real_escape_string($conn, $myusername);
	$mypassword = mysqli_real_escape_string($conn, $mypassword);
	$my_fullname = mysqli_real_escape_string($conn, $my_fullname);
	$email=mysqli_real_escape_string($conn, $email);

    $my_password_hash = hash('sha512', $mypassword);

	$sql = 
        "INSERT INTO $tbl_name (Username, Password, Teacher_Name, Email)
	   VALUES 
    ('$myusername', '$my_password_hash', '$my_fullname', '$email')";
	
    
    if (mysqli_query($conn, $sql)) {
		echo "Register successfully";
        echo '<a href="login.html"><button>Login</button></a>';
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

?>

