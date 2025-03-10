<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<? 
if($_COOKIE['UserLoged']!='YES'){
	header("location:../index.php");
	}
  ?>


<?

include("../../config.php");
$result=mysqli_query($con,"SELECT * FROM menu ORDER BY id ASC");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>القائمه </title>
<link  href="../css/admin.css" rel="stylesheet" type= "text/css"/>
</head>
<body>
<div   class="admin2" style="direction:rtl;">
<a href="insert.php">اضافه جديده </a></br></br>
<?
echo "<table width='100%' border='0' align='center'>";
echo "<tr bgcolor='#CCCCCC' >";
echo"<td>عنوان القائمه</td>";
echo"<td>التفاصيل</td>";
echo"<td>تعديل</td>";
echo"</tr>";
if($result==FALSE){
	die(mysql_error());
}
while($row=mysqli_fetch_array($result)){
		echo  "<tr>";
		echo  "<td>".$row['head']."</td>";
		echo  "<td>".$row['det']."</td>";
		
echo  "<td><a href='edit.php?id=$row[id]'>تعديل</a>|<a href='delete.php?id=$row[id]'>حذف</a></td>";		
echo "</tr>";

}
echo "</table>";	

?>
</div>
</body>
</html>