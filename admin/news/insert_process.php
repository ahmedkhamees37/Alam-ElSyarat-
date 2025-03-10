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
<title>عمليه ادخال  البيانات </title>
</head>

<body>
<div class="admin">

<?
include("../../config2.php");

$head=$_POST['head'];
$date=$_POST['date'];
$det=$_POST['det'];


$sql="INSERT INTO news (head,date,det)
VALUES ('$head','$date','$det')";
if(!mysqli_query($con,$sql))
{
	die('Error : '.mysqli_error($con));

}
echo "    تمت الاضافه بنجاح";
echo "<a href='../index_for_admin.php'>عوده الرئيسيه </a>";
mysqli_close($con);
?>
</div>


</body>
</html>