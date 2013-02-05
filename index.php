<?php

/*
 * Copyright © 2013 SwedFTP <swedftp@swedftp.com>
 * This work is free. You can redistribute it and/or modify it under the
 * terms of the Do What The Fuck You Want To Public License, Version 2,
 * as published by Sam Hocevar. See the COPYING file for more details.
 */
?>
<!DOCTYPE html>
<html>
    
    <?php include("inc/head.php");?>
    
    <body>
        
        <div class="container">
            
            <div class="playerBox">
                
                <div class="buttons">
                    
                    <button class="controls" id="play">Play/Pause</button>
                    <button class="controls" id="prev" ><<</button>
                    <button class="controls" id="next" >>></button>
                    <button class="controls" id="volDown" >Vol- </button>
                    <button class="controls" id="mute" >Mute</button>
                    <button class="controls" id="volUp" >Vol+ </button>
                
                </div>
                
            </div>
            
            <div class="header">

                <?php include("inc/header.php");?>

                <div class="nav">
                    <button class="buttons">Press me</button>
                    <button class="buttons">Press me</button>
                    <button class="buttons">Press me</button>
                    <button class="buttons">Press me</button>
                    <button class="buttons">Press me</button>

                </div>

            </div>
            
            <div class="sidebarLeft">
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nulla dui, adipiscing non malesuada sed, ultrices eget leo. Mauris massa nisi, pellentesque sit amet laoreet dapibus, varius non sapien. Aenean vitae enim nisl. Integer id odio a purus aliquam fermentum nec id nibh. Aliquam congue, arcu vel hendrerit suscipit, magna orci convallis lacus, non porta felis ante sed risus. Proin eget quam sit amet sem congue euismod. In hac habitasse platea dictumst. Donec vitae odio libero.
                </p>
                
            </div>

            <div class="content">
                <?php
                include 'inc/content.php';
                ?>
            </div>
            
            <div class="sidebarRight">
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nulla dui, adipiscing non malesuada sed, ultrices eget leo. Mauris massa nisi, pellentesque sit amet laoreet dapibus, varius non sapien. Aenean vitae enim nisl. Integer id odio a purus aliquam fermentum nec id nibh. Aliquam congue, arcu vel hendrerit suscipit, magna orci convallis lacus, non porta felis ante sed risus. Proin eget quam sit amet sem congue euismod. In hac habitasse platea dictumst. Donec vitae odio libero.
                </p>
                
            </div>

            <div class="footer">

                            <?php include("inc/footer.php");?>

            </div>
        </div>


    </body>
	
</html>
