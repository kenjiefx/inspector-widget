app.service('V3Manager',function(YotpoJSManager){
    return {
        load:(appKey)=>{
            return new Promise((resolve,reject)=>{
                YotpoJSManager.v3(appKey);
                const atomic = setInterval(()=>{
                    if (window.hasOwnProperty('yotpoWidgetsContainer')) {
                        resolve(window.yotpoWidgetsContainer)
                        clearInterval(atomic);
                    }
                },100);
            });
        },
        getWidgetInstanceId:(className,loaderConfig)=>{
            let instanceId = null;
            for (const id in loaderConfig) {
                if (loaderConfig[id].className===className) {
                    instanceId = id
                }
            }
            return instanceId
        }
    }
});