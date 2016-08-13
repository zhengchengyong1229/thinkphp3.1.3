<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>威海影视产业平台-招聘</title>

<script src="__PUBLIC__/lie/js/FileManagerClass.min_9b0025fd.js"></script>
<link rel="stylesheet" href="__PUBLIC__/lie/css/zhaopin_list_gray_557f9601.css" />
<link rel="stylesheet" href="__PUBLIC__/lie/css/common_21a226d7.css" />

<meta charset="UTF-8" />
<title>威海市影视产业服务公共平台</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="keywords" content="威海影视,威海影视产业,影视产业,影视产业服务,影视服务,影视平台,影视服务平台,威海影视平台,威海影视产业平台,威海影视产业服务平台，影视资讯,产业动态,娱乐聚焦,威海片场,政策解读,院线电影,中韩交流,合作交流,影视输出,技术引进,作品引进,创意团队,影视基地,外景地,录音棚,摄影棚,后处理,创客空间,入驻企业,设备租赁,辅助设备,后期设备,其他设备,交通工具,二手交易,项目合作,项目展示,影视合作,产业融资,IP交流,剧本交易,影视人才,全职招聘,全职简历,群演招聘,群演说明,相关培训,影视档案,威影发展,威影作品,威影人才,非遗影像,威海影像志,影视展播,原创影视,国产影视,欧美影视,亚洲影视" />
<meta name="description" content="威海影视产业服务公共平台是....." />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="__PUBLIC__/images/favicon.png" rel="shortcut icon">
<link href="__PUBLIC__/vivi/css/reset.css" rel="stylesheet" />
<link href="__PUBLIC__/vivi/css/main.css" rel="stylesheet"/>
<script src="__PUBLIC__/vivi/js/jquery.js"></script>
<script src="__PUBLIC__/vivi/js/jquery.SuperSlide.2.1.1.js"></script>  
</head>
<div class="header">

	  <div class="wrap">
		<div class="head_top">
		  <div class="logo fl"><a href="<?php echo U('Index/Index/index');?>"><img src="__PUBLIC__/images/logo.png"/></a></div>
		  <div class="phone fr"><img src="__PUBLIC__/images/phone.jpg"/></div>
		  <div class="clear"></div>
		</div>
	  </div>

	  <div class="nav_bar">
		<div class="wrap">
		  <div class="nav">
			<ul>
			  <li id="m1" class="m">
				<h3 style="line-height:20px;"><a href="<?php echo U('Index/Index/index');?>"><img src="__PUBLIC__/images/nav1.png"/></a></h3>
			  </li>
			  <li id="m2" class="m">
				<h3 style="line-height:20px;"><a href="<?php echo U('Index/Zixun/dongtai');?>"><img src="__PUBLIC__/images/nav2.png"/></a></h3>
				<ul class="sub">
				  <li><a href="<?php echo U('Index/Zixun/dongtai');?>">产业动态</a></li>
				  <li><a href="<?php echo U('Index/Zixun/jujiao');?>">娱乐聚焦</a></li>
				  <li><a href="<?php echo U('Index/Zixun/pianchang');?>">威海片场</a></li>
				  <li><a href="<?php echo U('Index/Zixun/zhengce');?>">政策解读</a></li>
				  <li><a href="<?php echo U('Index/Zixun/dianying');?>">院线电影</a></li>
				</ul>
			  </li>
			  <li id="m3" class="m">
				<h3 style="line-height:20px;"><a href="<?php echo U('Index/Zhonghan/jiaoliu');?>"><img src="__PUBLIC__/images/nav3.png"/></a></h3>
				<ul class="sub">
				  <li><a href="<?php echo U('Index/Zhonghan/jiaoliu');?>">合作交流</a></li>
				  <li><a href="<?php echo U('Index/Zhonghan/shuchu');?>">影视输出</a></li>
				  <li><a href="<?php echo U('Index/Zhonghan/jishu');?>">技术引进</a></li>
				  <li><a href="<?php echo U('Index/Zhonghan/zuopin');?>">作品引进</a></li>
				  <li><a href="<?php echo U('Index/Zhonghan/tuandui');?>">创意团队</a></li>
				</ul>
			  </li>
			  <li id="m4" class="m">
				<h3 style="line-height:20px;"><a href="<?php echo U('Index/Jidi/waijing');?>"><img src="__PUBLIC__/images/nav4.png"/></a></h3>
				 <ul class="sub">
				  <li><a href="<?php echo U('Index/Jidi/waijing');?>">外景地</a></li>
				  <li><a href="<?php echo U('Index/Jidi/luyin');?>">录音棚</a></li>
				  <li><a href="<?php echo U('Index/Jidi/sheying');?>">摄影棚</a></li>
				  <li><a href="<?php echo U('Index/Jidi/houchuli');?>">后处理</a></li>
				  <li><a href="<?php echo U('Index/Jidi/chuangke');?>">创客空间</a></li>
				  <li><a href="<?php echo U('Index/Jidi/qiye');?>">入驻企业</a></li>
				</ul>
			  </li>
			  <li id="m5" class="m">
				<h3 style="line-height:20px;"><a href="<?php echo U('Index/Shebei/paishe');?>"><img src="__PUBLIC__/images/nav5.png"/></a></h3>
				<ul class="sub">
				  <li><a href="<?php echo U('Index/Shebei/paishe');?>">拍摄设备</a></li>
				  <li><a href="<?php echo U('Index/Shebei/fuzhu');?>">辅助设备</a></li>
				  <li><a href="<?php echo U('Index/Shebei/houqi');?>">后期设备</a></li>
				  <li><a href="<?php echo U('Index/Shebei/qita');?>">其他设备</a></li>
				  <li><a href="<?php echo U('Index/Shebei/jiaotong');?>">交通工具</a></li>
				  <li><a href="<?php echo U('Index/Shebei/ershou');?>">二手交易</a></li>
				</ul>
			  </li>
			  <li id="m6" class="m">
				<h3 style="line-height:20px;"><a href="<?php echo U('Index/Xiangmu/zhanshi');?>"><img src="__PUBLIC__/images/nav6.png"/></a></h3>
				<ul class="sub">
				  <li><a href="<?php echo U('Index/Xiangmu/zhanshi');?>">项目展示</a></li>
				  <li><a href="<?php echo U('Index/Xiangmu/hezuo');?>">影视合作</a></li>
				  <li><a href="<?php echo U('Index/Xiangmu/rongzi');?>">产业融资</a></li>
				  <li><a href="<?php echo U('Index/Xiangmu/jiaoliu');?>">IP 交流</a></li>
				  <li><a href="<?php echo U('Index/Xiangmu/juben');?>">剧本交易</a></li>
				</ul>
			  </li>
			  <li id="m7" class="m">
				<h3 style="line-height:20px;"><a href="<?php echo U('Index/Rencai/index');?>"><img src="__PUBLIC__/images/nav7.png"/></a></h3>
				<ul class="sub">
				  <li><a href="<?php echo U('Index/Rencai/more');?>">全职招聘</a></li>
				  <li><a href="<?php echo U('Index/Rencai/jianli');?>">全职简历</a></li>
				  <li><a href="<?php echo U('Index/Rencai/qunyan');?>">群演招聘</a></li>
				  <li><a href="<?php echo U('Index/Rencai/shuoming');?>">群演说明</a></li>
				  <li><a href="<?php echo U('Index/Rencai/peixun');?>">相关培训</a></li>
				</ul>
			  </li>
			  <li id="m8" class="m">
				<h3 style="line-height:20px;"><a href="<?php echo U('Index/Dangan/fazhan');?>"><img src="__PUBLIC__/images/nav8.png"/></a></h3>
				<ul class="sub">
				  <li><a href="<?php echo U('Index/Dangan/fazhan');?>">威影发展</a></li>
				  <li><a href="<?php echo U('Index/Dangan/zuopin');?>">威影作品</a></li>
				  <li><a href="<?php echo U('Index/Dangan/rencai');?>">威影人才</a></li>
				  <li><a href="<?php echo U('Index/Dangan/feiyi');?>">非遗影像</a></li>
				  <li><a href="<?php echo U('Index/Dangan/yingxiangzhi');?>">威海影像志</a></li>
				</ul>
			  </li>
			  <li id="m9" class="m">
				<h3 style="line-height:20px;"><a href="<?php echo U('Index/Zhanbo/yuanchuang');?>"><img src="__PUBLIC__/images/nav9.png"/></a></h3>
				<ul class="sub">
				  <li><a href="<?php echo U('Index/Zhanbo/yuanchuang');?>">原创影视</a></li>
				  <li><a href="<?php echo U('Index/Zhanbo/guochan');?>">国产影视</a></li>
				  <li><a href="<?php echo U('Index/Zhanbo/oumei');?>">欧美影视</a></li>
				  <li><a href="<?php echo U('Index/Zhanbo/yazhou');?>">亚洲影视</a></li>
				</ul>
			  </li>
			</ul>
		  </div>
		</div>
	  </div>
	  <div class="clear"></div>
</div>

<div class="banner">
  <div class="focusBox" style="margin:0 auto">
    <ul class="pic">
       
		 <li style="background:url(/Public/images/b1.jpg) center top no-repeat;"></li>

		 <li style="background:url(/Public/images/b1.jpg) center top no-repeat;"></li>

		 <li style="background:url(/Public/images/b1.jpg) center top no-repeat;"></li>
    </ul>
    <a class="prev" href="javascript:void(0)"></a> <a class="next" href="javascript:void(0)"></a>
    <ul class="hd">
      <li></li>
      <li></li>
      <li></li>
    </ul>
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

<body id="sojob">

<div class="container" style="background:white;margin-top:20px;">
	<div class="wrap" style="width:980px; margin-top:20px;">
		<div class="job-content">
			<div class="sojob-result">
				<ul class="sojob-list">   
					
					<?php if(is_array($qlist)): $i = 0; $__LIST__ = $qlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<i class="icon icon-yellow-triangle" title="企业直招职位保证真实有效"><b>企</b></i>    
							<div class="sojob-item-main clearfix">
								<div class="job-info" >
									<h3 title="<?php echo ($vo["biaoti"]); ?>" >
										<a href="__URL__/alist/id/<?php echo ($vo['id']); ?>" target="_blank">
											<?php echo ($vo["biaoti"]); ?>
										</a>  
									</h3>
									  
									<p class="condition clearfix" title="">
										<span class="text-warning">
											<?php switch($vo['yuexin']){ case 0: echo '面议'; break; case 1: echo '2000元-4000元'; break; case 2: echo '4001元-6000元'; break; case 3: echo '6001元-8000元'; break; case 4: echo '8001元-10000元'; break; case 5: echo '10000元以上'; break;} ?>
										</span>
										
										<a data-selector="data-url" class="area">
											<?php switch($vo['address']){ case 0: echo '威海'; break; case 1: echo '文登'; break; case 2: echo '荣成'; break; case 3: echo '乳山'; break; case 4: echo '其他'; break;} ?>
										</a>
										
										<span class="edu">
											<?php switch($vo['xueli']){ case 0: echo '学历不限'; break; case 1: echo '高中以上'; break; case 2: echo '大专以上'; break; case 3: echo '本科以上'; break; case 4: echo '硕士以上'; break; case 5: echo '硕博士以上'; break;} ?>
										</span>
										<span>
											<?php switch($vo['jingyan']){ case 0: echo '经验不限'; break; case 1: echo '1年以上经验'; break; case 2: echo '2年以上经验'; break; case 3: echo '3年以上经验'; break; case 4: echo '5年以上经验'; break; case 5: echo '10年以上经验'; break;} ?>
										</span>
									</p>
									<p class="time-info clearfix">
										<time>发布时间：<?php echo (date('Y-m-d H:i:s',$vo["regtime"])); ?></time>
									</p>
								</div>
								
								
								<div class="company-info" >
									<p class="company-name">
										<a title="<?php echo ($vo["xname"]); ?>" target="_blank">
										<?php echo ($vo["xname"]); ?></a>
									</p>
									<p class="field-financing">
										<span><?php echo ($vo["jingying"]); ?></span>	
									</p>
								  
									<p class="temptation clearfix">
									
										<?php if(isset($vo['wuxian'])){echo "<span>五险一金</span>";} ?>
												
										<?php if(isset($vo['jieri'])){echo "<span>节日福利</span>";} ?>
												
										<?php if(isset($vo['jiaotong'])){echo "<span>交通补助</span>";} ?>
												
										<?php if(isset($vo['tongxun'])){echo "<span>通讯补助</span>";} ?>
												
										<?php if(isset($vo['canbu'])){echo "<span>餐补</span>";} ?>
												
										<?php if(isset($vo['baochi'])){echo "<span>包吃</span>";} ?>
												
										<?php if(isset($vo['baozhu'])){echo "<span>包住</span>";} ?>
												
										<?php if(isset($vo['fenhong'])){echo "<span>年底分红</span>";} ?>
												
										<?php if(isset($vo['nianjia'])){echo "<span>带薪年假</span>";} ?>
												
										<?php if(isset($vo['tijian'])){echo "<span>定期体检</span>";} ?>
												
									</p>
								</div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>

				<div style="text-align:center;margin:20px 0px;"><?php echo ($page); ?></div>
				  
			</div>
		</div>
	</div>
</div>

<div class="footer">
	<div class="wrap">
		<div class="pad15">
			<div class="tr mr15" style="text-align:center;">Copyright 2016 All rights reserved 威海市影视产业服务公共平台 版权所有<br/> 
	地　址：山东省威海市高山街29号 电　话：0631-5275058<br/>         
	鲁ICP备08102547号 技术支持：威海财经网</div>
		</div>
	</div>
</div>


</body>
</html>