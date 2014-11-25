addReady(function(){
    //banner
    var oBanner = getByClass(document.body,'banner')[0];
    var aLi = oBanner.getElementsByTagName('li');
    var aCont = getByClass(document.body,'piproject_item');
    var oPrev = getByClass(document.body,'prev')[0];
    var oNext = getByClass(document.body,'next')[0];
    var oH3 = getByClass(document.body,'number_text')[0];
    var aH3 = oH3.getElementsByTagName('h3');
    var oLink = getByClass(document.body,'number_now')[0];
    var aLink = oLink.getElementsByTagName('a');
    var iNow = 0;

    function tab(){
        for(var i=0;i<aLi.length;i++)
        {
            // aLi[i].style.opacity = 0;
            startMove(aLi[i],{opacity:0});
            aLink[i].className = '';
            aH3[i].className = '';
        }
        startMove(aLi[iNow],{opacity:100});
        aLink[iNow].className = 'active';
        aH3[iNow].className = 'active';
    }

    //链接点击效果
    for(var i=0;i<aLi.length;i++)
    {
        aLink[i].index = i;
        aLink[i].onclick = function()
        {
            iNow = this.index;
            tab();
        }
    }
    //下一个
    oNext.onclick = function()
    {
        iNow==aLi.length-1?iNow=0:iNow++;
        tab();
    }
     //上一个
    oPrev.onclick = function()
    {
        iNow==0?iNow=aLi.length-1:iNow--;
        tab();
    }
})