app.component('ReviewsWidgetV3',($scope,$patch,RouteSvc,V3Manager,PageError)=>{
    $scope.state = 'loading';
    const routeData = RouteSvc.parseUrl();
    if (routeData.appKey===null||routeData.productId===null) {
        RouteSvc.routes.index();
        return;
    }
    V3Manager.load(routeData.appKey)
    .then((yotpoWidgetsContainer)=>{
        const widgets = yotpoWidgetsContainer.guids[routeData.appKey].config.widgets;
        if ($.isEmptyObject(widgets)) {
            $scope.state = 'error';
            $patch();
            PageError.setError({
                title: 'Reviews Widget Not Found',
                message: 'We are unable to find an instance of the Reviews Widget 3.0 on this app key.'
            });
            return;
        }
        
    })
});