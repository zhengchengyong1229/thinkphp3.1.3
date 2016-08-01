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
					<li id="m1" class="m"><h3><a href="<?php echo U(GROUP_NAME.'/Index/index'));?>"><img src="__PUBLIC__/images/nav1.png"/></a></h3></li>
					<li id="m2" class="m">
						<h3><a href="#"><img src="__PUBLIC__/images/nav2.png"/></a></h3>
						<ul class="sub">
						  <li><a href="<?php echo U(Index/Zixun/dongtai);?>">产业动态</a></li>
						  <li><a href="<?php echo U(Index/Zixun/jujiao);?>">娱乐聚焦</a></li>
						  <li><a href="<?php echo U(Index/Zixun/pianchang);?>">威海片场</a></li>
						  <li><a href="<?php echo U(Index/Zixun/zhengce);?>">政策解读</a></li>
						  <li><a href="<?php echo U(Index/Zixun/dianying);?>">院线电影</a></li>
						</ul>
					</li>
					<li id="m3" class="m">
						<h3><a href="#"><img src="__PUBLIC__/images/nav3.png"/></a></h3>
						<ul class="sub">
						  <li><a href="<?php echo U(Index/Zhonghan/jiaoliu);?>">合作交流</a></li>
						  <li><a href="<?php echo U(Index/Zhonghan/shuchu);?>">影视输出</a></li>
						  <li><a href="<?php echo U(Index/Zhonghan/jishu);?>">技术引进</a></li>
						  <li><a href="<?php echo U(Index/Zhonghan/zuopin);?>">作品引进</a></li>
						  <li><a href="<?php echo U(Index/Zhonghan/tuandui);?>">创意团队</a></li>
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
	
	<!-- 主体内容 -->
	<div class="content">

		<!-- 图标 -->
		<div class="icon">
			<div class="wrap">
				<div class="icon_list">
					<ul>
						<li><a href="#" class="i1">品牌介绍</a></li>
						<li><a href="#" class="i2">学校荣誉</a></li>
						<li><a href="#" class="i3">师资团队</a></li>
						<li><a href="#" class="i4">专业设置</a></li>
						<li><a href="#" class="i5">薇薇视频</a></li>
					</ul>
				</div>
				
			</div>
		</div>
		<!-- 图标结束 -->

		<div class="wrap">
			<div class="pad20">
				<div class="zysz">
					<div class="title">
						<div class="name name_zy"><h3>影视人才</h3>Film talent</div>
						<div class="more"><a href="#">更多 ></a></div>
					</div>
					<div class="con">
						<div class="zy_one">
							<a href="#"><img src="__PUBLIC__/images/hzzy_img.jpg"/></a>
							<div class="zy_nme"><a href="#">全职招聘</a><span class="like">101032人感兴趣</span></div>
							<ul class="kc_list">
								<li><div class="time">1个月</div><span style="background:#439e00;">快</span><a href="makeup/514.html">时尚化妆造型班</a></li>
								<li><div class="time">6个月</div><span style="background:#ff5402;">荐</span><a href="makeup/514.html"><b>时尚化妆造型班</b></a></li>
								<li><div class="time">6个月</div><span style="background:#ff5402;">荐</span><a href="makeup/514.html">时尚化妆造型班</a></li>
								<li><div class="time">1个月</div><span style="background:#adadad;">紧</span><a href="makeup/514.html">时尚化妆造型班</a></li>
							</ul>
						</div>
						<div class="zy_one">
							<a href="#"><img src="__PUBLIC__/images/mjzy_img.jpg"/></a>
							<div class="zy_nme"><a href="#">全职简历</a><span class="like">99532人感兴趣</span></div>
							<ul class="kc_list">
								<li><div class="time">1个月</div><span style="background:#439e00;">快</span><a href="makeup/514.html">时尚化妆造型班</a></li>
								<li><div class="time">6个月</div><span style="background:#ff5402;">荐</span><a href="makeup/514.html"><b>时尚化妆造型班</b></a></li>
								<li><div class="time">6个月</div><span style="background:#ff5402;">荐</span><a href="makeup/514.html">时尚化妆造型班</a></li>
								<li><div class="time">1个月</div><span style="background:#adadad;">紧</span><a href="makeup/514.html">时尚化妆造型班</a></li>
							</ul>
						</div>
						<div class="zy_one mr0">
							<a href="#"><img src="__PUBLIC__/images/tskc_img.jpg"/></a>
							<div class="zy_nme"><a href="#">群演招聘</a><span class="like">76854人感兴趣</span></div>
							<ul class="kc_list">
								<li><div class="time">1个月</div><span style="background:#439e00;">快</span><a href="makeup/514.html">时尚化妆造型班</a></li>
								<li><div class="time">6个月</div><span style="background:#ff5402;">荐</span><a href="makeup/514.html"><b>时尚化妆造型班</b></a></li>
								<li><div class="time">6个月</div><span style="background:#ff5402;">荐</span><a href="makeup/514.html">时尚化妆造型班</a></li>
								<li><div class="time">1个月</div><span style="background:#adadad;">紧</span><a href="makeup/514.html">时尚化妆造型班</a></li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="v_right">
					<div class="join_us">
						<p class="j1">影视人才</p>
						<p class="j2">会员<span>264</span>人</p>
						<a class="j_bot" href="#">会员登录</a>
						<p class="j3"><a href="">【注册会员】</a></p>
					</div>
					<div class="mrt20">
						<div class="cjwt_tit">常见问题</div>
						<ul class="cjwt_list">
							<li>
								<div class="pic"><img src="__PUBLIC__/images/photo.gif"/></div>
								<div class="txt"><span>江苏省南京市网友...</span>说 我想上化妆美甲班学费多少...</div>
							</li>
							<li>
								<div class="pic"><img src="__PUBLIC__/images/photo.gif"/></div>
								<div class="txt"><span>江苏省南京市网友...</span>说 我想上化妆美甲班学费多少...</div>
							</li>
							<li>
								<div class="pic"><img src="__PUBLIC__/images/photo.gif"/></div>
								<div class="txt"><span>江苏省南京市网友...</span>说 我想上化妆美甲班学费多少...</div>
							</li>
							<li>
								<div class="pic"><img src="__PUBLIC__/images/photo.gif"/></div>
								<div class="txt"><span>江苏省南京市网友...</span>说 我想上化妆美甲班学费多少...</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="pad20">
				<div class="title">
					<div class="name name2"><h3>影视动态</h3>News</div>
					<div class="more"><a href="#">更多 ></a></div>
				</div>
				<div class="f4_x"></div>
				<div class="wwdt">
					<div class="l_pic">
						<a href="#"><img src="__PUBLIC__/images/news.jpg"/></a>
						<a href="#">影视演员速成班开课啦，赶紧报名吧！</a>
					</div>
					<div class="c_news">
						<div class="news_first"><h4>热烈祝贺南京薇薇职业学校参赛选手载誉归来！</h4>　　2014年第16届江苏省化妆美甲大赛成功落下帷幕，历经一个月的努力，终于有了令人满意的成果，我校老师不负众望...　<a href="#">[详细]</a>
						</div>
						<div class="news_sj">
							<ul>
								<li><a href="#"><span>2014-06-07</span> 喜讯！~ 青奥组委会特别赠送的吉祥物</a></li>
								<li><a href="#"><span>2014-06-07</span> 喜讯！~ 青奥组委会特别赠送的吉祥物</a></li>
								<li><a href="#"><span>2014-06-07</span> 喜讯！~ 青奥组委会特别赠送的吉祥物</a></li>
							</ul>
						</div>
						<a href="#" class="more">更多学校动态</a>
					</div>
					<div class="r_tw">
						<ul class="r_tw_list">
							<li>
								<div class="pic"><a href="#"><img src="__PUBLIC__/images/news1.jpg"/></a></div>
								<div class="txt"><a href="#">青奥组委会特别赠送的吉祥物</a><span>2014-06-07</span></div>
							</li>
							<li>
								<div class="pic"><a href="#"><img src="__PUBLIC__/images/news2.jpg"/></a></div>
								<div class="txt"><a href="#">青奥组委会特别赠送的吉祥物</a><span>2014-06-07</span></div>
							</li>
						</ul>
						<a href="#" class="more">更多学校动态</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div id="adsBox" class="adsBox mrt20">
				<div class="hd">
					<ul>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<div class="bd">
					<ul>
						<li><a href="#" target="_blank"><img src="__PUBLIC__/images/ad1.jpg" /></a></li>
						<li><a href="#" target="_blank"><img src="__PUBLIC__/images/ad1.jpg" /></a></li>
						<li><a href="#" target="_blank"><img src="__PUBLIC__/images/ad1.jpg" /></a></li>
					</ul>
				</div>
			</div>
			<div class="pad20 slideGroup">
				<div class="title">
					<div class="name name2"><h3>影视设备</h3>Equipment</div>
					<div class="more"><a href="#">更多 ></a></div>
					<div class="clear"></div>
				</div>
				<div class="parHd">
					<ul> 
						<li>拍摄设备</li>
						<li>辅助设备</li>
						<li>后期设备</li>
						<li>其他设备</li>
						<!-- <li>交通工具</li> -->
					</ul>
				</div>
				<div class="parBd">
					<div class="slideBox">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp01.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp02.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp03.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp04.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp05.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp01.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp02.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->

					<div class="slideBox">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp01.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品2</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp02.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品2</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp03.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品2</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp04.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品2</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp05.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品2</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp01.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品2</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp02.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
					
					<div class="slideBox">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp01.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品3</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp02.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品3</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp03.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品3</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp04.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品3</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp05.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品3</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp01.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品3</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp02.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品3</a><span class="eye">140</span></div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->

					<div class="slideBox">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp01.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp02.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp03.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp04.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp05.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp01.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__PUBLIC__/images/zp02.jpg" /></a></div>
								<div class="tit"><a href="#" target="_blank">薇薇学生美甲作品</a><span class="eye">140</span></div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
				</div><!-- parBd End -->
			</div>
			<div class="pad20">
				<div class="title">
					<div class="name name2"><h3>关于我们</h3>About us</div>
					<div class="more"><a href="#">更多 ></a></div>
				</div>
				<div class="f4_x"></div>
				<div class="wwdt">
					<div class="l_pic">
						<a href="#"><img src="__PUBLIC__/images/about.jpg"/></a>
						<a href="#">威海市影视产业服务公共平台</a>
					</div>
					<div class="c_news l2em">
						　　薇薇（IViVi）彩妆美甲职业培训学校是由中国化妆造型大师、全国职业院校技能大赛优秀指导教师寿金丽老师创办，经国家人力资源和社会保障主管部门批准的正规化妆师、美甲师培训学校，也是南京市第一家政府批准的美甲师化妆师职业培训学校。（办学许可证号：3201003011003）.薇薇职校致力于提供优质专业的职业资格与技能教学，是江苏省人社厅化妆师、美甲师、美容师、美发师等职业资格鉴定定点学校、江苏省职业技能鉴定中心各项职业鉴定题库...　<a href="#">[详细]</a>
					</div>
					<div class="r_tw">
						<ul class="about_list">
							<li>
								<div class="pic"><a href="#"><img src="__PUBLIC__/images/i_honor.jpg"/></a></div>
								<div class="txt"><h4><a href="#">荣誉资质</a></h4>薇薇深受市政府的扶持和支持。共获得各类奖项2000多个...</div>
							</li>
							<li>
								<div class="pic"><a href="#"><img src="__PUBLIC__/images/i_sz.jpg"/></a></div>
								<div class="txt"><h4><a href="#">师资力量</a></h4>薇薇拥有专业负责的美容美甲老师20人......</div>
							</li>
							
						</ul>
						<a href="#" class="more2">查看更多</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>


	

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