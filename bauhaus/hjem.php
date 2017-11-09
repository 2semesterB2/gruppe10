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
	
		<section class="rectangle2">
			
		</section> 
		<section class="col-xs-3">
			<img class="logo" src="images/Bauhaus-logo.svg">
		</section>

		
  
  <!-- start på velkommenstekst --> 
		<section class="container">
  			<h1 class="velkommenoverskrift">Inspirations guides</h1>
			<p class="velkommensbrdtekst">Denne side er udarbejdet og eget af Bauhaus og er skabt til, at give dig en masse inspiration og skønne idéer til dit DIY projekt. <br><br> Du kan finde idéer udarbejdet af Bauhaus men også kundernes egne delte idéer. Du kan finde alt fra påsætning af døre, til en opskrift på dit helt eget sofabord lavet ud af en kabeltrommel!</p>
		  </section> <!-- container slut -->
  
  
   <!-- start på banner -->
  		<!-- hjælp fra https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_collapsible_accordion&stacked=h-->
  		<section class="container" id="projekter">
  			
 				          
 				 <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					<img class="banner" src="images/bordbanner.png">
     			 </a>
     			 
      			<div id="collapse1" class="panel-collapse collapse">
      			 		<div class="panel-body">
      			 		<a href="sofabord.php">Æblekassebord </a> <br> 
      			 		Plankebord <br> 
      			 		Dørbord <br> 
      			 		Bord af brædder</div>
      				</div>
      				
      			
      			 <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
					<img class="banner" src="images/stolbanner.png">
     			 </a>
     			 
      			<div id="collapse2" class="panel-collapse collapse">
      			 		<div class="panel-body">Lorem ipsum dolor sit amet, consectet</div>
      				</div>
      				
      			
      			 <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
					<img class="banner" src="images/sofabanner.png">
     			 </a>
     			 
      			<div id="collapse3" class="panel-collapse collapse">
      			 		<div class="panel-body">Lorem ipsum dolor sit amet, consectet</div>
      				</div>   

				      			
				  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
					<img class="banner" src="images/opbevaringbanner.png">
     			 </a>
     			 
      			<div id="collapse4" class="panel-collapse collapse">
      			 		<div class="panel-body">Lorem ipsum dolor sit amet, consectet</div>
      				</div>
      				
  		</section> <!-- slut på container -->

 
  		
 
  <!-- start på sort og rød linje --> 		
 		<section class="rectangle1">
			<div class="icon">
				<img class="iconspos" src="images/sporsmalstegn.jpg">
			</div>
		
			<div class="delttekst2">
				<h1>Vidste du at</h1>
				<p>BAUHAUS har eksisteret på det danske marked siden 1988,<br> og i dag har 17 varehuse i Danmark og over 250 varehuse i Europa?</p>
			</div>
		</section> <!--rectangle1-->
	
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