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
<title>add </title>
</head>

<body>
<div class="admin">
<?

include("../../config2.php");
$target="../../imgs/";
$target=$target.basename($_FILES['img']['name']);
$name=$_POST['name'];
$img=($_FILES['img']['name']);
$password=$_POST['password'];
$phone_number=$_POST['phone_number'];
$Email=$_POST['email'];

$sql="INSERT INTO admin (name,img,password,phone_number,Email)
VALUES ('$name','$img','$password','$phone_number ','$Email')";
if(move_uploaded_file($_FILES['img']['tmp_name'],$target))
{ 
echo "";}
else
{
  echo "لم يتم الرفع  ... هناك مشكله";
	}
if(!mysqli_query($con,$sql))
{
	die('لم يتم الرفع : '.mysqli_error($con));

}
echo "    تمت الاضافه بنجاح";
echo "<br>";
echo "<a href='../index_for_admin.php'>عوده الرئيسيه </a>";
mysqli_close($con);
?>

</div>


</body>
</html>