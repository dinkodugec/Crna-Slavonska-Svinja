<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Crna Slavonska Svinja</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="js/flexslider/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="js/flexslider/jquery.flexslider.js"></script>

</head>
 
<body>

	<?php 
     if(isset($_GET['spremi'])){
	      echo '<pre>';
	        print_r($_GET);
	      echo '</pre>';
	   $ime = $_GET['txt1'];
	   $email = $_GET['txt2'];
   	   $smjer = $_GET['smjer'];
	   $spol = $_GET['spol'];
	   if(isset($_GET['hobi1'])) $hobi1 = $_GET['hobi1'];
	   if(isset($_GET['hobi2'])) $hobi2 = $_GET['hobi2'];
	   if(isset($_GET['hobi3'])) $hobi3 = $_GET['hobi3'];
	   $opis = $_GET['opis'];
     }
?>
	<script type="text/javascript">
		$( document ).ready(function() {
		   $('.flexslider').flexslider({
			    animation: "slide",
			    animationLoop: false,
			    itemWidth: 300,
			    itemMargin: 5
			  });
		});
	</script>
   <div id="divMainMenuWrap">
		<div id="divMainMenu">
			<div id="divMainMenuCol1">
				<h2>Fajerica</h2>
			</div>
			<div id="divMainMenuCol2">
				<ul class="mainMenu1">
					<li><a href="#">Naslovna</a></li>
					<li><a href="#">Usluge</a></li>
					<li>
						<a href="#">Proizvodi</a>
						<ul>
							<li><a href="#">Proizvod 1</a></li>
							<li><a href="#">Proizvod 2</a></li>
							<li><a href="#">Proizvod 3</a></li>
							<li><a href="#">Proizvod 4</a></li>
						</ul>
					</li>
					<li><a href="#">Partneri</a></li>
					<li><a href="#">O nama</a></li>
					<li><a href="#">Kontakt</a></li>
				</ul>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div><!-- end #divMainMenuWrap -->
	<div id="divHeaderWrap">
		<div id="divHeader">
			<h1>Fajferica - Crno Zlato Slavonije</h1>
			<p>Nekada davno u Slavoniji... i danas!!!</p>
			<div class="divHeaderButtons">
				<!-- <a href="#">Pročitajte više</a> -->
				<a href="nasiproizvodi.html">Naručite odmah</a>
			</div>
		</div>
	</div><!-- end #divHeaderWrap -->
	<div id="divContentSection1Wrap">
		<div id="divContentSection1">
			<ul class="listBoxStyle1">
				<li class="gridCol3">
					<h2>Povijest astanka Crne Slavonske Svinje</h2>
					<a href="#">Više</a>
				</li>
				<li class="gridCol3 listBoxStyle1Featured">
					<h2>Način uzgoja i prehrana Crne Slavonske Svinje</h2>
					<a href="#">Više</a>
				</li>
				<li class="gridCol3 gridLastItem">
					<h2>Budućnost uzgoja u ekstenzivnom stočarstvu </h2>
					<a href="#">Više</a>
				</li>
			</ul>
			<div style="clear: both;"></div>
		</div>
	</div><!-- end #divContentSection1Wrap -->
	<div id="divContentSectionFlex">
		<div id="divContentFlex">
			<h1 class="SectionTitle1"></h1>
			<div id="mojFlexslider">
				<div class="flexslider">
				  <ul class="slides">
				    <li>
				      <img src="images/bundeve.jpg" />
				    </li>
				    <li>
				      <img src="images/bundeve2.jpg" />
				    </li>
				    <li>
				      <img src="images/stol.jpeg" />
				    </li>
				    <li>
				      <img src="images/kobasica.jpg" />
				    </li>
				    <li>
				      <img src="images/susenje.jpg" />
				    </li>
				    <li>
				      <img src="images/slika6.jpg" />
				    </li>
				  </ul>
				</div>
			</div>
		</div>
	</div><!-- end #divContentSection2Wrap -->
	<div id="divContentSunkaWrap">
		<div id="divBoxSunka1" class="divSunkaContent1">
			
		</div>
		<div id="divBoxSunka2" class="divSunkaContent2">
			<h3>Kupujmo domaće</h3>
		</div>
		 <div style="clear: both;"></div>
	</div><!-- end #divContentSunkaWrap -->

	<div id="divContentVijestWrap">
		<div class="divBoxVijest">
   	       <p>ovo je prvo box</p>
   	    </div>
   	     	
   	     <div class="divBoxVijest">
   	    	 <p>ovo je drugi box</p>
   	  	 </div>
   	  	
   	  	 <div class="divBoxVijest lastItem">
   	  	    <p>ovo je treći box</p>
   	     </div>
   	  	     <div style="clear: both;"></div>
	</div><!-- end #divContentVijestWrap -->

</body>
</html>
