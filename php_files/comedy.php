<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<link rel='shortcut icon' type='image/x-icon' href='image1/book2.ico'/>
<?php 



$qry='Select * From book_story Where story_id_num=2';
$qry2 = mysqli_query($CON,$qry);

while($row=mysqli_fetch_array($qry2)){
   
	$qry_book='Select * From book Where id_num= "'. $row['book_id_num'] .'"';
	$sql_book = mysqli_query($CON,$qry_book);
	   
	$book=mysqli_fetch_array($sql_book);
	
	$book_id = $book['id_num'];
	$book_title = $book['title_of_book'];
	$book_cover=  $book['cover_picture'];	
?>


<div class="comedy">
    <a href="<?php echo 'php_files/image.php?id='. $book_id; ?>">
    <img src="<?php echo 'images/upload/'.$book_cover; ?>" alt="<?php echo $book_title; ?>" width="100" height="124" />
    <span><?php echo $book_title; ?></span>
    </a>
</div>

<?php	
}
?>




<!---
<div class="comedy">
<a target="_blank" href="/"><img src="../images/ao no exorcist.jpg" alt="ao no exorcist" width="100" height="124" /></a>
<div class="desc">Ao no Exorcist</div>
</div>

<div class="comedy">
<a target="_blank" href="/"><img src="../images/gakuen alice.jpg" alt="gakuen alice" width="100" height="124" /></a>
<div class="desc">Gakuen alice</div>
</div>

<div class="comedy">
<a target="_blank" href="/"><img src="../images/ouran host club.jpg" alt="ouran host club" width="100" height="124" /></a>
<div class="desc">Ouran Host Club</div>
</div>

<div class="comedy">
<a target="_blank" href="/"><img src="../images/shugo chara.jpg" alt="Shougo chara" width="100" height="124" /></a>
<div class="desc">Shougo Chara</div>
</div>

<div class="comedy">
<a target="_blank" href="/"><img src="../images/beelzebub.jpg" alt="beelzebub" width="100" height="124" /></a>
<div class="desc">Beelzebub</div>
</div>

<div class="comedy">
<a target="_blank" href="/"><img src="../images/07 ghost.jpg" alt="07 ghost" width="100" height="124" /></a>
<div class="desc">07 Ghost</div>
</div>
--->
