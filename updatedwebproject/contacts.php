 <!------------------------------- Author: Gurneet Saggu
                                   File: contacts.php 
                                   Business Contacts Page which include login form
                                   PHP File------------------------------------>
<html>
	<head>
	    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>  <!--This is a link to jquery-->
    	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">    <!--This is a link to seperate css file-->
		<script src="js/javascript.js"></script>                             <!--This is a link to seperate javascript file-->
        <title> MY PORTFOLIO SITE </title>	
    </head>
      
	  <body background="images/background.gif">
            	<img class="logo"  src="images/logo.gif">  <!--This is a my company logo-->
	<div id="container">
    	
		
		<header>     <!--This is a header which include nav bar-->
                <ul id="navbar">
                	<li><a  href="home.html">HOME</a></li>
                    <li><a  href="aboutme.html">ABOUT ME</a></li>
                    <li><a  href="projects.html">PROJECTS</a></li>
                    <li><a  href="services.html">SERVICES</a></li>
					<li><a  href="contactme.html">CONTACT ME</a></li>
					<li><a  href="https://github.com/gsaggu/projectupdated/tree/master/updatedwebproject">GIT HUB</a></li>
					<li><a  id="buttoncontacts" href="contacts.php">BUSINESS CONTACTS</a></li>
                </ul><br>
	    </header>
		
        <section>                         <!--section starts from here which includes all infornmation on home page-->
		
		<h2> Login Form </h2>
		
		 <form method="post" action="">
             USERNAME: <input type="text" name="username" id="username" />  <br/><br>              
             PASSWORD: <input type="password" name="password" id="password"/>  <br/> <br>        <!--form used to get input from user-->
             <input type="submit" name="login" value="LOGIN" id="login"/>
         </form>
		
		</section>
		
    </div>
	  </body>
</html>

<?php

		session_start();
		$dsn= 'mysql:host=localhost;dbname=test';                                //conection to database "test"
		$username = 'root';
		$password= '';
		
		try{
		$db= new PDO($dsn, $username, $password);                                
		}
		catch(PDOException $exception){
			echo "failed to connect";
		}
		
		
		
		                                                           
																         //this section of code logs out the user
      if(isset($_GET["login"]))
    {
	
		$_SESSION["isloggedin"] = false;
		$_SESSION["username"] = "";
		session_destroy();
		session_unset();
  
    }
		
		if(isset($_POST['login']))
		{
		    $username = $_POST["username"];                                                     //asigning input to  variables 
		    $password1 = $_POST["password"];
		   
			$query = "SELECT * FROM `admin table` WHERE `username` = '".$username."'";            //query which will check user input with "admin table"
			$records = $db->query($query);
			$userfound = false;
			
		foreach ($records as $row)
		{
			$password = $row['password']; 
			$userfound = true;
		}
		
		if($userfound){
			if($password1 == $password)
			{
				$_SESSION["isloggedin"] = true;
				$_SESSION["username"] = $username;
				
				header('location:businesscontacts.php');                                      //link to a new page if it is a authenticated user 
			}
			else{
				$_SESSION["isloggedin"] = false;
				
		
				$_SESSION["error"]= "password incorrect";			                    //message if password is wrong

				
		echo " WRONG PASSWORD"; 
		}
		}
		else{
				$_SESSION["error"]= "username not recognized";                       //message if username is wrong
		
		 echo " WRONG USERNAME";  


		}
		}
		else{
			
		}
?>	   
		   
		   