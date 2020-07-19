<?php

$INP = $_SERVER['QUERY_STRING'];
$INPUT = preg_replace('/\s+/', '%20',$INP);
$PROTO = ("http://");
$HASH = hash('crc32',$INPUT,FALSE);
$TFILE = "$HASH.php";
$URL = ("https://d0t.pw");
$LN = ("$URL/$HASH");
$ST = preg_match('(^(http|https):\/\/)i',$INPUT);
$USERAGENT = $_SERVER['HTTP_USER_AGENT'];
$USERADDR = $_SERVER['REMOTE_ADDR'];
$USERatime = date("Y/m/d-H:i:s");


$NEWFILE = fopen("$TFILE", "w") or die("");

if  ( $ST != '1' ) {
fwrite($NEWFILE, "<?php
  header('Location: $PROTO$INPUT');
  exit();
 ?>
"); 
fclose($NEWFILE);
}

else {
fwrite($NEWFILE, "<?php
  header('Location: $INPUT');
  exit();
 ?>
");
fclose($NEWFILE);
}

  echo "
  ---------------------------
  | $LN |
  ---------------------------\n\n"; 
  exit ();
?>