<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<title>填写招聘信息</title>

<!--#set var='compatible' value=''-->

<script src="__PUBLIC__/lie/js/loader_6de14b93.js"></script>
<script src="__PUBLIC__/lie/js/common_dcf5528f.js"></script>
<link rel="stylesheet" href="__PUBLIC__/lie/css/common_246ab9a7.css" />
<link rel="stylesheet" href="__PUBLIC__/lie/css/page.job_e41bc26f.css" />
<style type="text/css">
table{border-collapse: collapse;}
td{width:100px;padding:5px;}
tr{
	display:block; /*将tr设置为块体元素*/
	margin:15px 0;  /*设置tr间距为2px*/
	}
</style>


<script type="text/javascript">
	window.UEDITOR_HOME_URL = '__ROOT__/Data/Ueditor/';
	window.onload = function () {
		window.UEDITOR_CONFIG.initialFrameHeight = 400;
		window.UEDITOR_CONFIG.initialFrameWidth = 900;
		window.UEDITOR_CONFIG.imageUrl = "<?php echo U(GROUP_NAME.'/Member/upload');?>";
		window.UEDITOR_CONFIG.imagePath = '__ROOT__/uploads/';
		window.UEDITOR_CONFIG.imageCompressEnable = true;
		window.UEDITOR_CONFIG.imageCompressBorder = 616;
		UE.getEditor('content');
	}
</script>
<script src="__ROOT__/Data/Ueditor/ueditor.config.js"></script>
<script src="__ROOT__/Data/Ueditor/ueditor.all.min.js"></script>




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
<body data-navbar="job">

	
	<div id="job-view-enterprise">
		<div class="wrap clearfix" style="width:980px;">
			
			<div class="main" style="margin-bottom:0px;width:980px;">
				<div class="about-position" style="margin-bottom:10px;">

					<div class="title-info" style="width:740px;">
						
						<h1 title="">填写招聘信息</h1>
						<h3>
						
							<a href="" data-promid="" target="_blank"
								title=""></a>
						</h3>
						
						<span class="triangle"></span>
					</div>
	

					<form action="<?php echo U(GROUP_NAME.'/Rencai/addzhaopin');?>" method="post" enctype="multipart/form-data" style="margin-top:30px;padding:0px 30px;" name='gedit' item='v'>
						<table>
							<tr>
								<td style="text-align: center;font-size: 20px;">招聘标题：</td>
								<td><input type="text" name="biaoti" style="line-height: 25px;width: 300px;" value=""/></td>
							</tr>
							<tr>
								<td style="text-align: center;font-size: 20px;">工作地点：</td>
								<td style="width:120px;">
									<select name="address"  style="width:80px;font-size:16px;">
									  <option value ="0">威海</option>
									  <option value ="1">文登</option>
									  <option value ="2">荣成</option>
									  <option value ="3">乳山</option>
									  <option value ="4">其他</option>
									</select>
								</td>
							</tr>
							<tr>
								<td style="text-align: center;font-size: 20px;">最低学历：</td>
								<td style="width:120px;">
									<select name="xueli"  style="width:100px;font-size:16px;">
									  <option value ="0">学历不限</option>
									  <option value ="1">高中</option>
									  <option value ="2">大专</option>
									  <option value ="3">本科</option>
									  <option value ="4">硕士</option>
									  <option value ="5">博士</option>
									</select>
								</td>
							</tr>
							<tr>
								<td style="text-align: center;font-size: 20px;">工作经验：</td>
								<td style="width:190px;">
									<select name="jingyan"  style="width:160px;font-size:16px;">
									  <option value ="0">不限</option>
									  <option value ="1">1年以上经验</option>
									  <option value ="2">2年以上经验</option>
									  <option value ="3">3年以上经验</option>
									  <option value ="4">5年以上经验</option>
									  <option value ="5">10年以上经验</option>
									</select>
								</td>
							</tr>
							<tr>
								<td style="text-align: center;font-size: 20px;">招聘人数：</td>
								<td><input type="text" name="renshu" style="line-height: 25px;width: 300px;" value=""/></td>
							</tr>
							<!-- <tr>
								<td style="text-align: center;font-size: 20px;">婚姻：</td>
								<td style="width:300px;">
									<input type="radio" name="hunyin" value="1" checked="checked" style="width:auto;"/>&nbsp;<strong>未婚</strong>&nbsp;
									<input type="radio" name="hunyin" value="0" style="width:auto;"/>&nbsp;<strong>已婚</strong>
								</td>
							</tr> -->
							<tr>
								<td style="text-align: center;font-size: 20px;">职位月薪：</td>
								<td style="width:190px;">
									<select name="yuexin"  style="width:160px;font-size:16px;">
									  <option value ="0">&nbsp;面议</option>
									  <option value ="1">2000元-4000元</option>
									  <option value ="2">4001元-6000元</option>
									  <option value ="3">6001元-8000元</option>
									  <option value ="4">8001元-10000元</option>
									  <option value ="5">10001元以上</option>
									</select>
								</td>
							</tr>
							<tr>
								<td style="text-align: center;font-size: 20px;">联系人：</td>
								<td><input type="text" name="lianxiren" style="line-height: 25px;width: 300px;"/></td>
							</tr>
							<tr>
								<td style="text-align: center;font-size: 20px;">联系电话：</td>
								<td><input type="text" name="tel" style="line-height: 25px;width: 300px;"/></td>
							</tr>
							<tr>
								<td style="text-align: center;font-size: 20px;">专业要求：</td>
								<td><input type="text" name="zhuanye" style="line-height: 25px;width: 300px;"/></td>
							</tr>
							<tr>
								<td style="text-align: center;font-size: 20px;">所属部门：</td>
								<td><input type="text" name="bumen" style="line-height: 25px;width: 300px;"/></td>
							</tr>
							<tr>
								<td style="text-align: center;font-size: 20px;">汇报对象：</td>
								<td><input type="text" name="shangji" style="line-height: 25px;width: 300px;"/></td>
							</tr>
							<tr>
								<td style="text-align: center;font-size: 20px;">福利：</td>
								<td style="width:560px;">
								<input type="checkbox" name="wuxian" value="1" style="line-height: 25px;width:auto;margin:10px 0px;"/>&nbsp;<span style="font-size:16px;">五险一金</span>&nbsp;&nbsp;
								<input type="checkbox" name="jieri" value="1" style="line-height: 25px;width:auto;margin:10px 0px;"/>&nbsp;<span style="font-size:16px;">节日福利</span>&nbsp;&nbsp;
								<input type="checkbox" name="jiaotong" value="1" style="line-height: 25px;width:auto;margin:10px 0px;"/>&nbsp;<span style="font-size:16px;">交通补助</span>&nbsp;&nbsp;
								<input type="checkbox" name="tongxun" value="1" style="line-height: 25px;width:auto;margin:10px 0px;"/>&nbsp;<span style="font-size:16px;">通讯补助</span>&nbsp;&nbsp;
								<input type="checkbox" name="canbu" value="1" style="line-height: 25px;width:auto;margin:10px 0px;"/>&nbsp;<span style="font-size:16px;">餐补</span>&nbsp;&nbsp;
								<input type="checkbox" name="baochi" value="1" style="line-height: 25px;width:auto;margin:10px 0px;"/>&nbsp;<span style="font-size:16px;">包吃</span>&nbsp;&nbsp;
								<input type="checkbox" name="baozhu" value="1" style="line-height: 25px;width:auto;margin:10px 0px;"/>&nbsp;<span style="font-size:16px;">包住</span>&nbsp;&nbsp;
								<input type="checkbox" name="fenhong" value="1" style="line-height: 25px;width:auto;margin:10px 0px;"/>&nbsp;<span style="font-size:16px;">年终分红</span>&nbsp;&nbsp;
								<input type="checkbox" name="nianjia" value="1" style="line-height: 25px;width:auto;margin:10px 0px;"/>&nbsp;<span style="font-size:16px;">带薪年假</span>&nbsp;&nbsp;
								<input type="checkbox" name="tijian" value="1" style="line-height: 25px;width:auto;margin:10px 0px;"/>&nbsp;<span style="font-size:16px;">定期体检</span>&nbsp;&nbsp;
								</td>
							</tr>
							<!-- <tr>
								<td style="text-align: center;font-size: 20px;">头像：</td>
								<td><input type="file" name="file" style="line-height: 25px;width: 300px;"/></td>
							</tr> -->
							<tr>
								<td colspan="2" style="width:960px;text-align: center;font-size: 20px;">职位描述</td>
							</tr>
							<tr>
								<td colspan="2"><textarea name="content" id="content"></textarea></td>
							</tr>
							<!-- <tr>
								<td style="text-align: center;font-size: 20px;">自我评价</td>
								<td><textarea name="" id="" cols="30" rows="10"></textarea></td>
							</tr> -->
							<tr>
								<td colspan="2" style="width:960px;text-align: center;font-size: 20px;">
									<input type="submit" name="submit" value="提&nbsp;交" style="width:100px;line-height:35px;border:0;background-image:url(/Public/images/nv1.png);"/>	
								</td>
							</tr>
						</table>
					</form>

			
					
					
					
					<!-- <div class="job-resume-block "
						data-selector="job-resume-block"></div>
						<div class="report-area">
							<a class="close-btn" href="javascript:;" data-selector="report-close-btn">&times;</a>
							<h4>威海影视产业平台温馨提示：</h4>
							<p>
								如在投递及面试过程中遇到招聘方的任何收费行为（ 如培训费、 体检费、 资料费、 置装费、 押金等），则存在诈骗风险，请您务必提高警惕。
								
								
							</p>
						</div>
					</div>
 -->
				
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