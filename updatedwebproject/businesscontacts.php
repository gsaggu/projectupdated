<?php
        session_start();
		$dsn= 'mysql:host=localhost;dbname=test';
		$username = 'root';
		$password= '';
		
		try{
		$db= new PDO($dsn, $username, $password);
		}
		catch(PDOException $exception){
			echo "failed to connect";
		}
?>
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
		<section>
		    <?php
							if(isset($_GET["prop_id"]))
							{
							
								$id = $_GET['prop_id']  ;
								$query1="SELECT * FROM business contacts where id='$id'";
								$result=$db->query($query1); 
                                foreach($result as $row)
								$image=$row["image"];
								$path="images/";
								$imageurl=$path.$image;
								echo $row['name']."</br>";
								echo $row['address']."</br>";
								echo $row['contactno']."</br>";
								echo $row['email']."</br>";
								echo $row['contact_no']."</br>";
			?>				
			
								<img id="photo" src="<?php  echo $imageurl?>">
				            }
			<h3>Business Contact List</h3><h1><a href="Business_Contacts_Link.php">Logout</a></h1>
			
			
						<h4><a href="Business_contacts.php?prop_id=1 ">Bill Gates</a></h4>
						<h4><a href="Business_contacts.php?prop_id=2 ">Carlos Slim</a></h4>
						<h4><a href="Business_contacts.php?prop_id=3 ">Mukesh Ambani</a> </h4>
						<h4><a href="Business_contacts.php?prop_id=4 ">Warren Buffet</a> </h4>
					
	  </body>
</html		