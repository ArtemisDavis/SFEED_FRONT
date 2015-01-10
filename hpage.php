<html>

<head>

<title>SFEED</title>

<style>
@font-face {
    font-family:"high School USA Sans";
    src: url(High School USA Sans_0.ttf);
}
body
{
	padding:0;
	margin:0;
	overflow-x:hidden;
}

#container
{
	height:100%;
	width:100%;
	position:relative;
	font-family:"high School USA Sans";
}

#layer1
{
	z-index:10;
	height:100%;
	width:100%;
	position:absolute;
	text-align:center;
	overflow:hidden;
}

#layer2
{
	position:absolute;
	z-index:20;
	height:100%;
	width:100%;
}

#layer3
{
	position:absolute;
	height:100%;
	width:100%;
	z-index:40;
	background-color:rgba(0,0,0,0.95);
	text-align:center;
	opacity:1;
}

#sfeed_ban
{
	font-size:150px;
	font-weight:bold;
	color:#FFF;
}

#nitt_ban
{
	font-size:100px;
	color:#CCC;
}

#prev
{
	background-color:rgba(0,0,0,0.5);
	float:left;
	height:5%;
	width:5%;
	color:#FFF;
	text-align:center;
	font-size:25px;
}

#next
{
	background-color:rgba(0,0,0,0.5);
	float:right;
	color:#FFF;
	height:5%;
	width:5%;
	text-align:center;
	font-size:25px;
}

#sprt_ban
{
	font-size:150px;
	color:rgba(0,0,0,0.7);
	height:25%;
	width:100%;
	float:left;
}

#sport_panel
{
	position:relative;
	height:100%;
	width:100%;
}

#sports_cont_1
{
	height:70%;
	width:100%;
	float:left;
	position:absolute;
	z-index:0;
	margin-top:12%;
	margin-left:7%;
}

#sports_cont_2
{
	height:70%;
	width:100%;
	float:left;
	position:absolute;
	opacity:0;
	z-index:-10;
	margin-top:12%;
	margin-left:7%;
}

.rects
{
	float:left;
	height:100%;
	width:12%;
	background-color:#666;
	background-size:cover;
	display:inline-block;
	margin-left:2%;
	position:relative;
	
}
.transp
{
	height:100%;
	width:100%;
	background-color:#FFF;
	opacity:0.5;
}

#write
{
	visibility:hidden;
	width:100%;
	height:40%;
	background-size:cover;
	z-index:5;
	position:absolute;
}

#write img
{
	height:100%;
	width:100%;
}
	
.rects:hover{
	-webkit-animation:scl 2s ;
	-webkit-animation-fill-mode:forwards;
}

.rects:hover #write{
	visibility:visible;
}

@-webkit-keyframes scl{
	0%   {-webkit-transform:scale(1,1);
	}
	100% {-webkit-transform:scale(1.1,1.1)}
	
}
.rects:hover .transp{
  -webkit-animation:trsp 2s;
  -webkit-animation-iteration-count:1;
  -webkit-animation-fill-mode:forwards;
  
}

@-webkit-keyframes trsp{
	0%  {opacity:0.5;}
  100%  {opacity:0}
}

#capt_ban
{
	color:#090;
}

</style>

</head>

<body>

<div id="container">

	<div id="layer1">
    
    	<span id="sprt_ban">SPORTS FEED</span>
        
        <div id="sport_panel">
        
        <div id="sports_cont_1" style="opacity:1">
        
        	<a href="./bavya/football2.php?id=2" style="text-decoration:none">
			<div class="rects" style="background-image:url(Res/fbl2.jpg)">
			<div id="write">
			<img src="Res/fbl_1.jpg"/>
			</div>
			<div class="transp"></div>
			</div>
			</a>
            
            <a href="./badminton/badminton.php?id=4" style="text-decoration:none">
            <div class="rects" style="background-image:url(Res/bd1.jpg)">
            <div id="write" >
            <img src="Res/bdm_1.jpg"/></div>
            <div class="transp"></div>
            </div>
            </a>
            
            <a href="./SFEED_Voleyball/index-2.php?id=3" style="text-decoration:none">
            <div class="rects" style="background-image:url(Res/vb1.jpg)">
            <div id="write" >
            <img src="Res/vbl_1.jpg"></div>
            <div class="transp"></div>
            </div>
            </a>
            <a href="" style="text-decoration:none">
            <div class="rects" style="background-image:url(Res/cric1.jpg)">
            <div id="write" >
            <img src="Res/crc_1.jpg">
            </div>
            <div class="transp"></div>
            </div>
            </a>
            <a href="./handball/handball.php?id=5" style="text-decoration:none">
            <div class="rects" style="background-image:url(Res/hb1.jpg)">
            <div id="write" >
            <img src="Res/hbl_1.jpg">
            </div>
            <div class="transp"></div>
            </div>
            </a>
            <a href="./hockey/hockey.php?id=6" style"text-decoration:none">
            <div class="rects" style="background-image:url(Res/hk1.jpg)">
            <div id="write" >
            <img src="Res/hk_1.jpg">
            </div>
            <div class="transp"></div>
            </div>
            </a>
        </div>
        
        <div id="sports_cont_2" style="opacity:0;">
        	
        	<a href="" style="text-decoration:none">
        	<div class="rects" style="backgro
        	und-image:url(Res/bb1.jpg)">
            <div id="write" >
            <img  src="Res/bbl_1.jpg">
            </div>
            <div class="transp"></div>
            </div>
            </a>

            <a href="./chess/testindex.php?id=8" style="text-decoration:none">
            <div class="rects" style="background-image:url(Res/chess-1.jpg)">
            <div id="write" >
            <img  src="Res/che-1.jpg">
            </div>
            <div class="transp"></div>
            </div>
        </a>
            
            <a href="./swimming/index.php?id=7" style="text-decoration:none">
            <div class="rects" style="background-image:url(Res/sw-1.jpg)">
            <div id="write" >
            <img  src="Res/swi-1.jpg">
            </div>
            <div class="transp"></div>
            </div>
            </a>
            <a href="" style="text-decoration:none">
            <div class="rects" style="background-image:url(Res/ncc-1.jpg)">
            <div id="write" >
            <img  src="Res/ncc_w-1.jpg">
            </div>
            <div class="transp"></div>
            </div>
        </a>
        </div>
        
        </div>
    </div>
    
    <div id="layer2">
    	</br></br></br></br></br>
        </br></br></br></br></br>
        </br></br></br></br></br>
	    <div id="prev">
   		 PREV
    	</div>
    
   		<div id="next">
      	 NEXT
    	</div>
    
    </div>
    
    <div id="layer3" style="opacity:1">
    	<span id="nitt_ban">NATIONAL INSTITUTE OF TECHNOLOGY, TRICHY</span></br><span id="sfeed_ban">SFEED</span></br><span id="capt_ban">Click to continue</span></br>
    </div>
    
</div>

</body>

<script>

var xvar;
var vyar;
var chk;
var l3=document.getElementById("layer3");
document.getElementById("layer3").onclick=function()
{
	var stp=setInterval(function(){

			if(parseFloat(l3.style.opacity)-0.03>0)
			{l3.style.opacity=parseFloat(l3.style.opacity)-0.03;	
			}
			else
			{
				l3.style.opacity=0;
				l3.style.zIndex=10;
				document.getElementById("layer1").style.zIndex=40;
				clearInterval(stp);
			}
		
},1);
};

/*document.addEventListener("mousemove",function(e){
	xvar=e.clientX||e.pageX;
	vyar=e.clientY||e.pageY;
	
	chk = document.elementFromPoint(xvar, vyar);
	
	for(var i=0;i<10;i++)
	{
	    if(document.getElementsByClassName("transp").item(i)==chk)
	    {
	     var par=chk.parentNode;
	    	
	     if((par.children[0]))
	     {
		 var chld=par.children[0];
		 chld.style.visibility="visible";
	     }
		}
		else
	    { 
		 var par=document.getElementsByClassName("transp").item(i).parentNode;
	     par.children[0];
		
	     if((par.children[0].getAttribute('id'))=="write")
	     {
		 var chld=par.children[0];
		 chld.style.visibility="hidden";
	     }
		
			 
		}
	
	
	}
});*/

var ele;
var p1=document.getElementById("sports_cont_1");
var p2=document.getElementById("sports_cont_2");
var next=document.getElementById("next");
var prev=document.getElementById("prev");
document.body.onclick=function(e){
	ele=document.elementFromPoint(e.clientX,e.clientY);
	var xc=e.clientX;
	var yc=e.clientY;
	var stp;
	
	if(xc>next.offsetLeft && xc<(next.clientWidth+next.offsetLeft) && yc>next.offsetTop && yc<(next.clientHeight+next.offsetTop))
	{
		stp=setInterval(function(){

			if(parseFloat(p1.style.opacity)-0.03>0)
			{p1.style.opacity=parseFloat(p1.style.opacity)-0.03;	
			}
			else
			{
				p1.style.opacity=0;
				p1.style.zIndex=-10;
				clearInterval(stp);
				stp=setInterval(function(){

				if(parseFloat(p2.style.opacity)+0.03<1)
				{p2.style.opacity=parseFloat(p2.style.opacity)+0.03;	
				}
				else
				{
					p2.style.zIndex=0;
					p2.style.opacity=1;
					prev.style.backgroundColor="rgba(0,0,0,0.9)";
					next.style.backgroundColor="rgba(0,0,0,0.5)";
					clearInterval(stp);
				}
		
				},1);
			}
		
		},1);
	}
	
	else if(xc>prev.offsetLeft && xc<(prev.clientWidth+prev.offsetLeft) && yc>prev.offsetTop && yc<(prev.clientHeight+prev.offsetTop))
	{
		clearInterval(stp);
		stp=setInterval(function(){

			if(parseFloat(p2.style.opacity)-0.03>0)
			{p2.style.opacity=parseFloat(p2.style.opacity)-0.03;	
			}
			else
			{
				p2.style.opacity=0;
				p2.style.zIndex=-10;
				clearInterval(stp);
				stp=setInterval(function(){

				if(parseFloat(p1.style.opacity)+0.03<1)
				{p1.style.opacity=parseFloat(p1.style.opacity)+0.03;	
				}
				else
				{
					p1.style.zIndex=0;
					p1.style.opacity=1;
					next.style.backgroundColor="rgba(0,0,0,0.9)";
					prev.style.backgroundColor="rgba(0,0,0,0.5)";
					clearInterval(stp);
				}
		
				},1);
			}
		
		},1);
	}

	
	
};

</script>

</html>