<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<link rel='shortcut icon' type='image/x-icon' href='../image1/book2.ico'/>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="../css/summernote.css" />
<link rel="stylesheet" type="text/css" href="../css/summernote-bs2.css" />
<link rel="stylesheet" type="text/css" href="../css/summernote-bs3.css" />

<link rel='shortcut icon' type='image/x-icon' href='../image1/book2.ico'/>
<link rel="stylesheet" type="text/css" href="../style/advance_carousel.css"/>

<script type="text/javascript" src="../javascript/summernote.js"></script>
<script type="text/javascript" src="../javascript/summernote.min.js"></script>
<script type="text/javascript" src="../javascript/bootstrap.min.js"></script>
<script type="text/javascript" src="../javascript/npm.js"></script>
<script src="../javascript/jquery.js"></script>
<script src="../javascript/advance_carousel.js"></script>
<script src="../javascript/custom.js"></script>


<?php 
include('../config.php');
include('./header.php');

if(isset($_GET['id'])) 
{ 

    $sql_book = mysqli_query($CON,"SELECT * FROM book WHERE id_num = ".$_GET['id']); 
    $book=mysqli_fetch_array($sql_book);
	
	$book_id = $book['id_num'];
	$book_title = $book['title_of_book'];
	$book_date=$book['date_publish'];
	$book_publish=$book['publishing_company'];
	$book_text=$book['text'];
	$book_copyright=$book['copyright_date'];
	$book_copyrightcom=$book['copyright_company'];
	$book_datesaved=$book['date_saved'];
	$book_cover=  $book['cover_picture'];
	
	

?>
    <div>
        <div class='title'><?php echo $book['title_of_book']; ?></div>
        <div class='text'><?php echo $book_text; ?></div>
        <div class='image'><img src="<?php echo '../images/upload/'.$book_cover; ?>" height="200" width="200"/></div>    
        <div class='date'><?php echo $book_date; ?></div>
        <div class='publish'><?php echo $book_publish; ?></div>
        <div class='copyright'><?php echo $book_copyright; ?></div>
        <div class='copyrightcom'><?php echo $book_copyrightcom; ?></div>
        <div class='datesaved'><?php echo $book_datesaved; ?></div>
    </div>
    
    <iframe width="420" height="315" src="//www.youtube.com/embed/A04pBOBRHX4" frameborder="0" allowfullscreen></iframe>    

    <?php
    $qry='Select * From comment Where book_id_num='.$book_id;
    $qry2 = mysqli_query($CON,$qry);

    if(mysqli_num_rows($qry2) > 0 ){


    ?>

    <div>
        <select multiple="yes" class='txtsearch' name="lst_comment" id="lst_comment">
        
    <?php    
    while($row=mysqli_fetch_array($qry2)){
       
    	$comment_name = $row['name'];
    	$comment_comment = $row['comment'];
        $comment_date = $row['date_saved'];
        
        ?>        
            <option>
                <div>
                    <div><?php echo $comment_name . ' says:'; ?></div>
                    <div><?php echo $comment_comment; ?></div>
                </div>
            </option>
        <?php
        }	
    
        ?>
    
        </select>    
    </div>
     
     <?php 
     }else{
        
        echo "<div class='comment'>Be the first to comment.</div>";
     }
     ?>
     
    <form action="save_comment.php" method="post">
    <div>
        <div><input type="hidden" class='txtsearch' name="txtnumber" id="txtnumber" value="<?php echo $book_id; ?>"/></div>
        <div class='name'>Name:<input type="text" class='txtname' name="txtname" id="txtname"/></div>
        <div class='comment2'>Comment:<textarea name="txtcomment" class='txtsearch' id="txtcomment"></textarea></div>
        <div><input type="submit" name="submit" class='comment_button' value="Comment"/></div>
    </div>
    </form>
     
        
<?php
}
include('footer.php');
?>