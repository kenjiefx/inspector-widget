app.component('Loader',($scope,$patch,$block)=>{
    setTimeout(()=>{
        $block({
            name: 'LoaderAnimation',
            each:(loader)=>{
                loader.$element.innerHTML = '';
                document.getElementById('main').style.display = 'block';
            }
        });
    },1500);
});