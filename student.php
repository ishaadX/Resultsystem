<?php

//session_start();


?>




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <?php if( !isset($_SESSION['username']) )
    {
     // header("Location: logout.php");
    }
?>

<head>

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="shaad" />
	<link rel="stylesheet" type="text/css" href="student.css">
	<title>Info.Result</title>

</head>

<body>



<div class="header">
	<div id="head1" align="center"> <!-- head desin -->
		<h1>Info.Result <br /> <br />
		 Rajshahi University of Engineering and <br /> Technoogy</h1>
		<div id="clock">
			<iframe src="http://free.timeanddate.com/clock/i3lz44xh/n73/tlin/fn13/fs18/ftb/bat1/bac0ff/pa3/tt0/th2/ta1/tb4" frameborder="0" width="300" height="60"></iframe>
		</div>
    <FORM action="index.php">
      <INPUT type="submit" value="Back to Home">
        <a href="index.php"></a>
    </FORM>

	</div>
</div>



<div class="context">
	<div id="context1">
    <div id="left" style = "text-align: center; margin-left: 75px; margin-top: 15px;">
     <iframe width="590" height="390" src="http://web2.0calc.com/widgets/horizontal/" scrolling="no" style="border: 1px solid silver; margin-top:50px;"> </iframe>
      <br />
      <a href="http://web2.0calc.com/"></a>	
      </div>
	</div>
</div>




<div class="footer">
	<div id="footer1" align="center"> <!-- footer design -->
		<a href="https://www.google.com">Google</a>
      <FORM action="logout.php">
        <INPUT type= "submit" value="logout" style="height: 25px; width: 150px; float: left;">
        <a href="logout.php" ></a>
      </FORM>
    </div>
</div>


</body>
</html>