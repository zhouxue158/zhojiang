<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\wamp\www\thinkphp_5.0.9_full\public/../application/admin\view\recommend\index.html";i:1499238075;}*/ ?>
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
	<form  action="" method="post">
		<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 推荐位管理 <span class="c-gray en">&gt;</span> 推荐位列表 <span class="c-gray en">&gt;</span>  <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>

		</nav>
	</form>
	<br /><br />
	<form method="get" action="<?php echo url('recommend/index'); ?>">
      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>选择推荐类别：</label>
      <div class="formControls col-xs-8 col-sm-3" style="position:relative;top:-5px;left:-120px;"> <span class="select-box">
        <select name="type" class="select">
		
		<?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $key = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>
          <?php endforeach; endif; else: echo "" ;endif; ?>
          
        </select>
        </span>
      </div>

    </form>
	
	<br />
	
<div class="page-container">

  <div class="mt-20">
    <table class="table table-border table-bordered table-bg table-hover table-sort">
      <thead>
        <tr class="text-c">
          <th width="40">ID</th>
          <th width="150">标题</th>
		  <th width="150">图片</th>
          <th width="100">地址</th>
          <th width="150">新增时间</th>
          <!-- <th width="30">发布状态</th> -->
          <th width="30">操作</th>
        </tr>
      </thead>
      <tbody>
   
      <?php if(is_array($datas) || $datas instanceof \think\Collection || $datas instanceof \think\Paginator): $key = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <tr class="text-c">
          <td><?php echo $vo['id']; ?></td>
          <td><a href="<?php echo $vo['url']; ?>" target="_blank"><?php echo $vo['name']; ?></a></td>
		  <td><img width="210" class="picture-thumb" src="<?php echo $vo['image_path']; ?>"></td>
          <td class="text-c"><?php echo $vo['url']; ?></td>
          <td><?php echo @date("y-m-d h:i", $vo['create_time']); ?></td>
        <!--   <td class="td-status"><a href="<?php echo url('recommend/status',['id'=>$vo['id'],'status'=>$vo['status']==1?0:1]); ?>" title="点击修改状态"><?php echo status($vo['status']); ?></a></td>
           --><td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick="o2o_s_edit('编辑','<?php echo url('recommend/edit',['id'=>$vo['id']]); ?>','',300)" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="o2o_del('<?php echo url('featured/status',['id'=>$vo['id'],'status'=>-1]); ?>','')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>

        </tr>
     <?php endforeach; endif; else: echo "" ;endif; ?>
        
        
      </tbody>
    </table>
  </div>

</div>


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