var OPPOUIMIX = {
	init: function(c) {
		var c = c || OPPOUIMIX;
		for (var i in c) {if (c[i] && c[i].init) {c[i].init()}}
	},

	browser : function(n){
		var e = window.navigator.userAgent,
		b="",ie=0;
		if (e.indexOf("MSIE") >= 0){
			b="ie";
			if(e.indexOf("MSIE 6.0")>0) ie=6;
			if(e.indexOf("MSIE 7.0")>0) ie=7;
			if(e.indexOf("MSIE 8.0")>0) ie=8;
			if(e.indexOf("MSIE 9.0")>0) ie=9;
			if(e.indexOf("MSIE 10.0")>0) ie=10;
			if(e.indexOf("MSIE 11.0")>0) ie=11;
			if(e.indexOf("MSIE 12.0")>0) ie=12;
		}
		else if (e.indexOf("Firefox") >= 0) {b="firefox"}
		else if(e.indexOf("Chrome") >= 0){b="chrome"}
		else if(e.indexOf("Opera") >= 0){b="opera"}
		else if(e.indexOf("Safari") >= 0){b="safari"}
		if(n){
			if(b=="ie"){return ie}else{return b}
		}else{return b}
	},

	iepng : function(){
		
		if(OPPOUIMIX.browser(1)==6){
			for(var j=0; j<document.images.length; j++)
			{
				var img = document.images[j];
				var imgName = img.src.toUpperCase();
				if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
				{
				 var imgID = (img.id) ? "id='" + img.id + "' " : "";
				 var imgClass = (img.className) ? "class='" + img.className + "' " : "";
				 var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' ";
				 var imgAlt = (img.alt) ? "alt='" + img.alt + "' " : "alt='" + img.title + "' ";
				 var imgStyle = "display:inline-block;" + img.style.cssText;
				 if (img.align == "left") imgStyle = "float:left;" + imgStyle;
				 if (img.align == "right") imgStyle = "float:right;" + imgStyle;
				 if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle;
				 var strNewHTML = "<i " + imgID + imgClass + imgTitle +  " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'" + img.src + "\', sizingMethod='scale');\"></i>";
				 img.outerHTML = strNewHTML;
				 j = j-1;
				}
			}
		}
	},

	html5 : function(){
		var thisBody = document.body || document.documentElement,
	    thisStyle = thisBody.style,
	    support = thisStyle.transition !== undefined || thisStyle.WebkitTransition !== undefined || thisStyle.MozTransition !== undefined || thisStyle.MsTransition !== undefined || thisStyle.OTransition !== undefined;
		if(support!==undefined) {return true}else{return false}
	}
};
$(document).ready(function(){OPPOUIMIX.init()});

OPPOUIMIX.n3 = {

	run : function(b){
		switch(b){
			case 1 :
				OPPOUIMIX.n3.sc.sc1();
				break;
			case 2 :
				OPPOUIMIX.n3.sc.sc2();
				break;
			case 6 :
				OPPOUIMIX.n3.sc.sc6();
				break;
			case 10 :
				OPPOUIMIX.n3.sc.sc10();
				break;
			case 14 :
				OPPOUIMIX.n3.sc.sc14();
				break;
			case 17 :
				OPPOUIMIX.n3.sc.sc17();
				break;
			case 19 :
				OPPOUIMIX.n3.sc.sc19();
				break;
			default : 
				return;
		}
	},

	getID : function(id){
		return document.getElementById(id);
	},

	drawArc : function(id,x,y,radius,wise,color,v,delay){
		if(OPPOUIMIX.browser(1)<=9 || !OPPOUIMIX.html5()) return;
		var _c=OPPOUIMIX.n3.getID(id), x=x || 0, y=y || 0, radius=radius || 100, wise=wise || false, v=v || 20, delay=delay || 10,
		add=Math.PI*2/100, step=1, s=Math.PI*3/2, e=0, t=null,
		_ct=_c.getContext('2d');

		if(typeof(color) === 'object'){
			var g=_ct.createLinearGradient(0, 0, 0, radius*2);
			g.addColorStop(0,color.c1);
			g.addColorStop(1,color.c2);
		}else{
			var g=color;
		}
		_ct.fillStyle=g;

		function d(st,et){
			_ct.beginPath();
			_ct.moveTo(x,y);
			_ct.arc(x,y,radius,st,et,wise);
			_ct.fill();
		}

		function ant(){
			if(step<=v){
				e=step * 2 * Math.PI / 360 + s;
				d(s,e);
				step++;
			}else{
				clearInterval(t);
			}
		}

		t=setInterval(ant,delay);


	},

	switchfun : function(e){
		var section=e.section,
		slidebox=e.slidebox,
		switchBtn=e.switchBtn;

		switchBtn.click(function(){
			if($(this).hasClass("current")) return false;
			$(this).addClass("current").siblings().removeClass("current");

			slidebox.eq($(this).index()).css({display:"block",opacity:0,zIndex:5}).stop().animate({opacity:1},500,function(){
				$(this).addClass("in").siblings().removeClass("in").css({display:"none"});
			}).siblings().css({zIndex:1});

			return false;
		}).first().click();
	},


	init : function(){
		OPPOUIMIX.init(OPPOUIMIX.n3);
		if(!OPPOUIMIX.html5()){
			$('body').addClass('nohtml5');
		}else{
			if(OPPOUIMIX.browser(1)<=9){
				$('body').addClass('nohtml5');	
			}else{
				$('body').addClass('html5');
			}
		}

		var mainBox=$('#n3-dt-wrap'),
		section=mainBox.find('.n3-dt-section'),
		winheight=curScoll=0;

		// header
		var _header=$('#header'),
		_headerNav=_header.find('.y-header');

		$(window).on({
			resize : function(){
				var fixHeight=0;
				winheight=$(this).height();
			},
			scroll : function(){
				curScoll=$(this).scrollTop();
				for(var i=0; i<section.size(); i++){
					if(curScoll > section.eq(i).offset().top - winheight + section.eq(i).height() * 0.5 && !section.eq(i).hasClass("play")){
						if(OPPOUIMIX.html5()) section.eq(i).addClass("play");
						if(mainBox.hasClass('index')) var ind=1;
						if(mainBox.hasClass('camera')) var ind=12;
						if(mainBox.hasClass('vooc')) var ind=19;
						OPPOUIMIX.n3.run(parseInt(section.eq(i).index())+ind);
					}					
				}


				// header
				if(curScoll>section.eq(0).height()+75){
					_header.css({top:0});
					setTimeout(function(){
						_headerNav.css({width: '100%'});
					},100);
				}else if(curScoll<section.eq(0).height()){
					_header.css({top:20});
					setTimeout(function(){
						_headerNav.css({width: 1180});
					},100);
				}
			}
		}).resize().scroll();

	}
};


OPPOUIMIX.n3.sc = {
	init : function(){
		OPPOUIMIX.n3.sc.sc7();
		OPPOUIMIX.n3.sc.sc15();
		OPPOUIMIX.n3.sc.sc16();
		$('.n3-sc14 .n3-sc14-landscape').css({width:$(window).width()+500});
	},

	sc1 : function(){
		var _sc=$('.n3-sc1'),
		_antBox=_sc.find('.n3-figure i'),
		camAnt=_antBox.sprite({cellSize: [670,300],cells: [1,18],initCell: [0,0],wrap: false,interval: 60});

		camAnt.go();

		var t=setTimeout(function(){
			camAnt.revert();
			clearTimeout(t);
		},2000);

	},

	sc2 : function(){
		var _sc=$('.n3-sc2'),
		_scLight=_sc.find('.n3-figure i');

		var s=function(){
			_scLight.stop().animate({opacity:1},800,function(){
				$(this).stop().delay(500).animate({opacity:0},1000);
			});
		};

		if($('body').hasClass('nohtml5')){
			_scLight.css({display:'block',opacity:0});
			setInterval(s,3500);
			s();
			return;
		}
		
	},

	sc6 : function(){
		var _sc=$('.n3-sc6'),
		_scMask=_sc.find('.sc6-per-ant');

		_scMask.stop().delay(800).animate({width:0},800,function(){
			$(this).remove();
		});
		
	},

	sc7 : function(){
		var e={
			section: $(".n3-sc7"),
			slidebox: $(".n3-sc7").find(".n3-figure .screen img"),
			switchBtn: $(".n3-sc7").find(".switch-box a")
		}
		OPPOUIMIX.n3.switchfun(e);
	},

	sc10 : function(){
		var color1={
			c1 : 'rgb(39,209,189)',
			c2 : 'rgb(123,239,230)'
		},
		color2={
			c1 : 'rgb(79,181,243)',
			c2 : 'rgb(124,201,246)'
		};
		setTimeout(function(){
			OPPOUIMIX.n3.drawArc('n3-sc10-arc1',150,150,150,false,color1,10,30);
			OPPOUIMIX.n3.drawArc('n3-sc10-arc2',150,150,150,false,color2,270,5);
		},1000);
	},

	sc14 : function(){
		var _sc=$('.n3-sc14'),
		_antBox=_sc.find('.n3-figure i'),
		_landscape=_sc.find('.n3-sc14-landscape');
		camAnt=_antBox.sprite({cellSize: [160,300],cells: [1,10],initCell: [0,0],wrap: false,interval: 140});

		setTimeout(function(){
			camAnt.go();
		},1000);
		_landscape.stop().delay(1000).animate({left:-300},2200);

	},

	sc15 : function(){
		var _sc=$('.n3-sc15'),
		_scSwitchBtn=_sc.find('.n3-sc15-slide .switch-box a'),
		_scSlideBox=_sc.find('.n3-sc15-slide .slide-box ul');

		_scSlideBox.css({width: 350 * _scSwitchBtn.size()});

		_scSwitchBtn.click(function(){
			if($(this).hasClass('current')) return false;
			$(this).addClass('current').siblings().removeClass('current');

			_scSlideBox.stop().animate({left: 330 + (-350 * $(this).index())},500)
			.children('li').eq($(this).index()).addClass('bigshow').siblings().removeClass('bigshow');

			return false;
		}).eq(1).click();

		_scSlideBox.children('li').click(function(){
			_scSwitchBtn.eq($(this).index()).click();
			return false;
		});
	},

	sc16 : function(){
		var e={
			section: $(".n3-sc16"),
			slidebox: $(".n3-sc16").find("ul.gallery-box li"),
			switchBtn: $(".n3-sc16").find(".switch-box span a")
		}
		OPPOUIMIX.n3.switchfun(e);
	},

	sc17 : function(){
		var _sc=$('.n3-sc17'),
		_hand=_sc.find('.hands'),
		_screen=_sc.find('.n3-figure .screen'),
		_focus=_sc.find('.n3-figure .focus');


		var movefocus=function(pos){
			_focus.stop().delay(300).animate({left:pos.focus.left,top:pos.focus.top},500);
			_screen.find('img').eq(pos.ind).css({opacity:0,zIndex:2}).stop().delay(300).animate({opacity:1},500).siblings().css({zIndex:1});
			_hand.stop().animate({left:pos.hand.left,top:pos.hand.top},500);
		},
		step1={
			focus : {
				left : 540,
				top : 220
			},
			hand : {
				left : 500,
				top : 570
			},
			ind : 0
		},
		step2={
			focus : {
				left : 250,
				top : 180
			},
			hand : {
				left : 230,
				top : 540
			},
			ind : 1
		};

		setTimeout(function(){
			movefocus(step2);
		},1000);
		setTimeout(function(){
			movefocus(step1);
		},4000);
	},

	sc19 : function(){
		var color1={
			c1 : 'rgb(41,171,231)',
			c2 : 'rgb(88,218,244)'
		},
		color2={
			c1 : 'rgb(109,203,24)',
			c2 : 'rgb(149,217,38)'
		};
		setTimeout(function(){
			OPPOUIMIX.n3.drawArc('n3-sc19-arc1',150,150,150,false,color1,180,8);
			OPPOUIMIX.n3.drawArc('n3-sc19-arc2',150,150,150,false,color2,270,5);
		},1000);
	}
};


function getBrowserVersion(){
	var userAgent = navigator.userAgent.toLocaleUpperCase();
	var msie = /MSIE [\d\.]+/;
	var version = {
		isie6:false,
		ltie8:false,
		ltie9:false
	};
	if (!msie.test(userAgent)) return version;
	var browser = msie.exec(userAgent);
	if (browser<"MSIE 7") version.isie6=true;
	if (browser<"MSIE 8") version.ltie8=true;
	if (browser<"MSIE 9") version.ltie9=true;
	return version;
}

function correctPNG() {
  var arVersion = navigator.appVersion.split("MSIE")
  var version = parseFloat(arVersion[1])
  if ((version >= 5.5 && version < 7.0) && (document.body.filters))
  {
    for(var j=0; j<document.images.length; j++)
    {
      var img = document.images[j]
      var imgName = img.src.toUpperCase()
      if (imgName.toLowerCase().indexOf('.png') > 0)
      {
      	if (!img.width>0) continue;
        var imgID = (img.id) ? "id='" + img.id + "' " : ""
        var imgClass = (img.className) ? "class='" + img.className + "' " : ""
        var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
        var imgStyle = "display:inline-block;" + img.style.cssText
        if (img.align == "left") imgStyle = "float:left;" + imgStyle
        if (img.align == "right") imgStyle = "float:right;" + imgStyle
        if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
        var strNewHTML = "<span " + imgID + imgClass + imgTitle
             + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
             + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
             + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
             img.outerHTML = strNewHTML
             j = j-1
      }
    }
  }   
}