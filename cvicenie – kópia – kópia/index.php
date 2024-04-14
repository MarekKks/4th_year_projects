<?php
$maturita = [
    [
    'color'=> '#696969',
    'text' => 'prva veta je takato',
    'url' =>'https://www.zilinak.sk/',
    'font-weight' => 200,
    'font-size' => 20,
],
[
    'color'=> '#6b8e23',
    'text' => 'Druha veta je takato',
    'url' => 'https://www.youtube.com/',
    'font-weight' => 600,
    'font-size' => 30,
],
[
    'color'=> '#afeeee',
    'text' => 'Tretia veta je takato',
    'url' => 'https://soaza.edupage.org/',
    'font-weight' => 800,
    'font-size' => 16,
],
[
    'color'=> '#ff4500',
    'text' => 'stvrta veta je takato',
    'url' => 'https://www.learn2code.sk/prihlasenie',
    'font-weight' => 200,
    'font-size' => 25,
],
[
    'color'=> '#ff4538',
    'text' => 'Piata veta je takato',
    'url' => 'https://www.sme.sk/',
    'font-weight' => 800,
    'font-size' => 18,
],
];

foreach ($maturita as $maturita) {
    echo "<a href='{$maturita['url']}' style='color:{$maturita['color']}; font-weight:{$maturita['font-weight']}; font-size:{$maturita['font-size']}px;'>{$maturita['text']}</a><br>";
}


?>