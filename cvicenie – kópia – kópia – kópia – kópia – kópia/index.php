
<?php
$oblecenie = [
    'kosela' => 20,
    'sako' => 50,
    'ponozky' => 10,
    'trenky' => 20,
    'tenisky' => 35,
];

$top_student = array_search(max($oblecenie),$oblecenie);

  echo max($oblecenie). ' '. $top_student;
  echo '<br>';
  echo array_sum($oblecenie);
