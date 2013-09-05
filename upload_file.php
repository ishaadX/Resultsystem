

<?php

session_start();


?>

<!DOCTYPE html>
<head>
 
    <title>Info Result</title>
    <link rel="stylesheet" type="text/css" href="upload.css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
         <?php if( !isset($_SESSION['username']) )
    {
      header("Location: logout.php");
    }
?>
    
    <div id = "upload" style="height: 225px; width: 350px; float: center; text-align: center; margin-top:250px">
    <form action="add_file.php" method="post" enctype="multipart/form-data">
        <input type="file" name="uploaded_file" style ="margin-top:35px; float: center;"><br>
        <input type="submit" value="Upload file">
    </form>
    <p>Current User: <?php echo $_SESSION['username']; ?></p>
    <p>
        <a href="list_files.php">See all files</a>
    </p>

    <FORM action="index.php">
      <INPUT type="submit" value="Back to Home">
        <a href="index.php"></a>
    </FORM>
	</div>
	
	
</body>
</html>


