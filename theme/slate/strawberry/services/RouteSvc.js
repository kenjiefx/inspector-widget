app.service('RouteSvc',()=>{
    const getUrlParams = function (urlKey) {
        var pageUrl = window.location.search.substring(1),
        urlVars = pageUrl.split('&'), key, i;
        for (i = 0; i < urlVars.length; i++) {
            key = urlVars[i].split('=');
            if (key[0] === urlKey) {
                return typeof key[1] === undefined ? true : decodeURIComponent(key[1]);
            }
        }
        return null;
    };
    const parsePath=(path)=>{
        const pathTokens = path.split('/');
        const [protocol,empty,hostnameport,widgetVersion] = path.split('/');
        const [hostName,port] = hostnameport.split(':');
        return {
            protocol: protocol,
            hostName: hostName,
            port: port ?? 8080,
            widgetVersion: widgetVersion,
            appKey: getUrlParams('app_key'),
            productId: getUrlParams('product_id')
        }
    }
    return {
        parseUrl:()=>{
            return parsePath(window.location.href);
        },
        routes: {
            index:()=>{
                location.href = '/';
            }
        }
    }
});