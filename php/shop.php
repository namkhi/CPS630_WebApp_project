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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="public/favicon.ico" sizes="any">
    <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/shopStyle.css">
    <!-- <script src="shop.js" type="module"></script> -->
    <script src="../js/draggable.js"></script>
    <title>Shop</title>
  </head>
  <body ng-controller="shopController">

    <div class="container-fluid gx-2" ng-init="ONfilter_data();loadDetails();" >
      
      <div class="row">
        
        <div class="panel col-4 col-lg-3 droptarget">
          <p class="panelTitle">Filters</p>
          <button class="clear" ng-click="clearFilters()">Clear</button>
          <!-- <br>
          <label for="phones">Phones</label>
          <input type="checkbox" class="checkbox" name="phones"> -->
          <br>
          <label for="apple">Apple:</label>
          <input ng-click="filter_data()" type="checkbox" class="checkbox" name="pick" id="apple">
          <br>
          <label for="samsung">Samsung:</label>
          <input ng-click="filter_data()" type="checkbox" class="checkbox" name="pick" id="samsung">        
          <br>
          <label for="accessories">Accessories:</label>  
          <input ng-click="filter_data()" type="checkbox" class="checkbox" name="pick" id="accessories">
          <br>
          <a href="#!cart"><button class="checkout" style="background-color: aqua; width: 100%; height: 10vh;">Checkout  <i class="fa-solid fa-basket-shopping"></i></button></a>
          <br>
          <p style="display: inline-block"> <u>Total price:</u> </p>
          <mark><p class="total" style="display: inline-block">00.00</p></mark>
          <button class="clearCart" ng-click="clearCart()" >Clear Cart  <i class="fa-solid fa-trash-can"></i></button>
          <div class="cart droptarget" style="border: 1px solid black; min-height: 50%;">
          </div>  

          
        </div>
        
        <div class="productCollection col-8 col-lg-9">
        
          
        <div class='row row-cols-1 row-cols-md-3' compile="items"></div>


      </div>
      </div>

    </div>

 

    <!-- Option 1: Bootstrap Bundle with Popper -->
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