<!DOCTYPE html>
<html lang="da">
  <head>  
  	<!-- -->
   	<meta name="Description" content="Få inspiration til dine gør det selv projekter. Se film om alle mulige husopgaver både inde og ude.">
   	<meta name="Keywords" content="DIY, gør det selv, bauhaus, ideer, inspiration">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bauhaus DIY - hjem</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet">
    <script src="js/scripts.js"></script>


    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  
  
  <body>
  
    <!-- start på velkommenstekst --> 
		<section class="container">
  			<h1 class="velkommenoverskrift">Uploads</h1>
			
		  </section> <!-- container slut -->
  
  <!-- PHP script explained:

$target_dir = "uploads/" - specifies the directory where the file is going to be placed
$target_file specifies the path of the file to be uploaded
$uploadOk=1 is not used yet (will be used later)
$imageFileType holds the file extension of the file
Next, check if the image file is an actual image or a fake image -->

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

		// koden fra watermark her
		$filnavn=basename( $_FILES["fileToUpload"]["name"]);
		echo $filnavn;
		$myImage = imagecreatefromjpeg( "uploads/".$filnavn );
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
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
	
		<section class="rectangle2">
			
		</section> 		
  
  <!-- start på footer --> 
 		<?php include 'include/footer.php';?>
 

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
	
	
	
  </body>
</html>	