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
    #classTest,#final{
    	        float:right;
                padding-right:30px;
    }
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
		                   <b>&nbsplogged in</b>
		                   <a href="logout.php" id="logbutton"><button>logout</button></a>
			          </div>
                      
                      ';
		 
		        echo '
		              
                      <div class="jumbotron">
			            <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGive Mark</h1>      
                      </div>
                      <div class="container">
	      	            <form class="form" id="form" action="webmarks_connect.php" method="post">
						  <ul class="list-group">
						    <li class="list-group-item">
						             Student&apos;s Name
						            <input type="text" class="form-control" id="stName" name="stName" required>
						    </li>
						    <li class="list-group-item">
						             Student&apos;s ID
						            <input type="text" class="form-control" id="stID" name="stID" required>
						    </li>
						    <li class="list-group-item">
						             Class Test Mark
						            <input type="text" class="form-control" id="classTest" name="classTest" required>
						    </li>
						    <li class="list-group-item">
						             Final Exam Mark
						            <input type="text" class="form-control" id="final" name="final" required>
						    </li>
						  </ul> 
						  </br>
						  <input type="submit" class="btn btn-primary" >
						</form>
                       </div>

                       
                    ';
			   } 
			else {
				header("location:login.html");
			}



		?>

</body>
</html>