/*
scrollTop demo for liyou by 2014/7/18
*/
(function(w){
	var myTools = {
		getPos:function(node){
			this.l=0,this.t=0;
			while(node){
				this.l+=node.offsetLeft,this.t+=node.offsetTop,node=node.offsetParent;
			}
			return {left: this.l, top: this.t};
		},
		addEvent:function(node, sEv, fn){
			node.attachEvent?node.attachEvent('on'+sEv, fn):node.addEventListener(sEv, fn, false);
		},
		creatNode:function(name){
			var nodeDiv = document.createElement('div');
			nodeDiv.className = name,nodeDiv.id='createScrollNode';
			return nodeDiv;
		}
	}

	w.scrollTopNode = function(node){
		var _this = this;
		this.nodeClass=node.className || null,
		this.nodeTop = myTools.getPos(node).top,
		node.parentNode.insertBefore(myTools.creatNode(this.nodeClass),node),
		this.nodeScrollNode = document.getElementById('createScrollNode');
		this.nodeScrollNode.style.display='none';
		myTools.addEvent(w,'scroll',function(){
			_this.scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
			if(_this.scrollTop>_this.nodeTop){
				node.style.position='fixed',node.style.top='0',node.style.zIndex='999999';
				_this.nodeScrollNode.style.display='block';
			}
			else{
				node.style.position='relative';
				_this.nodeScrollNode.style.display='none';
			}
		});

	};



})(window);