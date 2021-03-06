<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  lang="zh-CN">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo ($web_name); ?>-<?php echo ($description); ?></title>
		<meta name="keywords" content="<?php echo ($keywords); ?>"/>
		<meta name="description" content="<?php echo ($seo_description); ?>" />
		<meta name="baidu-site-verification" content="" />
		<!--css-->
		<link rel='stylesheet' href='/opened/Public/Css/Home/style.css' type='text/css' media='all' />
		<link rel='stylesheet' href='/opened/Public/Css/Common/gantt/style.css' type='text/css' media='all' />
		<!-- js -->
		<!-- jQuery -->
		<script type="text/javascript" src="/opened/Public/Js/Common/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="/opened/Public/Js/Common/jquery.bowser.js"></script>
		<script type="text/javascript" src="/opened/Public/Js/Common/gantt/jquery.fn.gantt.js"></script>
		<script type="text/javascript" src="/opened/Public/Js/Common/gantt/bootstrap-tooltip.js"></script>
		<script type="text/javascript" src="/opened/Public/Js/Common/gantt/bootstrap-popover.js"></script>
		<script type="text/javascript" src="/opened/Public/Js/Common/gantt/prettify.js"></script>
	</head>
	<body class="home blog custom-background custom-font-enabled single-author">
		<div id="page" class="container">
			<div class="p_index_header">
				<div class="p_ih_avatar"><img src="/opened/Uploads/Common/avatar_big/user_avatar.png" width="40px" height="50px" /></div>
				<div class="p_ih_name">LightBP_刘峰</div>
				<div class="p_ih_company_img">
					<img src="/opened/Uploads/Image/20160407/570619ba7e015.png" width="24px" height="24px" />
				</div>
				<div class="p_ih_company_name">比泽机电股份公司</div>
			</div>
			<div class="p_index_middle">
				<div class="gantt"></div>
			</div>
			<div class="clear"></div>
			<div class="page_footer">
				<div class="nav"></div>
				<div class="f_middle_info">
					<ul class="info_menu">
						<li class="info_stmenu">
							<span class="text_span">北京 <b class="font_big">4007004941</b></span>
						</li>
						<li class="info_stmenu">
							<span class="text_span">上海 <b class="font_big">55310556*2801</b></span>
						</li>
						<li class="info_stmenu border_left">
							<span class="text_span font_medium">谁是LightBP?</span>
						</li>
						<li class="info_stmenu border_left border_right">
							<span class="text_span font_medium">网站地图</span>
						</li>
						<li class="info_stmenu">
							<span><a href="javascript:void(0);" target="_blank" class="info_stmenu_a">沪ICP备06046803</a>&nbsp;&nbsp;&nbsp;&nbsp;Copyright©2006<br><span class="font_little">北京环球看点广告传媒有限公司保留所有权利</span></span>
						</li>
						<li class="info_stmenu">
							<span class="li_img"><a ><img src="/opened/Public/Img/Common/logo_little.png" alt="Opened"></a></span>
						</li>
						<li class="li_background_set ">
							<span class="text_span font_big"><?php if($login_mark == 1): ?><a href="<?php echo U('User/logout');?>" class="" alt="退出">退出</a>/<a href="<?php echo U('User/uCenter');?>" class="" alt="帮助">帮助</a><?php else: ?><a href="<?php echo U('User/loginAct');?>" class="" alt="登录">登录</a>/<a href="<?php echo U('User/registerAct');?>" class="" alt="注册">注册</a><?php endif; ?></span>
						</li>
					</ul>
				</div>
				<div class="c_footer_info" style="margin-top:0;">
					<div class="site-info" style="text-align:center;">
						<span><?php echo ($beian); ?><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000244962'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1000244962%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script></span>
						<p class="author"><a href="" target="_blank" rel="external">Theme By D.Apache.Luo</a></p>
					</div>
				</div>			
			</div>
			
		</div>
	</body>
</html>
<script type="text/javascript">
$(document).ready(function(e){
	"use strict";
	$(".gantt").gantt({
		source: [{
			name: "产品部官&3",
			desc: "16/1/15-16/6/20",
			values: [{
				id: "t01",
				from: "/Date(1320192000000)/",
				to: "/Date(0)/",
				customClass: "ganttRed"
			}]
		},{
			name: " ",
			desc: "论坛",
			values: [{
				id: "t02",
				from: "/Date(1320192000000)/",
				to: "/Date(1322401600000)/",
				customClass: "ganttRed",
				dep: "t01"
			}]
		},{
			name: "公司简介",
			desc: "16/1/15-16/6/20",
			values: [{
				from: "/Date(1323802400000)/",
				to: "/Date(0)/",
				customClass: "ganttGreen"
			}]
		}
		,{
			name: " ",
			desc: "文案采编",
			values: [{
				from: "/Date(1323802400000)/",
				to: "/Date(1325685200000)/",
				customClass: "ganttGreen"
			}]
		}],
		navigate: "scroll",
		scale: "weeks",
		maxScale: "months",
		minScale: "days",
		itemsPerPage: 10,
		onItemClick: function(data) {
			alert("Item clicked - show some details");
		},
		onAddClick: function(dt, rowId) {
			alert("Empty space clicked - add an item!");
		},
		onRender: function() {
			if (window.console && typeof console.log === "function") {
				console.log("chart rendered");
			}
		}
	});

	$(".gantt").popover({
		selector: ".bar",
		title: "项目",
		content: "And I'm the content of said popover.",
		trigger: "hover"
	});

	prettyPrint();

	/*	
	"use strict";
	$(".gantt").gantt({
		source: [{
			name: "Sprint 0",
			desc: "Analysis",
			values: [{
				from: "/Date(1320192000000)/",
				to: "/Date(1322401600000)/",
				label: "Requirement Gathering", 
				customClass: "ganttRed"
			}]
		},{
			name: " ",
			desc: "Scoping",
			values: [{
				from: "/Date(1322611200000)/",
				to: "/Date(1323302400000)/",
				label: "Scoping", 
				customClass: "ganttRed"
			}]
		},{
			name: "Sprint 1",
			desc: "Development",
			values: [{
				from: "/Date(1323802400000)/",
				to: "/Date(1325685200000)/",
				label: "Development", 
				customClass: "ganttGreen"
			}]
		},{
			name: " ",
			desc: "Showcasing",
			values: [{
				from: "/Date(1325685200000)/",
				to: "/Date(1325695200000)/",
				label: "Showcasing", 
				customClass: "ganttBlue"
			}]
		},{
			name: "Sprint 2",
			desc: "Development",
			values: [{
				from: "/Date(1326785200000)/",
				to: "/Date(1325785200000)/",
				label: "Development", 
				customClass: "ganttGreen"
			}]
		},{
			name: " ",
			desc: "Showcasing",
			values: [{
				from: "/Date(1328785200000)/",
				to: "/Date(1328905200000)/",
				label: "Showcasing", 
				customClass: "ganttBlue"
			}]
		},{
			name: "Release Stage",
			desc: "Training",
			values: [{
				from: "/Date(1330011200000)/",
				to: "/Date(1336611200000)/",
				label: "Training", 
				customClass: "ganttOrange"
			}]
		},{
			name: " ",
			desc: "Deployment",
			values: [{
				from: "/Date(1336611200000)/",
				to: "/Date(1338711200000)/",
				label: "Deployment", 
				customClass: "ganttOrange"
			}]
		},{
			name: " ",
			desc: "Warranty Period",
			values: [{
				from: "/Date(1336611200000)/",
				to: "/Date(1349711200000)/",
				label: "Warranty Period", 
				customClass: "ganttOrange"
			}]
		}],
		navigate: "scroll",
		scale: "weeks",
		maxScale: "months",
		minScale: "days",
		itemsPerPage: 10,
		onItemClick: function(data) {
			alert("Item clicked - show some details");
		},
		onAddClick: function(dt, rowId) {
			alert("Empty space clicked - add an item!");
		},
		onRender: function() {
			if (window.console && typeof console.log === "function") {
				console.log("chart rendered");
			}
		}
	});

	$(".gantt").popover({
		selector: ".bar",
		title: "I'm a popover",
		content: "And I'm the content of said popover."
	});

	prettyPrint();
	*/
});	

</script>