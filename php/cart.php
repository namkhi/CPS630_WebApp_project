<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="public/favicon.ico" sizes="any">
    <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/contactStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="public/favicon.ico" sizes="any">
    <link rel="stylesheet" href="../css/cart.css">
    

    <title>Shop</title>
  </head>
  <body>


    <div class="container-fluid" style="width: 100vw">
      <div class="row">

        <div class="col-6 col-md-7" style="border-right: 1px solid black; justify-content: center; align-items: center;">
            <div class="details">
 
                    <div class="form">
                        <div class="fields fields--2">
                          <label class="field">
                            <span class="field__label" for="firstname">First name</span>
                            <input class="field__input" type="text" id="firstname"/>
                          </label>
                          <label class="field">
                            <span class="field__label" for="lastname">Last name</span>
                            <input class="field__input" type="text" id="lastname"/>
                          </label>
                        </div>
                        <label class="field">
                          <span class="field__label" for="address">Address</span>
                          <input class="field__input" type="text" id="address" />
                        </label>
                        <label class="field">
                          <span class="field__label" for="country">Country</span>
                          <select class="field__input" id="country">
                            <option value="canada">Canada</option>
                          </select>
                        </label>
                        <div class="fields fields--3">
                          <label class="field">
                            <span class="field__label" for="postalcode">Postal Code</span>
                            <input class="field__input" type="text" id="postalcode" />
                          </label>
                          <label class="field">
                            <span class="field__label" for="city">City</span>
                            <input class="field__input" type="text" id="city" />
                          </label>
                          <label class="field">
                            <span class="field__label" for="province">Province</span>
                            <select class="field__input" id="province">
                              <option value="On">Ontario</option>
                            </select>
                          </label>
                        </div>
                        <hr>
                       <button  id="route" class="button route">Route</button>
                       <a href="#!payment"><button class="button transfer">Finalize</button></a>
                  </div>
            </div>
        </div>

        <div class="col-6 col-md-5">
            <div id="cart">

            </div>

            <div id="map" style="border:5px solid rgb(0, 0, 0);height:500px; width:500px; display:block; margin-left:auto; margin-right:auto; text-align:center;"></div>
              
            </div>
        </div>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  

    <script>
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

  </body>
  
</html>

<script src="cart.js"></script>
<!-- <script>

  function initMap() {
    const directionsService = new google.maps.DirectionsService();
    const directionsRenderer = new google.maps.DirectionsRenderer();


    var location = {lat: 43.72538784490703, lng: -79.45216055559094 };
    var location2 = {lat: 43.65586404205865, lng:  -79.38256298777402};
    var marks = [ location, location2 ]

    var mapOptions = {
        center: new google.maps.LatLng(marks[0].lat, marks[0].lng)
  }

    const map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var latlngbounds = new google.maps.LatLngBounds();

  for (var i = 0; i < marks.length; i++) {
            var data = marks[i]
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: data.title
            });
 
            //Extend each marker's position in LatLngBounds object.
            latlngbounds.extend(marker.position);
        }
    
    //Get the boundaries of the Map.
    var bounds = new google.maps.LatLngBounds();
 
    //Center map and adjust Zoom based on the position of all markers.
    map.setCenter(latlngbounds.getCenter());
    map.fitBounds(latlngbounds);

  var marker2 = new google.maps.Marker(
    {position: location, map: map});    
  var infoWindow1 = new google.maps.InfoWindow(
    { content:   "<h5> Yorkdale Shopping Mall </h5> <p>3401 Dufferin St, Toronto, ON M6A 2T9</p> "  });
  marker2.addListener("click", function()
    { infoWindow1.open(map, marker2); });
  var marker3 = new google.maps.Marker(
    {position: location2, map: map});    
  var infoWindow2 = new google.maps.InfoWindow(
    { content:  "<h5> Eaton centre </h5> <p>220 Yonge St, Toronto, ON M5B 2H1</p> "});
  marker2.addListener("click", function()
    { infoWindow2.open(map, marker3); });
  
    directionsRenderer.setMap(map);
  
    const onChangeHandler = function () {
      calculateAndDisplayRoute(directionsService, directionsRenderer);
    };
  
    // document.getElementById("address").addEventListener("change", onChangeHandler);
    document.querySelector(".button").addEventListener("click", onChangeHandler);

  }
  


  function calculateAndDisplayRoute(directionsService, directionsRenderer) {


    const toEaton = directionsService
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
        
        // console.log(response.routes[0].legs[0].start_address);
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
  function initMapS()
    {
    
// location in map marker info ex//5
  var location = {lat: 43.72538784490703, lng: -79.45216055559094 };
  var location2 = {lat: 43.65586404205865, lng:  -79.38256298777402};
  var marks = [ location, location2 ]

    var mapOptions = {
        center: new google.maps.LatLng(marks[0].lat, marks[0].lng)
    }

  var map = new google.maps.Map(document.getElementById("map"), mapOptions);

  var latlngbounds = new google.maps.LatLngBounds();

  for (var i = 0; i < marks.length; i++) {
            var data = marks[i]
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: data.title
            });
 
            //Extend each marker's position in LatLngBounds object.
            latlngbounds.extend(marker.position);
        }
    
    //Get the boundaries of the Map.
    var bounds = new google.maps.LatLngBounds();
 
    //Center map and adjust Zoom based on the position of all markers.
    map.setCenter(latlngbounds.getCenter());
    map.fitBounds(latlngbounds);

  var marker2 = new google.maps.Marker(
    {position: location, map: map});    
  var infoWindow1 = new google.maps.InfoWindow(
    { content: "<h5> Mom </h5>" });
  marker2.addListener("click", function()
    { infoWindow1.open(map, marker2); });
  var marker3 = new google.maps.Marker(
    {position: location2, map: map});    
  var infoWindow2 = new google.maps.InfoWindow(
    { content: "<h5> Dad </h5>"});
  marker2.addListener("click", function()
    { infoWindow2.open(map, marker3); });
}


</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY372hbYFoJP7f_HVnz0n0rmLOk19X3jw&callback=initMap"></script> -->
