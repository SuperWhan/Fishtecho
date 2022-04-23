<?php
print ("Users of fishtecho</p> <br><br>");
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "https://fishtecho.com/html/all_users.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
$output1 = curl_exec($ch);
curl_close($ch);
print ("$output1");

print ("Users of Qaraar </p> <br><br>");
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "https://qaraar.org/users.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
$output2 = curl_exec($ch);
curl_close($ch);
print ("$output2");

print ("Users of Roshan's website</p> <br><br>");
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "http://roshanchokshi.000webhostapp.com/users.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
print ("$output");
?>
