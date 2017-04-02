<?php

include "FaceDetector.php";

$detector = new svay\FaceDetector('detection.dat');
$detector->faceDetect('chup-anh-gia-dinh-2.jpg');
$detector->toJpeg();
