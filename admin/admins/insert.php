<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<? 
if($_COOKIE['UserLoged']!='YES'){
	header("location:../index.php");
	}
  ?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<script  src="Javascript.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صفحه ادخال البيانات الخدمه </title> 
</head>

<body>
<div class="admin">
<div class="b">ادخال بيانات المدراء </div>
</br><br/>
<div>
<form onsubmit="return validateR()" enctype="multipart/form-data" action="insert_process.php" method="post">
الاسم :</br>
<input type="text" name="name" Required></br>
الصوره:</br>
<input type="file" name="img"Required></br>
 رقم السري:</br>
<input type="password" name="password"Required></br>
رقم الجوال :<br/>
<input type="text" name="phone_number"Required></br>
 الايميل:</br>
<input type="email" name="email"Required></br>
<input type="reset" value="reset">
</br>
<img src="php_captcha.php" />
<br />
<input type="text" />
<input type="submit" value="check||حفظ"/>

</form>
</div>


</body>
</html>

