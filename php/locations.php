<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <script src="jquery-3.5.1.min.js"></script>
        <link rel="icon" href="public/favicon.ico" sizes="any">
        <title>Shop</title>
    </head>

    <body>
    <?php include("navbar.php"); ?>
     
        <div>
            <h1 style="text-align: center; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 5rem;">WE DELIVER FROM THESE LOCATIONS<h1>
            <div id="map" style="border:5px solid rgb(0, 0, 0);height:75vh; width:75vw; display:block; margin-left:auto; margin-right:auto; text-align:center;">
            </div>
        </div>
    </body>

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
<script>
    function initMap()
      {
    var location = {lat: 43.72538784490703, lng: -79.45216055559094 };
    var location2 = {lat: 43.65586404205865, lng:  -79.38256298777402};
    var map = new google.maps.Map(document.getElementById("map"),
      { zoom: 12, center: location});
    var marker2 = new google.maps.Marker(
      {position: location, map: map});    
    var infoWindow1 = new google.maps.InfoWindow(
      { content: 
        "<h5> Yorkdale Shopping Mall </h5> <p>3401 Dufferin St, Toronto, ON M6A 2T9</p> " 
    });
    marker2.addListener("click", function()
      { infoWindow1.open(map, marker2); });
    var marker3 = new google.maps.Marker(
      {position: location2, map: map});    
    var infoWindow2 = new google.maps.InfoWindow(
      { content:   "<h5> Eaton centre </h5> <p>220 Yonge St, Toronto, ON M5B 2H1</p> "});
    marker2.addListener("click", function()
      { infoWindow2.open(map, marker3); });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY372hbYFoJP7f_HVnz0n0rmLOk19X3jw&callback=initMap">
</script>