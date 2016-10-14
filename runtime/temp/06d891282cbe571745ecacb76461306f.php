<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"/var/www/html/SignSystem2/public/../application/home/view/homepage/index.html";i:1476444738;s:74:"/var/www/html/SignSystem2/public/../application/home/view/public/base.html";i:1476446449;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>标题</title>
	<link rel="stylesheet" href="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo \think\Config::get('parse_str.__CSS__'); ?>public-base.css">
	<script src="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>js/jquery-3.0.0.min.js"></script>
	<script src="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>js/layer/layer.js"></script>
	<script src="<?php echo \think\Config::get('parse_str.__PUBLIC__'); ?>js/public-base.js"></script>	
	
<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('parse_str.__CSS__'); ?>homepage.css">

</head>
<body>
	<div class="backgd">
		<div class="title">
			<nav>
				<div class="title-left">
						<label class="logo"></label>
						<span>三月软件</span>
				</div>
				<div class="title-right">
					<ul>
						<li class="picture">
							<div class="dropdown">
   								<img src="<?php echo \think\Config::get('parse_str.__IMAGE__'); ?>picture1.jpg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    								<a href=""><li>个人信息</li></a>
									<a href=""><li>查看课表</li></a>
									<a href=""><li>退出</li></a>
  								</ul>
							</div>	
						</li>
						<li class="user">
							<div>
								<p>
									欢迎
									<a href="">李雪冰</a>
									登陆
								</p>
							</div>
						</li>
					</ul>
				</div>				
			</nav>
		</div>
		<div class="main">
			
    <div id="hometop_div">
        <div class="homebox">
            <button type="button" class="btn btn-info my_btn" id="sign_btn">签到</button>
            <button type="button" class="btn btn-info my_btn" id="signoff_btn">签退</button>
            <button type="button" class="btn btn-info my_btn" id="reSign_btn">补签</button>
        </div>
        <div class="homebox">
            <div class="box" id="boxtitle">签到板</div>
            <div id="homeinfo_div" class="box" >

            </div>
        </div>
    </div>
</div>


<!--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">-->
    <!--Launch demo modal-->
<!--</button>-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">补签</h4>
            </div>
            <div class="modal-body" style="text-align: center">
                <div id="resign1_div">
                    <p>上次签到时间 : <span id="lasttime_span" style="font-weight: 700">aaaa</span></p>
                    <p>补签签退时间 : <span id="overtime_span" style="font-weight: 700">aaaa</span>
                    <span style="font-weight: 700">
                        <select class="selectorH">
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                        </select>
                          时
                            <select class="selectorM">
                                <option>00</option>
                                <option>05</option>
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                                <option>25</option>
                                <option>30</option>
                                <option>35</option>
                                <option>40</option>
                                <option>45</option>
                                <option>50</option>
                                <option>55</option>
                            </select>
                        分
                    </span>
                    </p>
                </div>
                <div id="resign2_div">
                    <p>补签时段：<span id="resigndate_span">
                        <select id="redign_YMD">
                        </select>
                    </span></p>
                    <p>
                        <select id="starH_select">
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                        </select> 时
                        <select id="starM_select">
                            <option>00</option>
                            <option>05</option>
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                            <option>30</option>
                            <option>35</option>
                            <option>40</option>
                            <option>45</option>
                            <option>50</option>
                            <option>55</option>
                        </select> 分 ————
                        <select id="overH_select">
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                        </select> 时
                        <select id="overM_select">
                            <option>00</option>
                            <option>05</option>
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                            <option>30</option>
                            <option>35</option>
                            <option>40</option>
                            <option>45</option>
                            <option>50</option>
                            <option>55</option>
                        </select> 分
                    </p>
                    <p>注意：只能补签本周的哦~</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="reSignok_btn">补签</button>
            </div>
        </div>
    </div>
</div>

		</div>
		<div class="footer">
			<span>三月软件@版权所有</span>
		</div>
	</div>
	
<script>
    var temp = 0;
    var overtime=0;
    var resign2_div = $("#resign2_div");
    var resign1_div = $("#resign1_div");
    resign2_div.hide();
    window.onload = function() {
        getSignInfo();
        setInterval(getSignInfo,1000);
    };
    $("#homeinfo_div").scroll( function() {
//        alert(1)
    });
    $("#sign_btn").click(function () {
        $.post("<?php echo url('homepage/sign'); ?>",function (data) {
                layer.msg(data.msg,{time:1000},function () {
                    if(data.code==1){
                        getSignInfo();
                    }
                });
        })
    })

    $("#signoff_btn").click(function () {
        $.post("<?php echo url('homepage/signoff'); ?>",function (data) {
                layer.msg(data.msg,{time:1000},function () {
                    if(data.code==1){
                        getSignInfo();
                    }
                });
        })
    })
    $("#reSign_btn").click(function () {
        $.post("<?php echo url('homepage/reSign'); ?>",function (data) {
            if(data.code==-1){
                layer.msg(data.msg,{time:1000});
            }else if(data.code==-2){
                layer.msg(data.msg,{time:1000},function () {
                    resign2_div.show();
                    resign1_div.hide();
                    $("#redign_YMD").html("");
                    var now = new Date();
                    //获取当前年月日
                    var str = now.getFullYear() + "-" + Appendzero (now.getMonth()+1) + "-" + Appendzero (now.getDate());
                    for(var i = 1;i<=data.week.size;i++){
                        $("#redign_YMD").append("<option>"+data.week[i]+"</option>");
                    }
                    //默认选中当前年月日
                    $("#redign_YMD").val(str);

                    $('#myModal').modal('show');
                    //补签整个时段
                    temp =1;
                });
            }else if(data.code==1){
                layer.msg('请补签',{time:1000}, function(){
                    temp =2;
                    resign1_div.show();
                    resign2_div.hide();
                    $("#lasttime_span").html(data.year+"-"+data.month+"-"+data.day+" "+data.hour+":"+data.minute+":"+data.sec);
                    $("#overtime_span").html(data.year+"-"+data.month+"-"+data.day+" ");
                    $(".selectorH").val(data.hour);
                    $('#myModal').modal('show');
                });
            }
        })
    })
    $("#reSignok_btn").click(function () {
        //补签整个时段
        if(temp ==1 ){
            var ymd = $("#redign_YMD").find("option:selected").text();
            var starM = $("#starM_select").find("option:selected").text()*60;
            var starH = $("#starH_select").find("option:selected").text()*60*60;
            var overM = $("#overM_select").find("option:selected").text()*60;
            var overH = $("#overH_select").find("option:selected").text()*60*60;
            var startTime =starM+starH;
            var overTime =overM+overH;
            $.post("<?php echo url('homepage/reSignAll'); ?>",{'startTime':startTime,'overTime':overTime,'ymd':ymd},function (data) {
//                alert(data.code)
//                alert(data.msg)
                layer.msg(data.msg,{time:1500},function () {
                    if(data.code==1){
                        getSignInfo();
                        $('#myModal').modal('toggle')
                    }
                });
            })
            //补签上次未完成的
        }else if(temp==2){
            var hour = $(".selectorH").find("option:selected").text();
            var minute = $(".selectorM").find("option:selected").text();
            var date = $("#overtime_span").text();
            $.post("<?php echo url('homepage/reSignOk'); ?>",{"overdate":date,"hour":hour,"minute":minute},function (data) {
                layer.msg(data.msg,{time:1500},function () {
                    if(data.code==1){
                        getSignInfo();
                        $('#myModal').modal('toggle')
                    }
                })
            })
        }
    })
    //用于自动补零
    function Appendzero (obj) {
               if (obj < 10) return "0" + obj; else return obj;
    }
    //签到版刷新
    function getSignInfo() {
        $.post("<?php echo url('homepage/signInEdition'); ?>",function (data) {
           $("#homeinfo_div").html('');
            for(var i = 0 ;i<data.list.length;i++){

                if(data.list[i]['sign_state']==0){
                    var time = data.list[i]['star'];
                    var d = new Date(parseInt(time) * 1000);
                    $("#homeinfo_div").append("<p>"+data.list[i]['name']+"同学"+Appendzero(d.getHours())+":"+Appendzero(d.getMinutes())+"来到小组</p>");
                }else if(data.list[i]['sign_state']==1){
                    var time = data.list[i]['over'];
                    var d = new Date(parseInt(time) * 1000);
                    $("#homeinfo_div").append("<p>"+data.list[i]['name']+"同学"+Appendzero(d.getHours())+":"+Appendzero(d.getMinutes())+"离开小组</p>");
                }else if(data.list[i]['sign_state']==2){
                    var startime = data.list[i]['star'];
                    var overtime = data.list[i]['over'];
                    var ds = new Date(parseInt(startime)*1000);
                    var dov = new Date(parseInt(overtime)*1000);
                    $("#homeinfo_div").append("<p>"+data.list[i]['name']+"同学申请补签"+Appendzero(ds.getMonth()+1)+"月"+Appendzero(ds.getDate())+"日"+ds.getHours()+":"+Appendzero(ds.getMinutes())+"——"+Appendzero(dov.getHours())+":"+Appendzero(dov.getMinutes())+"的记录通过</p>");
                } else if(data.list[i]['sign_state']==4){
                    var startime = data.list[i]['star'];
                    var overtime = data.list[i]['over'];
                    var ds = new Date(parseInt(startime)*1000);
                    var dov = new Date(parseInt(overtime)*1000);
                    $("#homeinfo_div").append("<p>管理员拒绝了"+data.list[i]['name']+"同学补签"+Appendzero(ds.getMonth()+1)+"月"+Appendzero(ds.getDate())+"日"+ds.getHours()+":"+Appendzero(ds.getMinutes())+"——"+Appendzero(dov.getHours())+":"+Appendzero(dov.getMinutes())+"的记录</p>");
                }
            }

            $("#homeinfo_div").scrollTop($("#homeinfo_div")[0].scrollHeight);
        })
    }
    function getLocalTime(nS) {
        return new Date(parseInt(nS) * 1000).toLocaleString().substr(5,5).replace(/月/g, "-").replace(/日/g, " ");
    }
</script>

</body>
</html>