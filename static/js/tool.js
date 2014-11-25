function getStyle(obj, attr)
{
    if(obj.currentStyle)
    {
        return obj.currentStyle[attr];
    }
    else
    {
        return getComputedStyle(obj, false)[attr];
    }
}
function setStyle(obj, json)
{
    if(obj.length)
        for(var i=0;i<obj.length;i++) setStyle(obj[i], json);
    else
    {
        if(arguments.length==2)
            for(var i in json) setStyle(obj, i, json[i]);
        else
        {
            switch(arguments[1].toLowerCase())
            {
                case 'opacity':
                    obj.style.filter='alpha(opacity:'+arguments[2]+')';
                    obj.style.opacity=arguments[2]/100;
                    break;
                default:
                    if(typeof arguments[2]=='number')
                    {
                        obj.style[arguments[1]]=arguments[2]+'px';
                    }
                    else
                    {
                        obj.style[arguments[1]]=arguments[2];
                    }
                    break;
            }
        }
    }
}
function $(id)
{
    return document.getElementById(id);
}

function getByClass(oParent,sClass)
{
    var aEle = oParent.getElementsByTagName('*');
    var aResult = [];
    var re=new RegExp('\\b'+sClass+'\\b', 'i');
    
    for(var i=0; i<aEle.length;i++)
    {
        if(aEle[i].className.search(re)!=-1)
        {
            aResult.push(aEle[i]);
        }
    }
    return aResult;
}
//取位置
function getPos(obj)
{
    var res={l: 0, t: 0};
    
    while(obj)
    {
        res.l+=obj.offsetLeft||0;
        res.t+=obj.offsetTop||0;
        
        obj=obj.offsetParent;
    }
    
    return res;
}
function setStyle3(obj, name, value)
{
    obj.style['Webkit'+name.charAt(0).toUpperCase()+name.substring(1)]=value;
    obj.style['Moz'+name.charAt(0).toUpperCase()+name.substring(1)]=value;
    obj.style['ms'+name.charAt(0).toUpperCase()+name.substring(1)]=value;
    obj.style['O'+name.charAt(0).toUpperCase()+name.substring(1)]=value;
    obj.style[name]=value;
}
//cookie
function setCookie(name, value, iDay)
{
    if(iDay!==false)
    {
        var oDate=new Date();
        oDate.setDate(oDate.getDate()+iDay);
        
        document.cookie=name+'='+value+';expires='+oDate+';path=/';
    }
    else
    {
        document.cookie=name+'='+value;
    }
}

function getCookie(name)
{
    var arr=document.cookie.split('; ');
    var i=0;
    
    for(i=0;i<arr.length;i++)
    {
        var arr2=arr[i].split('=');
        
        if(arr2[0]==name)
        {
            return arr2[1];
        }
    }
    
    return '';
}
//事件绑定
function bindEvent(obj, ev, fn)
{
    obj.addEventListener?obj.addEventListener(ev, fn, false):obj.attachEvent('on'+ev, fn);
}
function unbindEvent(obj, ev, fn)
{
    obj.removeEventListener?obj.removeEventListener(ev, fn, false):obj.detachEvent('on'+ev, fn);
}
//鼠标滚轴
function addMouseWheel(oDiv, fn)
{
    oDiv.onmousewheel=fnWheel;
    if(oDiv.addEventListener)
    {
        oDiv.addEventListener('DOMMouseScroll', fnWheel, false);
    }
    
    function fnWheel(ev)
    {
        var oEvent=ev||event;
        
        var bDown=true;
        
        if(oEvent.wheelDelta)
        {
            if(oEvent.wheelDelta<0)
            {
                bDown=true;
            }
            else
            {
                bDown=false;
            }
        }
        else
        {
            if(oEvent.detail>0)
            {
                bDown=true;
            }
            else
            {
                bDown=false;
            }
        }
        
        fn(bDown);
        
        if(oEvent.preventDefault)
        {
            oEvent.preventDefault();
        }
        return false;
    }
}
//布局转换
function layout(obj,n)
{
    if(n)
    {
        obj.style.left = obj.offsetLeft + 'px';
        obj.style.top = obj.offsetTop + 'px';
        obj.style.position = 'absolute';
        obj.style.margin = 0;
    }
    else{
        for(var i=0;i<obj.length;i++){
            obj[i].style.left = obj[i].offsetLeft + 'px';
            obj[i].style.top = obj[i].offsetTop + 'px';
        }
        for(var i=0;i<obj.length;i++){
            obj[i].style.position = 'absolute';
            obj[i].style.margin = 0;
        }
    }
}

//补零
function toDouble(n){return n<10?'0'+n:''+n;}