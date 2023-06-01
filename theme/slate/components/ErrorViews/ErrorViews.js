app.component('ErrorViews',($scope,$patch)=>{
    $scope.view = 'default'
    $scope.code = 500
    return {
        server500:()=>{
            $scope.view = 'is-error'
            $scope.message = 'Unknown error'
            $patch()
        },
        appkey404:()=>{
            $scope.view = 'is-error'
            $scope.code = 404
            $scope.description = 'Not Found'
            $scope.message = 'We are unable to find the app key your provided. Are you sure it is correct?'
            $patch()
        }
    }
});