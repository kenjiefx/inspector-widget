app.component('LoginForm',($scope,$patch)=>{
    $scope.submit=(button)=>{
        button.addClass('is-button-loading');
        const appKey = $scope.app_key;
        const productId = $scope.product_id;
        console.log([appKey,productId]);
    }
});