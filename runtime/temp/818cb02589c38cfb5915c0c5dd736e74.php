<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\wamp\www\thinkphp_5.0.9_full\public/../application/admin\view\recommend\add.html";i:1499139774;}*/ ?>
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
		<link rel="stylesheet" type="text/css" href="__STATIC__/admin/uploadify/uploadify.css" />
		<!--[if IE 6]>
	<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
	<script>DD_belatedPNG.fix('*');</script>
	<![endif]-->
	<title>后台管理平台</title>
	<meta name="keywords" content="tp5打造电商平台系统">
	<meta name="description" content="电商平台">
	
</head>

<body>
<div class="cl pd-5 bg-1 bk-gray mt-20"> 添加推荐位信息</div>
<article class="page-container">

  <form class="form form-horizontal" id="form-article-add" method="post" action="<?php echo url('recommend/add'); ?>">
		
		<div class="row cl">
		  <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>标题：</label>
		  <div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="" placeholder="" id="" name="name">
		  </div>
		</div>

		<div class="row cl">
		  <label class="form-label col-xs-4 col-sm-2">推荐图：</label>
			<div class="formControls col-xs-8 col-sm-9">
			    <input id="file_upload"  type="file" multiple="true" name="file_upload" >
                <img style="display: none" id="upload_org_code_img" src="" width="150" height="150">
                <input id="file_upload_image" name="image_path" type="hidden" multiple="true" value="">
            </div>
		</div>
		

		<div class="row cl">
		  <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>所属分类：</label>
		  <div class="formControls col-xs-8 col-sm-3"> <span class="select-box">
					<select name="type" class="select">

						
                  <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $key = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                  <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
						
					</select>
					</span>
		  </div>
		</div>
		
		<div class="row cl">
		  <label class="form-label col-xs-4 col-sm-2">路径：</label>
		  <div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="" placeholder="" id="" name="url">
		  </div>
		</div>
		
		<div class="row cl">
		  <label class="form-label col-xs-4 col-sm-2">描述：</label>
		  <div class="formControls col-xs-8 col-sm-3">
			<input type="text" class="input-text" value="" placeholder="" id="" name="description">
		  </div>
		</div>


		<div class="row cl">
		  <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
			<button -onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 添加</button>
		  </div>
		</div>
		
  </form>
  
  
</article>
<script>
  /**定义页面全局变量**/
  var SCOPE = {
            'city_url' : '<?php echo url("api/city/indexcity"); ?>',
            'category_url' : '<?php echo url("api/category/getCategoryByParentId"); ?>',
            'uploadify_swf' : '__STATIC__/admin/uploadify/uploadify.swf',
            'image_upload' : '<?php echo url("api/Image/upload"); ?>',
  };
</script> 


<script type="text/javascript" src="__STATIC__/admin/hui/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>  
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/common.js"></script>
<script type="text/javascript" src="__STATIC__/admin/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/image.js"></script>

</body>
</html>