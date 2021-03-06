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
	<!-- Page Head -->
	<div id="menu_box">
    	<h2>Welcome www.tryDemo.net</h2>
    	<p id="page-intro">What would you like to do?</p>
    		<ul class="shortcut-buttons-set">
	    		<li><a class="shortcut-button" href="<?php echo U('Blog/mAdd');?>" target="_self"><span> <img src="/opened/Public/Img/Admin/icons/pencil_48.png" alt="icon" /><br /> 添加新文章 </span></a></li>
      			<li><a class="shortcut-button" href="<?php echo U('User/index');?>" target="_self"><span> <img src="/opened/Public/Img/Admin/icons/paper_content_pencil_48.png" alt="icon" /><br /> 添加新用户 </span></a></li>
      			<li><a class="shortcut-button" href="#" target="_self"><span> <img src="/opened/Public/Img/Admin/icons/image_add_48.png" alt="icon" /><br /> 上传新图片 </span></a></li>
      			<li><a class="shortcut-button" href="<?php echo U('Ad/index');?>" target="_self"><span> <img src="/opened/Public/Img/Admin/icons/clock_48.png" alt="icon" /><br /> 广告管理 </span></a></li>
      			<li><a class="shortcut-button" href="#messages" rel="modal"><span> <img src="/opened/Public/Img/Admin/icons/comment_48.png" alt="icon" /><br /> 站内信 </span></a></li>
    		</ul>
	</div>
	<!-- End .shortcut-buttons-set -->
	<div id="main_box">
		<div class="content-box">
      		<!-- Start Content Box -->
      			<div class="content-box-header">
        			<h3>主体内容区域</h3>
        			<ul class="content-box-tabs">
          				<li><a href="#tab1" class="default-tab">Table</a></li>
          				<li><a href="#tab2">Forms</a></li>
        			</ul>
        			<div class="clear"></div>
      			</div>
      			<!-- End .content-box-header -->
      			<div class="content-box-content">
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
    					<div class="tab_test">
          					<table>
            					<thead>
              						<tr>
                						<th>
                  							<input class="check-all" type="checkbox" />
                						</th>
                						<th>Column 1</th>
                						<th>Column 2</th>
                						<th>Column 3</th>
                						<th>Column 4</th>
                						<th>Column 5</th>
              						</tr>
            					</thead>
            					<tfoot>
              						<tr>
                						<td colspan="6">
                  							<div class="bulk-actions align-left">
                    								<select name="dropdown">
                      									<option value="option1">Choose an action...</option>
                      									<option value="option2">编辑</option>
                      									<option value="option3">删除</option>
                    								</select>
										<a class="button" href="#">Apply to selected</a> 
									</div>
                  							<div class="pagination"> <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a> <a href="#" class="number" title="1">1</a> <a href="#" class="number" title="2">2</a> <a href="#" class="number current" title="3">3</a> <a href="#" class="number" title="4">4</a> <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a></div>
                  							<!-- End .pagination -->
                  							<div class="clear"></div>
                						</td>
              						</tr>
            					</tfoot>
            					<tbody>
              						<tr>
                						<td>
                  							<input type="checkbox" />
                						</td>
                						<td>Lorem ipsum dolor</td>
                						<td><a href="#" title="title">Sit amet</a></td>
                						<td>Consectetur adipiscing</td>
                						<td>Donec tortor diam</td>
                						<td>
                  						<!-- Icons -->
									<a href="#" title="编辑"><img src="/opened/Public/Img/Admin/icons/pencil.png" alt="编辑" /></a> <a href="#" title="删除"><img src="/opened/Public/Img/Admin/icons/cross.png" alt="删除" /></a> <a href="#" title="编辑 Meta"><img src="/opened/Public/Img/Admin/icons/hammer_screwdriver.png" alt="编辑 Meta" /></a> 
								</td>
              						</tr>
              						<tr>
                						<td>
                  							<input type="checkbox" />
                						</td>
                						<td>Lorem ipsum dolor</td>
                						<td><a href="#" title="title">Sit amet</a></td>
                						<td>Consectetur adipiscing</td>
                						<td>Donec tortor diam</td>
                						<td>
                  						<!-- Icons -->
                  							<a href="#" title="编辑"><img src="/opened/Public/Img/Admin/icons/pencil.png" alt="编辑" /></a> <a href="#" title="删除"><img src="/opened/Public/Img/Admin/icons/cross.png" alt="删除" /></a> <a href="#" title="编辑 Meta"><img src="/opened/Public/Img/Admin/icons/hammer_screwdriver.png" alt="编辑 Meta" /></a> </td>
							</tr>
							<tr>
                						<td>
                  							<input type="checkbox" />
                						</td>
                						<td>Lorem ipsum dolor</td>
                						<td><a href="#" title="title">Sit amet</a></td>
                						<td>Consectetur adipiscing</td>
                						<td>Donec tortor diam</td>
                						<td>
                  						<!-- Icons -->
                  							<a href="#" title="编辑"><img src="/opened/Public/Img/Admin/icons/pencil.png" alt="编辑" /></a> <a href="#" title="删除"><img src="/opened/Public/Img/Admin/icons/cross.png" alt="删除" /></a> <a href="#" title="编辑 Meta"><img src="/opened/Public/Img/Admin/icons/hammer_screwdriver.png" alt="编辑 Meta" /></a> </td>
							</tr>
							<tr>
                						<td>
                  							<input type="checkbox" />
                						</td>
                						<td>Lorem ipsum dolor</td>
                						<td><a href="#" title="title">Sit amet</a></td>
                						<td>Consectetur adipiscing</td>
                						<td>Donec tortor diam</td>
                						<td>
                  						<!-- Icons -->
                  							<a href="#" title="编辑"><img src="/opened/Public/Img/Admin/icons/pencil.png" alt="编辑" /></a> <a href="#" title="删除"><img src="/opened/Public/Img/Admin/icons/cross.png" alt="删除" /></a> <a href="#" title="编辑 Meta"><img src="/opened/Public/Img/Admin/icons/hammer_screwdriver.png" alt="编辑 Meta" /></a> </td>
							</tr>
							<tr>
                						<td>
                  							<input type="checkbox" />
                						</td>
                						<td>Lorem ipsum dolor</td>
                						<td><a href="#" title="title">Sit amet</a></td>
                						<td>Consectetur adipiscing</td>
                						<td>Donec tortor diam</td>
                						<td>
                  						<!-- Icons -->
                  							<a href="#" title="编辑"><img src="/opened/Public/Img/Admin/icons/pencil.png" alt="编辑" /></a> <a href="#" title="删除"><img src="/opened/Public/Img/Admin/icons/cross.png" alt="删除" /></a> <a href="#" title="编辑 Meta"><img src="/opened/Public/Img/Admin/icons/hammer_screwdriver.png" alt="编辑 Meta" /></a> </td>
							</tr>
							<tr>
                						<td>
                  							<input type="checkbox" />
                						</td>
                						<td>Lorem ipsum dolor</td>
                						<td><a href="#" title="title">Sit amet</a></td>
                						<td>Consectetur adipiscing</td>
                						<td>Donec tortor diam</td>
                						<td>
                  						<!-- Icons -->
                  							<a href="#" title="编辑"><img src="/opened/Public/Img/Admin/icons/pencil.png" alt="编辑" /></a> <a href="#" title="删除"><img src="/opened/Public/Img/Admin/icons/cross.png" alt="删除" /></a> <a href="#" title="编辑 Meta"><img src="/opened/Public/Img/Admin/icons/hammer_screwdriver.png" alt="编辑 Meta" /></a> </td>
							</tr>
							<tr>
                						<td>
                  							<input type="checkbox" />
                						</td>
                						<td>Lorem ipsum dolor</td>
                						<td><a href="#" title="title">Sit amet</a></td>
                						<td>Consectetur adipiscing</td>
                						<td>Donec tortor diam</td>
                						<td>
                  						<!-- Icons -->
                  							<a href="#" title="编辑"><img src="/opened/Public/Img/Admin/icons/pencil.png" alt="编辑" /></a> <a href="#" title="删除"><img src="/opened/Public/Img/Admin/icons/cross.png" alt="删除" /></a> <a href="#" title="编辑 Meta"><img src="/opened/Public/Img/Admin/icons/hammer_screwdriver.png" alt="编辑 Meta" /></a> </td>
							</tr>
							<tr>
                						<td>
                  							<input type="checkbox" />
                						</td>
                						<td>Lorem ipsum dolor</td>
                						<td><a href="#" title="title">Sit amet</a></td>
                						<td>Consectetur adipiscing</td>
                						<td>Donec tortor diam</td>
                						<td>
                  						<!-- Icons -->
                  							<a href="#" title="编辑"><img src="/opened/Public/Img/Admin/icons/pencil.png" alt="编辑" /></a> <a href="#" title="删除"><img src="/opened/Public/Img/Admin/icons/cross.png" alt="删除" /></a> <a href="#" title="编辑 Meta"><img src="/opened/Public/Img/Admin/icons/hammer_screwdriver.png" alt="编辑 Meta" /></a> </td>
							</tr>
							<tr>
                						<td>
                  							<input type="checkbox" />
                						</td>
                						<td>Lorem ipsum dolor</td>
                						<td><a href="#" title="title">Sit amet</a></td>
                						<td>Consectetur adipiscing</td>
                						<td>Donec tortor diam</td>
                						<td>
                  						<!-- Icons -->
                  							<a href="#" title="编辑"><img src="/opened/Public/Img/Admin/icons/pencil.png" alt="编辑" /></a> <a href="#" title="删除"><img src="/opened/Public/Img/Admin/icons/cross.png" alt="删除" /></a> <a href="#" title="编辑 Meta"><img src="/opened/Public/Img/Admin/icons/hammer_screwdriver.png" alt="编辑 Meta" /></a> </td>
              						</tr>
              
            					</tbody>
    					</table>	
				</div>
  			</div>  
        		<!-- End #tab1 -->
        		<div class="tab-content" id="tab2">
          			<form action="#" method="post">
            				<fieldset>
            					<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            					<p>
              						<label>小表单输入</label>
              						<input class="text-input small-input" type="text" id="small-input" name="small-input" />
              						<span class="input-notification success png_bg">Successful message</span>
              						<!-- Classes for input-notification: success, error, information, attention -->
              						<br />
							<small>A small description of the field</small> 
						</p>
            					<p>
              						<label>中表单输入</label>
              						<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" />
							<span class="input-notification error png_bg">Error message</span> 
						</p>
            					<p>
              						<label>长表单输入</label>
              						<input class="text-input large-input" type="text" id="large-input" name="large-input" />
            					</p>
            					<p>
              						<label>复选框</label>
              						<input type="checkbox" name="checkbox1" />
              						这是一个复选框
              						<input type="checkbox" name="checkbox2" />
							这是另一个复选框 
						</p>
            					<p>
              						<label>单选按钮</label>
              						<input type="radio" name="radio" />
              						这是一个单选按钮<br />
              						<input type="radio" name="radio" />
							这是另一个单选按钮 
						</p>
            					<p>
              						<label>这是一个下拉列表</label>
              						<select name="dropdown" class="small-input">
                						<option value="option1">Option 1</option>
                						<option value="option2">Option 2</option>
                						<option value="option3">Option 3</option>
                						<option value="option4">Option 4</option>
              						</select>
            					</p>
            					<p>
              						<label>文本编辑器</label>
              						<textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
            					</p>
            					<p>
              						<input class="button" type="submit" value="提交" />
            					</p>
            				</fieldset>
            				<div class="clear"></div>
            				<!-- End .clear -->
          			</form>
        		</div>
        		<!-- End #tab2 -->
      		</div>
      		<!-- End .content-box-content -->
    	</div>
    	<!-- End .content-box -->
    	<div class="content-box column-left">
      		<div class="content-box-header">
        	<h3>左公告区</h3>
      		</div>
      		<!-- End .content-box-header -->
      		<div class="content-box-content">
        		<div class="tab-content default-tab">
          			<h4>Maecenas dignissim</h4>
          			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo. </p>
        		</div>
        		<!-- End #tab3 -->
      		</div>
      		<!-- End .content-box-content -->
    	</div>
    	<!-- End .content-box -->
    	<div class="content-box column-right closed-box">
      		<div class="content-box-header">
        	<!-- Add the class "closed" to the Content box header to have it closed by default -->
        		<h3>右公告区</h3>
      		</div>
      		<!-- End .content-box-header -->
      		<div class="content-box-content">
        		<div class="tab-content default-tab">
          			<h4>右公告区默认关闭</h4>
          			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo. </p>
        		</div>
        		<!-- End #tab3 -->
      		</div>
      		<!-- End .content-box-content -->
    	</div>
    	<!-- End .content-box -->
    	<div class="clear"></div>
    	<!-- Start Notifications -->
    	<div class="notification attention png_bg"> <a href="#" class="close"><img src="/opened/Public/Img/Admin/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
      	<div> 注意通知.顺便一提,你可以关闭此通知。 </div>
    	</div>
    	<div class="notification information png_bg"> <a href="#" class="close"><img src="/opened/Public/Img/Admin/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
      	<div> 信息通知.顺便一提,你可以关闭此通知。</div>
    	</div>
    	<div class="notification success png_bg"> <a href="#" class="close"><img src="/opened/Public/Img/Admin/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
      	<div> 成功的通知.顺便一提,你可以关闭此通知。</div>
    	</div>
    	<div class="notification error png_bg"> <a href="#" class="close"><img src="/opened/Public/Img/Admin/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
      	<div> 错误的通知.顺便一提,你可以关闭此通知。</div>
    	</div>
    	<!-- End Notifications -->
    	<div id="footer"> <small>
      	<!-- Remove this notice or replace it with whatever you want -->
      	&#169; Copyright 2012 Your Company | Powered by <a href="http://www.cheshop.com">D.Apache.Luo</a> | <a href="#">Top</a> </small> </div>
    	<!-- End #footer -->
  </div>
  <!-- End #main-content -->
</div>
</div>
</body>
</html>