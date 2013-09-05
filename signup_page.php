<?php

session_start();

if ( isset($_SESSION['username']))
{
  //header("Location: index.php");
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>info.Result</title>
<link rel="stylesheet" type="text/css" href="style-sign-up.css">
<link rel="stylesheet" type="text/css" href="mediaClass.css">
</head>

<?php 

//db connect

$host="localhost";
$userdb="root";
$pass="";
$dbname= "inforesult";



  $con=mysql_connect($host,$userdb,$pass,$dbname);
  if(!$con)
  {
      echo 'DB ERROR.';
      exit;
  }
  else{
   
  }
  $selectDb= mysql_select_db("inforesult",$con);
  if(!$selectDb)
  {
      echo 'DB CONN ERROR';
    exit;
  }

//data entry

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$addinfo=$_POST['addinfo'];



if($_POST['catagory'] == "yes")
{
  $ca="Teacher";
 // header("Location: afterlog.php");
}
else
{
$ca="student";
//header("Location: student.php");
}

if($_POST['gender']== "yes")
{
  $gender="male";
}
else
{
$gender="female";
}

//check the empty field

if($_POST['submitinfo']=="submitinfo")
{
               if($fname!="" and $lname !="" and $address!="" and
                $contact!="" and $email!="" and $username!="" and
               $password!="" and $addinfo!="" and $ca!="" and $gender!="")
                {

                $target_path = "image/";
                $target_path = $target_path . basename( $_FILES['uploadimage']['name']);
                $image_link=basename( $_FILES['uploadimage']['name']);
                $filename= basename( $_FILES['uploadimage']['name']); 
                $ext=end(explode(".",$filename));
                if(strtoupper($ext)=="JPG")
                {
                   if(move_uploaded_file($_FILES['uploadimage']['tmp_name'],$target_path)) 
                   {

                         $img_msg= "The file ".  basename( $_FILES['uploadimage']['name']). 
                         " has been uploaded and file extension is:  ".$ext."<BR>";
                         
                        $file_handle = fopen($target_path, "r");


               $query1 = "INSERT INTO member (user_id,fname,lname,address,contact,email,username,password,gender,imagelink,addinfo)
    VALUES('','$first_name ','$last_name','$address','$contact','$email','$username','$password','$gender','$image_link','$addinfo')";


mysql_query($query1) or die(mysql_error());                             //insert data into database
    
     $final_msg= "Succesfully registered... <br/><br/>";

}
}
}
else{$final_msg = "Filled the all requirement ";}
  }          
//if()




?>

<body>

<div class="main">


  <div id="header">
    <div id="back">
      <h1>Info.Result <br /> <br />
     Rajshahi University of Engineering and Technoogy</h1>
    <form action="index.php">
      <input type="submit" value="Back to Home"> 
        <a href="index.php"></a>
      </form>
    </div>

    <div id="clock">
      <iframe src="http://free.timeanddate.com/clock/i3lz44xh/n73/tlin/fn13/fs18/ftb/bat1/bac0ff/pa3/tt0/th2/ta1/tb4" frameborder="0" width="311" height="70"></iframe>
    </div>

  </div>  

  <div id="context">

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="submitinfo" value="submitinfo"/>
      <ul>
          <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
            <tr>
              <td colspan="2"><div align="center"></td>
            </tr>

            <tr>
              <td><div align="right">User:</div></td>
                <td>
                  <input type="radio" name="catagory" value="yes">Teacher<br>
                  <input type="radio" name="catagory" value="no">Student
                </td>
            </tr> 

            <tr>
              <td width="95"><div align="right">First Name:</div></td>
              <td width="171"><input type="text" name="fname" /></td>
            </tr>
   
           <tr>
            <td><div align="right">Last Name:</div></td>
            <td><input type="text" name="lname" /></td>
          </tr>

         <tr>
           <td><div align="right">Gender:</div></td>
           <td>
             <input type="radio"  name="gender" value="yes"> Male<br> 
             <input type="radio"  name="gender" value="no"> Female<br> 
           </td>
          </tr>


           <tr>
              <td><div align="right">Address:</div></td>
              <td><input type="text" name="address" /></td>
            </tr>
    
          <tr>
            <td><div align="right">Contact-No:</div></td>
            <td><input type="text" name="contact" /></td>
          </tr>
          
          <tr>
            <td><div align="right">Email:</div></td>
            <td><input type="text" name="email" /></td>
          </tr>
    
          <tr>
            <td><div align="right">Username:</div></td>
            <td><input type="text" name="username" /></td>
          </tr>
        <tr>
          <td><div align="right">Password:</div></td>
          <td><input type="text" name="password" /></td>
        </tr>

        <tr>
          <td><div align="left">image:</div></td>
          <td><input type="file" name="uploadimage" id="file" /></td> 
        </tr>

        <tr>
          <td><div align="right">Aditional-Info:</div></td>
          <td>
            <textarea cols="40" rows="5" name="addinfo"></textarea>
          </td>
        </tr>
        </table>
      </ul>
    </form>
  
  <p>&nbsp;</p>
  
    <p>
      <form action="afterLog.php">
        <label> Submit 
          <input type="submit" value="Go -->" />
        </label>
      </form>
    </p>
    <?php
    if($_POST['catagory'] == "yes")
{
  $ca="Teacher";
  header("Location: afterlog.php");
}
else
{
$ca="student";
header("Location: student.php");
}
    ?>

  <p>&nbsp;</p>
  <p>&nbsp; </p>

</form>
</div>

<div id="footer">
</div>

</div>

</body>
</html>
