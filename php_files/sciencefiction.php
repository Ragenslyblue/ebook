<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<link rel='shortcut icon' type='image/x-icon' href='image1/book2.ico'/>
<?php 



$qry='Select * From book_story Where story_id_num=5';
$qry2 = mysqli_query($CON,$qry);

while($row=mysqli_fetch_array($qry2)){
   
	$qry_book='Select * From book Where id_num= "'. $row['book_id_num'] .'"';
	$sql_book = mysqli_query($CON,$qry_book);
	   
	$book=mysqli_fetch_array($sql_book);
	
	$book_id = $book['id_num'];
	$book_title = $book['title_of_book'];
	$book_cover=  $book['cover_picture'];	


?>

<div class="science">
    <a href="<?php echo 'php_files/image.php?id='. $book_id; ?>">
    <img src="<?php echo 'images/upload/'.$book_cover; ?>" alt="<?php echo $book_title; ?>" width="100" height="124" />
    <span><?php echo $book_title; ?></span>
    </a>
</div>

<?php
}
?>



<!---

<div class="science">
<a target="_blank" href="/"><img src="../images/code geass.jpg" alt="code geass" width="100" height="124" /></a>
<div class="desc">Code Geass</div>
</div>

<div class="science">
<a target="_blank" href="/"><img src="../images/daa daa daa.jpg" alt="daa" width="100" height="124" /></a>
<div class="desc">Daa!!! Daa!!! Daa!!!</div>
</div>

<div class="science">
<a target="_blank" href="/"><img src="../images/Zenki.jpg" alt="ZENKI" width="100" height="124" /></a>
<div class="desc">Zenki</div>
</div>

<div class="science">
<a target="_blank" href="/"><img src="../images/pokemon.jpg" alt="pokemon" width="100" height="124" /></a>
<div class="desc">Pokemon</div>
</div>

<div class="science">
<a target="_blank" href="/"><img src="../images/sailor moon.jpg" alt="sailor" width="100" height="124" /></a>
<div class="desc">Sailor Moon</div>
</div>

<div class="science">
<a target="_blank" href="/"><img src="../images/say i love you.jpg" alt="say i love you" width="100" height="124" /></a>
<div class="desc">Say i love you</div>
</div>
--->

