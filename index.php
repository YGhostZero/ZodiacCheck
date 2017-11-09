<!DOCTYPE>
<html>
<head>
	<title>星座查询</title>
	<meta charset="utf-8">
	<link type="text/css" href="style.css" rel="stylesheet">
</head>
<body>
<div class="main">


<h1>输入生日查询星座</h1><br>
<form action="index.php" method="POST">

<input class="birthday" name="birthday" type="text" placeholder="请输入生日，例如：0101"><br>
<input class="submit" type="submit" value="提交" >&nbsp;&nbsp;&nbsp;
<input class="reset" type="reset" value="重置" >
</form>


<?php
if(!empty($_POST['birthday'])){
	$birthday=$_POST['birthday'];
	if($birthday<=1231&&$birthday>=1222){
		echo "<script>alert('摩羯座')</script>";
	}elseif($birthday<=1221&&$birthday>=1123){
		echo "<script>alert('射手座')</script>";
	}elseif($birthday<=1122&&$birthday>=1024){
		echo "<script>alert('天蝎座')</script>";
	}elseif($birthday<=1023&&$birthday>=0924){
		echo "<script>alert('天秤座')</script>";
	}elseif($birthday<=0923&&$birthday>=0824){
		echo "<script>alert('处女座')</script>";
	}elseif($birthday<=0823&&$birthday>=0723){
		echo "<script>alert('狮子座')</script>";
	}elseif($birthday<=0722&&$birthday>=0622){
		echo "<script>alert('巨蟹座')</script>";
	}elseif($birthday<=0621&&$birthday>=0522){
		echo "<script>alert('双子座')</script>";
	}elseif($birthday<=0521&&$birthday>=0421){
		echo "<script>alert('金牛座')</script>";
	}elseif($birthday<=0420&&$birthday>=0321){
		echo "<script>alert('白羊座')</script>";
	}elseif($birthday<=0320&&$birthday>=0220){
		echo "<script>alert('双鱼座')</script>";
	}elseif($birthday<=0219&&$birthday>=0121){
		echo "<script>alert('水瓶座')</script>";
	}elseif($birthday<=0120&&$birthday>=0101){
		echo "<script>alert('摩羯座')</script>";
	}
}
?>



</div>
</body>
</html>