<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<link rel='shortcut icon' type='image/x-icon' href='../image1/book2.ico'/>
<?php
include("../config.php");

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["txtpic"]["name"]);
$extension = end($temp);


if ((($_FILES["txtpic"]["type"] == "image/gif")
|| ($_FILES["txtpic"]["type"] == "image/jpeg")
|| ($_FILES["txtpic"]["type"] == "image/jpg")
|| ($_FILES["txtpic"]["type"] == "image/pjpeg")
|| ($_FILES["txtpic"]["type"] == "image/x-png")
|| ($_FILES["txtpic"]["type"] == "image/png"))
&& in_array($extension, $allowedExts)) {
  if ($_FILES["txtpic"]["error"] > 0) {
    echo "Error: " . $_FILES["txtpic"]["error"] . "<br>";
    die();
  } else {
    if (file_exists("../images/upload/" . $_FILES["txtpic"]["name"])) {
      echo $_FILES["txtpic"]["name"] . " already exists. ";
      die();
    } else {
      move_uploaded_file($_FILES["txtpic"]["tmp_name"],
      "../images/upload/" . $_FILES["txtpic"]["name"]);
      echo "Stored in: " . "../images/upload/" . $_FILES["txtpic"]["name"];
    }
  }
} else {
  echo "Invalid file";
  die();
}




$txtBook = mysqli_real_escape_string($CON, $_POST['txtBook']);
$txtText = mysqli_real_escape_string($CON, $_POST['txtText']);
$file   = $_FILES['txtpic']['name'];
if(!isset($file)){
	echo "Please select cover picture.";
	echo "<div> <a href=''> Back </a> </div>";
	die();
}




$txtDatePub = mysqli_real_escape_string($CON, $_POST['txtDatePub']);
$txtPublish = mysqli_real_escape_string($CON, $_POST['txtPublish']);

$txtDate = mysqli_real_escape_string($CON, $_POST['txtDate']);
$txtCompany = mysqli_real_escape_string($CON, $_POST['txtCompany']);
$authors_id = $_POST['authors_id'];
$story_id = $_POST['story_id'];



$sql="INSERT INTO book (title_of_book, date_publish, publishing_company, text, copyright_date, copyright_company, cover_picture)
VALUES ('$txtBook', '$txtDatePub', '$txtPublish','$txtText', '$txtDate', '$txtCompany', '$file')";
$qry = mysqli_query($CON,$sql);

if (!$qry) {
  die('Error: ' . mysqli_error($qry));
}

$id = mysqli_insert_id($CON);
echo $id;
foreach ($authors_id as $auth_id)
{
       	
		$sqlAuthor ="INSERT INTO book_author (book_id_num, author_id_num)
					VALUES ('$id', '$auth_id')";
		$qryAuthor = mysqli_query($CON,$sqlAuthor); 
}


foreach ($story_id as $s_id)
{
       	
		$sqlStory ="INSERT INTO book_story (book_id_num, story_id_num)
					VALUES ('$id', '$s_id')";
		$qryStory = mysqli_query($CON,$sqlStory); 
}




echo "Success!";
mysqli_close($CON);
?>
<div><a href="">Add Another?</a></div>