<?php 
    
?>


<!-- DISPLAY FEATURED STORIES -->
<?php
    $sql_featured= mysqli_query($CON,"SELECT * FROM featured LIMIT 8"); 
    if(mysqli_num_rows($sql_featured) > 0){
?>
    <div>
    <div class="featured"></div>
    <div>
    <?php   
        while($featured=mysqli_fetch_array($sql_featured)){
            $featured_id = $featured['book_id_num'];
            
            $sql_book= mysqli_query($CON,"SELECT title_of_book,cover_picture FROM book WHERE id_num =".$featured_id); 
            $featured_book=mysqli_fetch_array($sql_book);
                
            $featured_title= $featured_book['title_of_book'];
            $featured_cover = $featured_book['cover_picture'];
    ?>
            <div class="horror">
            <a href="<?php echo 'php_files/image.php?id='. $featured_id; ?>">
            <img src="<?php echo "images/upload/".$featured_cover; ?>" alt='<?php echo $featured_title; ?>' width="100" height="124" />
            <span><?php echo $featured_title; ?></span>
            </a>
        </div>  
                      
    <?php } ?>
    </div>
    </div>    
    
<?php    } ?>

<!-- DISPLAY LATEST STORIES -->
<?php
    $sql_latest= mysqli_query($CON,"SELECT * FROM book ORDER BY date_publish DESC LIMIT 8"); 
    if(mysqli_num_rows($sql_latest) > 0){
?>
    <div>
    <div class='latest'>Latest Stories</div>
    <div>
    <?php   
        while($latest=mysqli_fetch_array($sql_latest)){
            $latest_id = $latest['id_num'];            
            $latest_title= $latest['title_of_book'];
            $latest_cover = $latest['cover_picture'];
    ?>
        <div class="horror">
            <a href="<?php echo 'php_files/image.php?id='. $latest_id; ?>">
            <img src="<?php echo "images/upload/".$latest_cover; ?>" alt='<?php echo $latest_title; ?>' width="100" height="124" />
            <span><?php echo $latest_title; ?></span>
            </a>
        </div>
    
                      
    <?php  } ?>
    </div>
    </div>    
    
<?php    } ?>