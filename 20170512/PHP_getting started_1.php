<?php
echo $_SERVER["SERVER_NAME"];
 ?>
<br>
<?php
echo $_SERVER["HTTP_USER_AGENT"]
 ?>
<br>
<?php
if( empty($_SERVER["HTTP_REFERER"])){
    //HTTP_REFERERの値がなければ以下の分を出力
    echo "リファラ値がありません。";
}
else{//HTTP_REFERERの値があればそれを出力
echo $_SERVER["HTTP_REFERER"];
}
 ?>
<br>
<?php
echo $_SERVER["REMOTE_ADDR"];
 ?>
<br>
<?php
echo gethostbyaddr($_SERVER["REMOTE_ADDR"]);
 ?>
 <br>
<?php
$fp = fopen("count.txt","r+");//ファイル開く
$count = fgets($fp, 10);//9桁分値読み取り
$count = trim($count);
$count++;//値+1(カウントアップ)
rewind($fp);//ファイルポインタを先頭に戻す
fputs($fp, $count);//値書き込み
fclose($fp);//ファイル閉じる
echo "あなたは".$count."人目のお客様です";
 ?>
<br>
<?php
//フォーマット部分(ここでは%d)が2つ目の引数と変換されて出力されます。
$score = 36;
printf("得点は%d点です",$score);
 ?>
 <br>
 <?php
 $year = 2004;
 $month = 5;
 $day = 4;
  //「2004年05月04日」と出力したい
 printf("今日は%04d年%02d月%02d日です。", $year, $month, $day );
 ?>
 <br>
 <?php
$year = 2004;
$month = 5;
$day = 15;

$format = "日本語では%04d年%02d月%02d日<br />";
printf($format, $year, $month, $day);

// 値が複数ある場合、引数が順番で並んでいるとは限らない。
// そこで引数に番号をつけて順番を指定してみる。
// %の後に何番目の引数と交換するかを指定する。
// この場合は「%引数番号」の後に「$」を付けて実際のフォーマット指定をする

$month = "May"; // 月$monthの定義しなおし

//「"」ダブルクォーテーションの文字列なので「$」をエスケープしている。
$format = "英語なら・・・・%2\$s %3\$02d %1\$04d";
printf($format, $year, $month, $day);
?>
<br>
<br>
<?php
date_default_timezone_set("Asia/Tokyo");
$fp = fopen("count.txt","r+");
$count = fgets( $fp, 100);
$count = trim($count);
$count ++;
rewind( $fp);
fputs( $fp, $count);
fclose( $fp);
echo "あなたは".$count."人目のお客様です<br>";
$weekday = array( "(日)", "(月)", "(火)", "(水)", "(木)", "(金)", "(土)" );
//print $weekday[date("w")]."曜日";
print date(" Y n/j"). $weekday[date("w")] .date("G:i");
 ?>
 <br>
 <br>
 <?php

 // 現在の年月を取得
 $year = date('Y');
 $month = date('n');

 // 月末日を取得
 $last_day = date('j', mktime(0, 0, 0, $month + 1, 0, $year));

 $calendar = array();
 $j = 0;

 // 月末日までループ
 for ($i = 1; $i < $last_day + 1; $i++) {

     // 曜日を取得
     $week = date('w', mktime(0, 0, 0, $month, $i, $year));

     // 1日の場合
     if ($i == 1) {

         // 1日目の曜日までをループ
         for ($s = 1; $s <= $week; $s++) {

             // 前半に空文字をセット
             $calendar[$j]['day'] = '';
             $j++;

         }

     }

     // 配列に日付をセット
     $calendar[$j]['day'] = $i;
     $j++;

     // 月末日の場合
     if ($i == $last_day) {

         // 月末日から残りをループ
         for ($e = 1; $e <= 6 - $week; $e++) {

             // 後半に空文字をセット
             $calendar[$j]['day'] = '';
             $j++;

         }

     }

 }

 ?>
 <?php echo $year; ?>年<?php echo $month; ?>月のカレンダー
<br>
<br>
<table>
    <tr>
        <th>日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th>土</th>
    </tr>

    <tr>
    <?php $cnt = 0; ?>
    <?php foreach ($calendar as $key => $value): ?>

        <td>
        <?php $cnt++; ?>
        <?php echo $value['day']; ?>
        </td>

    <?php if ($cnt == 7): ?>
    </tr>
    <tr>
    <?php $cnt = 0; ?>
    <?php endif; ?>

    <?php endforeach; ?>
    </tr>
</table>
<style type="text/css">
table {
    width: 100%;
}
table th {
    background: #EEEEEE;
}
table th,
table td {
    border: 1px solid #CCCCCC;
    text-align: center;
    padding: 5px;
}
</style>
