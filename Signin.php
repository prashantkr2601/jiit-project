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
 $username1= $_POST['username'];
 $email1= $_POST['email'];
 $pass1= $_POST['pass'];

 $sql="select Username,Email,Password FROM students1 WHERE Username='$username1' AND Email='$email1' AND Password='$pass1'";
 $res=$connect->query($sql);
    $rowcount=mysqli_num_rows($res);
    if($rowcount==1)
 {
    echo "<br>";
  echo "LogIn Successfully";
  header("location:form.php");
  exit();
 }
 else {
  echo "<br>";
    echo "username,email and password are incorrect" ;
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

<style>
  body
       {
        background-image: url(blur1.jpg);
        background-repeat: no-repeat;
        background-size:100vw 100vw  ;
       }

    .login-panel {
        margin-top: 150px;
    }
     
 .mandatory0{
                    position:absolute;
                    margin-top: -70px;
                    right:15px;
                    font-size: 40px;
                   }
  
 .mandatory1{
                    position:absolute;
                    margin-top: -70px;
                    right:15px;
                    font-size: 40px;
                   }
 .mandatory{
                    position:absolute;
                    margin-top: -52px;
                    right:15px;
                    font-size: 40px;
                   }
</style>
 <script type="text/javascript">
   function Signin(){
                var username1= document.getElementById('username').value;
                var email1=document.getElementById('email').value;
                var password1=document.getElementById('password').value;
if (username1.length == 0 || email1.length == 0 || password1.length == 0) 
      {
  alert('please enter a real value in text box!');
return;
}

 }      
 </script>
 </head>
<body>
  
<div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" >
                        <fieldset>
                           <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                             <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                              </div><br>
                                 <div style="color: red;" class="mandatory0">*</div>
                                  <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                                     </div><br>
                                     <div style="color: red;" class="mandatory1">*</div>
                                      <div class="input-group">
                                       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="pass" placeholder="Password">
                                         </div>
                                          <div style="color: red;" class="mandatory">*</div>
                                           <div class="col-auto">
                                           <div class="form-check mb-2 mb-sm-0">
                                            <label class="form-check-label">
                                             <input class="form-check-input" type="checkbox"> Remember me
                                              </label>
                                               </div>
                                                </div>
                                                 </div>
                                                  <input class="btn btn-lg btn-success btn-block" type="submit" value="Signin" name="submit" onclick="Signin()" >
                                                  </fieldset>
                                              </form><br>
                                                   <center> <div>
                                                   <a href="forget_password.html"> forget password</a>
                                                  </div></center>

<center><b>New User ?</b> <br></b><a href="SignUp.php">Sign Up here</a></center>
                                                
                                           </div>
                                       </div>
                                     </div>
                                  </div>
                              </div>
                           </div>
                         </body>
                    </html>

