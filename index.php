<?php

//index.php

session_start();

?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="public/favicon.ico" sizes="any">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-route.js"></script> -->
  </head>


  <style>
  .form_style
  {
   width: 600px;
   margin: 0 auto;
  }
  </style>
  
 </head>

 <body ng-app="login_register_app"> 

  <div  ng-controller="login_register_controller" class="container-fluid form_style">
   <?php
   if(!isset($_SESSION["name"]))
   {
   ?>
   <div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
    <a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
    {{alertMessage}}
   </div>

   <div class="panel panel-default" ng-show="login_form">
    <div class="panel-heading">
     <h3 class="panel-title">Welcome to Smart Customer Service</h3>
    </div>
    <div class="panel-body">
     <form method="post" ng-submit="submitLogin()">
      <div class="form-group">
       <label>Enter Your Email</label>
       <input type="text" name="email" ng-model="loginData.email" class="form-control" />
      </div>
      <div class="form-group">
       <label>Enter Your Password</label>
       <input type="password" name="password" ng-model="loginData.password" class="form-control" />
      </div>
      <div class="form-group" align="center">
       <input type="submit" name="login" class="btn btn-primary" value="Login" />
       <br />
       <input type="button" style="margin-top: 0.5rem;" name="register_link" class="btn btn-primary btn-link" ng-click="showRegister()" value="Register" />
      </div>
     </form>
    </div>
   </div>

   <div class="panel panel-default" ng-show="register_form">
    <div class="panel-heading">
     <h3 class="panel-title">Register</h3>
    </div>
    <div class="panel-body">
     <form method="post" ng-submit="submitRegister()">
     <div class="form-group">
       <label>Enter Your Email</label>
       <input type="text" name="email" ng-model="registerData.email" class="form-control" />
      </div>
      <div class="form-group">
       <label>Enter Your Password</label>
       <input type="password" name="password" ng-model="registerData.password" class="form-control" />
      </div>
      <div class="form-group">
       <label>Enter Your Name</label>
       <input type="text" name="name" ng-model="registerData.name" class="form-control" />
      </div>

      <div class="form-group">
       <label>Enter Your Address</label>
       <input type="text" name="address" ng-model="registerData.address" class="form-control" />
      </div>
      <div class="form-group">
       <label>Enter Your City Code</label>
       <input type="text" name="citycode" ng-model="registerData.citycode" class="form-control" />
      </div>
      <div class="form-group">
       <label>Enter Your Birthday</label>
       <input type="date" name="birthday" ng-model="registerData.birthday" class="form-control" />
      </div>
      <div class="form-group">
       <label>Enter Your Telephone Number</label>
       <input type="number" name="telephone" ng-model="registerData.telephone" class="form-control" />
      </div>
   
      <div class="form-group" align=center>
       <input type="submit" name="register" class="btn btn-primary" value="Register" />
       <br />

       <input type="button" style="margin-top: 0.5rem;" name="login_link" class="btn btn-primary btn-link" ng-click="showLogin()" value="Login" />
      </div>
     </form>
    </div>
   </div>
   <?php
   }
   else if($_SESSION["name"] == "admin") {
     ?>


<!-- ADMIN MODE HERE -->
  
<ul>
    <li><img class="logo" src="public/images/logo.png"></li>
    <li ng-class="disabled" id="nav"><a href="#!home">ADMIN</a></li>
    <li ng-class="disabled" id="nav"><a href="#!about">About us </a></li>
    <li class="enabled" id="nav"><a href="#!contact">Contact us</a></li>
    <!-- <li><a href="#!signUp">Sign Up</a></li>
    <li><a href="#">Sign-in</i></a></li> -->
    <li class="enabled" id="nav"><a href="#!review">Reviews</a></li>
    <li class="enabled" id="nav">
      <div class="dropdown">
        <button class="btn btn-secondary text-center shadow-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            Types of services
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item submenudrop" id="submenudrop"> Shopping <i class="fa-solid fa-arrow-down"></i></i></a>
          <div class = "submenu" style="display: none">
            <a class="dropdown-item" href="#!/shop/all"><i class="fa-solid fa-circle-arrow-right"></i> All Products </a>
            <a class="dropdown-item" href="#!/shop/phones"><i class="fa-solid fa-circle-arrow-right"></i> All Phones </a>
            <a class="dropdown-item" href="#!/shop/apple"><i class="fa-solid fa-circle-arrow-right"></i> Apple Phones </a>
            <a class="dropdown-item" href="#!/shop/samsung"><i class="fa-solid fa-circle-arrow-right"></i> Samsung Phones </a>
            <a class="dropdown-item" href="#!/shop/accessories"><i class="fa-solid fa-circle-arrow-right"></i> Browse Accessories </a>
          </div>
          <a class="dropdown-item" href="#!locations">Delivery</a>
        </div>
      </div>
    </li>
    <li  class="enabled" id="nav"><a href="#!cart">Shopping Cart</a></li>
    <li style="background-color:rgb(255,255,10);"><a href="logout.php">Logout</i></a></li>
  </ul>
  <div style="display: flex; justify-content: center; align-items: center;">
           <a href="dbOperations/insert.php"> <button type="button" style="display:inline-block;">Insert Data</button></a>
            <a href="dbOperations/select.php"> <button type="button" style="display:inline-block;">Select Data</button></a>
            <a href="dbOperations/update.php"> <button type="button" style="display:inline-block;">Update Data</button></a>
            <a href="dbOperations/delete.php"> <button type="button" style="display:inline-block;">Delete Data</button></a>
           </div>
  <!-- <a href="logout.php">Logout</a> -->





<?php
   }
   else
   {
   ?>

<!-- <body ng-module="myApp" >  -->
  <!-- REGULAR USER MODE HERE ----------------------------------------------------------------------------------------------------------------->
  <ul>
    <li><img class="logo" src="public/images/logo.png"></li>
    <li ng-class="disabled" id="nav"><a href="#!home">Home</a></li>
    <li ng-class="disabled" id="nav"><a href="#!about">About us </a></li>
    <li class="enabled" id="nav"><a href="#!contact">Contact us</a></li>
    <!-- <li><a href="#!signUp">Sign Up</a></li>
    <li><a href="#">Sign-in</i></a></li> -->
    <li class="enabled" id="nav"><a href="#!review">Reviews</a></li>
    <li class="enabled" id="nav">
      <div class="dropdown">
        <button class="btn btn-secondary text-center shadow-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            Types of services
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item submenudrop" id="submenudrop"> Shopping <i class="fa-solid fa-arrow-down"></i></i></a>
          <div class = "submenu" style="display: none">
            <a class="dropdown-item" href="#!/shop/all"><i class="fa-solid fa-circle-arrow-right"></i> All Products </a>
            <a class="dropdown-item" href="#!/shop/phones"><i class="fa-solid fa-circle-arrow-right"></i> All Phones </a>
            <a class="dropdown-item" href="#!/shop/apple"><i class="fa-solid fa-circle-arrow-right"></i> Apple Phones </a>
            <a class="dropdown-item" href="#!/shop/samsung"><i class="fa-solid fa-circle-arrow-right"></i> Samsung Phones </a>
            <a class="dropdown-item" href="#!/shop/accessories"><i class="fa-solid fa-circle-arrow-right"></i> Browse Accessories </a>
          </div>
          <a class="dropdown-item" href="#!/locations">Delivery</a>
        </div>
      </div>
    </li>
    <li  class="enabled" id="nav"><a href="#!cart">Shopping Cart</a></li>
    <li><a href="logout.php" style="background-color: #A10500;">Logout</i></a></li>
  </ul>

  <p id="saleTimer" style="font-weight: bold; border-style: solid; border-color:gold; background-color:gold; color:red; text-align:center; text-shadow: black 0px 0px 2px;"></p>  
<div ng-view>
  
</div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY372hbYFoJP7f_HVnz0n0rmLOk19X3jw&"></script>

    <!-- <a href="logout.php">Logout</a> -->
 
   <?php
   }
   ?>

  </div>
 </body>
</html>

<script>

var today = new Date();
today.setHours(today.getHours() + 1);

// Set the date we're counting down to
var countDownDate = new Date(today).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  //var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("saleTimer").innerHTML = "Sale ends in: " + hours + "h "
  + minutes + "m " + seconds + "s !!";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("saleTimer").innerHTML = "EXPIRED";
  }
}, 1000);

</script>


<script>
var app = angular.module('login_register_app', ['ngRoute']);
app.controller('login_register_controller', function($scope, $http){
 $scope.closeMsg = function(){
  $scope.alertMsg = false;
 };

 $scope.login_form = true;

 $scope.showRegister = function(){
  $scope.login_form = false;
  $scope.register_form = true;
  $scope.alertMsg = false;
 };

 $scope.showLogin = function(){
  $scope.register_form = false;
  $scope.login_form = true;
  $scope.alertMsg = false;
 };

 $scope.submitRegister = function(){
  $http({
   method:"POST",
   url:"register.php",
   data:$scope.registerData
  }).then(function(data){
   $scope.alertMsg = true;
   if(data.data.error != '')
   {
    $scope.alertClass = 'alert-danger';
    $scope.alertMessage = data.data.error;
   }
   else
   {
    $scope.alertClass = 'alert-success';
    $scope.alertMessage = data.data.message;
    $scope.registerData = {};
   }
  });
 };

 $scope.submitLogin = function(){
  $http({
   method:"POST",
   url:"login.php",
   data:$scope.loginData
  }).then(function(data){
   if(data.data.error != '')
   {
    $scope.alertMsg = true;
    $scope.alertClass = 'alert-danger';
    $scope.alertMessage = data.data.error;
   }
   else
   {
    location.reload();
   }
  });
 };

});

app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "views/home.html",
        controller : "homeCtrl"
    })
    .when("/about", {
        templateUrl : "views/about.html",
        controller : "aboutCtrl"
    })
    .when("/contact", {
        templateUrl : "views/contact.html",
        controller : "contactCtrl"
    })
    .when("/signUp", {
        templateUrl : "views/signUp.html",
        controller : ""
    })
    .when("/review", {
        templateUrl : "views/review.html",
        controller : "londonCtrl"
    })
    .when("/cart", {
        templateUrl : "views/cart.html",
        controller : "cartCtrl"
    })
    .when("/shop/:id",{
        templateUrl: "php/shop.php",
        controller: "shopController"
    })
    .when("/locations",{
        templateUrl: "views/locations.html",
        controller: "locationsController"
    })
    
    .otherwise({redirectTo:'/'});
    
 
});
app.controller('cartCtrl', ['$scope', function($scope) {
   

  $scope.initMap = function () {
      var directionsService = new google.maps.DirectionsService();
      var directionsRenderer = new google.maps.DirectionsRenderer();
    
    
        var location = {lat: 43.72538784490703, lng: -79.45216055559094 };
        var location2 = {lat: 43.65586404205865, lng:  -79.38256298777402};
        var marks = [ location, location2 ]
    
        var mapOptions = {
            center: new google.maps.LatLng(marks[0].lat, marks[0].lng)
      }
    
      $scope.map = new google.maps.Map(document.getElementById("map"), mapOptions);
    
      $scope.latlngbounds = new google.maps.LatLngBounds();
    
      for (var i = 0; i < marks.length; i++) {
                var data = marks[i]
                var myLatlng = new google.maps.LatLng(data.lat, data.lng);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: $scope.map,
                    title: data.title
                });
     
                //Extend each marker's position in LatLngBounds object.
                $scope.latlngbounds.extend(marker.position);
            }
        
        //Get the boundaries of the Map.
        // var bounds = new google.maps.LatLngBounds();
     
        //Center map and adjust Zoom based on the position of all markers.
        $scope.map.setCenter($scope.latlngbounds.getCenter());
        $scope.map.fitBounds($scope.latlngbounds);
    
      var marker2 = new google.maps.Marker(
        {position: location, map: $scope.map});    
      var infoWindow1 = new google.maps.InfoWindow(
        { content:   "<h5> Yorkdale Shopping Mall </h5> <p>3401 Dufferin St, Toronto, ON M6A 2T9</p> "  });
      marker2.addListener("click", function()
        { infoWindow1.open($scope.map, marker2); });
      var marker3 = new google.maps.Marker(
        {position: location2, map: $scope.map});    
      var infoWindow2 = new google.maps.InfoWindow(
        { content:  "<h5> Eaton centre </h5> <p>220 Yonge St, Toronto, ON M5B 2H1</p> "});
      marker3.addListener("click", function()
        { infoWindow2.open($scope.map, marker3); });
      
        directionsRenderer.setMap($scope.map);


        $scope.onChangeHandler = function () {
          $scope.calculateAndDisplayRoute(directionsService, directionsRenderer);
        };
        // document.getElementById("address").addEventListener("change", onChangeHandler);
        // document.querySelector(".button").addEventListener("click", onChangeHandler);
        // $(".button").click(onChangeHandler);
    
      }

      $scope.calculateAndDisplayRoute = function(directionsService, directionsRenderer) {

        $scope.getDirections = directionsService
          .route({
            origin: {
              query: "Eaton Centre, Ontario",
            },
            destination: {
              query: document.getElementById("address").value,
            },
            travelMode: google.maps.TravelMode.DRIVING,
          }
          )
          .then((response) => {
            
            console.log(response.routes[0].legs[0].start_address);
            var toEaton = String(response.routes[0].legs[0].distance.text)
    
            toEaton = toEaton.substring(0 ,toEaton.length - 3);
    
            directionsService.route({origin: {
              query: "Yorkdale Mall, Ontario",
            },
            destination: {
              query: document.getElementById("address").value,
            },
            travelMode: google.maps.TravelMode.DRIVING,
          }).then((response1) => {
            var toYd = String(response1.routes[0].legs[0].distance.text);
            toYd = toYd.substring(0 ,toYd.length - 3);
            // console.log(response1.routes[0].legs[0].distance.text);
  
    
          $('.transfer').click(function(){
            data_transfer();
          });
    
    
            if (parseInt(toEaton) < parseInt(toYd)){
              // console.log(response1.routes[0].legs[0].distance.text);
              console.log(response.routes[0].legs[0].end_address);
              distance = response.routes[0].legs[0].distance.text;
              start = response.routes[0].legs[0].start_address;
              end = response.routes[0].legs[0].end_address;
              directionsRenderer.setDirections(response);
              
            }
            else{
              console.log(response.routes[0].legs[0].end_address);
              console.log(response1.routes[0].legs[0].end_address);
              distance = response1.routes[0].legs[0].distance.text;
              start = response1.routes[0].legs[0].start_address;
              end = response1.routes[0].legs[0].end_address;
              directionsRenderer.setDirections(response1);
            }
    
    
            localStorage.setItem('distance', distance);
            localStorage.setItem('source', start);
            localStorage.setItem('destination', end);
    
            // marks[0].setMap(null);
            // marks[1].setMap(null);
          }).catch((e) => window.alert("Directions request failed due to " + status));
    
          })
          .catch((e) => window.alert("Directions request failed due to " + status));
        }

    //  $scope.initMap();
    //  $scope.calculateAndDisplayRoute();
  }]);

  app.controller('locationsController', ['$scope', function($scope) {

    $scope.initMap = function () {
    var location = {lat: 43.72538784490703, lng: -79.45216055559094 };
    var location2 = {lat: 43.65586404205865, lng:  -79.38256298777402};
    $scope.map = new google.maps.Map(document.getElementById("map"),
      { zoom: 12, center: location});
    var marker2 = new google.maps.Marker(
      {position: location, map: $scope.map});    
    var infoWindow1 = new google.maps.InfoWindow(
      { content: 
        "<h5> Yorkdale Shopping Mall </h5> <p>3401 Dufferin St, Toronto, ON M6A 2T9</p> " 
    });
    marker2.addListener("click", function()
      { infoWindow1.open($scope.map, marker2); });
    var marker3 = new google.maps.Marker(
      {position: location2, map: $scope.map});    
    var infoWindow2 = new google.maps.InfoWindow(
      { content:   "<h5> Eaton centre </h5> <p>220 Yonge St, Toronto, ON M5B 2H1</p> "});
    marker2.addListener("click", function()
      { infoWindow2.open($scope.map, marker3); });
  }
  }]);




app.controller("londonCtrl", function ($scope) {
    $scope.msg = "I love Paris";
});

app.controller("homeCtrl", function ($scope) {
    
});

app.controller("signInCtrl", function ($scope) {
  //if reply from signIn.php is "PASS" then change the class of li items to enabled int he body ng-app
    document.getElementById("nav").className = "enabled";
    

  });


app.controller("signIn", function ($scope) {
    $scope.myTxt = "You hace clicked button";
    $scope.signInFunc = () => {
        console.log("Hello we pressed sign in");
    }
});
app.controller("shopController", function($scope, $routeParams){
  console.log($routeParams.id);

  $scope.loaded = () => {
      
    }
    $scope.filter = filter_data();

    function filter_data(){
        $('.filter_data').html('<div id="loading" style=""></div>');
        var action = 'fetch_data';
        var type = get_filter();
        $.ajax({
          url:"fetch_data.php",
          method:"POST",
          data:{action: action, type: type},
          success: function(data){
            // console.log(data);
            $('.filter_data').html(data);
          }
        });
      };
});

</script>
<script>
    $(function(){
    $('.dropdown').hover(function() {
        $(this).addClass('open');
    },
    function() {
        $(this).removeClass('open');
    });
  });
  
    function toggleDropdown() {
        const e = document.querySelector(".submenu");
        if(e.style.display == "block"){
            e.style.display = "none"
        } else {
            e.style.display = "block"
        }
  
      }
      document.getElementById("submenudrop").addEventListener("click", toggleDropdown);
   </script>