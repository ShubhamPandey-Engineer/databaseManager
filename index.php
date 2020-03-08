 
<?php
ob_start();
include('config.php');
if(isset($_POST['sub']))
{
$umail=$_POST['email'];
$query ="select *from users where email='$umail'";
$result =mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
$rows=mysqli_fetch_array($result);

if($num>=1){
  session_start();
  $_SESSION['uid']=$rows['uid'];
  header("location:retrieve.php");
}
else{
  echo"invalid";
}
}

?>
<!--
//session checking
if(!isset($_SESSION['uname'])){// 1s
if(isset($_POST['sub']) && isset($_SESSION['uname'])){//1.1s
  $sucess=1;
header('Location:retrieve.php');
} }//1.1e
else{ //e1
  header("Location:retrieve.php");
}
?>*/
-->
<!DOCTYPE html>
<html>
<script type="text/javascript" src="/libs/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/libs/bootstrap.min.css">
<script type="text/javascript" src="bootstrap.min.js"></script>

<head>   <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet"  type="text/css" href="bootstrap.css">

<link rel="stylesheet" type="text/css" href="index.css">
	<title></title>
</head>
<body>
    <nav   class="navbar navbar-expand-sm navbar-light fixed-top bg-light ">

  <a  style="color: black;text-transform: capitalize; font-size: 29px;" class="navbar-brand" href="#">database</a>
  <button  style="margin-left: 120px;" class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a style=" font-weight:bold;"id="home" class="nav-item nav-link " href="index.php">Home</a>
            <a   style=" font-weight:bold;" class="nav-item nav-link" href="register.php">REGISTRATION</a><button id="b1"type="button" onmouseover="show1()" onmouseout="exit()">info</button>
      <a style=" font-weight:bold;"class="nav-item nav-link" href="retrieve.php">RETRIEVE DATA</a><button id="b2"  type="button"  onmouseover="show2()"onmouseout="exit()" >info</button>
      <a style=" font-weight:bold;"class="nav-item nav-link" href="update.php">UPDATE DATA</a><button id="b3"type="button" onmouseover="show3()" onmouseout="exit()" >info</button>
      <button id="all"type="button" onmouseover="show3(),show2(),show1()" onmouseout="exit()">infoAll</button>
      <a   id="login"class="nav-item nav-link"  data-toggle="modal"data-target="#myModal"  href="#">Login</a>

    </div></div>
  
</nav>  
 
<!--Content-->




  </div>
<div  id="outer"class="container">
  <div    id="one" class="one">
      <label>registration</label>
   <p> This is a first step for a new user to make its entry in the <b>database</b>.The  webpage here consists of a registration form which is bound to check certain checkpoints.   
If all checkpoints are cleared the new user makes  an entry in database.
     A registration form receives username, email and password and submits it to php code that processes the data and stores it in MySQL database. 
</p></div>
  <div id="two" class="two" >
<label>retrieve</label>    
<p>This web page consists of a form which is a typical login form i.e it will only forward the user if the user credentials matches with data stored at database(MySQL here). 

Receives username and passwords from user and compares it with that which is stored in the database, if match is found  user is permitted to view the individual data otherwise, it displays an error message.
</p></div>
    <div  id="three"class="three">
          <label>update</label>
<p>User can change their  feeded data using update web-page.To update their data user has to validate themselve to the database using their correct  <b>email</b> and <b>password</b>.If user has entered wrong/incoorect information ,then an error will show up else the user will be redirected to an form where user can change their data.If the user data is successfully changed ,a table will be showed up consisting all users data.
  </p></div>



 
</div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm  ">
      <div class="modal-content">
        <div  style="background-color: gray" class="modal-header">
          <h4 class="modal-title h-50  ">USER login</h4>
        </div>
        <div class="modal-body">
        <form    method="post">
    <h3 >email</h3><input type="text" class="form-control" name="email" <?php if(isset($_POST['email'])) echo $_POST['email'] ?>>
    <h3>enter password</h3><input type="password"  name="pass" class="form-control" >
    
     
    <input type="submit" align="center" class="btn btn-success" name="sub"value="Check"></form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>


<?php 
/*
$email=$_POST['email'];

$password=$_POST['pass'];

$query ="select *from users where email='$email'";
$result =mysqli_query($conn,$query);
$num =mysqli_num_rows($result);

if($num >= 1){
  $_SESSION['user']=$_POST['email'];


$sucess=1;
echo $_SESSION['uname'];
header('Location:retrieve.php');

}
else{

echo"wrong data";
}





ob_flush();*/
?>


<div  class="admin" style="width: 100%;">


          <span id="admin">designed by </span>


      <img alt="admin"  src="one.jfif">
    </div>
  <script type="text/javascript" src="index.js"></script>
<script type="text/javascript" src="/libs/jquery.min.js"></script>
</body></html>