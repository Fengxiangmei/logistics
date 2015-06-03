<?php if (!defined('THINK_PATH')) exit();?><!doctype html><html lang="en"><head><meta charset="utf-8"><title>卷烟绿色物流评价分析系统</title><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content=""><meta name="author" content=""><link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'><link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/bootstrap/css/bootstrap.css"><link rel="stylesheet" href="__PUBLIC__/lib/font-awesome/css/font-awesome.css"><script src="__PUBLIC__/lib/jquery-1.11.1.min.js" type="text/javascript"></script><link rel="stylesheet" type="text/css" href="__PUBLIC__/stylesheets/theme.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/stylesheets/premium.css"></head><body class=" theme-blue"><!-- Demo page code --><script type="text/javascript">        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
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
    </script><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><!-- Le fav and touch icons --><link rel="shortcut icon" href="../assets/ico/favicon.ico"><link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png"><link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"><!--[if lt IE 7 ]><body class="ie ie6"><![endif]--><!--[if IE 7 ]><body class="ie ie7 "><![endif]--><!--[if IE 8 ]><body class="ie ie8 "><![endif]--><!--[if IE 9 ]><body class="ie ie9 "><![endif]--><!--[if (gt IE 9)|!(IE)]><!--><!--<![endif]--><div class="navbar navbar-default" role="navigation"><div class="navbar-header"><a class="" href="index.html"><img src="__PUBLIC__/images/tobacco.jpg"  height="50px" width="70px" class="tobacco"/><font face="Helvetica Neue" color=white size=6>		卷烟绿色物流评价分析系统 Green Logistics of Cigarette</font><!--  <span class="navbar-brand"><span class="fa fa-paper-plane"></span> --><!-- </span> --></a></div><div class="navbar-collapse collapse" style="height: 1px;"></div></div></div><div class="dialog"><div class="panel panel-default"><p class="panel-heading no-collapse">重置密码</p><div class="panel-body"><form name="RegForm" method="post" action="active" onSubmit="return InputCheck(this)"><div class="form-group"><label>&nbsp;密码(不少于6位)</label><input type="password" class="form-control span12 form-control" id="password" name="password"></div><div class="form-group"><label>&nbsp;确认密码</label><input type="password" class="form-control span12 form-control" id="repass" name="repass"></div><input type="submit" name="submit" value="确 定" class="btn btn-primary pull-right" /><div class="clearfix"></div></form></div><p></p></div></div><script src="__PUBLIC__/lib/bootstrap/js/bootstrap.js"></script><script type="text/javascript">        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script><script language=JavaScript>function InputCheck(RegForm)
{
   
  if (RegForm.password.value == "")
  {
    alert("请输入密码!");
    RegForm.password.focus();
    return (false);
  }
  if (RegForm.repass.value != RegForm.password.value)
  {
    alert("两次密码不一致!");
    RegForm.repass.value="";
    RegForm.repass.focus();
    return (false);
  }
password = RegForm.password.value;
if(password.length<6){
         alert("密码长度必须大于六位！");
         return(false);
    }
}

</script></body></html></body></html>