<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="jquery-3.5.1.min.js"></script>
  <link rel="icon" href="public/favicon.ico" sizes="any">
  <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/signUp.css">
  <title>Payment</title>
</head>

<body ng-controller="paymentController">
<div ng-app="myapp" ng-controller="paymentBackEndController">
    <form ng-submit="paymentBackEnd()" name="paymentForm">
    <div class="container" ng-init="load_details() ">
    <h1 style="color:rgb(75, 75, 75); text-align:center;"><u>Invoice</u></h1>  
    <div style="background-color:white; padding:0.8rem;">
        <div style="font-weight:bold;" class="item_details">
          <p>Name: {{name}} </p>
          <p>Source: {{source}}</p>
          <p>Destination: {{destination}}</p>
          <p>Distance: {{distance}}</p>
          <p>Store Number: {{store}}</p>
          <h4>Cart:</h4>
          
          <ol ng-repeat="item in data"> {{item}} </ol>
         
          <p style={{stylestrike}}>Total: {{total}}</p>
          <p style={{saleVisibility}}>Discounted Price - 50% OFF APPLIED: {{discountprice}}</p>
        </div>
      </div> 
      <h1 style="color:rgb(75, 75, 75); text-align:center;">Payment Details</h1>  
        <select class="payment" name="payment" id="payment">
          <option value="credit">Credit</option>
          <option value="debit">Debit</option>
        </select>

        <div class="row align-items-start">
          <div class="col">
            <input class="payment" ng-model="payment.cardNumber" type="text" id="cardNumber" name="cardNumber" placeholder="Card Number">
          </div>
          <div class="col">
              <input class="payment"type="text" id="cvc" name="cvc" placeholder="Card CVC">
          </div>
          <div class="col">
            <input class="payment" type="text" id="expiry" name="expiry" placeholder="EXP">
        </div>
      </div>
        <input type="submit" name="review" class="btn btn-info" value="Submit Order" onclick="setTimeout(function() { window.location.href='#!confirm';}, 1000);"/></input>
        <!-- <input type="submit" name="review" class="btn btn-info" value="Submit Order"></input> -->
  
      </form>
</div>
    </div>


  

   
</body>

</html>
