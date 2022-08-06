<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<link rel='shortcut icon' type='image/x-icon' href='../image1/logo1.ico'/>
<?php

include_once("../config.php");


$txtName = mysqli_real_escape_string($CON, $_POST['txtName']);
$txtLastName = mysqli_real_escape_string($CON, $_POST['txtLastName']);

$txtAddress = mysqli_real_escape_string($CON, $_POST['txtAddress']);
$txtTel = mysqli_real_escape_string($CON, $_POST['txtTel']);
$txtCel = mysqli_real_escape_string($CON, $_POST['txtCel']);
$txtEmail = mysqli_real_escape_string($CON, $_POST['txtEmail']);
$radbtnGender = mysqli_real_escape_string($CON, $_POST['radbtnGender']);
$txtFav = mysqli_real_escape_string($CON, $_POST['txtFav']);

$sql="INSERT INTO author (fname, lname, address, tel_num, cellphone_num, email, favorite, gender)
VALUES ('$txtName', '$txtLastName', '$txtAddress', '$txtTel', '$txtCel', '$txtEmail', '$txtFav','$radbtnGender' )";

$qry = mysqli_query($CON,$sql);

if (!$qry) {
  die('Error: ' . mysqli_error($qry));
}
echo "Success!";
mysqli_close($CON);
?>
<div><a href="">Add Another?</a></div>