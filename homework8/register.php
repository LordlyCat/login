<?php 
$newuser = $_POST["newuser"];
$newpwd = $_POST["newpwd"];

//判断数据是否填写完全
if ($newuser==null||$newpwd==null) {
	echo "<p>请填写信息完全</p>";
}

$db = new mysqli('127.0.0.1','root','123','cat');
/*$db->select_db("cat");*/

//判断用户名是否存在
$result = mysqli_query($db,"SELECT * FROM userinformation WHERE username = '$newuser'");
$num_results = mysqli_num_rows($result);

if ($num_results) {
 	echo "<p>用户名已存在</P>";
}else{
		//把新用户信息存入数据库
	$query = "insert into userinformation(username,password) values('$newuser','$newpwd')";
	$new_result = $db->query($query);

	if($new_result) {
		echo "<h1>注册成功</h1>";
	}else{
		echo "<h1>注册失败</h1>";
	}	
}
 ?>