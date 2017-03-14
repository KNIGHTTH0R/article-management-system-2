<?php
	require_once('config.php')
	//连库
	if(mysql_connect('localhost','root','root')){
		echo '连接成功';
	}else{
		echo '连接失败';
	}
	//选库
	if(!mysql_select_db('test')){
		echo mysql_error();
	};
	//设置库的字符集
	if(mysql_query('set names utf8')){
		echo mysql_error();
	};
?>