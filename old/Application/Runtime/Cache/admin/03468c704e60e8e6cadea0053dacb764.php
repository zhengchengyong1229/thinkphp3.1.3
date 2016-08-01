<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台管理中心</title>
<meta name="Copyright" content="Douco Design." />
<link href="__PUBLIC__/css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/global.js"></script>
<script type="text/javascript" src="__PUBLIC__js/jquery.tab.js"></script>
</head>
<div id="dcWrap"> 
	<div id="dcHead">
		<div id="head">
			<div class="logo"><a href="index.html"><img src="__PUBLIC__/images/dclogo.gif" alt="logo"></a></div>
			<div class="nav">
				<ul>
					<li class="M">
						<a href="JavaScript:void(0);" class="topAdd">新建</a>
						<div class="drop mTopad">
							<a href="product.php?rec=add">商品</a>
							<a href="article.php?rec=add">文章</a>
							<a href="nav.php?rec=add">自定义导航</a>
							<a href="show.html">首页幻灯</a>
							<a href="page.php?rec=add">单页面</a>
							<a href="manager.php?rec=add">管理员</a>
							<a href="link.html"></a>
						</div>
					</li>
					<li><a href="<?php echo U('Index/Index/index');?>" target="_blank">查看站点</a></li>
					<li><a href="index.php?rec=clear_cache">清除缓存</a></li>
					<li><a href="http://www.mycodes.net" target="_blank">帮助</a></li>
					<li class="noRight"><a href="module.html">DouPHP+</a></li>
				</ul>
				<ul class="navRight">
					<li class="M noLeft">
						<a href="JavaScript:void(0);">您好，admin</a>
						<div class="drop mUser">
							<a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
							<a href="manager.php?rec=cloud_account">设置云账户</a>
						</div>
					</li>
					<li class="noRight"><a href="login.php?rec=logout">退出</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="dcLeft">
	<div id="menu">
		<!-- <ul class="top">
			<li><a href="<?php echo U('Admin/Index/index');?>"><i class="home"></i><em>管理首页</em></a></li>
		</ul>
		<ul>
			<li><a href="<?php echo U('Admin/Index/system');?>"><i class="system"></i><em>系统设置</em></a></li>
			<li><a href="<?php echo U('Admin/Index/nav');?>"><i class="nav"></i><em>自定义导航栏</em></a></li>
			<li><a href="<?php echo U('Admin/Index/show');?>"><i class="show"></i><em>首页幻灯广告</em></a></li>
			<li><a href="<?php echo U('Admin/Index/page');?>"><i class="page"></i><em>单页面管理</em></a></li>
		</ul> -->
		<ul>
			<li><a href="<?php echo U('Admin/Index/product_category');?>"><i class="productCat"></i><em>用户分组</em></a></li>
			<li><a href="<?php echo U('Admin/Index/product');?>"><i class="product"></i><em>会员列表</em></a></li>
		</ul>
		<ul>
			<li><a href="<?php echo U('Admin/Index/article_category');?>"><i class="articleCat"></i><em>文章分类</em></a></li>
			<li><a href="<?php echo U('Admin/Index/article');?>"><i class="article"></i><em>文章列表</em></a></li>
		</ul>
		<ul class="bot">
			<li><a href="<?php echo U('Admin/Index/manager');?>"><i class="manager"></i><em>网站管理员</em></a></li>
		</ul>
	</div>
</div>

 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>网站管理员</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="addmanager.html?rec=add" class="actionBtn">添加管理员</a>网站管理员</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="30" align="center">编号</th>
      <th align="left">管理员名称</th>
      <th align="center">E-mail地址</th>
      <th align="center">添加时间</th>
      <th align="center">最后登录时间</th>
      <th align="center">操作</th>
     </tr>
          <tr>
      <td align="center">1</td>
      <td>admin</td>
      <td align="center"></td>
      <td align="center">2016-02-25</td>
      <td align="center">2016-02-26 20:53:17</td>
      <td align="center"><a href="addmanager.html?rec=edit&id=1">编辑</a> | <a href="manager.html?rec=del&id=1">删除</a></td>
     </tr>
         </table>
                       </div>
 </div>
 <div class="clear"></div>

<div id="dcFooter">
	<div id="footer">
		<div class="line"></div>
			<ul>
			   版权所有 © 2015-2016 威海易祥传媒有限公司，并保留所有权利。
			</ul>
		</div>
	</div><!-- dcFooter 结束 -->
	<div class="clear"></div>
</div>
</html>