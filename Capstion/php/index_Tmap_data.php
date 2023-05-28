<?php
// POST 요청에서 위도와 경도 데이터를 가져옴
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// 위도와 경도 데이터를 JavaScript 파일로 저장
$file = fopen('../js/indexTMap.js', 'w');
fwrite($file, "var latitude = $latitude;\n");
fwrite($file, "var longitude = $longitude;\n");
fclose($file);
?>
