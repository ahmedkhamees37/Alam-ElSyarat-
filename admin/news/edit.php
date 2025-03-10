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
$date=$_POST['date'];
$det=$_POST['det'];
	$result=mysqli_query($con,"UPDATE news SET head='$head',date='$date',det='$det' WHERE id=$id");
	header("Location: index.php");
	}
?>
<?
$id =$_GET['id'];
$result=mysqli_query($con,"select*from news where id=$id");
while($row=mysqli_fetch_array($result)){
	$head=$row['head'];
	$date=$row['date'];
	$det=$row['det'];

	
	}
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تعديل البيانات</title>
<link  href="../css/admin.css" rel="stylesheet" type="text/css" >
</head>

<body>
<body>

<div class="admin2">
<a href ="index.php"> الرئيسيه</a></br></br>
<form name="form1" method="post" action"">
<table border="0">
<tr>
<td>          العنوان       </td>
<td>
<input type="text" name="head" value='<?php echo $head;?>'>      </td>
</tr>
<tr>
<td>التاريخ </td>
<td>
<input type="text" name="date" value='<?php echo $date ;?>'></td>
</tr>
<tr>
<td>              التفاصيل                </td>
<td>  <textarea name="det" cols="40" rows="7"> <?php echo $det;?></textarea>        </td>
</tr>
<tr>
<td><input type="hidden" name="id" value='<?php echo $_GET['id']; ?>'></td>
<td>        <input type="submit" name="update" value="تحديث">              </td>
</tr>
</table>
</form>
</div>
</body>
</html>