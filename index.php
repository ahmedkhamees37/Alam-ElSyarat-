<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>


</head>
<? include("index1.php");?>
<body>
<div class="slider"><div id="container">

	<div id="header">
		<h1>       Alam ElSyarat || عالم السيارات </h1>
	</div>

	<div id="content">
	
		<div id="slider">
			<ul>				
				<li><a href="http://templatica.com/preview/30"><img src="images/images (1)_New3.jpg" alt="Css Template Preview" /></a></li>
				<li><a href="http://templatica.com/preview/7"><img src="images/images_New1.jpg" alt="Css Template Preview" /></a></li>
				<li><a href="http://templatica.com/preview/25"><img src="images/5064346-1921554641.jpg" alt="Css Template Preview" /></a></li>
				<li><a href="http://templatica.com/preview/26"><img src="images/images.jpg" alt="Css Template Preview" /></a></li>
				<li><a href="http://templatica.com/preview/27"><img src="images/images_New2.jpg" alt="Css Template Preview" /></a></li>	
<li><a href="http://templatica.com/preview/27"><img src="images/images (5).jpg" alt="Css Template Preview" /></a></li>	
<li><a href="http://templatica.com/preview/27"><img src="images/images (5)_New1.jpg" alt="Css Template Preview" /></a></li>	
<li><a href="http://templatica.com/preview/27"><img src="images/images_New2.jpg" alt="Css Template Preview" /></a></li>	
<li><a href="http://templatica.com/preview/27"><img src="images/ss.png" alt="Css Template Preview" /></a></li>	
<li><a href="http://templatica.com/preview/27"><img src="images/images (5).jpg" alt="Css Template Preview" /></a></li>	
<li><a href="http://templatica.com/preview/27"><img src="images/images (7).jpg" alt="Css Template Preview" /></a></li>
<li><a href="http://templatica.com/preview/27"><img src="images/images (11).jpg" alt="Css Template Preview" /></a></li>				
			</ul>
		</div>
			
		
</div>
</div>
<div class="content">
<div class="top-box">
<h2>    sp38 فيراري </h2>
<hr>
<p>
لبت شركه فيراري الايطاليه طلب احد عملاءها المميزين وصنعت له سياره خارقه جديده لا مثيل لها في العالم حملت هذه السياره الوحيده اسم فيراري 
</p>
</div>
<div class="grid_s" id="grid">
<h2>خدماتنا</h2>
<?
include("config.php");
$result=mysqli_query($con,"SELECT*FROM serv ORDER BY id ASC" );
?>
<table style="width:400px; margin:0 auto;">
<tr>
<? while($row= mysqli_fetch_array($result)){   ?>
<td>
<? $text=$row['det'];  ?>
<div class="grid">
<div class="gallery">
<?      echo "<img src='imgs/".$row['img']."' alt='no img'           height='100px' width='150px'> ";?>
</div>
<h3><? echo $row['head'];  ?></h3><hr>
<div class="grid_p">
<p><? echo substr($text,0,222)."..";  ?></p>
<? echo "<a href='det_serv.php?id=$row[id]' class='button bg2 grid_btn'><img src='images/111.jpg' class='q' width='170px'height='40px' ></a>" ?>
</div></div>
</td>
<? } ?>
</tr></table>
</br>
  </div>
  </br></br>
<? include("index2.php");?>
</body>
</html>