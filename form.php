<?php

$DB="prashant";
$USER="root";
$PASS="";
$HOST="localhost";
$connect=mysqli_connect($HOST,$USER,$PASS,$DB);
if(!$connect){
  die ("database connection error!" );
}

echo " database successfully created";



if(!empty($_POST))
{
 $cname1= $_POST['cname'];
 $fname1= $_POST['fname'];
 $mname1= $_POST['mname'];
 $sname1= $_POST['sname'];
 $caname1= $_POST['caname'];
 $pwdname1= $_POST['pwdname'];
 $dayname1= $_POST['dayname'];
 $yearname1= $_POST['yearname'];
 $gendername1= $_POST['gendername'];
 $Nationality1= $_POST['Nationality'];
 $por1= $_POST['por'];
 $anumber1=$_POST['anumberr'];
 $mobnumber1= $_POST['mobnumber'];
 $email1= $_POST['email'];
 $Address1= $_POST['Address'];

/*$sqlas = "CREATE TABLE students (
  Candidate_Name VARCHAR(30) NOT NULL, 
  Father_Name VARCHAR(30) NOT NULL,
  Mother_Name VARCHAR(30) NOT NULL,
  State VARCHAR(50) NOT NULL ,
  Category VARCHAR(10) NOT NULL,
  PWD  VARCHAR(10) NOT NULL,
  Gender VARCHAR(20) NOT NULL,
  Nationality VARCHAR(20) NOT NULL,
  POR VARCHAR(20) NOT NULL,
  Adhaar_Number int(20) NOT NULL,
  MOB_Number int(10) NOT NULL PRIMARY key,
  Email VARCHAR(30) NOT NULL,
  Address VARCHAR(30) NOT NULL

)";

if (mysqli_query($connect, $sqlas)) {
    echo "Table student created successfully";
} else {
    echo "Error insertion table: ";
}*/

 $table="INSERT INTO students VALUES ('$cname1','$fname1','$mname1','$sname1','$caname1','$pwdname1','$gendername1','$Nationality1','$por1','$anumber1','$mobnumber1','$email1','$Address1')";
 if(mysqli_query($connect,$table))
 {
  echo "done";
 }
 else {
    echo "please insert all the values " ;
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
<head>
	<title>Form</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <link href="bootstrap/js/bootstrap.js" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
    .login-panel {
        margin-top:auto;
        }
         body
       {
        background-image: url(blur1.jpg);
        background-repeat: no-repeat;
        background-size:100vw 100vw  ;
       }
       .mandatory{
                    position:absolute;
                    margin-top: -52px;
                    right:15px;
                    font-size: 40px;
                   }
       .mandatory1{
                    position:absolute;
                    margin-top:-100px;
                    right:15px;
                    font-size: 40px;
                   }
      #pras1
      {
                     position: relative;
                     top:-9vh;
                     left:17vw;
      }
   </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action=" " >
                        <fieldset>
                           
                             <div class="form-group">
                             <label> Candidate's Name:</label><input class="form-control" placeholder="Candidate's Name" name="cname" type="text" autofocus>
                            </div>
                            <div style="color: red;" class="mandatory">*</div>

                            <div class="form-group">
                              <label>Father's Name:</label> <input class="form-control" placeholder="Father's Name" name="fname" type="text" autofocus>
                            </div>
                            <div style="color: red;" class="mandatory">*</div>
                            <div class="form-group">
                              <label>Mother's Name:</label> <input class="form-control" placeholder="mother's Name" name="mname" type="text" autofocus>
                            </div>
                            <div style="color: red;" class="mandatory">*</div>
                             <div class="form-group">
                              <label for="sel1">State of Eligibility:</label>
                               <select class="form-control" id="sel1" name="sname">
                               	<option>--select--</option>
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                 <option>Assam </option>
                                  <option>Bihar</option>
                                  <option>Chhattisgarh</option>
                                <option>Goa</option>
                                 <option>Gujarat </option>
                                  <option>Haryana</option>
                                  <option>Himachal Pradesh</option>
                                <option>Jammu & Kashmir </option>
                                 <option>Jharkhand</option>
                                  <option>Karnataka</option>
                                  <option>Kerala</option>
                                <option>Madhya Pradesh</option>
                                 <option>Maharashtra </option>
                                  <option>Manipur</option>
                                  <option>Meghalaya</option>
                                <option>Mizoram</option>
                                 <option>Nagaland</option>
                                  <option>Odisha</option>
                                  <option>Punjab</option>
                                <option>Rajasthan</option>
                                 <option>Sikkim</option>
                                  <option>Tamil Nadu</option>
                                   <option>Telangana</option>
                                 <option>Tripura</option>
                                  <option>Uttarakhand</option>
                                  <option>Uttar Pradesh</option>
                                <option>West Bengal</option>
                                   </select>
                                  </div>
                                  <div style="color: red;" class="mandatory">*</div>
                                   <div class="form-group">
                                    <label for="sel1">Category:</label>
                                   <select class="form-control" id="sel1" name="caname">
                                   	<option>--select--</option>
                                    <option>GEN</option>
                                    <option>OBC</option>
                                    <option>SC</option>
                                     <option>ST</option>
                                    </select>
                                   </div>
                                   <div style="color: red;" class="mandatory">*</div>

                                   <div class="form-group">
                                    <label for="sel1">Person with Disability(PWD):</label>
                                   <select class="form-control" name="pwdname" >
                                   	<option>--select--</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                    </select>
                                   </div>
                                   <div style="color: red;" class="mandatory">*</div>
                                   <div class="form-group">
                                    <label for="sel1">Date of Birth:</label>
                                   <select class="form-control" name="dayname">	
                                   <option>--Day--</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                <option>04</option>
                                 <option>05 </option>
                                  <option>06</option>
                                  <option>07</option>
                                <option>08</option>
                                 <option>09</option>
                                  <option>10</option>
                                  <option>11</option>
                                <option>12</option>
                                 <option>13</option>
                                  <option>14</option>
                                  <option>15</option>
                                <option>16</option>
                                 <option>17</option>
                                  <option>18</option>
                                  <option>19</option>
                                <option>20</option>
                                 <option>21</option>
                                  <option>22</option>
                                  <option>23</option>
                                <option>24</option>
                                 <option>25</option>
                                  <option>26</option>
                                   <option>27</option>
                                 <option>28</option>
                                  <option>29</option>
                                  <option>30</option>
                                <option>31</option>
                                    </select>
                                </div>
                                 <div style="color: red;" class="mandatory">*</div>
                                 <div class="form-group">
                          <select name="monthname" class="form-control">
                                   	<option>--Month--</option>
                                    <option>JANUARY</option>
                                    <option>FEBRUARY</option>
                                    <option>MARCH</option>
                                 <option>APRIL</option>
                                  <option>MAY</option>
                                  <option>JUNE</option>
                                <option>JULY</option>
                                 <option>AUGUST</option>
                                  <option>SEPTEMBER</option>
                                   <option>OCTOBER</option>
                                 <option>NOVEMEBER</option>
                                  <option>DECEMBER</option>
                                    </select>
                                </div>
                                    <div style="color: red;" class="mandatory">*</div>
                                    <div class="form-group">
                                     <select class="form-control" name="yearname">
                                   	<option>--Year--</option>
                                    <option>1990</option>
                                    <option>1991</option>
                                    <option>1992</option>
                                    <option>1993</option>
                                    <option>1994</option>
                                    <option>1995</option>
                                 <option>1996</option>
                                  <option>1997</option>
                                  <option>1998</option>
                                <option>1999</option>
                                 <option>2000</option>
                                  <option>2001</option>
                                   <option>2002</option>
                                 <option>2003</option>
                                  <option>2004</option>
                                  <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                 <option>2011</option>
                                  <option>2012</option>
                                  <option>2013</option>
                                <option>2014</option>
                                 <option>2015</option>
                                  <option>2016</option>
                                   <option>2017</option>
                                 <option>2018</option>
                                  <option>2019</option>
                                    </select>
                                     </div>
                                     <div style="color: red;" class="mandatory">*</div>
                                     <div class="form-group">
                                     <label for="sel1">Gender:</label>
                                   <select class="form-control" name="gendername" >
                                   	<option>--select--</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>other</option>
                                    </select>
                                </div>
                                   <div style="color: red;" class="mandatory">*</div>
                                   <div class="form-group">
                                    <label for="sel1">Nationality:</label>
                                   <select class="form-control" name="Nationality" >
                                   	<option>--select--</option>
                                    <option>Indian</option>
                                    <option>other</option>
                                    </select>
                                </div>
                                 <div style="color: red;" class="mandatory">*</div>
                                 <div class="form-group">
                                    <label for="sel1">Place of Residence:</label>
                                   <select class="form-control" name="por">
                                   	<option>--select--</option>
                                    <option>Urban</option>
                                    <option>Rural</option>
                                    </select>
                                </div>
                                 <div style="color: red;" class="mandatory">*</div>
                               <div class="form-group">
                               	<label for="sel1">Aadhaar Number(UIDAI):</label>
                                <input class="form-control" name="anumberr" type="Number" maxlength="10">
                            </div>
                            <div style="color: red;" class="mandatory">*</div>
                            <div class="form-group">
                            	 <label for="sel1">Mobile Number:</label>
                                <input class="form-control" placeholder="Mobile Number" name="mobnumber" type="Number" maxlength="10">
                            </div>
                               <div style="color: red;" class="mandatory">*</div>
                            <div class="form-group">
                            	 <label for="sel1">Email:</label>
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div style="color: red;" class="mandatory">*</div>
                               <div class="form-group">
                                 <label for="sel1">Address:</label>
                                <textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Address" name="Address"></textarea>
                            </div>
                            <div style="color: red;" class="mandatory1">*</div>
                                 
                                

                    
                    <center> <div class="form-group row">
  <div class="col-xs-4">
    
    <button class="btn btn-lg btn-success btn-block" >SAVE</button>
  </div>
  
  </div></center> </fieldset></form>
  <div class="col-xs-4" id="pras1">
   <a href="document_upload.html"> <button class="btn btn-lg btn-success btn-block">NEXT</button></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
	

</body>
</html> 