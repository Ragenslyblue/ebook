<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<link rel='shortcut icon' type='image/x-icon' href='image1/book2.ico'/>
<?php 




$qry='Select * From book_story Where story_id_num=4';
$qry2 = mysqli_query($CON,$qry);

while($row=mysqli_fetch_array($qry2)){
   
	$qry_book='Select * From book Where id_num= "'. $row['book_id_num'] .'"';
	$sql_book = mysqli_query($CON,$qry_book);
	   
	$book=mysqli_fetch_array($sql_book);
	
	$book_id = $book['id_num'];
	$book_title = $book['title_of_book'];
	$book_cover=  $book['cover_picture'];	

?>

<div class="school">
    <a  href="<?php echo 'php_files/image.php?id='. $book_id; ?>">
    <img src="<?php echo 'images/upload/'.$book_cover; ?>" alt="<?php echo $book_title; ?>" width="100" height="124" />
    <span><?php echo $book_title; ?></span>
    </a>
</div>

<?php
}
?>



<!---
<div class="school">
<a target="_blank" href="/"><img src="../images/persona 4.jpg" alt="persona4" width="100" height="124" /></a>
<div class="desc">Persona 4</div>
</div>

<div class="school">
<a target="_blank" href="/"><img src="../images/gakuen heaven.jpg" alt="gakuen heaven" width="100" height="124" /></a>
<div class="desc">Gakuen Heaven</div>
</div>



<div class="school">
<a target="_blank" href="/"><img src="../images/prince of tennis.jpg" width="100" height="124" /></a>
<div class="desc">Prince of Tennis</div>
</div>

<div class="school">
<a target="_blank" href="/"><img src="../images/A little snow fairy sugar.jpg" alt="Snow Fairy" width="100" height="124" /></a>
<div class="desc">A little Snow Fairy Sugar</div>
</div>

<div class="school">
<a target="_blank" href="/"><img src="../images/school rumble.jpg" alt="schoolrumble" width="100" height="124" /></a>
<div class="desc">School rumble</div>
</div>

<div class="school">
<a target="_blank" href="/"><img src="../images/sket dance.jpg" alt="dance" width="100" height="124" /></a>
<div class="desc">Sket Dance</div>
--->

