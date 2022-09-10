<?php

$host = $_SERVER['HTTP_HOST'];
preg_match("/[^\.\/]+\.[^\.\/]+$/", $host, $matches);
$host = "{$matches[0]}";
$get_json = file_get_contents('https://e-apply.us.com/form/call-mode-api.php?domain='.$host);
$data_json = json_decode($get_json);

if($data_json -> mode == 2){
    $image = file_get_contents('assets/images/page-picture-03.png');
}
else{
    $image = file_get_contents('assets/images/page-picture-3.png');
}

header('Content-type: image/jpeg');
echo $image;
?>