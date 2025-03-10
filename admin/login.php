<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?
$con=mysqli_connect("localhost","root","","project");
$result=mysqli_query($con,"SELECT * FROM admin");
$row=mysqli_fetch_array($result);
if($_POST["username"]==$row['name']&& md5( $_POST["password"])|| $_POST["password"]==$row['password'])
{
	setcookie("UserLoged","YES",time()+3600);

header("Location:index_for_admin.php");
}
else
{
	echo header("Location:index.php");
	}
	mysqli_close($con);
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/admin.css" rel="stylesheet" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>لوحه التحكم بالموقع</title>
</head>

<body>

</body>
</html>