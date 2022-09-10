<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

header("Content-Type: application/javascript");

$host = $_SERVER['HTTP_HOST'];
preg_match("/[^\.\/]+\.[^\.\/]+$/", $host, $matches);
$host = "{$matches[0]}";
$get_json = file_get_contents('https://e-apply.us.com/form/call-mode-api.php?domain='.$host);
$data_json = json_decode($get_json);

if($data_json -> mode == 2){
    echo 'var script = document.createElement("script")
    script.type = "text/javascript";
        script.onload = function() {
            ///callback();
        };
        script.src = "https://apply-australie.com/cdn/v2.0/en/version-0.1/bundle.js";
        document.getElementsByTagName("body")[0].appendChild(script)';
}
else{
    echo 'var script = document.createElement("script")
    script.type = "text/javascript";
        script.onload = function() {
            ///callback();
        };
        script.src = "https://apply-australie.com/cdn/v2.0/en/version-1.0/bundle.js";
        document.getElementsByTagName("body")[0].appendChild(script)';
}
?>