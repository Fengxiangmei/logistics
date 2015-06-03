<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html lang="zh"><head><meta charset="utf-8"><title>卷烟绿色物流评价分析系统</title><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content=""><meta name="author" content=""><link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'><link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/bootstrap/css/bootstrap.css"><link rel="stylesheet" href="__PUBLIC__/lib/font-awesome/css/font-awesome.css"><script src="__PUBLIC__/lib/jquery-1.11.1.min.js" type="text/javascript"></script><script src="__PUBLIC__/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script><script type="text/javascript">        $(function() {            $(".knob").knob();        });    </script><link rel="stylesheet" type="text/css" href="__PUBLIC__/stylesheets/theme.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/stylesheets/premium.css"></head><body class="theme-blue"><script type="text/javascript">        $(function() {            var match = document.cookie.match(new RegExp('color=([^;]+)'));            if(match) var color = match[1];            if(color) {                $('body').removeClass(function (index, css) {                    return (css.match (/\btheme-\S+/g) || []).join(' ')                })                $('body').addClass('theme-' + color);            }           // $('[data-popover="true"]').popover({html: true});                    });    </script><style type="text/css">        #line-chart {            height:300px;            width:800px;            margin: 0px auto;            margin-top: 1em;        }        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover {             color: #fff;        }    </style><script type="text/javascript">        $(function() {            var uls = $('.sidebar-nav > ul > *').clone();            uls.addClass('visible-xs');            $('#main-menu').append(uls.clone());        });    </script><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><!-- Le fav and touch icons --><link rel="shortcut icon" href="../assets/ico/favicon.ico"><link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png"><link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"><!--[if lt IE 7 ]><body class="ie ie6"><![endif]--><!--[if IE 7 ]><body class="ie ie7 "><![endif]--><!--[if IE 8 ]><body class="ie ie8 "><![endif]--><!--[if IE 9 ]><body class="ie ie9 "><![endif]--><!--[if (gt IE 9)|!(IE)]><!--><!--<![endif]--><div class="navbar navbar-default" role="navigation"><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="" href="index.html"><img src="__PUBLIC__/images/tobacco.jpg"  height="50px" width="70px" class="tobacco"/><font face="Helvetica Neue" color=white size=6>		卷烟绿色物流评价分析系统 Green Logistics of Cigarette</font><!--  <span class="navbar-brand"><span class="fa fa-paper-plane"></span> --><!-- </span> --></a></div><div class="navbar-collapse collapse" style="height: 1px;"><div class ="navbar-right"><ul class="nav navbar-nav navbar-right"><li><a href="#" ><span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 4px;"></span><?php echo $_COOKIE['username'];?></a><li><li><a href="__ROOT__/index.php/login/logout" ><img src ="__PUBLIC__/images/logout.png"  height="23px" width ="23px"/> Logout                  </a><li></ul></div></div><div class="nav_bg ma_auto"><ul><li  ><a href="__ROOT__/index.php" >首 页</a></Li><li ><a href="__ROOT__/index.php/input" >数据录入与管理</a></li><li  class="on"><a href="__ROOT__/index.php/comment" style="color:rgb(255, 255, 255) ">评价分析</a></li><li><a href="__ROOT__/index.php/login/logout" >退出系统</a></li></ul></div></div><div class="sidebar-nav"><ul><li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse">权重设置<i class="fa fa-collapse"></i></a></li><li><ul class="dashboard-menu nav nav-list collapse in"><li><a href="__URL__/default.html" ><span class="fa fa-caret-right"></span>默认权重</a></li><li ><a href="__URL__/setting.html"><span class="fa fa-caret-right"></span>自定义权重</a></li></ul></li><li><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse">评价<i class="fa fa-collapse"></i></a></li><li><ul class="premium-menu nav nav-list collapse in"><li ><a href="__URL__/result_main"><span class="fa fa-caret-right"></span>总体评价</a></li><!-- 			<form action="__URL__/m"> --><li ><a href="__URL__/result_angle"><span class="fa fa-caret-right"></span>角度评价</a></li><li ><a href="__URL__/result_point"><span class="fa fa-caret-right"></span>具体指标评价</a></li></ul></li><li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse">分析<i class="fa fa-collapse"></i></a></li><li><ul class="accounts-menu nav nav-list collapse in"><li ><a href="__URL__/analysis_main"><span class="fa fa-caret-right"></span>总体分析</a></li><li ><a href="__URL__/analysis_angle"><span class="fa fa-caret-right"></span>角度分析</a></li><li ><a href="__URL__/analysis_point"><span class="fa fa-caret-right"></span>具体指标分析</a></li></ul></li></ul></div><!--  <script type="text/javascript" src="http://cdn.hcharts.cn/jquery/jquery-1.8.3.min.js"></script><script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script><script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/exporting.js"></script> --><script type="text/javascript" src="__PUBLIC__/lib/highcharts.js"></script><script type="text/javascript" src="__PUBLIC__/lib/exporting.js"></script><script>Highcharts.theme = {
	colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
	chart: {
		backgroundColor: {
			linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
			stops: [
				[0, 'rgb(255, 255, 255)'],
				[1, 'rgb(240, 240, 255)']
			]
		},
		borderWidth: 2,
		plotBackgroundColor: 'rgba(255, 255, 255, .9)',
		plotShadow: true,
		plotBorderWidth: 1
	},
	title: {
		style: {
			color: '#000',
			font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
		}
	},
	subtitle: {
		style: {
			color: '#666666',
			font: 'bold 12px "Trebuchet MS", Verdana, sans-serif'
		}
	},
	xAxis: {
		gridLineWidth: 1,
		lineColor: '#000',
		tickColor: '#000',
		labels: {
			style: {
				color: '#000',
				font: '11px Trebuchet MS, Verdana, sans-serif'
			}
		},
		title: {
			style: {
				color: '#333',
				fontWeight: 'bold',
				fontSize: '12px',
				fontFamily: 'Trebuchet MS, Verdana, sans-serif'

			}
		}
	},
	yAxis: {
		minorTickInterval: 'auto',
		lineColor: '#000',
		lineWidth: 1,
		tickWidth: 1,
		tickColor: '#000',
		labels: {
			style: {
				color: '#000',
				font: '11px Trebuchet MS, Verdana, sans-serif'
			}
		},
		title: {
			style: {
				color: '#333',
				fontWeight: 'bold',
				fontSize: '12px',
				fontFamily: 'Trebuchet MS, Verdana, sans-serif'
			}
		}
	},
	legend: {
		itemStyle: {
			font: '9pt Trebuchet MS, Verdana, sans-serif',
			color: 'black'

		},
		itemHoverStyle: {
			color: '#039'
		},
		itemHiddenStyle: {
			color: 'gray'
		}
	},
	labels: {
		style: {
			color: '#99b'
		}
	},

	navigation: {
		buttonOptions: {
			theme: {
				stroke: '#CCCCCC'
			}
		}
	}
};

// Apply the theme
var highchartsOptions = Highcharts.setOptions(Highcharts.theme);

/* 
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: [ 50, 50, 100, 80]
        },
        title: {
            text: '卷烟绿色物流各具体指标得分情况'
        },
        xAxis: {
            categories: [
                '仓储环节卷烟破损率',
                '仓库利用率',
                '仓储环节单位电能消耗',
                '分拣环节卷烟破损率',
				'分拣环节单位电能消耗',
				'分拣差错率',
				'平均作业效率',
				'人均分拣效率',
				'分拣设备有效作业率',
				'纸箱合格率',
				'分拣车间噪声水平',
				'PE膜回收率',
				'纸箱回收率',
				'单箱油耗量',
				'配送环节卷烟破损率',
				'送货准确率',
				'车辆装载率',
				'配送车辆GPS使用率',
				'运输车辆百公里油耗',
				'环境管理体系认证情况',
				'物流费用率',
				'人才保障',
				'客户绿色物流认同率',
            ],
            labels: {
                rotation: -45,
                align: 'center',
				x: 0,
                y: 45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
		  max:100,
            min: 0,
            title: {
                text: '分数'
            }
        },
        legend: {
            enabled: false
        },
		credits: {
          	 text: '',
		 },
        tooltip: {
            pointFormat: '具体指标得分为: <b>{point.y:.1f} 分</b>',
        },
        series: [{
            name: '分数',
            data: [<?php echo (substr($u11,0,5)); ?>, <?php echo (substr($u12,0,5)); ?>, <?php echo (substr($u13,0,5)); ?>, <?php echo (substr($u14,0,5)); ?>			, <?php echo (substr($u21,0,5)); ?>, <?php echo (substr($u22,0,5)); ?>, <?php echo (substr($u23,0,5)); ?>, <?php echo (substr($u24,0,5)); ?>, <?php echo (substr($u25,0,5)); ?>, <?php echo (substr($u26,0,5)); ?>, <?php echo (substr($u27,0,5)); ?>, <?php echo (substr($u28,0,5)); ?>, <?php echo (substr($u29,0,5)); ?>, <?php echo (substr($u30,0,5)); ?>,
			, <?php echo (substr($u31,0,5)); ?>,<?php echo (substr($u32,0,5)); ?>,<?php echo (substr($u33,0,5)); ?>,<?php echo (substr($u34,0,5)); ?>,<?php echo (substr($u35,0,5)); ?>,<?php echo (substr($u36,0,5)); ?>			,<?php echo (substr($u41,0,5)); ?>,<?php echo (substr($u42,0,5)); ?>,<?php echo (substr($u43,0,5)); ?>,<?php echo (substr($u44,0,5)); ?>],
            dataLabels: {
                enabled: true,
                rotation: 0,
                color: '#000',
                align: 'center',
                x: 3,
                y: 0,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif',
                   // textShadow: '0 0 3px black'
                }
            }
        }]
    });
});				 */


$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: [ 50, 50, 100, 80]
        },
        title: {
            text: '卷烟绿色仓储各具体指标得分情况'
        },
        xAxis: {
            categories: [
                '仓储环节卷烟破损率',
                '仓库利用率',
                '仓储环节单位电能消耗',
               
            ],
            labels: {
                rotation: 0,
                align: 'center',
				x: 0,
                y: 45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
		  max:100,
            min: 0,
            title: {
                text: '分数'
            }
        },
        legend: {
            enabled: false
        },
		credits: {
          	 text: '',
		 },
        tooltip: {
            pointFormat: '具体指标得分为: <b>{point.y:.1f} 分</b>',
        },
        series: [{
            name: '分数',
            data: [<?php echo (substr($u11,0,5)); ?>, <?php echo (substr($u12,0,5)); ?>, <?php echo (substr($u13,0,5)); ?>],
            dataLabels: {
                enabled: true,
                rotation: 0,
                color: '#000',
                align: 'center',
                x: 3,
                y: 0,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif',
                   // textShadow: '0 0 3px black'
                }
            }
        }]
    });
});	

$(function () {
    $('#container2').highcharts({
        chart: {
            type: 'column',
            margin: [ 50, 50, 100, 80]
        },
        title: {
            text: '卷烟绿色分拣各具体指标得分情况'
        },
        xAxis: {
            categories: [
                '分拣环节卷烟破损率',
				'分拣环节单位电能消耗',
				'分拣差错率',
				'平均作业效率',
				'人均分拣效率',
				'分拣设备有效作业率',
				'纸箱合格率',
				'分拣车间噪声水平',
				'PE膜回收率',
				'纸箱回收率',               
            ],
            labels: {
                rotation: 0,
                align: 'center',
				x: 0,
                y: 45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
		  max:100,
            min: 0,
            title: {
                text: '分数'
            }
        },
        legend: {
            enabled: false
        },
		credits: {
          	 text: '',
		 },
        tooltip: {
            pointFormat: '具体指标得分为: <b>{point.y:.1f} 分</b>',
        },
        series: [{
            name: '分数',
            data: [<?php echo (substr($u21,0,5)); ?>, <?php echo (substr($u22,0,5)); ?>, <?php echo (substr($u23,0,5)); ?>, <?php echo (substr($u24,0,5)); ?>, <?php echo (substr($u25,0,5)); ?>, <?php echo (substr($u26,0,5)); ?>, <?php echo (substr($u27,0,5)); ?>, <?php echo (substr($u28,0,5)); ?>, <?php echo (substr($u29,0,5)); ?>, <?php echo (substr($u30,0,5)); ?>],
            dataLabels: {
                enabled: true,
                rotation: 0,
                color: '#000',
                align: 'center',
                x: 3,
                y: 0,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif',
                   // textShadow: '0 0 3px black'
                }
            }
        }]
    });
});	
		
		
$(function () {
    $('#container3').highcharts({
        chart: {
            type: 'column',
            margin: [ 50, 50, 100, 80]
        },
        title: {
            text: '卷烟绿色配送运输各具体指标得分情况'
        },
        xAxis: {
            categories: [
				'单箱油耗量',
				'配送环节卷烟破损率',
				'送货准确率',
				'车辆装载率',
				'配送车辆GPS使用率',
				'运输车辆百公里油耗',           
            ],
            labels: {
                rotation: 0,
                align: 'center',
				x: 0,
                y: 45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
		  max:100,
            min: 0,
            title: {
                text: '分数'
            }
        },
        legend: {
            enabled: false
        },
		credits: {
          	 text: '',
		 },
        tooltip: {
            pointFormat: '具体指标得分为: <b>{point.y:.1f} 分</b>',
        },
        series: [{
            name: '分数',
            data: [ <?php echo (substr($u31,0,5)); ?>,<?php echo (substr($u32,0,5)); ?>,<?php echo (substr($u33,0,5)); ?>,<?php echo (substr($u34,0,5)); ?>,<?php echo (substr($u35,0,5)); ?>,<?php echo (substr($u36,0,5)); ?>],
            dataLabels: {
                enabled: true,
                rotation: 0,
                color: '#000',
                align: 'center',
                x: 3,
                y: 0,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif',
                   // textShadow: '0 0 3px black'
                }
            }
        }]
    });
});	


$(function () {
    $('#container4').highcharts({
        chart: {
            type: 'column',
            margin: [ 50, 50, 100, 80]
        },
        title: {
            text: '综合指标各具体指标得分情况'
        },
        xAxis: {
            categories: [
				'环境管理体系认证情况',
				'物流费用率',
				'人才保障',
				'客户绿色物流认同率',         
            ],
            labels: {
                rotation: 0,
                align: 'center',
				x: 0,
                y: 45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
		  max:100,
            min: 0,
            title: {
                text: '分数'
            }
        },
        legend: {
            enabled: false
        },
		credits: {
          	 text: '',
		 },
        tooltip: {
            pointFormat: '具体指标得分为: <b>{point.y:.1f} 分</b>',
        },
        series: [{
            name: '分数',
            data: [ <?php echo (substr($u41,0,5)); ?>,<?php echo (substr($u42,0,5)); ?>,<?php echo (substr($u43,0,5)); ?>,<?php echo (substr($u44,0,5)); ?>],
            dataLabels: {
                enabled: true,
                rotation: 0,
                color: '#000',
                align: 'center',
                x: 3,
                y: 0,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif',
                   // textShadow: '0 0 3px black'
                }
            }
        }]
    });
});	

  </script><div class="content"><div class="header"><div class="stats"><!--   <p class="stat"><span class="label label-info">5</span> Tickets</p><p class="stat"><span class="label label-success">27</span> Tasks</p><p class="stat"><span class="label label-danger">15</span> Overdue</p> --></div><h1 class="page-title">具体指标评价</h1></div><div class="main-content"><center><div id="container" style="min-width:700px;height:400px"></div><br/><br/><div id="container2" style="min-width:700px;height:400px"></div><br/><br/><div id="container3" style="min-width:700px;height:400px"></div><br/><br/><div id="container4" style="min-width:700px;height:400px"></div><br/><br/><!-- <font size ="5">根据上图可以看出卷烟绿色仓储，卷烟绿色分拣，卷烟绿色配送运输，综合指标的分别得分为：   <?php echo (substr($first,0,5)); ?> ，<?php echo (substr($second,0,5)); ?>，<?php echo (substr($third,0,5)); ?>，<?php echo (substr($fourth,0,5)); ?>。</font> --></center></div></div></body></html>