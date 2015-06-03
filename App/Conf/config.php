<?php
return array(
	//'SHOW_PAGE_TRACE' =>true, //开启页面Trace
	//'配置项'=>'配置值'
	'URL_CASE_INSENSITIVE'  => true, //不区分大小写 问题解决
	'TMPL_PARSE_STRING'=>array(
		'__IMAGES__'=>'Public/images',
		'__LIB__'=>'Public/lib',
		'__STYLESHEETS__'=>'Public/stylesheets',
		),
		'TMPL_L_DELIM'=>'<{',		//模板定界符配置
	'TMPL_R_DELIM'=>'}>',	
		
'DB_TYPE'=> 'mysql',// 指定数据库是mysql
'DB_HOST'=> 'localhost',
'DB_NAME'=>'logistics2', // 数据库名
'DB_USER'=>'root',
'DB_PWD'=>'', //您的数据库连接密码
'DB_PORT'=>'3306',
'DB_PREFIX'=>'log_',//数据表前缀 
);

?>