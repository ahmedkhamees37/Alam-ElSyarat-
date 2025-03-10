<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<? 
if($_COOKIE['UserLoged']!='YES'){
	header("location:../index.php");
	}
  ?>



<?
	

include_once("../../config.php");


if(isset($_POST['update']))
{
$id=$_POST['id'];	
$name=$_POST['name'];
$img=$_POST['img'];
$password=$_POST['password'];
$phone_number=$_POST['phone_number'];
$Email=$_POST['email'];
	$result=mysqli_query($con,"UPDATE admin SET name='$head',img='img',password='$password',phone_number='$phone_number',Email='$Email' WHERE id=$id");
	header("Location: index.php");
	}
?>
<?
$id =$_GET['id'];
$result=mysqli_query($con,"SELECT*FROM admin where id=$id");
while($row=mysqli_fetch_array($result)){
	$name=$row['name'];
	$img=$row['img'];
	$password=$row['password'] || md5( $_POST["password"]);
$phone_number=$row['phone_number'];
$Email=$row['Email'];
	
	
	}
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link  href="../css/admin.css" rel="stylesheet" type="text/css" >

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تعديل البيانات </title>
</head>

<body>

<div class="admin2">
<a href ="index.php"> الرئيسيه</a></br></br>
<form name="form1" method="post" action="">
<table border="0">
<tr>
<td>           الاسم        </td>
<td>
<input type="text" name="name" value='<? echo $name;?>'>      </td>
</tr>
<tr>
<td>امتداد الصوره </td>
<td><input type="text" name="date" value='<? echo $img; ?>'></td>
</tr>
<tr>
<td>           الرقم السري        </td>
<td>
<input type="password" name="password" value='<? echo $password;?>'>      </td>
</tr>
<tr>
<td>           رقم الجوال        </td>
<td>
<input type="text" name="phone_number" value='<? echo $phone_number;?>'>      </td>
</tr>
<tr>
<td>           الايميل        </td>
<td>
<input type="Email" name="email" value='<? echo $Email;?>'>      </td>
</tr>
<tr>
<td><input type="hidden" name="id" value='<? echo $_GET['id']; ?>'></td>
<td>        <input type="submit" name="update" value="تحديث">              </td>
</tr>
</table>
</form>
</div>
</body>
</html>