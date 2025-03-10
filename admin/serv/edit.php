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
$head=$_POST['head'];
$img=$_POST['img'];
$det=$_POST['det'];
	$result=mysqli_query($con,"UPDATE serv SET head='$head',img='img',det='$det' WHERE id=$id");
	header("Location: index.php");
	}
?>
<?
$id =$_GET['id'];
$result=mysqli_query($con,"SELECT*FROM serv where id=$id");
while($row=mysqli_fetch_array($result)){
	$head=$row['head'];
	$img=$row['img'];
	$det=$row['det'];
	
	
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
<td>           العنوان        </td>
<td>
<input type="text" name="head" value='<? echo $head;?>'>      </td>
</tr>
<tr>
<td>امتداد الصوره </td>
<td><input type="text" name="date" value='<? echo $img; ?>'></td></tr>
<tr>
<td>              التفاصيل                </td>
<td>  <textarea name="det" cols="40" rows="7"> <? echo $det;?></textarea>        </td>
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