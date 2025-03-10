<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/easySlider1.5.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true,
				continuous: true 
			});
		});	
	</script>
<title>رواد تكنولوجيا المعلومات |Technology pioneers </title>

</script>
<link href="css/style.css" rel="stylesheet" type="text/css"  />
</head>
<body>
<div class="main">
<div class="header">
<img src="images/LOGO.gif" class="imglogo"/>
</div>
<? include("config.php");
$result=mysqli_query($con,"SELECT* FROM menu ORDER BY id ASC");
 ?>
<div class="menu">
<ul>
<li><a href ="index.php">الرئيسيه </a></li>
<? while($row=mysqli_fetch_array($result)){  ?>
<li ><? echo "<a href='det_menu.php?id=$row[id]' >"?><?   echo $row['head'];?></a></li>
<? } ?>
</ul>
 </div>
<body>
</body>
</html>