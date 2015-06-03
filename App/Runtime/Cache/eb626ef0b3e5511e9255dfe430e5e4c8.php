<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html lang="zh"><head><meta charset="utf-8"><title>卷烟绿色物流评价分析系统</title><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content=""><meta name="author" content=""><link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'><link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/bootstrap/css/bootstrap.css"><link rel="stylesheet" href="__PUBLIC__/lib/font-awesome/css/font-awesome.css"><script src="__PUBLIC__/lib/jquery-1.11.1.min.js" type="text/javascript"></script><script src="__PUBLIC__/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script><script type="text/javascript">        $(function() {
            $(".knob").knob();
        });
    </script><link rel="stylesheet" type="text/css" href="__PUBLIC__/stylesheets/theme.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/stylesheets/premium.css"></head><body class="theme-blue"><script type="text/javascript">        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

           // $('[data-popover="true"]').popover({html: true});
            
        });
    </script><style type="text/css">        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style><script type="text/javascript">        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><!-- Le fav and touch icons --><link rel="shortcut icon" href="../assets/ico/favicon.ico"><link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png"><link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"><!--[if lt IE 7 ]><body class="ie ie6"><![endif]--><!--[if IE 7 ]><body class="ie ie7 "><![endif]--><!--[if IE 8 ]><body class="ie ie8 "><![endif]--><!--[if IE 9 ]><body class="ie ie9 "><![endif]--><!--[if (gt IE 9)|!(IE)]><!--><!--<![endif]--><div class="navbar navbar-default" role="navigation"><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="" href="index.html"><img src="__PUBLIC__/images/tobacco.jpg"  height="50px" width="70px" class="tobacco"/><font face="Helvetica Neue" color=white size=6>		卷烟绿色物流评价分析系统 Green Logistics of Cigarette</font><!--  <span class="navbar-brand"><span class="fa fa-paper-plane"></span> --><!-- </span> --></a></div><div class="navbar-collapse collapse" style="height: 1px;"><div class ="navbar-right"><ul class="nav navbar-nav navbar-right"><li><a href="#" ><span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 4px;"></span><?php echo $_COOKIE['username'];?></a><li><li><a href="__ROOT__/index.php/login/logout" ><img src ="__PUBLIC__/images/logout.png"  height="23px" width ="23px"/> Logout
                </a><li></ul></div></div><div class="nav_bg ma_auto"><ul><li  ><a href="__ROOT__/index.php" >首 页</a></Li><li class="on"><a href="__ROOT__/index.php/input" style="color:rgb(255, 255, 255) ">数据录入与管理</a></li><li  ><a href="__ROOT__/index.php/comment">评价分析</a></Li><!--  <li><a href="__ROOT__/index.php/analysis">决策</a></li> --><!--  <li><a href="__ROOT__/index.php/help">帮助</a></li> --><li><a href="__ROOT__/index.php/login/logout" >退出系统</a></li></ul></div></div><div class="sidebar-nav"><ul><li><a href="__URL__/warehousing.html" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i>卷烟绿色仓储</a></li><li><a href="__URL__/sorting.html" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i>卷烟绿色分拣</a></li><li><a href="__URL__/transportation.html" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-fighter-jet"></i>卷烟绿色配送运输</a></li><li><a href="__URL__/recycling.html" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i>综合指标</a></li><!-- <li><a href="__URL__/wanting.html" data-target=".standard-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-question-circle"></i>烟草公司与零售商绿色物流意愿水平</a></li> --></ul></div><!--  --><script type="text/javascript">//x限制只能输入数字
 function clearNoNum(obj)
    {
        //先把非数字的都替换掉，除了数字和.
        obj.value = obj.value.replace(/[^\d.]/g,"");
        //必须保证第一个为数字而不是.
        obj.value = obj.value.replace(/^\./g,"");
        //保证只有出现一个.而没有多个.
        obj.value = obj.value.replace(/\.{2,}/g,".");
        //保证.只出现一次，而不能出现两次以上
        obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$",".");
    }

function InputCheck(InputForm)
{
//检查下拉框是否选择
/*if(document.getElementById("parameter").value == "null"){
  alert("请选择评价参数！");
  return false;
}*/
//检查输入框是否全部输入
   if (InputForm.total_w.value == "")
  {
    alert("请输入计算期总作业量!");
    InputForm.total_w.focus();
    return (false);
  }
   if (InputForm.damage_w.value == "")
  {
    alert("请输入计算期仓储破损量!");
    InputForm.damage_w.focus();
    return (false);
  }
  
  if (InputForm.space.value == "")
  {
    alert("请输入仓储利用空间!");
    InputForm.space.focus();
    return (false);
  }
  if (InputForm.volume.value == "")
  {
    alert("请输入仓储容积!");
    InputForm.volume.focus();
    return (false);
  }
    if (InputForm.power.value == "")
  {
    alert("请输入仓储电能消耗总量!");
    InputForm.power.focus();
    return (false);
  }



  
 
}

</script><style type="text/css">td {padding-top: 0.3cm;padding-bottom:0.3cm;}
th {padding-top: 0.3cm;padding-bottom:0.3cm;}
</style><div class="content"><div class="header"><div class="stats"><!--   <p class="stat"><span class="label label-info">5</span> Tickets</p><p class="stat"><span class="label label-success">27</span> Tasks</p><p class="stat"><span class="label label-danger">15</span> Overdue</p> --></div><h1 class="page-title">卷烟绿色仓储</h1><ul class="breadcrumb"><li><a href="__URL__/">数据录入与管理</a></li><li class="active"><a href="#">卷烟绿色仓储</a></li><!-- 	<li class="active">仓储利用率</li> --></ul></div><div class="main-content"><form id="InputForm"  onSubmit="return InputCheck(this)" name="InputForm" action="warehousing_add" method="post" class= "shadow"><font size="1" color="red">&nbsp;&nbsp;（以下各项只能填数字）</font><fieldset><center><table border="0"  ><tr><th align="left">时间:</th><th><select name="time" id="time"  class="choice" ><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option></select></th><th align="">季度:</th><th><select name="quarter" id="quarter"  class="choice" ><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></th><!-- --></tr><tr><th align="left">地点:</th><th><select name="place" id ="place"  class="choice" ><option value="长沙市">长沙市</option><option value="株洲市">株洲市</option><option value="湘潭市">湘潭市</option><option value="衡阳市">衡阳市</option><option value="邵阳市">邵阳市</option><option value="岳阳市">岳阳市</option><option value="常德市">常德市</option><option value="张家界市">张家界市</option><option value="益阳市">益阳市</option><option value="郴州市">郴州市</option><option value="永州市">永州市</option><option value="怀化市">怀化市</option><option value="娄底市">娄底市</option></select></th></tr><tr><td align="left">计算期总作业量(箱):</td><td><input type="text" name="total_w" id="total_w" onkeyup="clearNoNum(this)"/></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;计算期仓储破损量(箱): </td><td align="right"><input type="text" name="damage_w" id ="damage_w" onkeyup="clearNoNum(this)"/></td></tr><tr><td align="left">仓储利用空间（箱）:</td><td><input id="space" name="space" type="text"  onkeyup="clearNoNum(this)"/></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;仓储容积(箱):</td><td align="right"><input type="text" name="volume" id ="volume" onkeyup="clearNoNum(this)"/></td></tr><tr>&nbsp;&nbsp;&nbsp;&nbsp; </tr><tr><td align="left">仓储环节耗电量（kw.h）: </td><td><input type="text" name="power"  id ="power" onkeyup="clearNoNum(this)"/></td></tr></table></center></fieldset><br/><input type="reset" value="重   置"  class="btn btn-primary btn-me-reset"/><input type="submit" value="确   定" class="btn btn-primary btn-me-ok "/><br/><br/></form><div id="output"></div></div></div></body></html>