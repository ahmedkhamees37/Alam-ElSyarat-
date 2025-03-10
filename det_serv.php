<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="style2.css" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<? include('index1.php');?>
<div class="content">
<? 
include("config.php");
$id=$_GET['id'];
$result =mysqli_query($con,"select*from serv where id=$id");
while($row=mysqli_fetch_array($result))
{
	$head=$row['head'];
	$det=$row['det'];	
	}
	?>
<div class="head"> <? echo $head;  ?></div>
<div class="det"> <? echo $det;   ?></div>
</div >
<? include('index2.php');  ?>
</body>
</html>