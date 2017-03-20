<?php
	require_once ('config.php');
	//连库
	if(!($con = mysql_connect(HOST, USERNAME, PASSWORD))){
		echo mysql_error();
	}
	//选库
	if(!mysql_select_db('test',$con)){
		echo mysql_error();
	};
	//设置库的字符集
	if(mysql_query('set names "gb2312"',$con)){
		echo mysql_error();
	};
?>