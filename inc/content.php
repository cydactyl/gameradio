<?php

/*
 * Copyright © 2013 SwedFTP <swedftp@swedftp.com>
 * This work is free. You can redistribute it and/or modify it under the
 * terms of the Do What The Fuck You Want To Public License, Version 2,
 * as published by Sam Hocevar. See the COPYING file for more details.
 */
$str = str_repeat("This is a test sentence. ", 10) . '<br /><br />';
$paragraph = str_repeat($str, 10);
echo $paragraph;
?>