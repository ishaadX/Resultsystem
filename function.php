<?php 

function valid_user($username, $password)
{
	if( empty($username) || empty($password) )
	{
		header("Location: index.php");
	}
	else
	{
		$_SESSION['username'] = $username;
		
	}
	
}


?>


