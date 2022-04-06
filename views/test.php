<!DOCTYPE html>
<html>
<head>
<title>AngularJS PHP Mysql Submit Form Data</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body>
<div class="container" style="width:750px;">
    <h3 align="center">AngularJS PHP Mysql Submit Form Data</h3>
    <br /><br />
    <div ng-app="myapp" ng-controller="formcontroller">
    <form name="userForm" ng-submit="insertData()">
        <!-- <label class="text-success" ng-show="successInsert">{{successInsert}}</label> -->
        <div class="form-group">
        <label for="product">Product:</label>
        <!-- <input type="text" name="first_name" ng-model="insert.first_name" class="form-control" /> -->
                    <select ng-model=insert.product name="product">
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
                        <input type="radio" id="star5" ng-model="insert.rate"  name="last_name" ng-value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" ng-model="insert.rate"  name="last_name" ng-value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" ng-model="insert.rate"  name="last_name" ng-value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" ng-model="insert.rate"  name="last_name" ng-value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" ng-model="insert.rate"  name="last_name" ng-value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
            <!-- <label>Last Name <span class="text-danger">*</span></label> -->
            <!-- <input type="text" name="last_name" ng-model="insert.last_name" class="form-control" /> -->
            <!-- <span class="text-danger" ng-show="errorLastname">{{errorLastname}}</span> -->
        </div>
        <div class="form-group">
        <textarea ng-model="insert.review" style="height:200px;" id="review" name="review" placeholder="How was your experience with the product?"></textarea>
        <!-- <label>Address <span class="text-danger">*</span></label> -->
            <!-- <input type="text" name="address" ng-model="insert.address" class="form-control" /> -->
            <!-- <span class="text-danger" ng-show="erroraddress">{{erroraddress}}</span> -->
        </div>
        <br />
        <div class="form-group">
            <input type="submit" name="insert" class="btn btn-info" value="Submit Review"/>
        </div>
    </form>
    </div>
</div>
   
<script>
var application = angular.module("myapp", []);
application.controller("formcontroller", function($scope, $http){
    $scope.insert = {};
    $scope.insertData = function(){
        $http({
            method: 'POST',
            url: 'insert.php',
            data:$scope.insert,
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
                $scope.insert = null;
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
</script>
</body>
</html>