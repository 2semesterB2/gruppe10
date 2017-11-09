<?php 
//<!doctype html>
//<html>
//<head>
//<meta charset="UTF-8">
//<title>Untitled Document</title>
//</head>

$filnavn="Apperat.jpg";
	
	$myImage = imagecreatefromjpeg( "preload-images/".$filnavn );
	$myLogo = imagecreatefrompng( "images/bauhauslogo.png" );
	
	$destWidth = imagesx($myImage);
	$destHeight = imagesy($myImage);
	$srcWidth = imagesx($myLogo);
	$srcHeight = imagesy($myLogo);
	
	$destX = ($destWidth - $srcWidth);
	$destY = ($destHeight - $srcHeight);
	
	
	imagecopy($myImage, $myLogo, $destX, $destY, 0, 0, $srcWidth, $srcHeight);
	
	
//	header("Content-type: image/jpeg");
	imagejpeg($myImage, "uploads/".$filnavn);
	imagedestroy($myImage);
	imagedestroy($myLogo);
	
?>

<body>
</body>
</html>