<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<? 
if($_COOKIE['UserLoged']!='YES'){
	header("location:../index.php");
	}
  ?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete</title>
</head>
<?
include("../../config.php");
$id = $_GET['id'];


$result=mysqli_query ($con,"DELETE FROM menu where id=$id");
header ("Location:index.php");
?>
<body>
</body>
</html>