<?php

include "FaceDetector.php";

$detector = new svay\FaceDetector('detection.dat');
$detector->faceDetect('ex-0.jpg');
//Trả về khuôn mặt nhận diện được. $detector->cropFaceToJpeg()
//Trả về tọa độ khuôn mặt dạng mảng. $detector->getFace()
//Trả về tọa độ khuôn mặt dạng json. $detector->toJson()
$detector->toJpeg();
