<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/screen.css" rel="stylesheet" type="text/css"/>
<link href="style2.css" rel="stylesheet" type="text/css"/>

</head>

<body>


  
<div class="footer">
<div class="news">
<div class="headline">
اخر الاخبار 
</div>
<?  include("config.php");
$result=mysqli_query($con,"SELECT*FROM news ORDER BY id DESC limit 5");
?>
<ul>
<? while($row=mysqli_fetch_array($result)){?>
<li> <? echo "<a href='det_news.php?id=$row[id]' > " ?> <? echo $row['head']; ?> </a></li>

<? }?>

</ul>

</div>
<div class="links">
<div class="headline">تواصل معنا عبر </div>
احمد خميس حسان
</br>
تلفون:01224014305
</br></a>
البريد الالكتروني:
ahmedkhamees37@gmail.com
</br>
<a href="mailto:name@rapidtables.com?subject=the%20subject&amp;body=this%20is%20a%20message%20body"><font size ="3" color="#FFAH00" face ="arial">send mail</font></a>

<br>
او عبر صفحتي الاجتماعيه 
</br>
<a href="#" ><img src="images/face.jpg"></a><br>
<a href="contact.php" target="self"><button>Google Map</button></a>
</div>
<div class="visitors">
<div class="headline">زوار المواقع</div>
<a href="https://info.flagcounter.com/ep9L"><img  src="images/download.jpg" alt="Flag Counter" border="0"/></a>
</div>
</div>

<div class="marquee">
<marquee width=100% behavior=scroll direction=right > Ahmed Khamis Hassan</marquee>
</div>

</br>
<div class="copyrights">
All rights reserved 
</br>

(مقدم من :  احمد خميس حسان  (الي هلمحه همرجحه
</br>
</body>
</html>

