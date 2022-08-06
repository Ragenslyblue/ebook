<?php 
 


$qry='Select * From book_story Where story_id_num=7';
$qry2 = mysqli_query($CON,$qry);

while($row=mysqli_fetch_array($qry2)){
   
	$qry_book='Select * From book Where id_num= "'. $row['book_id_num'] .'"';
	$sql_book = mysqli_query($CON,$qry_book);
	   
	$book=mysqli_fetch_array($sql_book);
	
	$book_id = $book['id_num'];
	$book_title = $book['title_of_book'];
	$book_cover=  $book['cover_picture'];	
?>



<div class="romance">
    <a href="<?php echo 'php_files/image.php?id='. $book_id; ?>">
    <img src="<?php echo 'images/upload/'.$book_cover; ?>" alt="<?php echo $book_title; ?>" width="100" height="124" />
    <span><?php echo $book_title; ?></span>
    </a>
</div>



<?php	
}
?>

