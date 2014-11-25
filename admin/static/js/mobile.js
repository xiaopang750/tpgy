if(device.mobile()){
	

	$('[sc="tree-yin"]').hide();

	$('.guide').css(
		{
			'display':'block'
		}
	);

	var oHead=$('.head-box').outerWidth(true);

	// var mobileHeight=window.screen.availWidth;

	$('.contentRight').css('width',oHead);

	$('#main').css('width',oHead);


	$('.guide').click(
		function(){
			if($('[sc="tree-yin"]').is(':visible')==true){
				$('[sc="tree-yin"]').hide();
				$('[sc="tree-yin"]').css(
					{
						'position':'absolute',
						'left':0,
						'top':48
					}
				);
			}else{
				$('[sc="tree-yin"]').show();
				$('[sc="tree-yin"]').css(
					{
						'position':'absolute',
						'left':0,
						'top':48
					}
				);
			}
		}
	);

	$('[sc="tree-menu"] span a').on('click',function(){
		$('[sc="tree-yin"]').hide();
	});

	var oMoGU = document.getElementById('MoGU');
	oMoGU.addEventListener('touchmove', function(event) {
	event.preventDefault();
	if (event.targetTouches.length == 1) {
		  var touch = event.targetTouches[0]; 
		  var l=touch.pageX;
		  var t=touch.pageY;

		  if(l<0){
		    l=0;
		  }else if(l>document.documentElement.clientWidth-oMoGU.offsetWidth){
		    l=document.documentElement.clientWidth-oMoGU.offsetWidth;
		  }

		  if(t<0){
		    t=0;
		  }else if(t>document.documentElement.clientHeight-oMoGU.offsetHeight){
		    t=document.documentElement.clientHeight-oMoGU.offsetHeight;
		  }

		  oMoGU.style.left = l + 'px';
		  oMoGU.style.top = t + 'px';
		}
	}, false);
}