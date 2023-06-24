app.component('ReviewsWidgetV3',($scope,$patch,RouteSvc,V3Manager,PageError,DynamicTheme)=>{
    const get=()=>{

    }
    $scope.state = 'loading';
    const routeData = RouteSvc.parseUrl();
    if (routeData.appKey===null||routeData.productId===null) {
        RouteSvc.routes.index();
        return;
    }
    $scope.appKey = routeData.appKey;
    $scope.productId = routeData.productId;
    V3Manager.load(routeData.appKey)
    .then((yotpoWidgetsContainer)=>{
        const widgetInstances = yotpoWidgetsContainer.guids[routeData.appKey].config.widgets;
        if ($.isEmptyObject(widgetInstances)) {
            $scope.state = 'error';
            $patch();
            PageError.setError({
                title: 'Reviews Widget Not Found',
                message: 'We are unable to find an instance of the Reviews Widget 3.0 on this app key.'
            });
            return;
        }
        $scope.instanceId = V3Manager.getWidgetInstanceId('ReviewsMainWidget',widgetInstances);
        $scope.widgetInstance = widgetInstances[$scope.instanceId];
        DynamicTheme.setPrimary($scope.widgetInstance.customizations['view-stars-color']);
        $scope.state = 'ok';
        $patch();
        yotpoWidgetsContainer.initWidgets();
    })
});