app.component('Header',($scope,$patch,BuildVersion)=>{
    $scope.showBuildCard = BuildVersion.showBuildCard;
});