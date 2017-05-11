<?php
if(isset($_POST['comment'])){
    //($_post)の部分は_(アンダーバー)がないと反映されない
$comment = $_POST['comment'];
echo $comment;
}
 ?>
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UFT-8">
<title>フォームからデータを受け取る</title>
</head>
<body>
<h1>フォームデータの送信</h1>
<form action = "sample_1.php" method = "POST">
    //action = ""の中身はこのファイルが保存されている場所を指定する
<input type = "text" name ="comment"><br/>
<input type = "submit" value ="送信">
</form>
</body>
</html>
