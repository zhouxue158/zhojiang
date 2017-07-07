<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\wamp\www\thinkphp_5.0.9_full\public/../application/index\view\zhuce\index.html";i:1498541802;s:83:"D:\wamp\www\thinkphp_5.0.9_full\public/../application/index\view\public\header.html";i:1498449503;s:83:"D:\wamp\www\thinkphp_5.0.9_full\public/../application/index\view\public\footer.html";i:1498179978;}*/ ?>
<!--加载头部文件-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="author" content="$Id$" />
<meta http-equiv="copyright" content="Copyright (C) 2013 * All rights reserved." />
<meta http-equiv="keywords" content="鍏抽敭瀛? />
<meta http-equiv="description" content="鎻忚堪" />
<link type="text/css" href="__STATIC__/index/css/style.css" rel="stylesheet" rev="stylesheet" media="screen" />


<title>注册</title>
</head>

<body>
<div class="centBox">
	<div class="top">
    	<span>【<a href="<?php echo url('login/index'); ?>">登陆管理</a> 】 【<a href="<?php echo url('login/loginout'); ?>">退出管理</a> 】 【<a href="#">申请入驻</a>】  【<a href="<?php echo url('trading/index'); ?>">前往采购</a>】  【<a href="<?php echo url('message/index'); ?>">联系我们</a>】</span>
    	您好！欢迎来到中江县名优产品展销平台!     您遇到任何疑问请致电：0838 -6668888   
    </div>
    <div class="top2">
    	<div class="top2R">
        	<div class="fanhui"><a href="<?php echo url('login/index'); ?>">返回登录</a></div>
        </div>
    	<div class="logo">
        	<a href="#" class="logo_a">中江名优特产</a>
        </div>
    </div>
</div>





<div class="denlu">
	<div class="denlu_nei">
    	<div class="denluL">
        	<img src="__STATIC__/index/text/23.gif" class="pt145" />
        </div>
        <div class="denluR">
		
			
				<div class="den_bt">
					注册我们
				</div>
				
			<form  action="" method="post">
			
				<div class="den_kang">
					<table width="100%" height="155" border="0" cellspacing="0" cellpadding="0">
					
						  <tr >
							<td width="30"><span class="den_span">用户名</span></td>
							<td><input name="username" type="text" class="denl_input" value=""  placeholder="邮箱/会员账号"/></td>
						  </tr>
						  
						  
						  <tr>
							<td height="30"><span class="den_span">密&nbsp;&nbsp;&nbsp;&nbsp;码</span></td>
							<td><input name="password" type="password" class="denl_input" placeholder="密码"/>
							</td>
						  </tr>
						  
						  
						   <tr>
							<td height="30"><span class="den_span">再次确认密码</span></td>
							<td><input name="password1" type="password" class="denl_input" placeholder="密码"/>
							</td>
						  </tr>
					
					
						  <tr>
							<td height="35"><span class="den_span">验证码</span></td>
							<td><input name="code" type="text" class="denl_input" placeholder="验证码" style="width:100px;"/>
							</td>
							<td><img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src=this.src+'?'+Math.random()" style="width:100px;height:30px;position:relative;left:-100px;"/>
							</td>
						  </tr>
						  
					</table>

				</div>
				<div class="deng_ann">
				
					<input name="" type="submit"  class="deng_aa" value="注册"/>
					
				</div>
				
				
				
			</form>	
			
        </div>
		
    </div>
</div>



<!--加载脚部文件-->
<div class="fooer">
	<div class="fooer_nei">
   	  服务中心  |  联系我们  |  平台介绍  |  网站地图  |  邮件反馈  |  友情链接<br />
    	客服热线：0838-8888888  平台名称：展销网 <br />
  
 	<p><a href="#"><img src="__STATIC__/index/images/jg.gif" /></a></p>   
    </div>
</div>
</body>
</html>
