<?php
//Set load timeout lên 120 giây
ini_set('max_execution_time', 120);

include "MultiFaceDetector.php";

$detector = new svay\MultiFaceDetector('detection.dat');

$canvas = imagecreatefromjpeg('ex-1.jpg');
imagejpeg($canvas,'file.jpg');

$canvas = imagecreatefromjpeg('file.jpg');
imagejpeg($canvas,'tmpfile.jpg');

while($detector->faceDetect('file.jpg','tmpfile.jpg')>0) 
{
    $detector->toJpeg();
}
unlink('file.jpg');
$canvas = imagecreatefromjpeg('tmpfile.jpg');
unlink('tmpfile.jpg');
header('Content-type: image/jpeg');
imagejpeg($canvas);
