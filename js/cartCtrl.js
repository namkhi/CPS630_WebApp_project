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
  