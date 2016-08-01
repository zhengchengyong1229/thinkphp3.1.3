<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
<title>威海市影视产业服务公共平台</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="__PUBLIC__/css/reset.css" rel="stylesheet" />
<link href="__PUBLIC__/css/main.css" rel="stylesheet"/>
<script src="__PUBLIC__/js/jquery.js"></script> 
<script src="__PUBLIC__/js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<body>
	<!-- 头部 -->
	<div class="header">
	<!-- LOGO -->
	<div class="wrap">
		<div class="head_top">
			<div class="logo fl"><a href="#"><img src="__PUBLIC__/images/logo.png"/></a></div>
			<div class="phone fr"><a href="#"><img src="__PUBLIC__/images/phone.jpg"/></a></div>
			<div class="clear"></div>
		</div>
	</div>
	<!-- 导航条 -->
	<div class="nav_bar">
		<div class="wrap">
			<div class="nav">
				<ul>
					<li id="m1" class="m"><h3><a href="<?php echo U('Index/Index/index');?>"><img src="__PUBLIC__/images/nav1.png"/></a></h3></li>
					<li id="m2" class="m">
						<h3><a href="#"><img src="__PUBLIC__/images/nav2.png"/></a></h3>
						<ul class="sub">
						  <li><a href="<?php echo U('Index/Zixun/dongtai');?>">产业动态</a></li>
						  <li><a href="<?php echo U('Index/Zixun/jujiao');?>">娱乐聚焦</a></li>
						  <li><a href="<?php echo U('Index/Zixun/pianchang');?>">威海片场</a></li>
						  <li><a href="<?php echo U('Index/Zixun/zhengce');?>">政策解读</a></li>
						  <li><a href="<?php echo U('Index/Zixun/dianying');?>">院线电影</a></li>
						</ul>
					</li>
					<li id="m3" class="m">
						<h3><a href="#"><img src="__PUBLIC__/images/nav3.png"/></a></h3>
						<ul class="sub">
						  <li><a href="<?php echo U('Index/Zhonghan/jiaoliu');?>">合作交流</a></li>
						  <li><a href="<?php echo U('Index/Zhonghan/shuchu');?>">影视输出</a></li>
						  <li><a href="<?php echo U('Index/Zhonghan/jishu');?>">技术引进</a></li>
						  <li><a href="<?php echo U('Index/Zhonghan/zuopin');?>">作品引进</a></li>
						  <li><a href="<?php echo U('Index/Zhonghan/tuandui');?>">创意团队</a></li>
						</ul>
					</li>
					<li id="m4" class="m">
						<h3><a href="#"><img src="__PUBLIC__/images/nav4.png"/></a></h3>
						<ul class="sub">
						  <li><a href="#">外景地</a></li>
						  <li><a href="#">录音棚</a></li>
						  <li><a href="#">摄影棚</a></li>
						  <li><a href="#">后处理</a></li>
						  <li><a href="#">创客空间</a></li>
						  <li><a href="#">入驻企业</a></li>
						</ul>
					</li>
					<li id="m5" class="m">
						<h3><a href="#"><img src="__PUBLIC__/images/nav5.png"/></a></h3>
						<ul class="sub">
						  <li><a href="#">拍摄设备</a></li>
						  <li><a href="#">辅助设备</a></li>
						  <li><a href="#">后期设备</a></li>
						  <li><a href="#">其他设备</a></li>
						  <li><a href="#">交通工具</a></li>
						  <li><a href="#">二手交易</a></li>
						</ul>
					</li>
					<li id="m6" class="m">
						<h3><a href="#"><img src="__PUBLIC__/images/nav6.png"/></a></h3>
						<ul class="sub">
						  <li><a href="#">项目展示</a></li>
						  <li><a href="#">影视合作</a></li>
						  <li><a href="#">产业融资</a></li>
						  <li><a href="#">IP 交流</a></li>
						  <li><a href="#">剧本交易</a></li>
						</ul>
					</li>
					<li id="m7" class="m">
						<h3><a href="#"><img src="__PUBLIC__/images/nav7.png"/></a></h3>
						<ul class="sub">
							  <li><a href="#">全职招聘</a></li>
							  <li><a href="#">全职简历</a></li>
							  <li><a href="#">群演招聘</a></li>
							  <li><a href="#">群演说明</a></li>
							  <li><a href="#">相关培训</a></li>
						</ul>
					</li>
					<li id="m8" class="m">
						<h3><a href="#"><img src="__PUBLIC__/images/nav8.png"/></a></h3>
						<ul class="sub">
							  <li><a href="#">威影发展</a></li>
							  <li><a href="#">威影作品</a></li>
							  <li><a href="#">威影人才</a></li>
							  <li><a href="#">非遗影像</a></li>
							  <li><a href="#">威海影像志</a></li>
						</ul>
					</li>
					<li id="m9" class="m">
						<h3><a href="#"><img src="__PUBLIC__/images/nav9.png"/></a></h3>
						<ul class="sub">
							  <li><a href="#">原创影视</a></li>
							  <li><a href="#">国产影视</a></li>
							  <li><a href="#">欧美影视</a></li>
							  <li><a href="#">亚洲影视</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- <div class="search">
				<div class="s_pad">
					<form id="form1" name="form1" method="post" action="#">
						<input type="text" name="search" id="search" value="" class="ss_txt"/>
						<input type="button" name="dl" id="button" value="" class="ss_bott" onClick="CheckPass1()" hidefocus />
					</form>
				</div>
			</div> -->
			<div class="clear"></div>
		</div>
	</div>
	<!-- 导航结束 -->
</div>


<!-- 轮播图 -->
<div class="banner">
	<div class="focusBox">
		<ul class="pic">
			<li style="background:url(__PUBLIC__/images/b1.jpg) center top no-repeat;"><a href="#"></a></li>
			<li style="background:url(__PUBLIC__/images/b1.jpg) center top no-repeat;"><a href="#"></a></li>
			<li style="background:url(__PUBLIC__/images/b1.jpg) center top no-repeat;"><a href="#"></a></li>
		</ul>
		<a class="prev" href="javascript:void(0)"></a>
		<a class="next" href="javascript:void(0)"></a>
		<ul class="hd">
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>
<!-- 轮播图结束 -->

<!-- The Scripts -->
<script type="text/javascript">
jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});//banner图
jQuery(".nav").slide({ type:"menu",  titCell:".m", targetCell:".sub", effect:"slideDown", delayTime:300, triggerTime:100,returnDefault:true  });//导航

jQuery(".slideGroup .slideBox").slide({ mainCell:"ul",vis:5,prevCell:".sPrev",nextCell:".sNext",effect:"leftLoop"});
/* 外层tab切换 */
jQuery(".slideGroup").slide({titCell:".parHd li",mainCell:".parBd"});

jQuery(".adsBox").slide({mainCell:".bd ul",effect:"fold",autoPlay:true});/*广告按钮*/
</script>
	<!-- /头部 -->
	
	<!-- 主体 -->
	
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/flexslider.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="__PUBLIC__/images/favicon.ico" type="image/x-icon" />
<script src="__PUBLIC__/js/jquery-1.8.3.min.js"></script> 
<script src="__PUBLIC__/js/jquery.flexslider-min.js"></script>
<link href="__PUBLIC__/css/content.css" rel="stylesheet" type="text/css" />

<div class="ah">
    <div class="bg ah">
		<div class="wrap cf list0">
		<ul>
			<dl>
				<dt><a href=""><img src="__PUBLIC__/images/pixel.gif" data-original="__PUBLIC__/images/picture/1.jpg" alt="" class="lazy"/></a><dt>
				<dd><h4 class=""><a href="" title="">剧版《致青春》定档711 爆款IP领跑暑期档</a></h4>
				</dd>
			</dl>
        </ul>
		<ul>
			<dl>
				<dt><a href=""><img src="__PUBLIC__/images/pixel.gif" data-original="__PUBLIC__/images/picture/2.jpg" alt="" class="lazy"/></a><dt>
				<dd><h4 class=""><a href="" title="">华视娱乐出席2016上海电影节“互联网电影上海高峰会”业内领军人物反思网络热词</a></h4>
				</dd>
			</dl>
        </ul>
		<ul>
			<dl>
				<dt><a href=""><img src="__PUBLIC__/images/pixel.gif" data-original="__PUBLIC__/images/picture/3.jpg" alt="" class="lazy"/></a><dt>
				<dd><h4 class=""><a href="" title="">最青春剧组红毯吸睛 《六弄咖啡馆》上影节红毯首聚</a></h4>
				</dd>
			</dl>
        </ul>
		<ul>
			<dl>
				<dt><a href=""><img src="__PUBLIC__/images/pixel.gif" data-original="__PUBLIC__/images/picture/4.jpg" alt="" class="lazy"/></a><dt>
				<dd><h4 class=""><a href="/index.php/content/index/pid/5/cid/189.html" title="">《六弄咖啡馆》口碑爆棚 获上影节传媒关注两大殊荣</a></h4>
				</dd>
			</dl>
        </ul>
		<ul>
			<dl>
				<dt><a href=""><img src="__PUBLIC__/images/pixel.gif" data-original="__PUBLIC__/images/picture/5.jpg" alt="" class="lazy"/></a><dt>
				<dd><h4 class=""><a href="" title="">阿里影业携手华视盛典 《激荡三十年》将搬上大银幕</a></h4>
				</dd>
			</dl>
        </ul>
		<ul>
			<dl>
				<dt><a href=""><img src="__PUBLIC__/images/pixel.gif" data-original="__PUBLIC__/images/picture/1.jpg" alt="" class="lazy"/></a><dt>
				<dd><h4 class=""><a href="" title="">华视娱乐出品台湾最强青春IP《六弄咖啡馆》 曝“弄青春”先导预告及海报</a></h4>
				</dd>
			</dl>
        </ul>
		</div>
	</div>
</div>
<script src="__JS__/jquery.lazyload.min.js" language="javascript"></script>
<script src="__JS__/blocksit.min.js" language="javascript"></script>
<script>
<!--
$(function() {
    $("img.lazy").lazyload({
        load:rz
    });
	function rz(){
		var w=$(window).width();
		var nc=4;
		if(w>=1200){
			nc=4;
		}else if(w<1200 && w>=800){
			nc=3;
		}else if(w<800 && w>=400){
			nc=2;
		}else{
			nc=1;
		}
		$('.list0').BlocksIt({
			numOfCol:nc,
			offsetX: 10,
			offsetY: 10,
			blockElement: '.list0 ul'
		});
	}
	$(window).resize(rz);
	rz();
});	
-->
</script></div>




	<!-- /主体 -->

	<!-- 底部 -->
	<div class="footer">
	<div class="wrap">
		<div class="pad15">
			<div class="tr mr15">Copyright 2016 All rights reserved 威海市影视产业服务公共平台 版权所有<br/> 
	地　址：山东省威海市高山街29号 电　话：0631-5275058<br/>         
	鲁ICP备08102547号 技术支持：威海财经网</div>
		</div>
	</div>
</div>
	<!-- /底部 -->
</body>
</html>