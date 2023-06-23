app.service('YotpoJSManager',()=>{
    const headInjector=(link)=>{
        const e=document.createElement('script');
        e.type='text/javascript';
        e.async=true;
        e.src=link;
        let t=document.getElementsByTagName('script')[0];
        t.parentNode.insertBefore(e,t);
    }
    return {
        v3:(appKey)=>{
            const link = 'https://cdn-widgetsrepository.yotpo.com/v1/loader/'+appKey;
            headInjector(link);
        }
    }
});