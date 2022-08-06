<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<link rel='shortcut icon' type='image/x-icon' href='../image1/book2.ico'/>
<?php //include 'header.php';
 
include("./config.php");

$searchText = mysqli_real_escape_string($CON, $_POST['txtsearch']);

$qry='Select * From book Where title_of_book REGEXP "'.$searchText .'" 
    OR publishing_company REGEXP "'.$searchText .'" 
    OR text REGEXP "'.$searchText .'"';
$qry2 = mysqli_query($CON,$qry);

if(mysqli_num_rows($qry2) > 0){
    ?>
    
<div> <?php echo mysqli_num_rows($qry2) ." results found."; ?></div>

<?php
while($row=mysqli_fetch_array($qry2)){
   
	$book_id = $row['id_num'];            
	$book_title = $row['title_of_book'];  
	$book_cover=  $row['cover_picture'];  	
?>  
    
    

<div class="romance thumbnail">
    <a href="<?php echo 'image.php?id='. $book_id; ?>">
    <img src="<?php echo './images/upload/'.$book_cover; ?>" alt="<?php echo $book_title; ?>" width="100" height="124" />
    <span><?php echo $book_title; ?></span>
    </a>
</div>



<?php	
}
}else{
    ?>
    
    <div>No results found.</div>
    
    <?php
    
}
?>


<?php  //include 'footer.php';?>