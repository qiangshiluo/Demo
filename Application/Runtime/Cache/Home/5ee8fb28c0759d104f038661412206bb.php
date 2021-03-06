<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  lang="zh-CN">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo ($web_name); ?> › <?php echo ($current_page); ?></title>
		<meta name="robots" content="noindex,nofollow">
		<meta name="keywords" content="<?php echo ($keywords); ?>"/>
		<meta name="description" content="<?php echo ($seo_description); ?>" />
		<meta name="baidu-site-verification" content="" />
		<!--css-->
		<link rel='stylesheet' id='twentytwelve-style-css'  href='/opened/Public/Css/Common/common.css' type='text/css' media='all' />
		<!-- js -->
		<!-- jQuery -->
		<script type="text/javascript" src="/opened/Public/Js/Common/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="/opened/Public/Js/Common/common.js"></script> 
	</head>
	<body class="login login-action-register" youdao="bind">
		<div id="u_login_box">
			<h1><a href="<?php echo U('Home/index');?>" title="<?php echo ($web_name); ?>">Opened</a></h1>
			<p class="message register">在这里登录</p>
			<form name="loginform" id="loginform" action="<?php echo U('User/loginAct');?>" method="post" onsubmit="return loginValidate()">
				<p>
					<label for="user_email">邮箱<br>
					<input type="text" name="user_email" id="user_email" class="input" value="" size="60"></label>
				</p>
				<p>
					<label for="user_pass">密码<br>
					<input type="password" name="pwd" id="user_pass" class="input" value="" size="30"></label>
				</p>
				<p>
					<label for="verify_code">验证码<br>
					<div class="box_verify_code">
						<input type="text" name="verify_code" id="verify_code" class="input input_verify_code" value="" size="10">
						<img id="img_verify_code" width="90px" class="img_verify_code" height="30px" alt="验证码" src="<?php echo U('User/creatVerifyCode',array());?>" title="点击刷新">
					</div>
					</label>
				</p>
				<p class="forgetmenot">
					<label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> 记住我的登录信息</label>
				</p>
				<p class="submit">
					<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登录">
					<input type="hidden" name="redirect_to" value="<?php echo U('User/loginAct');?>">
					<input type="hidden" name="testcookie" value="1">
				</p>
			</form>
			<p id="nav">
				<a href="<?php echo U('User/registerAct');?>">注册</a> | 	<a href="<?php echo U('User/findPwdAct');?>" title="找回密码">忘记密码？</a>
			</p>
			<p id="backtoblog"><a href="<?php echo U('Home/index');?>" title="不知道自己在哪？">← 回到Opened</a></p>
		</div>
		<div class="clear"></div>
		
		<script type="text/javascript">
			$(function(){
				wp_attempt_focus();
				// 验证码生成  
				var captcha_img = $('#img_verify_code');  
				var verifyimg = captcha_img.attr("src");  
				captcha_img.attr('title', '点击刷新');  
				captcha_img.click(function(){  
					if( verifyimg.indexOf('?')>0){  
						$(this).attr("src", verifyimg+'&random='+Math.random());  
					}else{  
						$(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
					}  
				});
			});
			
			function wp_attempt_focus(){
				setTimeout( function(){ 
					try{
						d = document.getElementById('user_email');
						d.focus();
						d.select();
					} catch(e){
					
					}
				}, 200);
			}
			

			//表单提交验证
			function loginValidate(){
				var flag = true;
				var msg = '';
				var user_email = $.trim($('#user_email').val());
				var user_pass = $.trim($('#user_pass').val());
				
				var regu = "^(([0-9a-zA-Z]+)|([0-9a-zA-Z]+[_.0-9a-zA-Z-]*[0-9a-zA-Z-]+))@([a-zA-Z0-9-]+[.])+([a-zA-Z]|net|NET|asia|ASIA|com|COM|gov|GOV|mil|MIL|org|ORG|edu|EDU|int|INT|cn|CN|cc|CC)$";
				var re = new RegExp(regu);
				if(!user_email.length){
					msg += '登录邮箱不能为空！\n';
					flag = false;
				}else if(user_email.search(re) == -1){
					msg += '登录邮箱格式不正确！\n';
					flag = false;
				}
				
				if(!user_pass.length){
					msg += '密码不能为空！\n';
					flag = false;
				}else if(user_pass.length < 6){
					msg += '密码长度不能小于6位！\n';
					flag = false;
				}

				if(!flag){
					alert(msg);
					//调用屏幕抖动效果
					addLoadEvent(function(){ var p=new Array(15,30,15,0,-15,-30,-15,0);p=p.concat(p.concat(p));var i=document.forms[0].id;g(i).position='relative';shake(i,p,20);});
				}
				return flag;
			}	
		</script>

		<div class="clear"></div>
	</body>
</html>