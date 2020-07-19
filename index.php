<?php

$UA = $_SERVER['HTTP_USER_AGENT'];

$CHK_UA = preg_match('/curl/i', $UA, $match);

if ( $CHK_UA != 1 ) {
include 'web_ui.php';} 

elseif ( $CHK_UA = 1 ) {
include 'cli.php';} 

else {
echo "Request data not found";};

?>