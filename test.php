<?php
	session_start();
	try{
	//准备dsn 数据库
	$dsn=’mysql:host=localhost,dbname=lamp58’;
	//使用pdo连接mysql数据库
	$pdo=new PDO($dsn,’root’,’root’);
	//设置mysql字符集
	$pdo->exec(‘set names utf8’);
	//准备sql语句
	$sql==”select uid,name,sex,age from user where username=:uname,userpwd=:upwd”;
	//执行预处理
	$stmt=$pdo->prepare($sql);
	//判断传递过来的用户名是否为空
	if(empty($_POST[‘uname’])){
		echo 1;
		exit;
	}
	//判断传递过来的密码是否为空
	if(empty($_POST[‘upwd’])){
		echo 2;
		exit;
	}
	//绑定参数 用户名称
	$stmt->bindParam(‘:uname’,$_POST[‘uname’]);
	//绑定参数 用户密码
	$stmt->bindParam(‘:upwd’,md5($_POST[‘upwd’]));
	//执行操作
	$stmt->execute();
		//判断操作是否有影响行
		if($stmt->rowCount()){
			echo 3;
			$_SESSION[‘isLogin’]=1;
			$arr=$stmt->fetch(PDO::FETCH_ASSOC);
			$_SESSION[‘user_info’]=$arr;
		}else{
			echo 4;
		}
	}catch(PDOException $e){
		//如果连接数据库失败 提示错误信息
		echo $e->getMessage();


?>

