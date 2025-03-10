<?php
//by linuxwebman under gnu GPL v2
session_start();
//to make the browser NOT cache the image ;)
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
error_reporting(0);
$image = imagecreatetruecolor(150, 60);
$bgcolor = imagecolorallocate($image, 223, 225, 230);
imagefill($image, 0, 0, $bgcolor);
$chars = 'abcdefghjkmnpqrstwxyz2345689';
for($x=0; $x<6; $x++)
{
    $key .= $chars[mt_rand(0, 27)];
}
$start_x_pos = 15;
$start_y_pos = 40;
for($y=0; $y<6;$y++)
{
    $x_pos = $start_x_pos + $y*20;
    $y_pos = $start_y_pos + (mt_rand(-10,+10));
   $color = imagecolorallocate($image, mt_rand(0,128), mt_rand(0,128), mt_rand(0,128));
   imagettftext($image,mt_rand(15,20),mt_rand(-10, 10), $x_pos,$y_pos,$color,'arial.ttf',$key[$y]);
}
$new_image = imagecreatetruecolor(150, 60);
$bgcolor = imagecolorallocate($new_image, 223, 225, 230);
imagefill($new_image, 0, 0, $bgcolor);
$wave_rand = mt_rand(6, 10);
for($i=0;$i<149;$i++)
{
    for($j=0;$j<59;$j++)
    {
        $color_here = imagecolorat($image, $i, $j);
        if($color_here == $bgcolor)
        {
            $color_here = imagecolorallocate($image, 223, 225, 230);
        }
        $nx = $i - ($wave_rand * sin ((14-$wave_rand)*3.1495*$j/180));
        imagesetpixel($new_image, $nx, $j, $color_here);
    }
}
$_SESSION['key'] = md5($key);
header('Content-type: image/jpeg');
imagejpeg($new_image);
?>