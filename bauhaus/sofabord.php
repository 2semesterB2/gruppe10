<!DOCTYPE html>
<html lang="da">
  <head>  
  	<!-- -->
   	<meta name="Description" content="Få inspiration til dine gør det selv projekter. Se film om alle mulige husopgaver både inde og ude.">
   	<meta name="Keywords" content="DIY, gør det selv, bauhaus, ideer, inspiration">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bauhaus DIY - sofabord </title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

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
		<section class="rectangle2">
			
		</section> 
		<section class="col-xs-3">
			<img class="logo" src="images/Bauhaus-logo.svg">
		</section>
		
		

  <!-- start på velkommenstekst --> 
		<section class="container">
  			<h1 class="velkommenoverskrift">Sofabord af æblekasser</h1>
			<p class="velkommensbrdtekst">Brug af æblekasser i hjemmets indretning, er igennem de seneste år blevet mere og mere populært, da det giver et hjem sjæl og liv, når man tilsætter de rustikke æblekasser.
Anvendelsesmulighederne er mange, og vi giver dig her, lidt inspiration til hvordan du nemt kan omdanne fire æblekasser til et sofabord, se videoen her på siden.</p>
		  </section> <!-- container slut -->
  	
  
  <!--  start på banner -->
  <img class="banner" src="images/sofabordbanner.png">
  
  
  <!-- start på colonor og video -->
  
  <section class="container">
  	<section class="row">
  		<div class="col-lg-6">
  			<h1 class="velkommenoverskrift">Fremgangsmåde for Æblekasse træbord</h1>
  			<p class="fremgangs">
  			Stil kasserne på højkant i en firkant, sørg for at den åbne side vender ud i rummet. Skru derefter kasserne sammen, som vist i videoen.<br>

<br>Stil kasserne oven på finerpladen og tegn herefter op så størrelsen er markeret på pladen. Fjern efterfølgende kasserne, og skær finerpladen til med stiksaven. Vend dernæst kasserne med bunden i vejret, og skru finerpladen fast på kasserne og monter de fire hjul – ét hjul i hvert hjørne.<br>
Hvis man ikke er helt så meget til det rustikke look som æblekasserne har, kan de eventuelt males eller bejdses, alt efter hvad du er til. Man kan også nøjedes med blot at male en enkelt eller to af dem, hvis man vil bryde sammensætningen en smule.<br>

<br>Herefter er der ikke meget mere at gøre, end at sætte sig ned med en kop kaffe og nyde det fine resultat fra sofaen.</p>
  		</div>
  		
  		<div class="col-lg-6">
  			<iframe class="video" src="https://www.youtube.com/embed/OhV9bq21GQQ" frameborder="0" allowfullscreen></iframe>
  		</div>
  		
  	</section> <!-- row slut -->
  </section> <!-- container slut -->
  
  
  <!-- start på slideshow -->
  
		<?php include 'include/slideshow.php';?>
  
  
    <!-- start på sort og rød linje --> 		
 		<section class="rectangle1">
			<div class="icon">
				<img class="iconspos" src="images/sporsmalstegn.jpg">
			</div>
		
			<div class="delttekst2">
				<h1>Vidste du at</h1>
				<p>Lige nu er DIY et stort hit inden for boligindretning. DIY er en forkortelse for "do it yourself "eller "gør det selv" på dansk. <br> Trenden betragtes som en modreaktion på nutidens overforbrug.</p>
			</div>
		</section> <!--rectangle1-->
	
		<section class="rectangle2">
			
		</section> 

				
  <!-- start på upload 
	
		<div class="row">
			<form action="/action_page.php">
  				<input type="file" name="pic" accept="image/*">
 				<input type="submit">
			</form>
		</div>
	 -->
	 
	<!-- UPLOAD FORM. KOM DEN HER HEN HVOR DEN SKAL VÆRE PÅ SIDEN -->
	<section class="container">
	<section class="row">
		<section class="col-xs-6" id="uploade">
		<form action="uploads.php" method="post" enctype="multipart/form-data">
			<h2 class="uplodetext">Upload et billede:</h2>
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Upload" name="submit">
		</form>
	</section>
	</section></section>
	<!-- SLUT PÅ UPLOAD FORM -->
  
  <!-- start på footer --> 
 		<?php include 'include/footer.php';?>
 


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
	
  </body>
</html>