<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<link rel='shortcut icon' type='image/x-icon' href='../image1/logo1.ico'/>
<form action="save_book.php" method="post" enctype='multipart/form-data'>
<b class='titleBook'>Title of Book:</b> <input type="text" name="txtBook" class='txtBook' id="txtBook"/><br />
<b class='Text2'>Text:</b> <textarea name="txtText" id="txtText" class='txtText' cols="70" rows="30"></textarea><br />
<b class='coverPic'>Cover Picture:</b> <input type="file" name="txtpic" class='txtpic' id="txtpic" /><br />
<b class='datePub'>Date Publish:</b><input type="text" name="txtDatePub" class='txtDatePub' id="txtDatePub"/><br />
<b class='pubCom'>Publishing Company:</b> <input type="text" name="txtPublish" class='txtPublish' id="txtPublish"/><br />
<b class='copyDate'>Copyright Date:</b> <input type="text" class='txtDate' name="txtDate"/><br />
<b class='copyCom'>Copyright Company:</b> <input type="text" class='txtCompany' name="txtCompany" id="txtCompany"/><br />

<b class='selectStory'>
Select Story Type:
</b> 
<select multiple="yes" id="story_id[]" class='txtSelectStory' name="story_id[]">

<?php 
include_once("../config.php");

$sqlSelect="SELECT * FROM story"; 
$qryStory = mysqli_query($CON,$sqlSelect);

if (!$qryStory) {
  die('Error: ' . mysqli_error($qryStory));
}else{
	
	while($row=mysqli_fetch_array($qryStory)){
		echo '<option value="'.$row['id_num'].' ">';
		echo $row['story_type'];
		echo '</option>';
	}	
}
?>

</select>
<br />

<b class='selectAuthor'>
Select Author: 
</b>
<select multiple="yes" id="authors_id[]" class='txtSelectAuthor' name="authors_id[]">

<?php 

$sql="SELECT * FROM author"; 
$qry = mysqli_query($CON,$sql);

if(!$qry) {
  die('Error: ' . mysqli_error($qry));
}else{
	
	while($row=mysqli_fetch_array($qry)){
		echo '<option value="'.$row['id_num'].' ">';
		echo $row['fname'] . ' ' . $row['lname'];
		echo '</option>';
	}	
}

mysqli_close($CON);
?>

</select>
<br/>

<input type="submit" name="submit" class='save' value="Save"/><input type="submit" name="submit" class='cancel' value="Cancel"/><input type="submit" class='clear' name="submit" value="Clear"/>
</form>