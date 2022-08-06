<!DOCTYPE HTML>
<html>
<head>
<title>Ebook</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="css/summernote.css" />
<link rel="stylesheet" type="text/css" href="css/summernote-bs2.css" />
<link rel="stylesheet" type="text/css" href="css/summernote-bs3.css" />

<link rel='shortcut icon' type='image/x-icon' href='image1/book2.ico'/>
<link rel="stylesheet" type="text/css" href="style/advance_carousel.css"/>

<script type="text/javascript" src="javascript/summernote.js"></script>
<script type="text/javascript" src="javascript/summernote.min.js"></script>
<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
<script type="text/javascript" src="javascript/npm.js"></script>
<script src="javascript/jquery.js"></script>
<script src="javascript/advance_carousel.js"></script>
<script src="javascript/custom.js"></script>
</head>
<body>
<div id="container">
<h1 class='h1'>E-BooK</h1>
<div id="nav">
<ul>
<li><a href="<?php echo $BASE_URL;?>index.php?page=home">Home</a></li>
<li><a href="<?php echo $BASE_URL;?>index.php?page=romance">Romance</a></li>
<li><a href="<?php echo $BASE_URL;?>index.php?page=horror">Horror</a></li>
<li><a href="<?php echo $BASE_URL;?>index.php?page=comedy">Comedy</a></li>
<li><a href="<?php echo $BASE_URL;?>index.php?page=schoollife">School life</a></li>
<li><a href="<?php echo $BASE_URL;?>index.php?page=action">Action</a></li>
<li><a href="<?php echo $BASE_URL;?>index.php?page=magic">Magic</a></li>
<li><a href="<?php echo $BASE_URL;?>index.php?page=sports">Sports</a></li>
<li><a href="<?php echo $BASE_URL;?>index.php?page=sciencefiction">Science Fiction</a></li>
<li><a href="<?php echo $BASE_URL;?>index.php?page=shounen-ai">Shounen-ai</a></li>
<li><a href="<?php echo $BASE_URL;?>index.php?page=smut">Smut</a></li>
</ul>
</div>

<form action="<?php echo $BASE_URL;?>index.php?page=searching" id="txtsearching" name="txtsearching" method="POST">
<input type="text" id="txtsearch" class='txtsearch' name="txtsearch" />
<input type="submit" id="query" class="search_button" value="Search"/>
</form>
</nav>

<br /><br />

<!--<div class="page">
    <div class="carousel-outer">
    <div class="left-transparent"></div>
    <div class="carousel-inner">
        <a class="left-link" href="#">
        <img src='image1/left.png'/>
        </a>
                
<div class="wrapper">
    <img class="carousel-item" src="image1/free.jpg" width="300" height="192"/>
    <img class="carousel-item" src="image1/bleach.jpg" width="300" height="192"/>
    <img class="carousel-item" src="image1/ao no exorcist.jpg" width="300" height="192"/>
    <img class="carousel-item" src="image1/fairytail.jpg" width="300" height="192"/>
</div> 

        <a class="right-link" href="#">
        <img src='image1/right.png' />
        </a>
        <ul class="scroll-buttons">
            <li class="scroll-button">1</li>
            <li class="scroll-button">2</li>
            <li class="scroll-button">3</li>
            <li class="scroll-button">4</li>
        </ul> 
</div>
<div class="right-transparent"></div>
</div>
</div>-->