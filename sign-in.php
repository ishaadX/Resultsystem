<?php
include 'function.php';
session_start();
?>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="style-sign.css">
	<link rel="stylesheet" type="text/css" href="mediaClass.css">
	<title>Info.Result</title>
<?php
	if ($_SERVER['REQUEST_METHOD'] = 'POST')
		{

			//$userid = $_POST['user'];
			//$passcode = $_POST['pass'];
		} 
?>
 
</head>


<body>

<div class="header">
	<div id="head1" align="center"> <!-- head desin -->
		<h1>Info.Result <br /> <br />
			 Rajshahi University of Engineering and <br /> Technoogy
		</h1>
	<div id="back">
		<FORM action="index.php">
			<INPUT type="submit" value="Back to Home">
				<a href="index.php"></a>
		</FORM>
	</div>
	<h1> <?php if( isset($_SESSION['username']) )
    {
      header("Location: logout.php");
    }
?></h1>

		<div id="clock">
			<iframe src="http://free.timeanddate.com/clock/i3lz44xh/n73/tlin/fn13/fs18/ftb/bat1/bac0ff/pa3/tt0/th2/ta1/tb4" frameborder="0" width="311" height="70"></iframe>
		</div>
	</div>
	</div>

<div class="Login">

	<div id="login1">

	<table width="300" height="200" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" margin_right="150" margin_bottom="350">
	<tr>
		<form method="post" action="connection.php">
			<td>
				<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
	<tr>
			<td colspan="3"><strong>Member Login </strong></td>
	</tr>
	<tr>
		<td width="78">Username</td>
		<td width="6">:</td>
		<td width="294"><input name="username" type="text" id = "user"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td width="6">:</td>
		<td width="294"><input name="password" type="password" id = "pass"></td>
	</tr>

	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" value="Login"> </td>
	</tr>
	</table>
	</td>
	</form>
	</tr>
	</table>

	</div>

	<div class="footer">
		<div id="footer1" align="center"> <!-- footer design -->
			<a href="https://www.google.com">Google</a>
		</div>
</div>

</body>
</html>