<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<link rel='shortcut icon' type='image/x-icon' href='../image1/book2.ico'/>
<?php

include_once("../config.php");


$txtname = mysqli_real_escape_string($CON, $_POST['txtname']);
$txtcomment = mysqli_real_escape_string($CON, $_POST['txtcomment']);
$book_id = mysqli_real_escape_string($CON, $_POST['txtnumber']);


$sql="INSERT INTO comment (name, comment, book_id_num)
VALUES ('$txtname', '$txtcomment', $book_id)";

$qry = mysqli_query($CON,$sql);

if (!$qry) {
  die('Error: ' . mysqli_error($qry));
}
echo "Success!";
mysqli_close($CON);
?>

<div><a href="">Add Another?</a></div>
