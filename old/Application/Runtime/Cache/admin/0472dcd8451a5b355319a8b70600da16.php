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
		<ul class="top">
			<li><a href="<?php echo U('Admin/Index/index');?>"><i class="home"></i><em>管理首页</em></a></li>
		</ul>
		<ul>
			<li><a href="<?php echo U('Admin/Index/system');?>"><i class="system"></i><em>系统设置</em></a></li>
			<li><a href="<?php echo U('Admin/Index/nav');?>"><i class="nav"></i><em>自定义导航栏</em></a></li>
			<li><a href="<?php echo U('Admin/Index/show');?>"><i class="show"></i><em>首页幻灯广告</em></a></li>
			<li><a href="<?php echo U('Admin/Index/page');?>"><i class="page"></i><em>单页面管理</em></a></li>
		</ul>
		<ul>
			<li><a href="<?php echo U('Admin/Index/product_category');?>"><i class="productCat"></i><em>商品分类</em></a></li>
			<li><a href="<?php echo U('Admin/Index/product');?>"><i class="product"></i><em>商品列表</em></a></li>
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

 <div id="dcMain"> <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心</div>  <div id="index" class="mainBox" style="padding-top:18px;height:auto!important;height:550px;min-height:550px;">
      <div class="warning">您还没有删除 install 文件夹，出于安全的考虑，我们建议您删除 install 文件夹。</div>
    
   <div id="douApi"></div>
      <div class="indexBox">
    <div class="boxTitle">单页面快速管理</div>
    <ul class="ipage">
      
     <a href="page.php?rec=edit&id=1">公司简介</a> 
      
     <a href="page.php?rec=edit&id=2" class="child1">企业荣誉</a> 
      
     <a href="page.php?rec=edit&id=3" class="child1">发展历程</a> 
      
     <a href="page.php?rec=edit&id=4" class="child1">联系我们</a> 
      
     <a href="page.php?rec=edit&id=5">人才招聘</a> 
      
     <a href="page.php?rec=edit&id=6">营销网络</a> 
          <div class="clear"></div>
    </ul>
   </div>
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="indexBoxTwo">
    <tr>
     <td width="65%" valign="top" class="pr">
      <div class="indexBox">
       <div class="boxTitle">网站基本信息</div>
       <ul>
        <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
         <tr>
          <td width="120">单页面数：</td>
          <td><strong>6</strong></td>
          <td width="100">文章总数：</td>
          <td><strong>10</strong></td>
         </tr>
         <tr>
          <td>商品总数：</td>
          <td><strong>15</strong></td>
          <td>系统语言：</td>
          <td><strong>zh_cn</strong></td>
         </tr>
         <tr>
          <td>URL 重写：</td>
          <td><strong>关闭<a href="system.php" class="cueRed ml">（点击开启）</a> 
           </strong></td>
          <td>编码：</td>
          <td><strong>UTF-8</strong></td>
         </tr>
         <tr>
          <td>站点地图：</td>
          <td><strong>开启</strong></td>
          <td>站点模板：</td>
          <td><strong>default</strong></td>
         </tr>
         <tr>
          <td>DouPHP版本：</td>
          <td><strong>v1.3 Release 20160125</strong></td>
          <td>安装日期：</td>
          <td><strong>2016-02-25</strong></td>
         </tr>
        </table>
       </ul>
      </div>
     </td>
     <td valign="top" class="pl">
      <div class="indexBox">
       <div class="boxTitle">管理员  登录记录</div>
       <ul>
        <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
         <tr>
          <th width="45%">IP地址</th>
          <th width="55%">操作时间</th>
         </tr>
                  <tr>
          <td align="center">127.0.0.1</td>
          <td align="center">2016-02-25 23:29:08</td>
         </tr>
                  <tr>
          <td align="center">127.0.0.1</td>
          <td align="center">2016-02-25 13:48:48</td>
         </tr>
                  <tr>
          <td align="center">127.0.0.1</td>
          <td align="center">2013-10-16 09:43:01</td>
         </tr>
                  <tr>
          <td align="center">127.0.0.1</td>
          <td align="center">2013-10-16 09:42:58</td>
         </tr>
                 </table>
       </ul>
      </div>
     </td>
    </tr>
   </table>
   <div class="indexBox">
    <div class="boxTitle">服务器信息</div>
    <ul>
     <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
      <tr>
       <td width="120" valign="top">PHP 版本：</td>
       <td valign="top">5.3.29 </td>
       <td width="100" valign="top">MySQL 版本：</td>
       <td valign="top">5.5.40</td>
       <td width="100" valign="top">服务器操作系统：</td>
       <td valign="top">WINNT(127.0.0.1)</td>
      </tr>
      <tr>
       <td valign="top">文件上传限制：</td>
       <td valign="top">2M</td>
       <td valign="top">GD 库支持：</td>
       <td valign="top">是</td>
       <td valign="top">Web 服务器：</td>
       <td valign="top">Apache/2.4.10 (Win32) OpenSSL/0.9.8zb mod_fcgid/2.3.9</td>
      </tr>
     </table>
    </ul>
   </div>
   <div class="indexBox">
    <div class="boxTitle">系统开发</div>
    <ul>
     <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
      <tr>
       <td width="120"> DouPHP官网： </td>
       <td><a href="http://www.mycodes.net" target="_blank">http://www.mycodes.net</a></td>
      </tr>
      <tr>
       <td> 开发者社区： </td>
       <td><a href="http://www.mycodes.net" target="_blank">http://www.mycodes.net </a><em>（安装使用 模板交流 BUG反馈 意见建议）</em></td>
      </tr>
      <tr>
       <td> 贡献者： </td>
       <td>Wooyun.org, Pany, Tea</td>
      </tr>
      <tr>
       <td> 系统使用协议： </td>
       <td><a href="http://www.mycodes.net/license.html" target="_blank">http://www.mycodes.net/license.html</a><em>（您可以免费使用DouPHP（不限商用），但必须保留相关版权信息。）</em></td>
      </tr>
     </table>
    </ul>
   </div>
    
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