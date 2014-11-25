function addReady(fn)
{
	if(document.addEventListener)
	{
		document.addEventListener('DOMContentLoaded', fn, false);
	}
	else
	{
		//IE6-8
		var oS=document.createElement('script');
		var oHead=document.getElementsByTagName('head')[0];
		
		oHead.appendChild(oS);
		
		oS.defer=true;
		oS.onreadystatechange=function ()
		{
			if(oS.readyState=='complete')
			{
				fn();
			}
		};
	}
}