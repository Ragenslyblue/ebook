<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<link rel='shortcut icon' type='image/x-icon' href='../image1/book2.ico'/>

<?php
include_once("../config.php");


if(isset($_POST['submit']))
{
    $name=$_FILES['file']['name'];
    $temp=$_FILES['file']['tmp_name'];
    
    move_uploaded_file($temp, 'uploaded/'.$name);
    
    
}
?>
