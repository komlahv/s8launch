angular.module('MtnApp', [])

.controller('OrderController', function($scope, $http){
  $scope.PersonalDetails = true;
  $scope.ThankYou = false;

   var GoToDone = function(){
      $scope.PersonalDetails = false;
      $scope.ThankYou = true;
  }

  $scope.PlaceOrder = function(firstName, lastName, phonenumber, email, address, type, model, color){
    if($scope.firstname == ""){
      $scope.validfirstName = true;
      //$window.alert("djd");
      return;
    }
    else if($scope.firstname == undefined){
      $scope.validfirstName = true;
      //$window.alert("djd");
      return;
    }
    else{
      $scope.validfirstName = false;
    }
    if($scope.lastname == ""){
      $scope.validlastName = true;
      //$window.alert("djd");
      return;
    }
    else if($scope.lastname == undefined){
      $scope.validlastName = true;
      //$window.alert("djd");
      return;
    }
    else{
      $scope.validlastName = false;
    }
    if($scope.phonenumber == ""){
      $scope.validPhone = true;
      return;
    }
    else if($scope.phonenumber == undefined){
      $scope.validPhone = true;
      return;
    }
    else{
      $scope.validPhone = false;
    }
    if($scope.email == ""){
      $scope.validEmail = true;
      return;
    }
    else if($scope.email == undefined){
      $scope.validEmail = true;
      return;
    }
    else{
      $scope.validEmail = false;
    }
    if($scope.address == ""){
      $scope.validAddress = true;
      return;
    }
    else if($scope.address == undefined){
      $scope.validAddress = true;
      return;
    }
    else{
      $scope.validAddress = false;
    }

    if($scope.model == ""){
      $scope.validModel = true;
      return;
    }
    else if($scope.model == undefined){
      $scope.validModel = true;
      return;
    }
    else{
      $scope.validModel = false;
    }

    if($scope.color == ""){
      $scope.validColor = true;
      return;
    }
    else if($scope.color == undefined){
      $scope.validColor = true;
      return;
    }
    else{
      $scope.validColor = false;
    }

    $http.post("Scripts/order.php",
                {
                    "firstName": firstName,
                    "lastName": lastName,
                    "phoneNumber": phonenumber,
                    "address": address,
                    "email": email,
                    "type": type,
                    "model": model,
                    "color": color
                })
                .then(function (response) {
                  GoToDone();
                });
              }
})
