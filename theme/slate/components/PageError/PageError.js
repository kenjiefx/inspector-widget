app.component('PageError',($scope,$patch)=>{
    $scope.error = {
        title: '',
        message: ''
    }
    $scope.state = 'empty';
    return {
        setError:({title,message})=>{
            $scope.state = 'error';
            $scope.error.title = title;
            $scope.error.message = message;
            $patch();
        }
    }
});