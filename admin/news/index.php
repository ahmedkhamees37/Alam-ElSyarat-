<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<? 
if($_COOKIE['UserLoged']!='YES'){
	header("location:../index.php");
	}
  ?>



<?

include("../../config.php");
$result=mysqli_query($con,"SELECT * FROM events ORDER BY id ASC");
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link  href="../css/admin.css" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الاخبار</title>
</head>

<body>
<div   class="admin2" style="direction:rtl;">
<a href="insert.php">اضافه جديده </a></br></br>
<?
echo "<table width='100%' border='0' align='center'>";
echo "<tr bgcolor='#CCCCCC' >";
echo"<td>العنوان</td>";
echo"<td>الصوره </td>";
echo"<td>التاريخ</td>";
echo"<td>التفاصيل</td>";
echo"<td>تعديل</td>";
echo"</tr>";
if($result===FALSE){
	die(mysql_error());
}
while($row=mysqli_fetch_array($result)){
		echo  "<tr>";
		echo  "<td>".$row['head']."</td>";
		echo "<td><img src='../../imgs/".$row['img']."' alt='no img' height='90px' width='95px'></td>";
		echo  "<td>".$row['date']."</td>";
		echo  "<td>".$row['det']."</td>";
echo  "<td><a href='edit.php?id=$row[id]'>تعديل</a>|<a href='delete.php?id=$row[id]'>حذف</a></td>";
		echo "</tr>";
}
echo "</table>";	

?>
</div>

</body>
</html>