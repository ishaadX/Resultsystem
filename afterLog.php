<?php

session_start();


?>

<?php

//include "add_file.php";
//include "list_files.php";
//include "get_files.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="shaad" />
	<link rel="stylesheet" type="text/css" href="afterlog.css">
	<title>Info.Result</title>
  

</head>

<body>

  <?php if( !isset($_SESSION['username']) )
    {
      header("Location: logout.php");
    }
  ?>

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


		
   		<div id="left">

        <form action="" method="post">
          <input type="hidden" name="submitinfo" value="submitinfo"/>

   			<div id=semester>
       				<fieldset>
          					<p>
             				<label>Select Semester</label>
             					<select id = "myList" name="semester">
               						<option value = "1"> Semester 1.1</option>
               						<option value = "2">Semester 1.2</option>
               						<option value = "3"> Semester 2.1</option>
               						<option value = "4"> Semester 2.2</option>
               						<option value = "5"> Semester 3.1</option>
               						<option value = "6"> Semester 3.2</option>
               						<option value = "7"> Semester 4.1</option>
               						<option value = "8"> Semester 4.2</option>
             					</select>
          					</p>
       					</fieldset>
   			</div>

   			<div id="course">
   					<fieldset>
   						<p>
   							<label> Select Course</label>
   							<select id="mylist" name="course">
   								<option value="1">CSE 101</option>
   							</select>
   						</p>
   					</fieldset>
   			</div>

   			<div id="ct">
       				<fieldset>
          					<p>
             				<label> Select Class Test</label>
             					<select id = "myList" name="class_test">
               						<option value = "1"> CT 1</option>
               						<option value = "2"> CT 2</option>
               						<option value = "3"> CT 3</option>
               						<option value = "4"> CT 4</option>
             					</select>
          					</p>
       					</fieldset>
   			</div>

   			<div id="lab">
   					<fieldset>
   						<p>
   							<label> Select Lab Course</label>
   							<select id="mylist" name="lab_course">
   								<option value="1">CSE 102</option>
   							</select>
   						</p>
   					</fieldset>
   			</div>

   			<div id="sem-exam">
   					<fieldset>
   						<p>
   							<label> Select Semester Exam</label>
   							<select id="mylist" name="sem_result">
   								<option value = "1"> Semester 1.1</option>
               					<option value = "2">Semester 1.2</option>
               					<option value = "3"> Semester 2.1</option>
               					<option value = "4"> Semester 2.2</option>
               					<option value = "5"> Semester 3.1</option>
               					<option value = "6"> Semester 3.2</option>
               					<option value = "7"> Semester 4.1</option>
               					<option value = "8"> Semester 4.2</option>
   							</select>
   						</p>
   					</fieldset>  		
   			</div>


   			<div id = "publish">
           <p> Click here to <a href = "upload_file.php" > Upload</a> file/information..  </p>
   			</div>




   		</div>


   		<div id="right">
   			<div id="image">
       
    
   			</div>

   			<div id="cv">
   				
            <label>
   					Name: <h1> <?php echo $_SESSION['username']; ?> </h1>
            </label>
   			

   				<br />
   				<br />
   				<br />
   			</div>
   		</div>

	</div>
</div>




<div class="footer">
	<div id="footer1" align="center"> <!-- footer design -->
    <div>
    <FORM action="logout.php">
        <INPUT type= "submit" value="logout" style="height: 25px; width: 150px; margin-left:200px; float: left;" />
        <a href="logout.php"></a>
      </FORM>
    </div>
		<a href="https://www.google.com">Google</a>
    <a href="https://www.yahoo.com">Yahoo</a>
    <a href="https://www.amazon.com">Amazon</a>
    <a href="https://www.ruet.ac.bd">RUET</a>      
    </div>
</div>


</body>
</html>