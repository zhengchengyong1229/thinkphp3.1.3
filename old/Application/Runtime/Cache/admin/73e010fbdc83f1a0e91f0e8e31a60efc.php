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
			<li><a href="<?php echo U('Admin/Index/backup');?>"><i class="backup"></i><em>数据备份</em></a></li>
			<li><a href="<?php echo U('Admin/Index/mobile');?>"><i class="mobile"></i><em>手机版</em></a></li>
			<li><a href="<?php echo U('Admin/Index/theme');?>"><i class="theme"></i><em>设置模板</em></a></li>
			<li><a href="<?php echo U('Admin/Index/manager');?>"><i class="manager"></i><em>网站管理员</em></a></li>
		</ul>
	</div>
</div>

 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>自定义导航栏</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="addnav.html" class="actionBtn">添加导航</a>自定义导航栏</h3>
        <div class="navList">
     <ul class="tab">
      <li><a href="nav.php" class="selected">主导航</a></li>
      <li><a href="nav.php?type=top">顶部</a></li>
      <li><a href="nav.php?type=bottom">底部</a></li>
     </ul>
     <table width="100%" border="0" cellpadding="10" cellspacing="0" class="tableBasic">
      <tr>
       <th width="113" align="center">导航名称</th>
       <th align="left">链接地址</th>
       <th width="80" align="center">排序</th>
       <th width="120" align="center">操作</th>
      </tr>
            <tr>
       <td> 公司简介</td>
       <td>http://www.weiqing.com/page.php?id=1</td>
       <td align="center">10</td>
       <td align="center"><a href="nav.php?rec=edit&id=1">编辑</a> | <a href="nav.php?rec=del&id=1">删除</a></td>
      </tr>
            <tr>
       <td>- 企业荣誉</td>
       <td>http://www.weiqing.com/page.php?id=2</td>
       <td align="center">10</td>
       <td align="center"><a href="nav.php?rec=edit&id=2">编辑</a> | <a href="nav.php?rec=del&id=2">删除</a></td>
      </tr>
            <tr>
       <td>- 发展历程</td>
       <td>http://www.weiqing.com/page.php?id=3</td>
       <td align="center">20</td>
       <td align="center"><a href="nav.php?rec=edit&id=3">编辑</a> | <a href="nav.php?rec=del&id=3">删除</a></td>
      </tr>
            <tr>
       <td>- 联系我们</td>
       <td>http://www.weiqing.com/page.php?id=4</td>
       <td align="center">30</td>
       <td align="center"><a href="nav.php?rec=edit&id=4">编辑</a> | <a href="nav.php?rec=del&id=4">删除</a></td>
      </tr>
            <tr>
       <td> 产品中心</td>
       <td>http://www.weiqing.com/product_category.php</td>
       <td align="center">20</td>
       <td align="center"><a href="nav.php?rec=edit&id=5">编辑</a> | <a href="nav.php?rec=del&id=5">删除</a></td>
      </tr>
            <tr>
       <td>- 电子数码</td>
       <td>http://www.weiqing.com/product_category.php?id=1</td>
       <td align="center">10</td>
       <td align="center"><a href="nav.php?rec=edit&id=10">编辑</a> | <a href="nav.php?rec=del&id=10">删除</a></td>
      </tr>
            <tr>
       <td>-- 智能手机</td>
       <td>http://www.weiqing.com/product_category.php?id=4</td>
       <td align="center">1</td>
       <td align="center"><a href="nav.php?rec=edit&id=22">编辑</a> | <a href="nav.php?rec=del&id=22">删除</a></td>
      </tr>
            <tr>
       <td>-- 平板电脑</td>
       <td>http://www.weiqing.com/product_category.php?id=5</td>
       <td align="center">2</td>
       <td align="center"><a href="nav.php?rec=edit&id=23">编辑</a> | <a href="nav.php?rec=del&id=23">删除</a></td>
      </tr>
            <tr>
       <td>- 家居百货</td>
       <td>http://www.weiqing.com/product_category.php?id=2</td>
       <td align="center">20</td>
       <td align="center"><a href="nav.php?rec=edit&id=11">编辑</a> | <a href="nav.php?rec=del&id=11">删除</a></td>
      </tr>
            <tr>
       <td>- 母婴用品</td>
       <td>http://www.weiqing.com/product_category.php?id=3</td>
       <td align="center">30</td>
       <td align="center"><a href="nav.php?rec=edit&id=12">编辑</a> | <a href="nav.php?rec=del&id=12">删除</a></td>
      </tr>
            <tr>
       <td> 文章中心</td>
       <td>http://www.weiqing.com/article_category.php</td>
       <td align="center">30</td>
       <td align="center"><a href="nav.php?rec=edit&id=6">编辑</a> | <a href="nav.php?rec=del&id=6">删除</a></td>
      </tr>
            <tr>
       <td>- 公司动态</td>
       <td>http://www.weiqing.com/article_category.php?id=1</td>
       <td align="center">10</td>
       <td align="center"><a href="nav.php?rec=edit&id=13">编辑</a> | <a href="nav.php?rec=del&id=13">删除</a></td>
      </tr>
            <tr>
       <td>- 行业新闻</td>
       <td>http://www.weiqing.com/article_category.php?id=2</td>
       <td align="center">20</td>
       <td align="center"><a href="nav.php?rec=edit&id=14">编辑</a> | <a href="nav.php?rec=del&id=14">删除</a></td>
      </tr>
            <tr>
       <td> 营销网络</td>
       <td>http://www.weiqing.com/page.php?id=6</td>
       <td align="center">40</td>
       <td align="center"><a href="nav.php?rec=edit&id=7">编辑</a> | <a href="nav.php?rec=del&id=7">删除</a></td>
      </tr>
            <tr>
       <td> 企业荣誉</td>
       <td>http://www.weiqing.com/page.php?id=2</td>
       <td align="center">50</td>
       <td align="center"><a href="nav.php?rec=edit&id=15">编辑</a> | <a href="nav.php?rec=del&id=15">删除</a></td>
      </tr>
            <tr>
       <td> 人才招聘</td>
       <td>http://www.weiqing.com/page.php?id=5</td>
       <td align="center">60</td>
       <td align="center"><a href="nav.php?rec=edit&id=8">编辑</a> | <a href="nav.php?rec=del&id=8">删除</a></td>
      </tr>
            <tr>
       <td> 联系我们</td>
       <td>http://www.weiqing.com/page.php?id=4</td>
       <td align="center">70</td>
       <td align="center"><a href="nav.php?rec=edit&id=9">编辑</a> | <a href="nav.php?rec=del&id=9">删除</a></td>
      </tr>
           </table>
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