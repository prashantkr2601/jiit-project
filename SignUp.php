<?php

$DB="prashant";
$USER="root";
$PASS="";
$HOST="localhost";
$connect=mysqli_connect($HOST,$USER,$PASS,$DB);
if(!$connect){
  die ("database connection error!" );
}

echo "successfully";



if(!empty($_POST))
{
if (empty($_POST['username']) || empty($_POST['pass'])||empty($_POST['email'])) {
  echo "<br>";
      echo "Username or Password is invalid";
}
else
{
 $fname1= $_POST['fname'];
 $lname1= $_POST['lname'];
 $username1= $_POST['username'];
 $email1= $_POST['email'];
 $pass1= $_POST['pass'];
 $cpass1= $_POST['cpass'];
 $mobnumber1= $_POST['mobnumber'];

/*$sqlas = "CREATE TABLE students1 (
  First_Name VARCHAR(30) NOT NULL, 
  Last_Name VARCHAR(30) NOT NULL,
  Username VARCHAR(30) NOT NULL,
  Email VARCHAR(30) NOT NULL,
  Password VARCHAR(20) NOT NULL ,
  COnfirm_Password VARCHAR(20) NOT NULL ,
  MOB_Number int(10) NOT NULL 
)";

if (mysqli_query($connect, $sqlas)) {
    echo "Table student created successfully";
} else {
    echo "Error insertion table: ";
}*/

 $table="INSERT INTO students1 VALUES ('$fname1','$lname1','$username1','$email1','$pass1','$cpass1','$mobnumber1')";
 if(mysqli_query($connect,$table))
 {
  echo "done";
 }
 else {

    echo "please insert all the values " ;
}
}
}
else
{
  echo "<br>";
  echo "Please! enter the values";
}
mysqli_close($connect);

?> 
<html>
<head lang="en">
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>Login</title>
</head>
<style>
    .login-panel {
        margin-top:auto;
        }
</style>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign Up</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="">
                        <fieldset>
                            <div class="form-group">
                                <label>First Name:</label>
                                <input class="form-control" placeholder="First Name" name="fname" type="text" autofocus>
                            </div>
                             <div class="form-group">
                                <label>Lastt Name:</label>
                                <input class="form-control" placeholder="Last Name" name="lname" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Username:</label>
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                            </div>
  
                            <div class="form-group">
                                <label>Email:</label>
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>

                             
                            <div class="form-group">
                                <label>Confirm Password:</label>
                                <input class="form-control" placeholder="Confirm Password" name="cpass"  type="password" value="">
                            </div>
                             <div class="form-group">
                                <label>Mobile Number:</label>
                                <input class="form-control" placeholder="Mobile Number" name="mobnumber" type="Number" maxlength="10">
                            </div>
                               
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="submit" >
                       

                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br></b><a href="Signin.php">Login here</a></center>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

