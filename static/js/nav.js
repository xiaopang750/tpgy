addReady(function(){
    var oNav = getByClass(document.body,'nav')[0];
    var aLi_nav = oNav.getElementsByTagName('li');
    var last_li = 0;
    for(var i=0;i<aLi_nav.length;i++){
        aLi_nav[i].index = i;
        aLi_nav[i].onmouseover = function(){
            if(this.getElementsByTagName('div')[0]){
                last_li = this.index;
                aLi_nav[last_li].style.className = 'nav_dropdown hide';
                this.getElementsByTagName('div')[0].className = 'nav_dropdown';
            }
        }
        aLi_nav[i].onmouseout = function(){
            if(this.getElementsByTagName('div')[0]){
                this.getElementsByTagName('div')[0].className = 'nav_dropdown hide';
            }
        }
    }
    

    
    var oTop = getByClass(document.body,'backTop')[0];
    oTop.onclick = function()
    {
        document.documentElement.scrollTop = 0;
        document.body.scrollTop = 0;
    }
})