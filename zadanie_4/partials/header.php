<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="fav/H16x16.png">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Title</title>
</head>
<body>

<header>
    <ul>
        <?php 
        $url = $_SERVER['REQUEST_URI'];
        

        error_reporting(E_ERROR | E_PARSE);
        ?>
        <li><a onclick="clickSingleA(this)" class="active" href="#"><img src="fav/BigA512x512.png" alt="logo"></a></li>
        <li><a href="index.php"><span class="icon-span"></span>Home</a></li>
        <li><a href="gallery.php"><span class="icon-span"></span>Gallery</a></li>
        <li><a href="#"><span class="icon-span"></span>Store</a></li>
        <li><a href="#"><span class="icon-span"></span>Quit</a></li>
    </ul>
</header>
