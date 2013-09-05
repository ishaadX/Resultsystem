<?php

session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="shaad" />
	<link rel="stylesheet" type="text/css" href="styleaboutus.css">
	<link rel="stylesheet" type="text/css" href="mediaClass.css">
	<title>Info.Result</title>
</head>

<body>

	<div class="header">
		<div id="head1" align="center"> <!-- head desin -->
			<h1>Info.Result <br /> <br />
		 	Rajshahi University of Engineering and <br /> Technoogy</h1>
			<div id="back">
		<FORM action="index.php">
			<INPUT type="submit" value="Back to Home">
				<a href="index.php"></a>
		</FORM>
	</div>

		<div id="clock">
			<iframe src="http://free.timeanddate.com/clock/i3lz44xh/n73/tlin/fn13/fs18/ftb/bat1/bac0ff/pa3/tt0/th2/ta1/tb4" frameborder="0" width="311" height="70"></iframe>
			<h1> <?php if( !isset($_SESSION['username']) )
    				{
      					header("Location: logout.php");
    				}
    				else 
    				{
    					echo $_SESSION['username'];
    				}
				?>
			</h1>
		</div>
		</div>
	</div>




	<div class="context">
		<div id="context1" align="center"> <!-- body --> 
    
        	<div id="sign-up">
        		<form action="signup_page.php">
        			<input type="submit" value="Sign-Up"> <a href="signup_page.php"></a>
        		</form>
        	</div>

        	<div id="left">
        		<div id="intro">
        			<p>
        				Author: Md. Shaad Ishtiaque khane
        				<br />
        				Institute name: Rajshahi University of Engineering & Technology.
        				<br />
        				Department: Computer Science and Engineering (CSE).
        				<br />
        				ID: 093023
        				<br />
        			</p>
        		</div>

        	</div>

        	<div id="right">
        		<div id="image">
        			<img src="img/.jpg">
        		</div>
        	</div>

        	div id="log-out">
		 	<FORM action="logout.php">
				<INPUT type= "submit" value="logout" style="height: 25px; width: 150px; float: left;">
				<a href="logout.php" ></a>
			</FORM>
        </div>

    	</div>
	</div>





<div class="footer">
	<div id="footer1" align="center"> <!-- footer design -->
		<a href="https://www.google.com">Google</a>
	</div>
</div>



</body>
</html>