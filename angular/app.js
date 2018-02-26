var app = angular.module('HelloWorldApp',[]);//creates a new angular module
//module function take two arguments first name of the module and second the array of string

app.config(function(){
  Stamplay.init("Blog using Angular js");
})
app.controller('HelloWorldCtrl',TheController);

function TheController(/*services injected inside controller*/$scope){
    //alert("Hello");
    //$scope.myMessage="Welcome to blog it";
    $scope.players=['Pogba','Mata','Lukaku','Sanchez'];
    $scope.numbers=[1,2,3,4,5,6,7,8,9,10];
}
