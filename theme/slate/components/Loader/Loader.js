app.component('Loader',($scope,$patch,$block,ErrorViews)=>{
    setTimeout(()=>{
        $block({
            name: 'LoaderAnimation',
            each:(loader)=>{
                loader.$element.innerHTML = ''
                document.getElementById('main').style.display = 'block'
            }
        })
        ErrorViews.appkey404()
    },1500)
});