<!doctype html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
  <title>MHA|Lord of Alter</title>
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="app.js"></script>
</head>
<body>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0f387a; z-index: auto;">
        <!-- Navbar content -->

        <div class="collapse navbar-collapse" id="navbarNav" style=" z-index: auto;">
            <ul class="nav nav-tabs" style="margin-left: auto; margin-right: auto;">
              <li class="nav-item">
                <a class="nav-link active" href="Accueil.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Personnange.php">Personnage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Update</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Download</a>
              </li>
            </ul>
          </div>
    </nav>
  <!-- <img src="Data/My_Hero_Academia_logo.png" alt="MHA" style="top: 0; width: 20%; height: 20%;  z-index: 10; >-->
  </header>

  <section id="Section_AllMight">
	<div id="AllMight">
	  <div class="TextBox" style =" position: relative; top: 200px; margin-left: 30%; margin-right:10%; z-index:1;" >
		<p style ="font-size: 22px; text-align :center;"> Dans un monde o&ugrave; 80 % de la population mondiale poss&egrave;de des super-pouvoirs, ici nomm&eacute;s "Alters"
		n'importe qui peut devenir un h&eacute;ros ou, s'il le souhaite, un criminel ... <br> Les "villains" ... <br> 
					 <a href="#Section_AllForOne">Next</a>
			</p>	
		</div>
	  <div class="TextBox" style ="position: relative; top: 500px; margin-left: -10%; margin-right:10%;">
			<p style ="font-size: 17px; text-align :center;"> - Toshinori Ya, Allias: All Might</p>	
			</div>
	  	<div id="AllMight_icon">
			<img src="Data/All_Might.png" style="position: relative; top: -80px; left: 40px; width: 25%; height: 25	%;">
		</div>
	</div>
	</section>
  <section id="Section_AllForOne">
	<div id="AllForOne">
		<hr style = "height:0px; border-width:1; color:white; background-color:white">

		<div class="TextBox" style =" position: relative; top: 200px; margin-left: 10%; margin-right:30%; z-index:1;" >
				<p style ="font-size: 22px; text-align :center;">Les villains, sont des personnes qui utilisent leurs Alter pour commettre des crimes, 
				provoquer des destructions et potentiellement mettre des vies innocentes en jeu.
				<br> <br>
				Il existe de nombreux types de m&eacute;chants dans le monde...
				<br> 
					<a href="#Section_AllHero">Next</a>
				</p>	

			</div>	
		  <div class="TextBox" style ="position: relative; top: 450px; margin-left: 30%; margin-right:10%;">
			<p style ="font-size: 17px; text-align :center;"> - Shigaraki, Allias: All For One (Click on him)</p>	
	   </div>
		<div id="AllForOne_icon">
			<a>
			<img src="Data/All_for_One_A.png" style="position: relative; top: 0px; left:1150px; width: 15%; height: 10%;"  onclick="replace()">
			</a>
			<script>
				function replaceInverse(){
					document.getElementById("AllForOne_icon").innerHTML = '<img src="Data/All_for_One_A.png" style="position: relative; top: 0px; left:1150px; width: 15%; height: 10%;"  onclick="replace()">' ;

				}
				function replace() {
				  document.getElementById("AllForOne_icon").innerHTML = '<img src ="Data/All_for_One_B.png" style="position: relative; top: 50px; left:1020px; width: 30%; height: 60%;" onclick="replaceInverse()">' ;
				}

			</script>
		</div> 
	</div>
	</section>	
  <section id="Section_AllHero">
	<div id="AllHero">
		<hr style = "height:0px; border-width:1; color:white; background-color:white">
		<div class="TextBox" style =" position: relative; top: 200px; margin-left: 20%; margin-right:20%; z-index:1;" >
			<p style ="font-size: 22px; text-align :center;"> 
				... Heureusement, la nouvelle g&eacute;n&eacute;ration est l&agrave; pour prendre la rel&egrave;ve...
				<br> <br> 
				<a href="#Section_AllForOne" >Qui ? ... (click)</a>
			</p>	
		</div>
	  	<!--<div id = "Denki">
			<img src="Data/Denki.png" style="position: absolute; margin-top: 200px; left: 0px; width: 15%; height: 17%;">
		</div
		<div id = "Mashirao">
			<img src="Data/Mashirao.png" style="position: absolute; margin-top: 200px; left: 190px; width: 12%; height:8 %;">
		</div>
		<div id ="Nejire">
			<img src="Data/nejire_costume.png" style="position: absolute; margin-top: -720px; left: 60px; width: 13%; height: 16%;">
		</div>
		<div id = "Ochaco">
			<img src="Data/ochaco.png" style="position: absolute; margin-top: -800px; left: 1200px; width: 26%; height: 24%;">
		</div>
		<div id = "Eijiro">
			<img src="Data/eijiro.png" style="position: absolute; margin-top: -300px; left: 1000px; width: 20%; height: 12%;">
		</div>
		<div id="Tsuyu">
			<img src="Data/Tsuyu2.png" style="position: absolute; margin-top: -500px; left: 1200px; width: 20%; height: 15%;">
		</div> -->
		<script>
			var perso;

			var Denki = '<img src="Data/Denki.png" style="position: absolute; margin-top: 200px; left: 0px; width: 15%; height: 17%;">';
			var Mashirao = '<img src="Data/Mashirao.png" style="position: absolute; margin-top: 200px; left: 190px; width: 12%; height:8 %;">';
			var Nejire = '<img src="Data/nejire_costume.png" style="position: absolute; margin-top: -720px; left: 60px; width: 13%; height: 16%;">';
			var Ochaco = '<img src="Data/ochaco.png" style="position: absolute; margin-top: -800px; left: 1200px; width: 26%; height: 24%;">';
			var Eijiro = '<img src="Data/eijiro.png" style="position: absolute; margin-top: -300px; left: 1000px; width: 20%; height: 12%;">';
			var Tsuyu = '<img src="Data/Tsuyu2.png" style="position: absolute; margin-top: -500px; left: 1200px; width: 20%; height: 15%;">';
			var listePerso = perso.push(Denki);
			var listePerso = perso.push(Mashirao);
			var listePerso = perso.push(Nejire);
			var listePerso = perso.push(Ochaco);
			var listePerso = perso.push(Eijiro);
			var listePerso = perso.push(Tsuyu);
			var listePersoNom = ["Denki","Mashirao","Nejire","Ochaco","Eijiro","Tsuyu"];
			console.log(listePersoNom[0]);

			for(int 0; i<6;i++){
				document.getElementById(listePersoNom[i]).innerHTML = listePerso[i];
				//sleep(1000);
			}

		</script>
	</div>
	</section>
	
	



</html>