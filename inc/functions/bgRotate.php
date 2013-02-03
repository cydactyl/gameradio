<?php
    function selectBg() {
    $filedir = scandir('inc/images/');
    $images = array_slice($filedir, 2, count($filedir));
    $i = rand(0, count($images)-1); // generate random number size of the array
    $selectedBg = "$images[$i]"; // set variable equal to which random filename was chosen
    echo $selectedBg;
    }
?>
