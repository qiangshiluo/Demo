<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo ($site["SITE_INFO"]["name"]); ?></title>
		<meta name="author" content="<?php echo ($site["SITE_INFO"]["author"]); ?>" />
		<meta name="keywords" content="<?php echo ($site["SITE_INFO"]["keywords"]); ?>" />
		<!--                       CSS                       -->
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="/opened/Public/Css/Admin/common.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/opened/Public/Css/Admin/font.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/opened/Public/Css/Admin/reset.css" type="text/css" media="screen" />
		
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="/opened/Public/Css/Admin/style.css" type="text/css" media="screen" />
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<!--                       Javascripts                       -->
		<!-- jQuery -->
		<script type="text/javascript" src="/opened/Public/Js/Common/jquery-1.9.0.min.js"></script>
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="/opened/Public/Js/Common/common.js"></script>
		<script type="text/javascript" src="/opened/Public/Js/Admin/simpla.jquery.configuration.js"></script>
		<script type="text/javascript" src="/opened/Public/Js/Admin/main.js"></script>
	</head>

<body>
	
	<!-- End .shortcut-buttons-set -->
	<div id="main_box">
		<div class="content-box">
      		<!-- Start Content Box -->
			<div class="content-box-header">
			<h3><?php echo ($navigation_bar); ?></h3>
				<ul class="content-box-tabs">
					<li><a href="#tab1" class="default-tab">添加公司成员</a></li>
				</ul>
				<div class="clear"></div>
			</div>
			<!-- End .content-box-header -->
			<div class="content-box-content">
				<!--Start #tab2-->
				<div class="tab-content default-tab" id="tab1">
					<!-- This is the target div. id must match the href of this div's tab -->
					<div class="notification attention png_bg">
						<div class="close">
						<a href="#"><img src="/opened/Public/Img/Admin/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						</div>
						<div> 这是一个公告栏。顺便一提,你可以关闭此通知。<font color="#ff5b6f"><span id="outmess" class="tip-msg error-msg sucess-msg">
	<?php echo ($clue_message); ?>		
</span></font></div>
    				</div>
					<div id="role_manager_box" class="tab_test">
						<div id="role_manager_box">
							<form action="<?php echo U('Access/mAdminRoleList');?>" method="post">
								<div class="rm_tab_top_box">
									<p>
										<label>选择前台角色类型</label>
										<select id="role_id_select" name="role_id" onchange="toogleUserList($(this))">
											<option value="0">--请选择角色--</option>
											<?php if(is_array($q_role_list)): $i = 0; $__LIST__ = $q_role_list;if( count($__LIST__)==0 ) : echo "$q_role_list_empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "$q_role_list_empty" ;endif; ?>
										</select>
									</p>
								</div>
								<div class="rm_tab_left_box">
									<ul id="all_user_list">
										<?php if(is_array($user_list)): $i = 0; $__LIST__ = $user_list;if( count($__LIST__)==0 ) : echo "$user_list_empty" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="user_list_<?php echo ($vo["aid"]); ?>">
											<span><a class='li_username' href='javascript:void(0)'><?php echo ($vo["username"]); ?>-<?php if(is_array($q_role_list)): foreach($q_role_list as $key=>$v_role_list): if($vo['role_id'] == $v_role_list['id']): echo ($v_role_list["name"]); endif; endforeach; endif; ?></a>&nbsp;&nbsp;&nbsp;<input type='checkbox' name='select_role_user' role_id='<?php echo ($vo["role_id"]); ?>' value='<?php echo ($vo["aid"]); ?>' /></span>
										</li><?php endforeach; endif; else: echo "$user_list_empty" ;endif; ?>
									</ul>
								</div>
								<div class="rm_tab_left_button">
									<p>
										<input type="button" class="button" onclick="addProjectUser()" value="添加" />
									</p>
								</div>
								<div class="rm_tab_right_box">
									<ul id="checked_user_list">
										<?php if(is_array($project_user_list)): $i = 0; $__LIST__ = $project_user_list;if( count($__LIST__)==0 ) : echo "$company_user_list_empty" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="cu_list_<?php echo ($v["id"]); ?>">
											<span><a class='li_username' href='javascript:void(0)'><?php echo ($v["username"]); ?>-<?php if(is_array($q_role_list)): foreach($q_role_list as $key=>$v_role_list): if($v['role_id'] == $v_role_list['id']): echo ($v_role_list["name"]); endif; endforeach; endif; ?></a>&nbsp;&nbsp;&nbsp;<a class="cu_del_button" role_id="<?php echo ($v["role_id"]); ?>" onclick="delProjectUser(<?php echo ($v["id"]); ?>)" title="删除" href="javascript:void(0)"><img alt="删除" src="/opened/Public/Img/Admin/icons/cross.png"></a></span>
										</li><?php endforeach; endif; else: echo "$company_user_list_empty" ;endif; ?>
									</ul>
								</div>
								<div class="clear"></div>
								<input type="hidden" name="pid" value="<?php echo ($id); ?>" />
							</form>
						</div>
					</div>
				</div> 	
      		</div>
      		<!-- End .content-box-content -->
    	</div>
    	<!-- End .content-box -->
    	
    	<div class="clear"></div>
    	
    	<div id="footer"> <small>
      	<!-- Remove this notice or replace it with whatever you want -->
      	&#169; Copyright 2013 Your Company | Powered by <a href="http://www.trydemo.net">D.Apache.Luo</a> | <a href="#">Top</a> </small> </div>
    	<!-- End #footer -->
  </div>
  <!-- End #main-content -->
</div>
</div>
</body>
</html>



<script type="text/javascript">
	$(function(){
		var role_id_obj = $("#role_id_select");
		toogleUserList(role_id_obj);
	});
	
	// 切换角色
	function toogleUserList(obj){
		var rid = obj.val();
		if(rid){
			$("#all_user_list li").each(function(){
				if($(this).find("input[name='select_role_user']")){
					$(this).find("input[name='select_role_user']").attr("checked",false);
					if(rid == 0){
						$(this).show();
					}else{
						if($(this).find("input[name='select_role_user']").attr("role_id") == rid){
							$(this).show();
						}else{
							$(this).hide();
						}
					}
				}
			});
		}
	}
	
	// 添加公司成员
	function addProjectUser(){
		var msg = '';
		var pid = $("input[name='pid']").val();
		//alert(pid);
		if(pid){
			var role_id = $("#role_id_select").val();
			if(role_id > 0){
				var checked_id = '';
				$("#all_user_list li input[type=checkbox]").each(function(){
					//var chk = $(this).find("[checked]");
					if(this.checked){
						if($(this).val()){
							checked_id += $(this).val()+"_";
						}
					}
				}); 
				if(checked_id.length){
					checked_id=checked_id.substring(0,checked_id.length-1);
					//alert(checked_id);
					var hash;
					var hash_obj = $("input[name='__hash__']");
					if(hash_obj.length){
						hash = hash_obj.val();
					}
					$.ajax({
						type: "POST",
						url: "<?php echo U('Project/ajax_add_project_user');?>",
						data: "pid="+ pid +"&role_id="+ role_id + "&aid="+ checked_id +"&__hash__="+ hash,
						dataType: "json",
						success: function(result){
							if(result.flag){
								var all_box = $("#all_user_list");
								var ul_box = $("#checked_user_list");
								var data_str = result.data;
								if(data_str.indexOf(',') > 0){
									//alert('多个');
									var r_aid = 0;
									var r_ru_id = 0;
									var arr_one = data_str.split(',');
									for(var m = 0;m < arr_one.length;m++){
										if(arr_one[m].indexOf("_") > 0){
											var arr = arr_one[m].split('_');
											if(arr.length > 1){
												r_ru_id = parseInt(arr[0]);
												r_aid = parseInt(arr[1]);
												all_box.find("li").each(function(){
													if($(this).find("input[name='select_role_user']") && $(this).find("input[name='select_role_user']").val() == r_aid){
														var u_name = '';
														if($(this).find("a.li_username").length > 0){
															u_name = $(this).find("a.li_username").text();
														}
														var li_html = "<li class='cu_list_"+r_ru_id+"'><span><a class='li_username' href='javascript:void(0)'>"+u_name+"</a>&nbsp;&nbsp;&nbsp;<a class='cu_del_button' role_id='"+role_id+"' onclick='delProjectUser("+r_ru_id+")' title='删除' href='javascript:void(0)'><img alt='删除' src='/opened/Public/Img/Admin/icons/cross.png'></a></span></li>";
														$(this).remove();
														if(ul_box.find('li.cu_list_0').length > 0){
															ul_box.find('li.cu_list_0').remove();
														}
														ul_box.append(li_html);
													}
												});
											}
										}
									}
									
								}else{
									//alert('单个');
									var r_aid = checked_id;
									var r_ru_id = 0;
									if(data_str.indexOf('_') > 0){
										var arr = data_str.split('_');
										if(arr.length > 1){
											r_ru_id = parseInt(arr[0]);
										}
									}else{
										r_ru_id = parseInt(data_str);
									}
									all_box.find("li").each(function(){
										if($(this).find("input[name='select_role_user']") && $(this).find("input[name='select_role_user']").val() == r_aid){
											var u_name = '';
											if($(this).find("a.li_username").length > 0){
												u_name = $(this).find("a.li_username").text();
											}
											var li_html = "<li class='cu_list_"+r_ru_id+"'><span><a class='li_username' href='javascript:void(0)'>"+u_name+"</a>&nbsp;&nbsp;&nbsp;<a class='cu_del_button' role_id='"+role_id+"' onclick='delProjectUser("+r_ru_id+")' title='删除' href='javascript:void(0)'><img alt='删除' src='/opened/Public/Img/Admin/icons/cross.png'></a></span></li>";
											$(this).remove();
											if(ul_box.find('li.cu_list_0').length > 0){
												ul_box.find('li.cu_list_0').remove();
											}
											ul_box.append(li_html);
										}
									});
									
								}
							}else{
								alert(result.msg);
							}
						},
						error: function(XMLHttpRequest, textStatus, errorThrown) {
		                    alert(XMLHttpRequest.status);
		                    //alert(XMLHttpRequest.readyState);
		                    //alert(textStatus);
							//console.log(data);
		                }
					});
				}else{
					msg = "请先选择要添加的用户！";
					alert(msg);
				}
				
			}else{
				msg = "请先选择前台角色类型！";
				alert(msg);
			}
	
		}else{
			msg = "数据有误！请刷新重试！";
			alert(msg);
			history.back();
		}
	}
	
	// 删除公司成员
	function delProjectUser(id){
		if(id){
			$.ajax({
				type: "POST",
				url: "<?php echo U('Project/ajax_del_project_user');?>",
				data: "id="+ id,
				dataType: "json",
				success: function(result){
					if(result.flag){
						if(result.data && result.data.id){
							var cu_id = result.data.id;
							var aid = result.data.aid;
							var role_id = result.data.role_id;
							var role_id_select = $("#role_id_select");
							var all_box = $("#all_user_list");
							var ul_box = $("#checked_user_list");
							ul_box.find("li").each(function(){
								if($(this).attr('class') == 'cu_list_'+cu_id){
									var u_name = '';
									if($(this).find("a.li_username").length > 0){
										u_name = $(this).find("a.li_username").text();
									}
									
									var li_html = "<li class='user_list_"+aid+"'><span><a class='li_username' href='javascript:void(0)'>"+u_name+"</a>&nbsp;&nbsp;&nbsp;<input type='checkbox' name='select_role_user' role_id='"+role_id+"' value='"+aid+"' /></span></li>";
									$(this).remove();
									role_id_select.val(0);
									all_box.find("li").each(function(){
										$(this).show();
									});
									if(all_box.find('li.user_list_0').length > 0){
										all_box.find('li.user_list_0').remove();
									}
									all_box.append(li_html)
								}
							});
						}
					}else{
						alert(result.msg);
					}
				},
				error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert(XMLHttpRequest.status);
                    //alert(XMLHttpRequest.readyState);
                    //alert(textStatus);
					//console.log(data);
                }
			});
		}else{
			alert("请求失败！");
		}
	}
</script>