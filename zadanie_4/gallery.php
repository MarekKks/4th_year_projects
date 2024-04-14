
<?php
include_once 'partials/header.php';
include_once 'function.php';
?>



<main class="options">
<?php


$default_url = 'http://localhost/4_rocnik/zadanie_4/gallery.php';


$link = glob('gallery/*', GLOB_ONLYDIR);
$url = $_SERVER['REQUEST_URI'];


//step 1 - zobrazenie všetkych linkov
//if ($url == '/4_rocnik/zadanie_4/gallery.php') {
    foreach ($link as $x) {
        $picture = glob($x.'/*');
        $x = str_replace('gallery/', '', $x);
        
        
        foreach ($link as $item) {
            echo '<div class="option">';
            $item = str_replace('gallery/', '', $item);
            $item = strtoupper($item);
            $url_components1 = parse_url($url);
            parse_str($url_components1['query'], $params1);
            $part1 = $params1['gallery'];
            $isActive = ($item === $part1) ? 'active' : '';
            echo '<a href="?gallery=' . $item . '" class="gallery-option '.$isActive.'">' . $item . '</a>';
            echo '</div>';
        }
        echo '</div>';
        break;
    }    
       // echo '<a class="gallery-option" href="?gallery=' . $x . '">';
        //$x = strtoupper($x);
        //echo '' . $x . '</a>';
        //foreach ($picture as $y) {
            //echo '<img class="gallery-pic" src="' . $y . '" alt="">';
        //}
        
    //}
//}
//step 2 - jednotlive položky s obrázkami
//else {
    $url = $_SERVER['REQUEST_URI'];
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);

    if (isset($params['gallery'])) {
        $part = $params['gallery'];
        $x = 'gallery/'. $part;

        if ($url == '/4_rocnik/zadanie_4/gallery.php?gallery=' . $part) {
            $picture = glob($x . '/*');
            $x = str_replace('gallery/', '', $x);

            echo '<div class="option">';
            echo '<a class="gallery-option" href="?gallery=' . $x . '">';
            $x = strtoupper($x);
            echo '' . $x . '</a>';
            
            foreach ($picture as $y) {
                echo '<a href="'.$y.'"><img class="gallery-pic" src="'. $y .'" alt=""></a>';   
            }
            echo '<p class="black">počet obrázkov v galérií je '.countImage($picture).'</p>';
            echo '</div>';
        }
    }
//}


/* Prvá verzia kodu
$url_components = parse_url($url);  
parse_str($url_components['query'], $params);

$part = $params['gallery'];

if ($url == '/4_rocnik/zadanie_4/gallery.php?gallery='.$part) {
        $picture = glob($x.'/*');
        $x = str_replace('gallery/', '', $x);

        echo '<div class="option">';
        echo '<a href="?gallery=' . $x . '">';
        $x = strtoupper($x);
        echo '' . $x . '</a>';
        echo '</div>';   
    foreach ($picture as $y) {
            echo '<img src="' . $y . '" alt="">';
    }
}
*/
    ?>
</main>

<?php
include_once 'partials/footer.php';
?>