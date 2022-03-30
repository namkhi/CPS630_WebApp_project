
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="icon" href="public/favicon.ico" sizes="any">
        <title>Jungle</title>
        <script> 
            $(function(){
                $('.dropdown').hover(function() {
                    $(this).addClass('open');
                },
                function() {
                    $(this).removeClass('open');
                });
            });

            
        </script>
</head>
<?php include("navbar.php"); ?>
<body>

<div class="out" style="border: solid 1px black; text-align: center; background-color: #FAF9F6;">
<h1 style=""><u> Invoice</u> </h1>

</div>
</body>
<script> 

for (var i = 0; i < localStorage.length; i++){
        key = localStorage.key(i);
        content = localStorage.getItem(key);
        if(key === "prices"){
          var total = 0;
          var prices = localStorage.getItem(key);
          prices = prices.split(",");
          prices.forEach(element => {
            total = total + parseInt(element);
          });
          document.querySelector(".out").innerHTML += `<mark>Total: ${total}</mark> <br>`;
        }
        document.querySelector(".out").innerHTML += `${key}: ${content} <br>`;

    }
    $(document).ready(function(){
      var distance = localStorage.getItem("distance"); 
      distance = distance.substring(0, distance.length -3);
      console.log(distance);
      const destination = localStorage.getItem("destination");
      

      const source = localStorage.getItem("source");
      var prices = localStorage.getItem("prices");
      var total = 0;
      prices = prices.split(",");
      prices.forEach(element => {
        total = total + parseInt(element);
      });
      // document.write(`Total: ${total}`);
      console.log(total);
      var store;
      if (source == "3401 Dufferin St, Toronto, ON M6A 2T9, Canada"){
        store = "100";
        // console.log("here1");
      }
      else if (source == "220 Yonge St, Toronto, ON M5B 2H1, Canada"){
        store = "101";
        // console.log("here2");
      }
    run_through();

    function run_through(){
      const action = 'fetch_data';
      console.log(store);
    $.ajax({
          type: "POST",
          url: "finalprocess.php",
          data: {action: action, storeinfo: store, total: total, destination: destination, source: source, distance: distance},
          success: function(data){
            console.log(data);
            // $(".out").html(data);
          }
        });
    

      }
    });


</script> 


</html>
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



