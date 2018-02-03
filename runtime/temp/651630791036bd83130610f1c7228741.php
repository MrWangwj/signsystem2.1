<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"/var/www/html/SignSystem/public/../application/admin/view/sign/log.html";i:1501053470;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>角色列表</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="<?php echo \think\Config::get('parse_str.__CSS__'); ?>bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="<?php echo \think\Config::get('parse_str.__CSS__'); ?>font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo \think\Config::get('parse_str.__CSS__'); ?>plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="<?php echo \think\Config::get('parse_str.__CSS__'); ?>animate.min.css" rel="stylesheet">
    <link href="<?php echo \think\Config::get('parse_str.__CSS__'); ?>style.min.css?v=4.1.0" rel="stylesheet">
    <link href="<?php echo \think\Config::get('parse_str.__CSS__'); ?>plugins/sweetalert/sweetalert.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>日志管理</h5>
        </div>
        <div class="ibox-content">
            <div class="hr-line-dashed"></div>

            <div class="example-wrap">
                <div class="example">
                    <table id="table">
                        <thead>
                            <th data-field="info">日志信息</th>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- End Example Pagination -->
        </div>
    </div>
</div>
<!-- End Panel Other -->
</div>

<script type="text/javascript">
    zNodes = '';
</script>
<script src="<?php echo \think\Config::get('parse_str.__JS__'); ?>jquery.min.js?v=2.1.4"></script>
<script src="<?php echo \think\Config::get('parse_str.__JS__'); ?>bootstrap.min.js?v=3.3.6"></script>
<script src="<?php echo \think\Config::get('parse_str.__JS__'); ?>content.min.js?v=1.0.0"></script>
<script src="<?php echo \think\Config::get('parse_str.__JS__'); ?>plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="<?php echo \think\Config::get('parse_str.__JS__'); ?>plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="<?php echo \think\Config::get('parse_str.__JS__'); ?>plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="<?php echo \think\Config::get('parse_str.__JS__'); ?>plugins/suggest/bootstrap-suggest.min.js"></script>
<script src="<?php echo \think\Config::get('parse_str.__JS__'); ?>plugins/layer/laydate/laydate.js"></script>
<script src="<?php echo \think\Config::get('parse_str.__JS__'); ?>plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo \think\Config::get('parse_str.__JS__'); ?>plugins/layer/layer.min.js"></script>
<link rel="stylesheet" href="<?php echo \think\Config::get('parse_str.__JS__'); ?>plugins/zTree/zTreeStyle.css" type="text/css">
<script type="text/javascript" src="<?php echo \think\Config::get('parse_str.__JS__'); ?>plugins/zTree/jquery.ztree.core-3.5.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('parse_str.__JS__'); ?>plugins/zTree/jquery.ztree.excheck-3.5.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('parse_str.__JS__'); ?>plugins/zTree/jquery.ztree.exedit-3.5.js"></script>
<script type="text/javascript">
    var table = $('#table');
    function initTable() {
        //先销毁表格
        table.bootstrapTable('destroy');
        table.bootstrapTable({
            search:"true",
            showtoggle:'true',
            showRefresh:"true",
            toolbar:"true",
            method: "post",  //使用get请求到服务器获取数据
            url:"<?php echo url('admin/sign/log_check'); ?>", //获取数据的地址
            striped: true,  //表格显示条纹
            pagination: true, //启动分页
            pageSize: 10,  //每页显示的记录数
            pageNumber:1, //当前第几页
            pageList: [5, 10, 15, 20, 25],  //记录数可选列表
            onLoadSuccess: function(){  //加载成功时执行
                layer.msg("加载成功", {time : 1000});
                $.post("<?php echo url('admin/sign/log_check'); ?>",function (data) {
////                    alert(data.list.length)
//                    for (var i= 0;i<data.list.length;i++){
////                        alert(data.list[i]["sign_state"])
//                        var state = data.list[i]["sign_state"];
//                        if(state == 0){
////                            签到
//                            $("#table").append(
//                                "<tr><td>"+data.list[i]['name']+" </td>></tr>"
//                             );
//                        }else if(state == 1){
////                            签退
//                            $("#table").append(
//                                    "<tr><td>"+data.list[i]['name']+" </td>></tr>"
//                            );
//                        }else if(state == 2){
////                            补签通过
//                            $("#table").append(
//                                    "<tr><td>"+data.list[i]['name'] +"</td>></tr>"
//                            );
//                        }else if(state==3){
////                            申请补签
//                            $("#table").append(
//                                    "<tr><td>"+data.list[i]['name'] +"</td>></tr>"
//                            );
//                        }else if(state==4){
////                              拒绝补签
//                            $("#table").append(
//                                    "<tr><td>"+data.list[i]['name'] +"</td>></tr>"
//                            );
//                        }
//                    }
                })

            },
            onLoadError: function(){  //加载失败时执行
                layer.msg("加载数据失败");
            }
        });
    }
    $(function () {
        initTable();
    })
</script>
</body>
</html>
