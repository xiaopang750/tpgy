function getStyle(obj, name)
{
	return obj.currentStyle?obj.currentStyle[name]:getComputedStyle(obj, false)[name];
}

function startMove(obj, json,options)
{
	options=options||{};
	options.time=options.time||700;
	options.type=options.type||'buffer';
	
	var count=parseInt(options.time/30);
	var n=0;
	
	//起点
	var start={};
	var dis={};
	for(var i in json)
	{
		if(i=='opacity')
		{
			start[i]=Math.round(parseFloat(getStyle(obj, 'opacity'))*100);
		}
		else
		{
			start[i]=parseInt(getStyle(obj, i));
		}
		
		dis[i]=json[i]-start[i];
	}
	
	clearInterval(obj.timer);
	obj.timer=setInterval(function (){
		n++;
		
		for(var i in json)
		{
			switch(options.type)
			{
				case 'linear':
					var cur=start[i]+dis[i]*n/count;
					break;
				case 'buffer':
					var a=1-n/count;
					
					var c=1-a*a*a;
					
					var cur=start[i]+dis[i]*c;
					break;
			}
			
			if(i=='opacity')
			{
				obj.style.filter='alpha(opacity:'+cur+')';
				obj.style.opacity=cur/100;
			}
			else
			{
				obj.style[i]=cur+'px';
			}
		}
		
		if(n==count)
		{
			clearInterval(obj.timer);
			
			options.end && options.end();
			
			//alert(new Date().getTime()-s);
		}
	}, 30);
}
function startMove_tx(obj, name, iTarget)
{
	var speed=0;
	if(name=='opacity')
	{
		var cur=Math.round(parseFloat(getStyle(obj, name))*100);
	}
	else
	{
		var cur=parseInt(getStyle(obj, name));
	}
	
	clearInterval(obj.timer);
	obj.timer=setInterval(function (){		
		speed+=(iTarget-cur)/3;
		speed*=0.7;
		
		cur+=speed;
		
		if(parseInt(speed)==0 && Math.ceil(cur)==iTarget)
		{
			clearInterval(obj.timer);
		}
		
		if(name=='opacity')
		{
			obj.style.filter='alpha(opacity:'+(cur+speed)+')';
			obj.style.opacity=(cur+speed)/100;
		}
		else
		{
			obj.style[name]=Math.ceil(parseInt(cur))+Math.ceil(parseInt(speed))+'px';
		}
	}, 30);
}