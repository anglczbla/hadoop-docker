<?php

$url = "http://192.168.56.101:9870/webhdfs/v1/user/bigdata/mdp?op=MKDIRS&user.name=bigdata";
$ch = curl_init($url);


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo "Curl error: " . curl_error($ch);
}

curl_close($ch);

echo $response;
