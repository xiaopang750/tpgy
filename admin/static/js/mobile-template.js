function ohover(z){
	$(z).hover(
		function(){
				$(this).children('img').stop().animate({opacity:'0'},300);
		},function(){
				$(this).children('img').stop().animate({opacity:'1'},300);
		}
	);
}
ohover('.a-zhuo');
ohover('.a-si');
ohover('.a-bang');
ohover('.a-tui');

function treebox(){
	var oContentRight=$('.contentRight').outerHeight(true);
	$('.tree-box').css('height',oContentRight);
}
treebox();
$(window).resize(treebox);

var oUl1=document.getElementById('tree-box1');
var oLi1=oUl1.getElementsByTagName('li')
var oUl2=document.getElementById('tree-box2');
var oLi2=oUl2.getElementsByTagName('li');
var oA=oUl2.getElementsByTagName('a');
var oB=oUl2.getElementsByTagName('b');
var arr=[
	'&#xe603;',
	'&#xe601;',
	'&#xe621;',
	'&#xe619;',
	'&#xe609;',
	'&#xe627;',
	'&#xe610;',
	'&#xe605;',
	'&#xe600;',
	'&#xe60b;',
	'&#xe61e;',
	'&#xe602;',
	'&#xe62f;',
	'&#xe612;',
	'&#xe61b;',
	'&#xe607;',
	'&#xe615;',
	'&#xe608;',
	'&#xe60d;',
	'&#xe604;',
	'&#xe61d;',
	'&#xe61a;',
	'&#xe628;',
	'&#xe606;',
	'&#xe60f;',
	'&#xe625;',
	'&#xe61c;',
	'&#xe60a;',
	'&#xe626;',
	'&#xe60c;',
	'&#xe611;',
	'&#xe620;',
	'&#xe624;',
	'&#xe618;',
	'&#xe614;',
	'&#xe613;'
];


for(var i=0; i<oLi1.length; i++){
	oLi1[i].index=i;
	oLi1[i].onclick=function(){
		for(var i=0; i<oLi1.length; i++){
			oLi1[i].className='';
		}
		this.className='cur1';
		
		for(var i=0; i<oLi2.length; i++){
			oLi2[i].style.display='none';
		}
		oLi2[this.index].style.display='block';
	}
}


for(var i=0; i<oA.length; i++){
	oA[i].index=i;
	oA[i].onclick=function(){
		for(var i=0; i<oA.length; i++){
			oA[i].className='';
		}
		this.className='cur4';

		for(var i=0; i<oB.length; i++){
			oB[i].className='';
		}
		oB[this.index].className='b';

	}
}

function yun(){
	var oTreeWidth=$('.tree-box').outerWidth(true);
	var oWidth=document.documentElement.clientWidth;
	if(oTreeWidth==299){
		$('.contentRight').css('width',oWidth-oTreeWidth);
	}
	
}
yun();
$(window).resize(yun);


$('[sc="tree-menu"] span a').click(function(){
	var otext=$(this).text();
	var i=$(this).attr('title');
	// $('.title-inner .p-title').html(otext);
	$('.title-inner .p-title').html('<i class="iconfont">'+i+'</i>'+otext);
	// $('.title-inner .p-title').append("<i>&#xe603;</i>");
});

$(".backTop").click(function(){
	document.documentElement.scrollTop = 0;
    document.body.scrollTop = 0;
});

