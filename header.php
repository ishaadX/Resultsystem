<?php
session_start();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="shaad" />
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="mediaClass.css">
	



	<title>Info.Result</title>
</head>

<body>
 

 

<div class="header">
	<div id="head1" align="center"> <!-- head desin -->
		<h1>Info.Result <br /> <br />
		 Rajshahi University of Engineering and <br /> Technoogy</h1>
		<div id="clock">
			<h1> 
				<?php if ( isset($_SESSION['username']) ){
					echo $_SESSION['username'];}
				 ?> 
			</h1>
			<iframe src="http://free.timeanddate.com/clock/i3lz44xh/n73/tlin/fn13/fs18/ftb/bat1/bac0ff/pa3/tt0/th2/ta1/tb4" frameborder="0" width="300" height="60"></iframe>
		</div>
	</div>
</div>

<figure>
	<figcaption>
<div class="context">
	
	<div id="context1" align="center"> <!-- body --> 
    
        <div id="sign-up">
        	<form action="signup_page.php">
        		<input type="submit" value="Sign-Up"> <a href="signup_page.php"></a>
        	</form>
		  
        </div>

       
		<div id="HO">
			<FORM action="">
				<INPUT type="submit" value="Home" style="height: 25px; width: 150px; float: left;">
				<a href="sign-in.php" ></a>
			</FORM>
		</div>

		

		<div id="TP">
			<FORM action="sign-in.php">
				<INPUT type= "submit" value="Teacher's Pannel" style="height: 25px; width: 150px; float: left;">
				<a href="sign-in.php" ></a>
			</FORM>
		</div>


		<div id="ST">
			<FORM action="student.php">
			<INPUT type= "submit" value="Visitor" style="height: 25px; width: 150px; float: left;">
			<a href="student.php" ></a>
			</FORM>
		</div>



		<div id="AU">
			<FORM action="aboutus.php">
				<INPUT type= "submit" value="About Us" style="height: 25px; width: 150px; float: left;">
				<a href="aboutus.php" ></a>
			</FORM>
		</div>

		<div id="Notice">
			<FORM action="list_files.php">
				<INPUT type= "submit" value="Uploaded files list" style="height: 25px; width: 150px; float: left;">
				<a href="list_files.php" ></a>
			</FORM>
		</div>

		<div id="PP">
			<FORM action="afterLog.php">
				<INPUT type= "submit" value="Profile page" style="height: 25px; width: 150px; float: left;">
				<a href="afterLog.php.php" ></a>
			</FORM>
		</div>


		 <div id="log-out">
		 	<FORM action="logout.php">
				<INPUT type= "submit" value="logout" style="height: 25px; width: 150px; float: left; margin-right: 100px;">
				<a href="logout.php" ></a>
			</FORM>
        </div>
		
	</div>

</div>
</figcaption>
</figure>

<div class="footer">
	<div id="footer1" align="center"> <!-- footer design -->
		<a href="https://www.google.com">Google</a>
		<a href="https://www.yahoo.com">Yahoo</a>
        <a href="https://www.amazon.com">Amazon</a>
        <a href="https://www.ruet.ac.bd">RUET</a>
	</div>
</div>



</body>
</html>



