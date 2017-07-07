<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\wamp\www\thinkphp_5.0.9_full\public/../application/admin\view\login\Index.html";i:1498204783;}*/ ?>
 <!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="renderer" content="webkit|ie-comp|ie-stand">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<link href="__STATIC__/login/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
		<link href="__STATIC__/login/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
		<link href="__STATIC__/login/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
		<link href="__STATIC__/login/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
		<title>后台登录</title>
		<meta name="keywords" content="H-ui.admin 3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
		<meta name="description" content="H-ui.admin 3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
	</head>
	
	<body>
	
		<input type="hidden" id="TenantId" name="TenantId" value="" />
		
		<div class="loginWraper">
			<div id="loginform" class="loginBox">
			
				<form class="form form-horizontal" action="" method="post">
				
				  <div class="row cl">
					<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
					<div class="formControls col-xs-8">
					  <input id="" name="username" type="text" placeholder="账户" class="input-text size-L">
					</div>
				  </div>
				  
				  <div class="row cl">
					<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
					<div class="formControls col-xs-8">
					  <input id="" name="password" type="password" placeholder="密码" class="input-text size-L">
					</div>
				  </div>
				  
					<div class="row cl">
						<div class="formControls col-xs-8 col-xs-offset-3">
							  <input class="input-text size-L" type="text"  name="code" -id="password" placeholder="验证码" onblur="if(this.value==''){this.value='验证码:'}" onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;">
							  <!--   <img src="" id="images"  onclick="load()" /> -->
							  <!-- <a id="kanbuq" href="javascript:;">看不清，换一张</a>  -->
							 <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src=this.src+'?'+Math.random()"/>
						</div>
					</div>
				  
				  <div class="row cl">
					<div class="formControls col-xs-8 col-xs-offset-3">
					  <label for="online">
						<input type="checkbox" name="online" id="online" value="">
						使我保持登录状态</label>
					</div>
				  </div>
				  
				  <div class="row cl">
					<div class="formControls col-xs-8 col-xs-offset-3">
					  <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
					  <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
					</div>
				  </div>
				  
				</form>
			</div>
		</div>
		
		<script type="text/javascript" src="resources/ht/ht/lib/jquery/1.9.1/jquery.min.js"></script> 
		
		<script type="text/javascript" src="resources/ht/ht/static/h-ui/js/H-ui.min.js"></script>
		<!--此乃百度统计代码，请自行删除-->
		
		
		<script>

			function load()
			{
				var src= $("#images").attr("src");
				//alert(src);
				src+="&"+Math.floor(Math.random()*10000);//1000-99999  4
				$("#images").attr("src",src);
			}

		</script>
	
	</body>
	
</html>
