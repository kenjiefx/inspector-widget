app.service('DynamicTheme',()=>{
    return {
        setPrimary:(colorCode)=>{
            document.getElementById('__primary_theme_color').innerText = '.__dynamic_primary_bg{background-color:'+colorCode+'!important;}';
        }
    }
});