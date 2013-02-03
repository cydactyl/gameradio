<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function parsePlaylist ($playlistFile){

    $lines = file($playlistFile);
    for($i = 0;$i<count($lines);$i++){
    echo $lines[$i] . $i . '<br />';
    }
    
}


?>
