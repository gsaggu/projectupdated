<!-------------------------------  Author: Gurneet Saggu
                                   File: businesscontacts.php
                                   only authenticated user can access the infornmation fetched from database
                                   php File------------------------------------>

<?php
        session_start();
		$dsn= 'mysql:host=localhost;dbname=test';
		$username = 'root';
		$password= '';
		
		try{                                                                   //connection to database 
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
    	
		
		<header>                                            <!--This is a header which include nav bar-->
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
			  <p id= "logout">
			    <a href="contacts.php?login=false">logout</a>                               <!--This is a link to logout from session-->
			  </p>
			  
			  <h1>Business Contact List</h1>
			  
			    <ul class="contactnames">
						<li><h2><a href="businesscontacts.php?id=1 ">Bill Gates</a></h2></li>
						<li><h2><a href="businesscontacts.php?id=2 ">Carlos Slim</a></h2></li>         <!--These are the businees contacts of admin-->
						<li><h2><a href="businesscontacts.php?id=3 ">Mukesh Ambani</a></h2></li>
				</ul>
				   <div id ="dbinfo">
				   
				<?php
							if(isset($_GET["id"]))
							{
							  
								$id = $_GET['id']  ;
								$query1="SELECT * FROM `business contacts` where `id` ='$id'";     //query to get "id" of a particular contact
								$result= $db->query($query1); 
                                
								foreach ($result as $row)
								{
								  echo $row['name']."</br>";
								  echo $row['address']."</br>";
								  echo $row['contactno']."</br>";                         //displays the infornmation fetched from business contacts table
								  echo $row['email']."</br>";
								  $pic=$row["image"];
								  $path="images/";
								  $imageurl=$path.$pic;
								}
								?>
					</div>			
								<img id="contactpic" src="<?php  echo $imageurl?>">        <!-----displays the image of specified person from database-->
						
			<?php
							}
			?> 
		</section>
       </div>		
	  </body>
</html>		