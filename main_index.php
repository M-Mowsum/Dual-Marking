 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Document</title>
  <style type="text/css">
  	#log{
  		background-color:#0FD24A  ;
  	}
  	#logbutton { 
                float:right;
                padding-right:30px;
            } 
    #button{
                float:right;
    }
  </style>
</head>
<body>
		<?php
		// Check if session is not registered, redirect back to login page. 
		// Put this code in first line of web page. 
		    session_start();

			if(isset($_SESSION['myusername']) && isset($_SESSION['mypassword'])){

		        
		        echo '
		              <div id="log">
		                   <b>&nbspSucessfully logged in</b>
		                   <a href="logout.php" id="logbutton"><button>logout</button></a>
			          </div>
                      
                      ';
		 
		        echo '
                      <div class="jumbotron">
			            <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCourse Evaluation</h1>      
                      </div>
                      <div class="container">
	      	            <h4>All Course List:</h4>
						  <ul class="list-group">
						    <li class="list-group-item">
						             Web Technology And Internet Computing
						            <a href="webmarkform.php" id="button" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Give Mark</a>
						            <a href="webMarks.php" id="button" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Show Marks</a>
						    </li>
						    <li class="list-group-item">
						             Cryptography And Security Mechanism
						            <a href="cryptomarkform.php" id="button" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Give Mark</a>
						            <a href="cryptoMarks.php" id="button" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Show Marks</a>
						    </li>
						    <li class="list-group-item">
						             Software Project Management
						            <a href="spmmarkform.php" id="button" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Give Mark</a>
						            <a href="spmMarks.php" id="button" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Show Marks</a>
						    </li>
						  </ul> 
						  
                       </div>

                    ';
			   } 
			else {
				header("location:login.html");
			}

		?>

</body>
</html>