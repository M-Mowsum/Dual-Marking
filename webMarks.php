<!DOCTYPE html>
   <html>
     <head>
       <style>
          table, th, td {
           border: 1px solid black;
           margin-left: 550px;
		   border-collapse: collapse;
           }
      </style>
    </head>
     <body>

			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "dual";
	        $tbl_name="webtech";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
            
			
			$sql="SELECT Student_Name,Id, avg((Examiner_1+Examiner_2)/2) as Avg from $tbl_name group by id";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    echo "<table>
			    	      <tr>
			    	      	<th>Student_Name</th>
			    	      	<th>Id</th>
			    	      	<th>Avg</th>
			    	      </tr>";
			    // output data of each row and average counting 
			    while($row = $result->fetch_assoc()) {
			        echo "<tr><td>" . $row["Student_Name"]. "</td><td>" . $row["Id"]. "</td><td> " . $row["Avg"]. "</td></tr>";
			    }
			    echo "</table>";
			} else {
			    echo "0 results";
			}

			$conn->close();
			?>

     </body>

   </html>