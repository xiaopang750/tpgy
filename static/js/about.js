addReady(function(){
    //切换
    var oUl = getByClass(document.body,'piproject')[0];
    var aLi = oUl.getElementsByTagName('li');
    var aCont = getByClass(document.body,'piproject_item');

    for(var i=0;i<aLi.length;i++){
        aLi[i].index = i;
        aLi[i].onmouseover = function(){
            for(var i=0;i<aLi.length;i++){
                aLi[i].className = '';
                aCont[i].className = 'piproject_item hide';
            }
            aLi[this.index].className = 'active';
            aCont[this.index].className = 'piproject_item';
        }
    }
    //左侧吸顶
    if(window.navigator.userAgent.indexOf('MSIE 6')!=-1)
    {
        var oDiv = document.getElementById('about_xd');
        
        var old_t=oDiv.offsetTop;
        
        window.onresize = window.onscroll = function()
        {
            var scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
            
            if(scrollTop>old_t)
            {
                oDiv.style.position='absolute';
                oDiv.style.top = scrollTop+'px';
            }
            else
            {
                oDiv.style.position='';
            }
        };
    }
    else
    {
        var oDiv = document.getElementById('about_xd');
        
        var t = oDiv.offsetTop;
        
        window.onscroll = function()
        {
            var scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
            
            if(t<=scrollTop)
            {
                oDiv.style.position = 'fixed';
                oDiv.style.top = 0;
            }
            else
            {
                oDiv.style.position = '';
            }
        };
    }
    //左侧导航点击
    var about_nav = getByClass(document.body,'about_nav')[0];
    var aLink = about_nav.getElementsByTagName('a');

    for(var i=0;i<aLink.length;i++){
        aLink[i].onclick = function()
        {
            for(var i=0;i<aLink.length;i++){
                aLink[i].className = '';
            }
            this.className = 'active';
        }
    }
})