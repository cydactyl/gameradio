<?php

/*
 * Copyright © 2013 SwedFTP <swedftp@swedftp.com>
 * This work is free. You can redistribute it and/or modify it under the
 * terms of the Do What The Fuck You Want To Public License, Version 2,
 * as published by Sam Hocevar. See the COPYING file for more details.
 */
?>
    <head>

        <title>SwedFTP [DOT] com</title>

        <?php include("functions/bgRotate.php");?>
        <?php include("functions/parsePlaylist.php");?>



        <style type="text/css">
            html{
                background: url('inc/images/<?php selectBg(); ?>') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>

        <link rel="stylesheet" href="inc/style.css" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
        <script src="inc/player.js" type="text/javascript"></script>


    </head>