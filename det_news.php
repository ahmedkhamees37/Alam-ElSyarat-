<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<? include('index1.php');?>
<div class="content">
<? 
include("config.php");
$id=$_GET['id'];
$result =mysqli_query($con,"SELECT*FROM news where id=$id");
while($row=mysqli_fetch_array($result))
{
	$head=$row['head'];
	$det=$row['det'];
	$date =$row['date'];	
	}
	?>
<div class="head"> <? echo $head;  ?></div>
<div class="det"> 
<? echo $date;
echo '<br>';
echo $det;
   ?></div>
</div >
<? include('index2.php');  ?>

</body>
</html>