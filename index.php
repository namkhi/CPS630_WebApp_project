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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-sanitize.js"></script>
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
<script type="text/javascript">
  function load()
  {
    window.open('http://localhost/phpmyadmin/index.php?route=/database/structure&db=assignment1','_blank');
  }
  load()
</script>

<ul>
    <li style="background-color: #A10500;"><a href="logout.php">Logout</i></a></li>
</ul>
<h1 style="text-align:center"><mark>Administrator Mode!</mark></h1>


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
            <!-- <a class="dropdown-item" href="#!/shop/phones"><i class="fa-solid fa-circle-arrow-right"></i> All Phones </a> -->
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
// (function() {
//   var start = new Date;
//   start.setHours(15, 0, 0); // 11pm

//   function pad(num) {
//     return ("0" + parseInt(num)).substr(-2);
//   }

//   function tick() {
//     var now = new Date;
//     if (now > start) { // too late, go to tomorrow
//       document.getElementById('time').innerHTML = "EXPIRED";
//       // start.setDate(start.getDate() + 1);
//     }
//     var remain = ((start - now) / 1000);
//     var hh = pad((remain / 60 / 60) % 60);
//     var mm = pad((remain / 60) % 60);
//     var ss = pad(remain % 60);
//     document.getElementById('time').innerHTML =
//       hh + ":" + mm + ":" + ss;
//     setTimeout(tick, 1000);
//   }

//   document.addEventListener('DOMContentLoaded', tick);
// })();


var today = new Date();
//FINISH
today.setHours(14,0,0);
today.setMinutes(0,0,0);

// Set the date we're counting down to
//grab timestamp from database
var countdown = new Date();
//START
countdown.setHours(15,0,0)
countdown.setMinutes(0,0,0)
var countDownDate = new Date(today).getTime();
var now = new Date().getTime()
diff= (now - countdown);
if (diff > 0 && diff < 3600000 ) {
console.log(diff);
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
  document.getElementById("saleTimer").innerHTML = "50% off Sale ends in: " + hours + "h "
  + minutes + "m " + seconds + "s !!";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("saleTimer").innerHTML = "DAILY SALE IS OVER";
  }
}, 1000);
}
else{
  // If the count down is finished, write some text
    document.getElementById("saleTimer").innerHTML = "DAILY SALE IS OVER";
}
</script>


<script>
var app = angular.module('login_register_app', ['ngRoute','ngSanitize']);
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
    .when("/review", {
        templateUrl : "views/review.php",
        controller : "formcontroller"
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
    .when("/payment",{
        templateUrl: "php/paymentForm.php",
        controller: "paymentController"
    })
    .when("/confirm",{ 
      templateUrl: "views/confirmation.html"
    })
    .otherwise({redirectTo:'/'});
    
 
});

app.controller('paymentController', function($scope) {
  $scope.load_details = () =>{
    $scope.name = localStorage.getItem('name');
    $scope.destination = localStorage.getItem('destination');
    $scope.source = localStorage.getItem('source');
    $scope.distance = localStorage.getItem('distance');

    var items = localStorage.getItem("items");
    items = items ? items.split(",") : [];
    var prices = localStorage.getItem("prices");
    prices = prices ? prices.split(",") : [];
    
    var data = [];
    var totalprice = 0;
    var discountprice = 0;
    $scope.stylestrike = "";
    $scope.saleVisibility = "visibility: hidden;";


    if ( document.getElementById("saleTimer").innerHTML != "DAILY SALE IS OVER"){
      for(var i = 0; i < prices.length; i++){
        const buffer = `${items[i]}: $${prices[i]}`;
        totalprice += parseInt(prices[i]);
        data.push(buffer);
    }
      discountprice = totalprice*0.5;
      $scope.stylestrike = "text-decoration: line-through;";
      $scope.saleVisibility = "visibility: visible";
    }
  else{
      for(var i = 0; i < prices.length; i++){
        const buffer = `${items[i]}: $${prices[i]}`;
        totalprice += parseInt(prices[i]);
        data.push(buffer);     
      }
    }
    $scope.total = totalprice;
    $scope.data = data;
    $scope.discountprice = discountprice;

  };

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
    
            localStorage.setItem('name', $('#firstname').val() + " " + $('#lastname').val());
            localStorage.setItem('distance', distance);
            localStorage.setItem('source', start);
            localStorage.setItem('destination', end);
    
            // marks[0].setMap(null);
            // marks[1].setMap(null);
          }).catch((e) => window.alert("Directions request failed due to " + status));
    
          })
          .catch((e) => window.alert("Directions request failed due to " + status));
        }

        $('.route').click(function(){
        const e = document.querySelector(".transfer");
        console.log(e)
        e.style.visibility = "visible";
      });

    
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
    marker3.addListener("click", function()
      { infoWindow2.open($scope.map, marker3); });
  }
  $scope.initMap();
  }]);


  app.controller("formcontroller", function($scope, $http){
    $scope.reviewSubmit = {};
    $scope.reviewSubmitData = function(){
        $http({
            method: 'POST',
            url: '/views/reviewSubmit.php',
            data:$scope.reviewSubmit,
        }).then(function (data){
            console.log(data) 
               if(data.data.error)
               {
                $scope.errorFirstname = data.data.error.first_name;
                $scope.errorLastname = data.data.error.last_name;
                $scope.erroraddress = data.data.error.address;
                $scope.successInsert = null;
               }
               else
               {
                $scope.reviewSubmit = null;
                $scope.errorFirstname = null;
                $scope.errorLastname = null;
                $scope.erroraddress = null;
                $scope.successInsert = data.data.message;
               } 
        },function (error){
            console.log(error, 'can not post data.');
        });
    }
});

app.controller("paymentBackEndController", function($scope, $http){
    $scope.payment = {};
    $scope.paymentBackEnd = function(){
        $http({
            method: 'POST',
            url: '/php/paymentBackend.php',
            data:$scope.payment,
        }).then(function (data){
            console.log(data) 
               if(data.data.error)
               {
                $scope.errorCard = data.data.error.cardNumber;
               }
               else
               {
                $scope.errorCard = null;
                $scope.successInsert = data.data.message;
               } 
        },function (error){
            console.log(error, 'can not post data.');
        });
    }
});

app.controller("contactCtrl", function ($scope) {
    
  });
app.controller("homeCtrl", function ($scope) {
    
});

app.controller("signInCtrl", function ($scope) {
  //if reply from signIn.php is "PASS" then change the class of li items to enabled int he body ng-app
    document.getElementById("nav").className = "enabled";
    
  });


app.controller("signIn", function ($scope) {
    $scope.myTxt = "You have clicked button";
    $scope.signInFunc = () => {
        console.log("Hello we pressed sign in");
    }
});
 
app.controller("shopController", ['$scope','$routeParams', '$compile', function($scope, $routeParams, $compile){
  var filter = $routeParams.id;
  console.log(filter);
  $scope.ONfilter_data = () => {
        $('.filter_data').html('<div id="loading" style=""></div>');
        var action = 'fetch_data';
        var type = filter;
        $.ajax({
          url:"php/fetch_data.php",
          method:"POST",
          data:{action: action, type: type},
          success: function(data){
            // console.log(data);
            // $('.filter_data').html(data);
            $scope.items = data;
            $scope.$apply();
          }
        });
      };
  $scope.items;
    $scope.filter_data = () => {
        $('.filter_data').html('<div id="loading" style=""></div>');
        var action = 'fetch_data';
        var type = get_filter();
        $.ajax({
          url:"php/fetch_data.php",
          method:"POST",
          data:{action: action, type: type},
          success: function(data){
            // console.log(data);
            // $('.filter_data').html(data);
            $scope.items = data;
            $scope.$apply();
          }
        });
      };

      function get_filter(){
        filter = [];
        $('.checkbox:checked').each(function(){
          filter.push($(this).attr("id"));
        });
        console.log(filter);
        return filter;
      };

    $('.checkbox').click(function(){
        $scope.filter_data();
      });
      const checkboxes = document.querySelectorAll(".checkbox")
      if (filter == "all"){
        $scope.filter_data();
      }
      else if (filter === "apple"){
      checkboxes.forEach(element => { 
        if(element.id === "apple"){
            element.checked = true;
          };
          $scope.filter_data();
        });
      }
      else if( filter === "samsung"){
        checkboxes.forEach(element => { 
        if(element.id === "samsung"){
            element.checked = true;
          };
          $scope.filter_data();
        });
      }
      else if (filter === "phones"){
        
        $.ajax({
          url:"php/fetch_data_onlanding.php",
          method:"POST",
          data:{action: "fetch_data", type: "accessories"},
          success: function(data){
            // console.log(data);
            $('.filter_data').html(data);
          }
        });
      }
      else if( filter === "accessories"){
        const checkboxes = document.querySelectorAll(".checkbox")
        checkboxes.forEach(element => { 
          if(element.id === "accessories"){
            element.checked = true;
          }
        });
        $scope.filter_data();
      }

    function updateTotal(){
      var prices = localStorage.getItem("prices");
      var total = 0;
      prices = prices.split(",");
      prices.forEach(element => {
          total = total + parseInt(element);
      });
      console.log(total);
      document.querySelector(".total").innerHTML = "$" + total;
    }

    function loadDetails(){
      updateTotal();
      var panelData = document.querySelector(".cart");

      var items = localStorage.getItem("items");
      items = items.split(",");
      var prices = localStorage.getItem("prices");
      prices = prices.split(",");

      for(var i = 0; i < prices.length; i++){
          const data = panelData.innerHTML + `<h2 id=${items[i]}> ${items[i]} </h2>`;
          panelData.innerHTML = data + `Price: $${prices[i]}`;
        }
};

$scope.clearCart = () => {
  console.log("inside clear cart");
      localStorage.removeItem("items");
      localStorage.removeItem("prices");
      localStorage.clear();
      document.querySelector(".cart").innerHTML = "";
      document.querySelector(".total").innerHTML = "00.00"
      total = 0;
      items = [];
      prices = [];
};

$scope.clearFilters = () => {
  console.log("clicked cleared filters");
    buttons = document.querySelectorAll(".checkbox");

    buttons.forEach(element =>
      element.checked = false);
      $scope.filter_data();
};
$scope.loadButtons = () => {
  var buttons = $(".cartButton");
  for(values of buttons){
    buttons.setAttribute("ng-click","addToCart()");
  }
};
$scope.addToCart = (name,price) => {

  var items = localStorage.getItem("items");
  items = items ? items.split(",") : [];
  var prices = localStorage.getItem("prices");
  prices = prices ? prices.split(",") : [];

  // const data = event.dataTransfer.getData("Id"); // id=iphone13pro
    // console.log(document.getElementById(data));
    // var panelData = document.querySelector(".cart");

    // panelData = panelData.innerHTML + `<h2 id=${document.getElementById(data)}> ${data} </h2>`;
    // var price = document.querySelector('[id="'+ data +'"] .card-footer a').innerHTML;
    // event.target.innerHTML = panelData + price;
    // var name = price.substring();
    // price = price.substring(price.indexOf('$') + 1);

    // total = total + parseInt(price);

    items.push([name]);
    prices.push(price);
    
    localStorage.setItem("items", items);
    localStorage.setItem("prices", prices);
    $scope.loadDetails();
};

function updateTotal(prices){
    console.log("inside of total update");
    // var prices = localStorage.getItem("prices");
    var total = 0;
    // prices = prices.split(",");
    prices.forEach(element => {
        total = total + parseInt(element);
    });
    console.log(total);
    document.querySelector(".total").innerHTML = "$" + total;
}

$scope.loadDetails = () => {
    var items = localStorage.getItem("items");
    items = items ? items.split(",") : [];
    var prices = localStorage.getItem("prices");
    prices = prices ? prices.split(",") : [];

    updateTotal(prices);
    var panelData = document.querySelector(".cart");

    // var items = localStorage.getItem("items");
    // items = items.split(",");
    // var prices = localStorage.getItem("prices");
    // prices = prices.split(",");
    var data = ""
    for(var i = 0; i < prices.length; i++){
        data += `<h2 id=${items[i]}> ${items[i]} </h2> 
        Price: $${prices[i]}`;
        
    }
    panelData.innerHTML = data ;
}

}]);

 // declare a new module, and inject the $compileProvider
 app.directive('compile', ['$compile', function ($compile, $scope) {
      return function(scope, element, attrs) {
          scope.$watch(
            // function(scope) {
            //    // watch the 'compile' expression for changes
            //   return scope.$evalAsync(attrs.compile);
            'items'
            // }
            ,
            function(value) {
              
              // console.log(scope.items);

              // when the 'compile' expression changes
              // assign it into the current DOM
              element.html(scope.items);

              // compile the new DOM and link it to the current
              // scope.
              // NOTE: we only compile .childNodes so that
              // we don't get into infinite loop compiling ourselves
              $compile(element.contents())(scope);
              
            }
        );
    };
}]);

app.directive('items', ['$compile', function ($compile, $scope) {
    return {
      template: "<div ng-bind-html='items'></div>",
      restrict: 'E',
        link: function(scope, element, attrs){
            console.log('"link" function inside directive vk called, "element" param is: ', element)
        },
    };
 }]);

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