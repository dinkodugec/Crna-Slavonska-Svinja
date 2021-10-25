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
				 <!-- <img src="images/crnasvinja1.jpg" /> -->
			</div>
			<div id="divMainMenuCol2">
				<ul class="mainMenu1">
					<li><a href="#">Naslovna</a></li>
					<li><a href="http://fajferica.hr/wp-content/uploads/2019/10/Pristupnica.pdf">POSTANITE ČLAN UDRUGE</a></li>
					<li>
						<a href="#">DOKUMENTI</a>
						<ul>
							<li><a href="http://fajferica.hr/wp-content/uploads/2019/11/STATUT-Fajferica-10-05-2019.pdf">STATUT UDRUGE</a></li>
							<li><a href="http://fajferica.hr/wp-content/uploads/2019/11/Uzgojni_program.pdf">UZGOJNI PROGRAM CRNE SLAVONSKE SVINJE </a></li>
							<li><a href="http://fajferica.hr/wp-content/uploads/2019/09/Lukic_i_sur_Prirucnik_uzgoj_crne_svinje_web.pdf">PRIRUČNIK ZA UZGAJIVAČE I STUDENTE</a></li>
							<li><a href="http://fajferica.hr/wp-content/uploads/2019/11/Rje%C5%A1enje_MPS_2019.pdf">RJEŠENJE MINISTARSTVA POLJOPRIVREDE</a></li>
						</ul>
					</li>
					<li><a href="http://fajferica.hr/wp-content/uploads/2016/09/Imenik_clanova_09_2016.pdf">ČLANOVI</a></li>
					<li><a href="oudruzi.html">O Udruzi</a></li>
					<!-- <li><a href="#">Kontakt</a></li> -->
				</ul>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div><!-- end #divMainMenuWrap -->
	<div id="divHeaderWrap">
		<div id="divHeader">
			<h1>Kad su stari svinje žirovali</h1>
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
					<h2>Povijest Nastanka Crne Slavonske Svinje</h2>
					<a href="https://www.agroportal.hr/svinjogojstvo/19899">Više</a>
				</li>
				<li class="gridCol3 listBoxStyle1Featured">
					<h2>Način uzgoja i prehrana Crne Slavonske Svinje</h2>
					<a href="file:///C:/Users/pc/AppData/Local/Temp/2010_4_Crna_slavonska_svinja-2.pdf">Više</a>
				</li>
				<li class="gridCol3 gridLastItem">
					<h2>MESO CRNE SLAVONSKE SVINJE </h2>
					<a href="https://poljoprivreda.gov.hr/UserDocsImages/dokumenti/hrana/proizvodi_u_postupku_zastite-zoi-zozp-zts/Specifikacija_meso_crne_slavonske_svinje_2019.pdf">Više</a>
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
				      <img src="images/stol.jpg" />
				    </li>
				    <li>
				      <img src="images/kobasica.jpg" />
				    </li>
				    <li>
				      <img src="images/susenje.jpg" />
				    </li>
				    <!-- <li>
				      <img src="images/bsvinje8.jpg" />
				    </li> -->
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
   	       <div class="divVijestButtons">
   	       	<a href="nasiproizvodi.html">Pročitajte</a>
			<h6>Udruga izdala "Priručnik za uzgajivače crne slavonske svinje"</h6>	
		  </div>
   	     </div> 
   	     	
   	     <div class="divBoxVijest">
   	    	 <div class="divVijestButtons">
   	    	 	<a href="nasiproizvodi.html">Pročitajte</a>
		         <h6>Zaštita izvornosti mesa Crne Slavonske Svinje</h6>
		     </div>
   	  	 </div>
   	  	
   	  	 <div class="divBoxVijest lastItem">
   	  	    <div class="divVijestButtons">
				 <a href="nasiproizvodi.html">Pročitajte</a>
            	 <div class="divNaslov">
                      <h6>Održan prvi "Fajferica Gastro Show"</h6>

				 	</div>
			</div>
   	     </div>
   	  	     <div style="clear: both;"></div>
   	   </div>
	</div><!-- end #divContentVijestWrap -->

	<div id="divFooterWrap">
		<div id="divFooter">
			<div class="gridCol4">
				<h3>Kontakt</h3>
				<ul>
					<li>Predsjednik</li>
					<li>Dominik Knežević</li>
					<li>Viljevo</li>
					<li>099 687 09 20</li>
					<li>fajferica@fajferica.hr</li>
					
				</ul>
			</div>
			<div class="gridCol4">
				<h3>Sjedište Udruge</h3>
				<ul>
					<li>Vladimira Nazora 1</li>
					<li>31400 Đakovo</li>
					<li>tel: +385 (0) 31 815 019</li>
					<li>fax: +385 (0) 31 815 024</li>
					<li>OIB:26009987828</li>
					
				</ul>
			</div>
			<div class="gridCol4">
				<h3>Važne Povezice</h3>
				<ul class="footerLinks">
					<li><a href="#">Hrvatska agencija za poljoprivredu i hranu</a></li>
					<li><a href="#">Ministarstvo poljoprivrede1</a></li>
					<li><a href="#">Program Ruralnog Razvoja</a></li>
					<li><a href="#">Fakultet agrobitehničkih znanosti Osijek</a></li>
					<!-- <li><a href="#">Stavka podnožja 1</a></li>
					<li><a href="#">Stavka podnožja 1</a></li> -->
				</ul>
			</div>
			<div class="gridCol4 gridLastItem">
				<h3></h3>
				<ul class="footerGallery">
					<!-- <li class="gridCol3"><img src="https://via.placeholder.com/150"></li>
					<li class="gridCol3"><img src="https://via.placeholder.com/150"></li>
					<li class="gridCol3 gridLastItem"><img src="https://via.placeholder.com/150"></li>
					<li class="gridCol3"><img src="https://via.placeholder.com/150"></li> -->
					<!-- <li class="gridCol3"><img src="images/slika2.jpeg"></li> -->
					<!-- <li class="gridCol3 gridLastItem"><img src="https://via.placeholder.com/150"></li>
					<li class="gridCol3"><img src="https://via.placeholder.com/150"></li>
					<li class="gridCol3"><img src="https://via.placeholder.com/150"></li>--><!-- 
					<li class="gridCol3 gridLastItem"><h4>Dinko Dugeč, by Edunova<h4> --></li> 
				</ul>
			</div>
			<div style="clear: both;"></div>
		</div>
		<div><h4>Dinko Dugec, by Edunova</h4></div>
	</div><!-- end #divFooterWrap -->
     
</body>
</html>
