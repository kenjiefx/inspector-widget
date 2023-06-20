app.component('BuildVersion',($scope,$patch,$block)=>{
    const BuildCardDialog = {
        open:()=>{
            $block({name:'BuildCardDialog',each:dialog=>dialog.$element.showModal()});
        },
        close:()=>{
            $block({name:'BuildCardDialog',each:dialog=>dialog.$element.close()});
        }
    }
    $scope.closeBuildVersionDialog=()=>{
        BuildCardDialog.close();
    }
    return {
        showBuildCard:()=>{
            BuildCardDialog.open();
        }
    }
});