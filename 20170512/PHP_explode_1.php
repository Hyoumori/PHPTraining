<?php
date_default_timezone_set("Asia/Tokyo");
$fp = fopen("count.txt","r+");
$count = fgets( $fp, 10);
$count = trim($count);
$count = explode()
$count ++;
rewind( $fp);
fputs( $fp, $count);
fclose( $fp);
echo "あなたは".$count."人目のお客様です<br>";
$weekday = array( "(日)", "(月)", "(火)", "(水)", "(木)", "(金)", "(土)" );
//print $weekday[date("w")]."曜日";
print date(" Y n/j"). $weekday[date("w")] .date("G:i");
 ?>
