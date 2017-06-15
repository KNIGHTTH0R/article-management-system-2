<?php
	require_once('../connect.php');
	//把传递过来的信息入库,入库前对所有信息进行效验。
	if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
		echo "<script>alert('标题不能为空！');window.location.href='article.add.php'</script>";
	}else{
		$title = $_POST['title'];
		$author = $_POST['author'];
		$description = $_POST['description'];
		$content = $_POST['content'];	
		$dateline = time();
		$insertsql = "insert into article(title,author,description,content,dateline) values('$title','$author','$description','$content',$dateline)";
		if(mysql_query($insertsql)){
			echo "<script>alert('文章发布成功！');window.location.href='article.add.php'</script>";
		}else{
			echo "<script>alert('文章发布失败！');window.location.href='article.add.php'</script>";
		}
	}
?>
