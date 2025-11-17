<?php 
$url = 'http://192.168.56.101:9870/webhdfs/v1/user/bigdata?op=LISTSTATUS';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response, true);

echo "<table border='1'>
<tr>
    <th>Nama Folder</th>
    <th>Last Modified</th>
</tr>
";

foreach ($response['FileStatuses']['FileStatus'] as $v) {

    echo "<tr>";
    echo "<td>" . $v['pathSuffix'] . "</td>";
    echo "<td>" . date("Y-m-d H:i:s", intval($v['modificationTime'] / 1000)) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
