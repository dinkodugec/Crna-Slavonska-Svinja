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
			<h1 class="SectionTitle1">jQuery Flexslider</h1>
			<div id="mojFlexslider">
				<div class="flexslider">
				  <ul class="slides">
				    <li>
				      <img src="images/slika6.jpg" />
				    </li>
				    <li>
				      <img src="images/slika6.jpg" />
				    </li>
				    <li>
				      <img src="images/slika2.jpeg" />
				    </li>
				    <li>
				      <img src="images/slika1.jpg" />
				    </li>
				    <li>
				      <img src="images/njuška.jpg" />
				    </li>
				    <li>
				      <img src="images/slika6.jpg" />
				    </li>
				  </ul>
				</div>
			</div>
		</div>
	</div><!-- end #divContentSection2Wrap -->
	<div id="divContentSection3Wrap">
		<div id="divContentSection3">
			<h1 class="SectionTitle1">Proizvod </h1>
			<?php 
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ljeto2021";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				

				//Insert into  proizvod
				if(isset($_POST['spremi'])){
							$ime = $_POST['txt1'];
							$email = $_POST['txt2'];
							$proizvod = $_POST['txt3'];
							

							$sql = "INSERT INTO proizvod (ime_kupca,email_kupca,proizvod)
							VALUES ('$ime', '$email', '$proizvod')"; //moramo staviti jednostruke navodnike zbog SQL-a, sa strane PHP ne treba jer unutar duplih navodnika nam ispiše vrijednost varijable.
							if ($conn->query($sql) === TRUE) {
							  echo "New record created successfully";
							} else {
							  echo "Error: " . $sql . "<br>" . $conn->error;
							}
							$conn->close();
						}

						
				//Select polaznik
				$sql2 = "SELECT id_proizvod, ime_kupca, email_kupca, proizvod FROM proizvod WHERE id_proizvod = $idOdabraniProizvod";
				$result = $conn->query($sql2);
				while($row=$result->fetch_assoc()):
			 ?> 
			 	    <div class="gridCol3 <?php echo 'gridLastItem'; ?>">
				    <img src="https://via.placeholder.com/350">
				    <h2><?php echo $row['ime_kupca']; ?></h2>
				    <p><?php echo $row['proizvod']; ?></p>
				     <a href="vijest.php?proizvodid=<?php echo $row['id_proizvod']; ?>">Pročitajte više</a>
			        </div>
			        <?php 
			         endwhile
			         $conn->close();
			         ?>
			        <div style="clear: both;"></div>
		    
		    	<div id="divEditProizvod">
				<form id="obrazac1" method="post" action="">
					<p>
						<label for="txt1">Ime i prezime</label>
						<input id="txt1" name="txt1" type="text" value="<?php echo $proizvod['ime_kupca']; ?>" onfocus="if(this.value != '') this.value = ''">
					</p>
					<p>
						<label for="txt2">Email</label>
						<input id="txt2" name="txt2" type="text" value="<?php echo $proizvod['email_kupca']; ?>">
					</p>
					<p>
						<label for="txt3">Proizvod</label>
						<input id="txt3" name="txt3" type="text" value="<?php echo $proizvod['proizvod']; ?>">
					</p>
					<p><input type="submit" name="spremi" id="spremi" value="Spremi"><input type="reset" name="obrisi" id="obrisi" value="Obriši"></p>
				</form>
			</div>
		</div>
	</div><!-- end #divContentSection3Wrap -->

</body>
</html>
