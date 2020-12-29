<?php

	session_start();
	session_destroy();
    
    echo "<h1>You have logged out. Please login again.</h1> </br>";
    echo '<a href="login.html"><button>Login</button></a>';
 ?>