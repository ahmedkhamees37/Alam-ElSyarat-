<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<? 
if($_COOKIE['UserLoged']!='YES'){
	header("location:../index.php");
	}
  ?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صفحه ادخال البيانات  القائمه </title>
</head>

<body>
<div class="admin">
<div class="b">ادخال بيانات القائمه </div>
</br><br/>
<div>
<form action="insert_process.php" method="post">
العنوان :</br>
<input type="text" name="head"></br>
التفاصيل :<br/>
<textarea name="det" rows="7" cols="40"></textarea>
</br>
<input type="submit" value="حفظ">
</form>
</div>
</body>
</html>