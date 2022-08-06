<link rel="stylesheet" type="text/css" href="style/style.css"/>
<?php
include("../config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$txtUserName=mysqli_real_escape_string($CON,$_POST['txtUserName']); 
$txtPassword=mysqli_real_escape_string($CON,$_POST['txtPassword']); 

$sql="SELECT id_num FROM admin WHERE username='$txtUserName' and password='$txtPassword'";
$result=mysqli_query($CON,$sql);
$row=mysqli_fetch_assoc($result);
$active=$row['active'];
$count=mysqli_num_rows($result);


// If result matched $username and $password, table row must be 1 row
if($count==1)
{
session_register("txtUserName");
$_SESSION['login_user']=$txtUserName;

header("location: home.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>
<form action="" method="post">
<label>UserName :</label>
<input type="text" name="txtUserName"/><br />
<label>Password :</label>
<input type="password" name="txtPassword"/><br/>
<input type="submit" value=" Submit "/><br />
</form>