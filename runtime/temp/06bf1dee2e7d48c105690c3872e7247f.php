<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\wamp\www\thinkphp_5.0.9_full\public/../application/admin\view\home\index.html";i:1498470506;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>

	<meta charset="utf-8">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<LINK rel="Bookmark" href="__STATIC__/admin/favicon.ico" >
	<LINK rel="Shortcut Icon" href="__STATIC__/admin/favicon.ico" />
	<!--[if lt IE 9]>
	<script type="text/javascript" src="__STATIC__/admin/lib/html5.js"></script>
	<script type="text/javascript" src="__STATIC__/admin/lib/respond.min.js"></script>
	<script type="text/javascript" src="__STATIC__/admin/lib/PIE_IE678.js"></script>
	<![endif]-->
	
		<link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/common.css" />
		<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/css/H-ui.admin.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/lib/Hui-iconfont/1.0.7/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/lib/icheck/icheck.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/skin/default/skin.css" id="skin" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/css/style.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/common.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui/css/H-ui.min.css" />
		<!--[if IE 6]>
	<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
	<script>DD_belatedPNG.fix('*');</script>
	<![endif]-->
	<title>后台管理平台</title>
	<meta name="keywords" content="tp5打造电商平台系统">
	<meta name="description" content="电商平台">
	
</head>



<body>
<form  action="<?php echo url('category/find'); ?>" method="post">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 分类管理 <span class="c-gray en">&gt;</span> 分类列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>

    <input type="text" name="inp"  style="width:250px" class="input-text" />
    <button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索<tton>


</nav>
  </form>
<div class="page-container">

	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a class="btn btn-primary radius" onclick="" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加分类</a></span> <span class="r"></span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">分类</th>
					<th width="30">排序序号</th>
					<th width="150">新增时间</th>
					<th width="60">发布状态</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td></td>
					<td></td>
					<td class="text-c listorder1"><input size="3" attr-id=""  name="listorder" value=""/></td>
					<td></td>
					<td class="td-status"><a href="" title="点击修改状态"></a></td>
					<td class="td-manage"><a href="">获取子栏目</a>
						<a style="text-decoration:none" class="ml-5" onClick="" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
						<a style="text-decoration:none" class="ml-5" onClick="" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
			
			</tbody>
		</table>
		<div class="tp5-o2o pagination"></div>
	</div>
</div>


<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>  
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/common.js"></script>


<script>
	var SCOPE = {
		'listorder_url': "<?php echo url('category/listorder'); ?>",
	};
</script>
<script type="text/javascript" src="__STATIC__/admin/js/common.js"></script>
</body>
</html>
