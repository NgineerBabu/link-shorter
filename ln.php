<!-- This script is released under MIT License -->
<html>
<body>
<br><br><br><br><br>
<h1 align=center>
Welcome URL site</h1>
<br><br><br>
<p align=center>
<?php
$INP =  $_POST["name"];
$INPUT = preg_replace('/\s+/', '%20',$INP);
$PROTO = ("http://");
$HASH = hash('crc32',$INPUT,FALSE);

//Mention .htaccess file path so that script can have access to update new entries
$TFILE = './.htaccess';

//Mention domain name within the quotes.
$URL = ("http://example.org");

$VAL = "Redirect 301 /url/$HASH  $PROTO$INPUT";
$NEWU = "Redirect 301 /url/$HASH  $INPUT";
$ST = preg_match('(^(http|https):\/\/)i',$INPUT);
//if ( $ST == "$INPUT" ) {
if ( $ST != '1' ) {
file_put_contents("$TFILE", "$VAL \n", FILE_APPEND);
}
 else {
file_put_contents("$TFILE", "$NEWU \n", FILE_APPEND);
}
echo ("This is the link <font size=+2> $URL/$HASH </font>")
?>
</p>
<br><br><br><br>
<p align=center> <font size=-2>Designed by @ngineerbabu</p>
</body>
</html>
