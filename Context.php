<!doctype html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--<script src="script.js"></script>-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <title>MHA-TLOA || Story</title>
   <!-- <script src="app.js"></script>-->
</head>
<body>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0f387a; z-index: auto;">
        <!-- Navbar content -->

        <div class="collapse navbar-collapse" id="navbarNav" style=" z-index: auto;">
            <ul class="nav nav-tabs" style="margin-left: auto; margin-right: auto;">
              <li class="nav-item">
                <a class="nav-link" href="Accueil.html">Accueil</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link active" href="Context.php">Context</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Personnage.html">Personnage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="LogBook.html">LogBook</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About.html">&agrave; propos</a>
              </li>
            </ul>
          </div>
    </nav>
  <!-- <img src="Data/My_Hero_Academia_logo.png" alt="MHA" style="top: 0; width: 20%; height: 20%;  z-index: 10; >-->
  </header>
  <style>
	body{
	 /*background-image: url("Data/Background.jpg");*/
		background-color:black;
	}

	#Section_AllMight{
	background-image: url("Data/Background.jpg");
            color: white;
            background-size: cover;
            height: 720px;
	}
	#Section_AllHero{
	background-image: url("Data/Background.jpg");
            color: white;
            background-size: cover;
            height: 720px;
	}
	#Section_AllForOne{
	background-image: url("Data/Background.jpg");
            color: white;
            background-size: cover;
            height: 720px;
	}
  </style>
  <section id="Section_AllMight">
	<div id="AllMight">
	  <div class="TextBox" style =" position: relative; top: 200px; margin-left: 30%; margin-right:10%; z-index:1;" >
		<p style ="font-size: 22px; text-align :center;"> Dans un monde o&ugrave; 80 % de la population mondiale poss&egrave;de des super-pouvoirs, ici nomm&eacute;s "Alters"
		n'importe qui peut devenir un h&eacute;ros ou, s'il le souhaite, un criminel ... <br> Les "villains" ... <br> 
					 <a href="#Section_AllForOne">Next</a>
			</p>	
		</div>
	  <div class="TextBox" style ="position: relative; top: 500px; margin-left: -20%; margin-right:10%;">
			<p style ="font-size: 17px; text-align :center;"> - Toshinori Ya, Allias: All Might (clickable)</p>	
			</div>
	  	<div id="AllMight_icon">
			<img src="Data/AllMight_Icon.png" style="position: absolute; margin-top: -100px; left: 40px; width: 25%; height: 25	%;" onclick="replaceA()">
		</div>
	</div>
		<script>
			function replaceInverseA(){
				document.getElementById("AllMight_icon").innerHTML = '<img src="Data/AllMight_Icon.png" style="position: relative; margin-top: -100px; left: 40px; width: 25%; height: 25%;" onclick="replaceA()">' ;

			}
			function replaceA() {
				document.getElementById("AllMight_icon").innerHTML = '<img src ="Data/AllMight_Fist.png" style="position: relative; margin-top: 50px; left: 50px; width: 25%; height: 70%;" onclick="replaceInverseA()">' ;
			}

		</script>
	</section>
  <section id="Section_AllForOne">
	<div id="AllForOne">
		<!--<hr style = "height:0px; border-width:0; color:white; background-color:white">-->
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
			<img src="Data/All_for_One_A.png" style="position: relative; top: 0px; left:1150px; width: 15%; height: 10%;"  onclick="replaceO()">
			</a>
			<script>
				function replaceInverseO(){
					document.getElementById("AllForOne_icon").innerHTML = '<img src="Data/All_for_One_A.png" style="position: relative; top: 0px; left:1150px; width: 15%; height: 10%;"  onclick="replaceO()">' ;

				}
				function replaceO() {
				  document.getElementById("AllForOne_icon").innerHTML = '<img src ="Data/All_for_One_B.png" style="position: relative; top: 50px; left:1020px; width: 30%; height: 60%;" onclick="replaceInverseO()">' ;
				}

			</script>
		</div> 
	</div>
	</section>	
  <section id="Section_AllHero">
	<div id="AllHero">
		<!--<hr style = "height:0px; border-width:1; color:white; background-color:white">-->
		<div class="TextBox" style =" position: relative; top: 200px; margin-left: 20%; margin-right:20%; z-index:1;" >
			<p style ="font-size: 22px; text-align :center;"> 
				... Heureusement, la nouvelle g&eacute;n&eacute;ration est l&agrave; pour prendre la rel&egrave;ve...
				<br> <br> 
				<a onclick="afficher_perso()">Qui ? ... (click)</a>
			</p>	
			</div>
	  		<div id = "Denki">
			</div>
			<div id = "Mashirao">
			</div>
			<div id ="Nejire">
			</div>
			<div id = "Ochaco">
			</div>
			<div id = "Eijiro">
			</div>
			<div id="Tsuyu">
			</div> 
		<script>
			var perso;

			var Denki = '<img src="Data/Denki.png" style="position: absolute; margin-top: 200px; left: 0px; width: 15%; height: 17%;">';
			var Mashirao = '<img src="Data/Mashirao.png" style="position: absolute; margin-top: 200px; left: 190px; width: 12%; height:8 %;">';
			var Nejire = '<img src="Data/nejire_costume.png" style="position: absolute; margin-top: -100px; left: 80px; width: 13%; height: 16%;">';
			var Ochaco = '<img src="Data/ochaco.png" style="position: absolute; margin-top: -150px; left: 1200px; width: 26%; height: 24%;">';
			var Eijiro = '<img src="Data/eijiro.png" style="position: absolute; margin-top: 280px; left: 900px; width: 20%; height: 12%;">';
			var Tsuyu = '<img src="Data/Tsuyu2.png" style="position: absolute; margin-top: 150px; left: 1150px; width: 20%; height: 15%;">';
			var listePerso = [Denki,Mashirao,Nejire,Ochaco,Eijiro,Tsuyu];
			var listePersoNom = ["Denki","Mashirao","Nejire","Ochaco","Eijiro","Tsuyu"];
			/*var test = 1;
			console.log(listePerso[test] + " & " + listePersoNom[test]);
			document.getElementById(listePersoNom[test]).innerHTML = listePerso[test];*/
			var i = 0;
			function afficher_perso(){
				document.getElementById(listePersoNom[i]).innerHTML = listePerso[i];
				i++;
			}
			function afficher_perso_param(i){
				document.getElementById(listePersoNom[i]).innerHTML = listePerso[i];
				//i++;
			}
				
			function test(){
				//afficher_perso_param(2);
				setTimeout(afficher_perso_param(0),1000);
				setTimeout(afficher_perso_param(1),1000000);
				setTimeout(afficher_perso_param(2),2000000);
				setTimeout(afficher_perso_param(3),3000000);
				setTimeout(afficher_perso_param(4),4000000);
				setTimeout(afficher_perso_param(5),5000000);
			}

				

		</script>
	</div>
	</section>
</html>