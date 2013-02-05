/*
 * Copyright © 2013 SwedFTP <swedftp@swedftp.com>
 * This work is free. You can redistribute it and/or modify it under the
 * terms of the Do What The Fuck You Want To Public License, Version 2,
 * as published by Sam Hocevar. See the COPYING file for more details.
 */
$(document).ready(function(){
    
    $("<audio></audio>").attr({
    'src' : 'inc/stations/games/gta3/K-Jah 103/80 - dance of the vampires.mp3',
    'autoplay' : 'true',
    'preload' : 'auto',
    'volume' : '1.0'}).appendTo('body');

    var stationDir;
    var songName;
    var audioObj = $('audio').get(0);
    var numberOfSongs = 15;
    var paused;
    var prevVol;
    var i = 1;
    

    
    audioObj.addEventListener('ended', function(){
        if(audioObj.src.indexOf('inc/mp3/' + numberOfSongs + '.mp3') > -1){
            audioObj.src = 'inc/mp3/1.mp3';
            i = 1;
        }else{
            audioObj.src = 'inc/mp3/' + ++i + '.mp3';
        }
        audioObj.play();
    }, false);

    $('#play').click(function(){
        if(paused){
            audioObj.play();
            paused = false;
        }else{
            audioObj.pause();
            paused = true;
        }
    });
    $('#prev').click(function(){
        if(audioObj.src.indexOf('inc/mp3/1.mp3') > -1){
            audioObj.src = 'inc/mp3/' + numberOfSongs + '.mp3';
            i = numberOfSongs;
        }else{
            audioObj.src = 'inc/mp3/' + --i + '.mp3';
        }
    });
    $('#next').click(function(){
        if(audioObj.src.indexOf('inc/mp3/' + numberOfSongs + '.mp3') > -1){
            audioObj.src = 'inc/mp3/1.mp3';
            i = 1;
        }else{
            audioObj.src = 'inc/mp3/' + ++i + '.mp3';
        }
    });
    $('#volDown').click(function(){
        audioObj.volume -= 0.10;
        audioObj.volume = Math.round(audioObj.volume*100)/100;
    });
    $('#mute').click(function(){
        if (audioObj.volume != 0){
            prevVol = audioObj.volume;
            audioObj.volume = 0;
        }else{
            audioObj.volume = prevVol;
            audioObj.play();
        }
    });
    $('#volUp').click(function(){
        audioObj.volume += 0.10;
    });
});