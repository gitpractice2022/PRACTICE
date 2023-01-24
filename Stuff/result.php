<?php
echo "RESULT :<br>";
$data=fopen("data.txt","a");
fwrite($data,$_POST["name"]);
fwrite($data,$_POST["email"]);
fwrite($data,$_POST["op1"]);
fclose($data);
echo "data updated"
?>