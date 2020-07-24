<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>MHA|Lord of Alter</title>
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="app.js" src="protractor.js"></script>
</head>
<body>
  <header>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0f387a; z-index: auto;">
        <!-- Navbar content -->

        <div class="collapse navbar-collapse" id="navbarNav" style=" z-index: auto;">
            <!-- <ul class="nav nav-tabs"style=" z-index: auto;">

              <li class="nav-item ">
                <a class="nav-link active" href="#" style="color: White; margin-left: 500%;">Accueil <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"style="color: White; margin-left: 350%;">Personnage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: White; margin-left: 500%;">Download</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="color: White; margin-left: 400%;">Update</a>
              </li>
            </ul> -->
            <ul class="nav nav-tabs" style="margin-left: auto; margin-right: auto;">
              <li class="nav-item">
                <a class="nav-link " href="Accueil.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Personnages.php">Personnage</a>
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
    <div ng-app="">
  </header>
 
<p>Input something in the input box:</p>
<p>Name : <input type="text" ng-model="name" placeholder="Enter name here"></p>
<h1>Hello {{name}}</h1>

</div>
</body>
</html>