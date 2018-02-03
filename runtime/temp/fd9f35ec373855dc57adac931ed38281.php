<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"/var/www/html/SignSystem/public/../application/admin/view/manager/remanager.html";i:1501053470;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>角色列表</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/css/font-awesome.min.css" />
		
		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<!-- ace styles -->

		<link rel="stylesheet" href="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/css/ace.min.css" />
		<link href="<?php echo \think\Config::get('parse_str.__CSS__'); ?>style.min.css?v=4.1.0" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/css/jquery-ui-1.10.3.full.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    
</head>
<body class="gray-bg">
	<div class="wrapper wrapper-content animated fadeInRight">
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" method="post" action="javascript:alter();">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 用户名 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  placeholder="Username" class="col-xs-10 col-sm-5" required value=<?php echo $data['name']; ?> >
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="class"> 组&nbsp别 </label>

										<div class="col-sm-9">
											<select name="field" id="group_id" style="width:240px;">
                                    		<?php if(is_array($info) || $info instanceof \think\Collection): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
												<option value="<?php echo $vo['group_id']; ?>" <?php if($vo['group_id'] == $data['group_id']): ?>selected<?php endif; ?>><?php echo $vo['group_name']; ?></option>
                                    		<?php endforeach; endif; else: echo "" ;endif; ?>	
                                			</select>								
												<span class="middle">选择匹配的小组名</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="class"> 职&nbsp务 </label>
										
										<div class="col-sm-9">
											<select name="field" id="position" style="width:170px;">
											<?php if(is_array($merit) || $merit instanceof \think\Collection): $i = 0; $__LIST__ = $merit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
												<option value="<?php echo $v['position']; ?>" <?php if($v['position'] == $data['position']): ?>selected<?php endif; ?>><?php echo $v['position_name']; ?></option>
                                    		<?php endforeach; endif; else: echo "" ;endif; ?>
                                			</select>								
												<span class="middle">选择匹配的职务</span>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 年&nbsp级 </label>

										<div class="col-sm-9">
											<input name="grade" type="radio" id="grade-1"  value="0" checked="checked">
											<label for="grade-1">大一</label>
              								<input name="grade" type="radio" id="grade-2"  value="0">
              								<label for="grade-2">大二</label>
              								<input name="grade" type="radio" id="grade-3"  value="0">
              								<label for="grade-3">大三</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">性&nbsp别</label>
										<div class="col-sm-9" style="margin-top:3px;">
											<input name="user_sex" type="radio" id="sex-1"  value="0">
											<label for="sex-1">男</label>
              								<input name="user_sex" type="radio" id="sex-2"  value="1">
              								<label for="sex-2">女</label></br>
										</div>
										
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 班&nbsp级 </label>

										<div class="col-sm-9">
											<input type="text" id="class" placeholder="" class="col-xs-10 col-sm-5" value="<?php echo $data['class']; ?>">
										</div>
									</div>

									<!-- <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Grid Sizing</label>

										<div class="col-sm-9">
											<div class="clearfix">
												<input class="col-xs-1" type="text" id="form-field-5" placeholder=".col-xs-1">
											</div>

											<div class="space-2"></div>

											<div class="help-block ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="input-span-slider" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a></div>
										</div>
									</div> -->
<!-- 
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">进入时间</label>

										<div class="row" >
											<div class="col-xs-6"style="width:270px;">
												<div class="input-group input-group-sm">
													<input type="text" id="datepicker" class="form-control" />
													<span class="input-group-addon">
														<i class="icon-calendar"></i>
													</span>
												</div>
											</div>
										</div>

									</div> -->

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">电&nbsp话</label>

										<div class="col-sm-9" >
											<input data-rel="tooltip" type="text" id="phone" style="width:250px;" placeholder="Tel-phone" title="" data-placement="bottom" data-original-title="Hello Tooltip!" value="<?php echo $data['phone']; ?>">
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn " type="submit" id="user" style="margin-left:50px;" value="<?php echo $data['user_id']; ?>">
												<i class="icon-ok bigger-110"></i>
												提交
											</button>

											&nbsp; &nbsp; &nbsp;
											<a  href="<?php echo url('user/member'); ?>">
											<button class="btn "  type="button">
												<i class="icon-undo bigger-110"></i> 
												后退		
											</button>
											</a>
										</div>
									</div>		
								</form>
								<div class="hr hr-18 dotted hr-double"></div>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/js/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/jsassets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<!-- ace scripts -->

		<script src="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/js/ace.min.js"></script>
		<script src="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>js/layer/layer.js"></script>
		<!-- inline scripts related to this page -->
		<script src="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>assets/js/jquery-ui-1.10.3.full.min.js"></script>
		<script type="text/javascript">




		$(function(){
    		    var d = new Date();
		    year = d.getFullYear()+"";
		    month = d.getMonth();
		    year2 = year.substr(year.length-2);
		    grade = [];
		    if(month>9){
		        grade = [parseInt(year2),parseInt(year2)-1,parseInt(year2)-2];
		    }else{
		        grade = [parseInt(year2-1),parseInt(year2)-2,parseInt(year2)-3];
		    }
		    $("input[name='grade']").each(function(index, element){
		        $(this).val(grade[index]);
		    });
    		$("input[name='user_sex'][value=<?php echo $data['sex']; ?>]").attr('checked',true);
    		$("input[name='grade'][value=<?php echo $data['grade']; ?>]").attr('checked',true);
    		
  		});
		 function alter(){
		 	var user_sex = $("input[name='user_sex']:checked").val();
		 	var number = {
				id : $("#user").val(),
				name : $("#form-field-1").val(),
				group_id: $("#group_id").val(),
				position: $("#position").val(),
				User_sex:user_sex,
				class:$('#class').val(),
				phone:$('#phone').val(),
				grade:$("input[name='grade']:checked").val(),
			}
			 var myReg = /^[\u4e00-\u9fa5]+$/;
			if(!(myReg.test($("#form-field-1").val()) && ($("#form-field-1").val().length<=4))){
				layer.msg('请使用真实姓名');
                  	return;
                }
            if (!($('#phone').val().length==11)) {
            	layer.msg('请输入正确的手机号');
                	return;
                }    
			$.ajax({
				type: 'POST', 
		     	url: '<?php echo \think\Config::get('parse_str.__MODULE__'); ?>/Manager/alertuser', 
		      	data: number,  
		      	async: false,  
				cache: false, 
		      	success: function (returndata) {
		      		layer.msg(returndata,{time:1000},function(){
		      			window.location.href = "<?php echo url('user/member'); ?>";
		      		});
		      	},
		      	error:function(){
		      		layer.msg("数据加载失败"); 
		      	},
			});
		 };
		 </script>
</body>
</html>