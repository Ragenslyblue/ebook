<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<link rel='shortcut icon' type='image/x-icon' href='../image1/icon.ico'/>
<?php

include("../config.php");


$txtName = mysqli_real_escape_string($CON, $_POST['txtName']);
$txtAddress = mysqli_real_escape_string($CON, $_POST['txtAddress']);
$txtEmail = mysqli_real_escape_string($CON, $_POST['txtEmail']);
$txtAge = mysqli_real_escape_string($CON, $_POST['txtAge']);
$txtbirth = mysqli_real_escape_string($CON, $_POST['txtbirth']);
$radbtnGender = mysqli_real_escape_string($CON, $_POST['radbtnGender']);
$txtUserName = mysqli_real_escape_string($CON, $_POST['txtUserName']);
$txtPassword = mysqli_real_escape_string($CON, $_POST['txtPassword']);

$sql="INSERT INTO admin (email, address, name, gender, age, birthday, password, username)
VALUES ('$txtEmail', '$txtAddress', '$txtName','$radbtnGender', '$txtAge', '$txtbirth', '$txtPassword', '$txtUserName')";
$qry = mysqli_query($CON,$sql);

if (!$qry) {
  die('Error: ' . mysqli_error($qry));
}
echo "Success!";
mysqli_close($CON);



?>
<div><a href="">Add Another?</a></div>