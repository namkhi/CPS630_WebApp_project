<!DOCTYPE html>
<html lang="en>">
    <head>
        <meta charset="utf-8">
         
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/review.css">
        <script src="jquery-3.5.1.min.js"></script>
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
 <!-- action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
    <body>
        <!-- <div class="container">
        <div ng-app="myapp" ng-controller="formcontroller">
            <form ng-submit="reviewSubmitDataData()">
                <div>
                    <label for="product">Product:</label>
                    <select ng-model=reviewSubmitData.first_name name="product">
                    <option value="iPhone13Pro">iPhone 13 Pro</option>
                    <option value="iPhone13">iPhone 13</option>
                    <option value="iPhoneSE">iPhone SE</option>
                    <option value="GalaxyS22Ultra">Galaxy S22 Ultra</option>
                    <option value="GalaxyS22">Galaxy S22</option>
                    <option value="GalaxyZFlip35G">Galaxy Z Flip3 5G</option>
                    <option value="MagSafeCharger">MagSafe Charger</option>
                    <option value="SamsungGalaxySmartTag">Samsung Galaxy SmartTag</option>
                    <option value="BelkinBOOSTCharger">Belkin BOOST Charger</option>
                    </select> 
                    <div ng-model="reviewSubmitData.last_name" class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
                <textarea ng-model="reviewSubmitData.address" style="height:200px;" id="review" name="review" placeholder="How was your experience with the product?"></textarea>
                <button  onClick="window.location.reload();" class="btn btn-secondary" style="display:block; margin-left: auto; margin-right: auto; border-radius:20px; color:black;" role="button" type="submit">Submit</button>
                <input type="submit"/>
                <input type="submit" name="reviewSubmitData" class="btn btn-info" value="reviewSubmitData"/>
            </form>
        </div>
        </div> -->
<div class="container" style="width:750px;">
    <h3 align="center">Reviews</h3>
    <br /><br />
    <div ng-app="myapp" ng-controller="formcontroller">
    <form name="userForm" ng-submit="reviewSubmitData()">
        <!-- <label class="text-success" ng-show="successreviewSubmitData">{{successreviewSubmitData}}</label> -->
        <div class="form-group">
        <label for="product">Product:</label>
        
        <!-- <input type="text" name="first_name" ng-model="reviewSubmitData.first_name" class="form-control" /> -->
                    <select ng-model=reviewSubmit.product name="product">
                    <option value="iPhone13Pro">iPhone 13 Pro</option>
                    <option value="iPhone13">iPhone 13</option>
                    <option value="iPhoneSE">iPhone SE</option>
                    <option value="GalaxyS22Ultra">Galaxy S22 Ultra</option>
                    <option value="GalaxyS22">Galaxy S22</option>
                    <option value="GalaxyZFlip35G">Galaxy Z Flip3 5G</option>
                    <option value="MagSafeCharger">MagSafe Charger</option>
                    <option value="SamsungGalaxySmartTag">Samsung Galaxy SmartTag</option>
                    <option value="BelkinBOOSTCharger">Belkin BOOST Charger</option>
                    </select> 
            <!-- <label>First Name <span class="text-danger">*</span></label> -->
            
            <!-- <span class="text-danger" ng-show="errorFirstname">{{errorFirstname}}</span> -->
        </div>
        <div class="form-group">
        <div class="rate">
                        <input type="radio" id="star5" ng-model="reviewSubmit.rate"  name="rate" ng-value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" ng-model="reviewSubmit.rate"  name="rate" ng-value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" ng-model="reviewSubmit.rate"  name="rate" ng-value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" ng-model="reviewSubmit.rate"  name="rate" ng-value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" ng-model="reviewSubmit.rate"  name="rate" ng-value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
            <!-- <label>Last Name <span class="text-danger">*</span></label> -->
            <!-- <input type="text" name="last_name" ng-model="reviewSubmitData.last_name" class="form-control" /> -->
            <!-- <span class="text-danger" ng-show="errorLastname">{{errorLastname}}</span> -->
        </div>
        <div class="form-group">
        <textarea ng-model="reviewSubmit.review" style="height:200px;" id="review" name="review" placeholder="How was your experience with the product?"></textarea>
        <!-- <label>Address <span class="text-danger">*</span></label> -->
            <!-- <input type="text" name="address" ng-model="reviewSubmitData.address" class="form-control" /> -->
            <!-- <span class="text-danger" ng-show="erroraddress">{{erroraddress}}</span> -->
        </div>
        <br />
        <div class="form-group">
            <input type="submit" name="review" class="btn btn-info" value="Submit Review" onclick='window.location.reload();'/>
        </div>
    </form>
    </div>
</div>        

<!-- 
<script>
var application = angular.module("myapp", []);
application.controller("formcontroller", function($scope, $http){
    $scope.reviewSubmitData = {};
    $scope.reviewSubmitDataData = function(){
        $http({
            method: 'POST',
            url: 'reviewSubmitData.php',
            data:$scope.reviewSubmitData,
        }).then(function (data){
            console.log(data) 
               if(data.data.error)
               {
                $scope.errorFirstname = data.data.error.first_name;
                $scope.errorLastname = data.data.error.last_name;
                $scope.erroraddress = data.data.error.address;
                $scope.successreviewSubmitData = null;
               }
               else
               {
                $scope.reviewSubmitData = null;
                $scope.errorFirstname = null;
                $scope.errorLastname = null;
                $scope.erroraddress = null;
                $scope.successreviewSubmitData = data.data.message;
               } 
        },function (error){
            console.log(error, 'can not post data.');
        });
    }
});
</script> -->
<h3>Filter </h3>
<div class="filter">
    <input type="radio" id="star5" ng-model="reviewSubmit.rate"  name="rate" ng-value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" ng-model="reviewSubmit.rate"  name="rate" ng-value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" ng-model="reviewSubmit.rate"  name="rate" ng-value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" ng-model="reviewSubmit.rate"  name="rate" ng-value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" ng-model="reviewSubmit.rate"  name="rate" ng-value="1" />
    <label for="star1" title="text">1 star</label>
</div>

<?php 
    if (isset($_POST["product"]) &&  isset($_POST["rate"]) && isset($_POST["review"])){
        $name = $_POST["product"];
        $rate = $_POST["rate"];
        $review = $_POST["review"];
        echo $name . $rate . $review;
    }

include('../php/db_connection.php');

if(true){
    $query = "SELECT * FROM reviews ORDER BY `reviewID` DESC";


    $result = $conn->query($query);

    $output = '';
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc())
        {
            $output .= '
            <div class="card apple phones" ondrop="drop(event)" ondragstart="dragStart(event)"  id="'.$row["name"].'" draggable="true" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">'.$row["name"].'</h5>
              <p class="card-text"> '.$row["review"].' </p>
              <!-- <a href="#" class="btn btn-primary">Add to cart</a> -->
            </div>
            <div class="card-footer">
              <a>Rating:'.(str_repeat('★', intval($row["rate"]))) .'</a>
            </div>
          </div>
            ';
        }
    }
    else
    {
        $output = '<h3> No Data Found </h3>';
    }

    echo $output;

}
?>
</body>
</html>