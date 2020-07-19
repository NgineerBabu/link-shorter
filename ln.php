<html>
<head>
<title>copy your short link .....</title>
<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/fantasque-sans-mono" type="text/css"/>
<style>
   body {
   	font-family: 'FantasqueSansMonoRegular';
	font-weight: normal;
	font-style: normal;
   	color:#520303;
   	}
   a   {
   	font-family: 'FantasqueSansMonoRegular';
	font-weight: normal;
	font-style: normal;
   	color:#520303;
	}

</style>
</head>
<body>
<div style="line-height:300%;"><br></div>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><a href="/"><font size=+5>&laquo;&laquo;&laquo;=(Way back to Home)</font></a>
<div style='line-height:1000%'><br></div>
<center>
<?php
$INP =  $_POST["name"];
$INPUT = preg_replace('/\s+/', '%20',$INP);
$PROTO = ("http://");
$HASH = hash('crc32',$INPUT,FALSE);
$TFILE = "$HASH.php";
$URL = ("[Mention you URL at here");
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
?>
<p id="text2copy" onclick="setClipboard('<?php echo "$LN"; ?>')"> <font size=+3> <?php echo "--------------------------<br>|  $LN  |<br>--------------------------<br>"; ?> </font> </p>
<script type="text/JavaScript">
	function setClipboard(value) {
	document.getElementById("text2copy");
    var clipdtext = document.createElement("input");
    clipdtext.value = value;
    document.body.appendChild(clipdtext);
    clipdtext.select();
    document.execCommand("copy");
    document.body.removeChild(clipdtext);
    alert("Copied link " + clipdtext.value);
}
</script>
</center>
<div style="line-height:200%;"><br></div>
<center>
<font size=+4><div style="line-height:30%;">^<br>^<br>^<br>^<br>^<br>^<br><br></div>click on link to copy<br>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</font>
</center>
<div style="line-height:700%"><br></div>
<center> <font>Made in 2019 by ngineerbabu </font> </center>
</body>
</html>