<?php
ini_set('max_execution_time', 60);
//error_reporting(0);
include "FaceDetector.php";
$detector = new svay\FaceDetector('detection.dat');

$canvas = imagecreatefromjpeg('chup-anh-gia-dinh-2.jpg');
imagejpeg($canvas,'file.jpg');

$canvas = imagecreatefromjpeg('file.jpg');
imagejpeg($canvas,'tmpfile.jpg');

while($detector->faceDetect('file.jpg','tmpfile.jpg')>0) 
	{
    $detector->toJpeg();
    }

$myFile = "file.jpg";
unlink($myFile);

// imagejpeg($canvas,'tmpfile.jpg');	
/*
        $color = imagecolorallocate($this->canvas, 255, 0, 0); //red
//for($j=$detector->count-1;$j>-1;$j--)

  $canvas = imagecreatefromjpeg('lena512color.jpg');

for($i=0;$i<$detector->count;)
{

  imagefilledrectangle(
            $canvas,
            $detector->rect[$i],
            $detector->rect[$i],
            $detector->rect[$i],
            $detector->rect[$i],
            $color
        );


$i=$i+4;

echo $i;
}
*/
 $canvas = imagecreatefromjpeg('tmpfile.jpg');
 
 $File = "tmpfile.jpg";
 unlink($File);

 header('Content-type: image/jpeg');
 imagejpeg($canvas);


 //imagejpeg($canvas,'tmpfile.jpg');
