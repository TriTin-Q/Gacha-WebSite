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
	<!-- Initialize a new AngularJS app and associate it with a module named "instantSearch"-->
	<body ng-app="instantSearch" ng-controller="InstantSearchController">

		<div class="bar">
			<!-- Create a binding between the searchString model and the text field -->
			<input type="text" ng-model="searchString" placeholder="Enter your search terms" />
		</div>

		<ul>
			<!-- Render a li element for every entry in the items array. Notice
				 the custom search filter "searchFor". It takes the value of the
				 searchString model as an argument.
			 -->
			<li ng-repeat="i in items | searchFor:searchString">
				<a href="{{i.url}}"><img ng-src="{{i.url}}"width="100" height="100"/></a>
				<p>{{i.Name}} {{i.Alter}}</p>
			</li>
		</ul>

		<!-- Include AngularJS from Google's CDN -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
		<script src="script.js"></script>

		<script>
		// Define a new module for our app
var app = angular.module("instantSearch", []);

// Create the instant search filter

app.filter('searchFor', function(){

	// All filters must return a function. The first parameter
	// is the data that is to be filtered, and the second is an
	// argument that may be passed with a colon (searchFor:searchString)

	return function(arr, searchString){

		if(!searchString){
			return arr;
		}

		var result = [];

		searchString = searchString.toLowerCase();

		// Using the forEach helper method to loop through the array
		angular.forEach(arr, function(item){

			if(item.records.Name.toLowerCase().indexOf(searchString) !== -1 || item.Alter.toLowerCase().indexOf(searchString) !==-1){
				result.push(item);
			}

		});

		return result;
	};

});

// The controller

function InstantSearchController($scope){

	// The data model. These items would normally be requested via AJAX,
	// but are hardcoded here for simplicity. See the next example for
	// tips on using AJAX.

	$scope.items = [	
			{
			  "url": "Data/Personnages/Deku_icon.png",
			  "Name": "Izuku Midoriya",
			  "Alter": "One For All",
			  "Sexe": "Homme"
			},
			{
			  "url": "Data/Personnages/Bakugo_icon.png",
			  "Name": "Katsuki Bakugo",
			  "Alter": "Explosion",
			  "Sexe": "Homme"
			},
			{
			  "url": "Data/Personnages/Tsuyu_icon.png",
			  "Name": "Asui Tsuyu",
			  "Alter": "Froggy",
			  "Sexe": "Femme"
			},
			{
			  "url": "Data/Personnages/All_Might_icon.png",
			  "Name": "Toshinori Yagi",
			  "Alter": "One For All",
			  "Sexe": "Homme"
			},
			{
			  "url": "Data/Personnages/Ochaco_icon.png",
			  "Name": "Ochaco uraraka",
			  "Alter": "Gravity",
			  "Sexe": "Femme"
			},
			{
			  "url": "Data/Personnages/Momo_icon.png",
			  "Name": "Momo Yaoyoruzu",
			  "Alter": "Creation",
			  "Sexe": "Femme"
			},
			{
			  "url": "Data/Personnages/Eijiro_icon.png",
			  "Name": "Eijiro Kirishima",
			  "Alter": "Durcissement",
			  "Sexe": "Homme"
			},
			{
			  "url": "Data/Personnages/Fumikage_icon.png",
			  "Name": "Fumikage Tokoyami",
			  "Alter": "Shadow",
			  "Sexe": "Homme"
			},
			{
			  "url": "Data/Personnages/Denki_icon.png",
			  "Name": "Denki Kaminari",
			  "Alter": "Thunder",
			  "Sexe": "Homme"
			},
			{
			  "url": "Data/Personnages/iida_icon.png",
			  "Name": "Iida Tenya",
			  "Alter": "Engine",
			  "Sexe": "Homme"
			},
			{
			  "url": "Data/Personnages/Kyoka_icon.png",
			  "Name": "Kyoka Jiro",
			  "Alter": "Earphone Jack",
			  "Sexe": "Femme"
			},
			{
			  "url": "Data/Personnages/Mina_icon.png",
			  "Name": "Mina Ashida",
			  "Alter": "Acide",
			  "Sexe": "Femme"
			},
			{
			  "url": "Data/Personnages/Mirio_icon.png",
			  "Name": "Mirio Togata",
			  "Alter": "Perméation",
			  "Sexe": "Homme"
			},
			{
			  "url": "Data/Personnages/Shoto_icon.png",
			  "Name": "Shoto Todoroki",
			  "Alter": "Fire & Ice",
			  "Sexe": "Homme"
			}
		  
		
	];


}

		</script>

</body>
</html>