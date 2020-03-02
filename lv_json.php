<?php
header('Content-Encoding: gzip');
header('Content-Type: text/plain');
//$json = file_get_contents('lv.json');
$json = file_get_contents('lv_json_5.json');
$compressed = gzcompress($json, 9);
ob_start("ob_gzhandler");
echo $json;
//echo 123121;

?>