<?php


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dual";
    $tbl_name="crypto";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		echo "Database Connection failed ";
        echo '<a href="main_index.php"><button>back</button></a>';
	}


	// username ,password etc. sent from form 
	$stname=$_POST['stName']; 
	$stid=$_POST['stID']; 
    $ct=$_POST['classTest']; 
    $final=$_POST['final'];
    $total=$ct+$final; 
    
	// To protect MySQL injection (more detail about MySQL injection)
	$stname = stripslashes($stname);
	$stid = stripslashes($stid);
    $final = stripslashes($final);
    $ct=stripslashes($ct);
    $total=stripslashes($total);

	$stname = mysqli_real_escape_string($conn, $stname);
	$stid = mysqli_real_escape_string($conn, $stid);
	$final = mysqli_real_escape_string($conn, $final);
	$ct=mysqli_real_escape_string($conn, $ct);
	$total=mysqli_real_escape_string($conn, $total);

    $sql="SELECT * FROM $tbl_name WHERE BINARY 	Student_Name='$stname' and Id='$stid'";

	$result=mysqli_query($conn, $sql);
	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);

    
    if ($count==1) {
        $sql1 =  "UPDATE $tbl_name SET Examiner_2=$total WHERE Id=$stid";
        
    }else {
	    $sql1="INSERT INTO $tbl_name (Student_Name, Id, Examiner_1)
		   VALUES 
	    ('$stname', '$stid', '$total')";
	}
    
    if (mysqli_query($conn, $sql1)) {
		echo "Marks added successfully";
        echo '<a href="main_index.php"><button>Back</button></a>';
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

?>

