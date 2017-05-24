<?php
    if(isset($_POST['where01'])){
        $where01 = $_POST["where01"];
    }else{
        $where01 = "";
    }
    if(isset($_POST['where02'])){
        $where02 = $_POST["where02"];
    }else {
        $where02 = "";
    }
    $last_name = $_POST["last_name"];
    $first_name = $_POST["first_name"];
    $gender = $_POST["gender"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $tel01 = $_POST["phone01"];
    $tel02 = $_POST["phone02"];
    $tel03 = $_POST["phone03"];
    $mail01 = $_POST["mail01"];
    $mail02 = $_POST["mail02"];
    $category = $_POST["category"];
    $question = $_POST["question"];
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="Web_design.css">
</head>
<body>
<center>

    <form action="Web02.php" method="post">
            <h1 class="contact-title">お問い合わせ 内容確認</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <table border="1" bordercolor="A9085B" text-align="center">
            <tr><td>
                    <label>性</label></td><td>
                     <p><?php echo $last_name; ?></p>
            </td></tr>
            <tr><td>
                    <label>名</label></td><td>
                    <p><?php echo $first_name; ?></p>
            </td></tr>
            <tr><td>
                    <label>性別</label></td><td>
                    <p><?php echo $gender; ?></P>
            </td></tr>
            <tr><td>
                    <label>住所</label></td><td>
                    <p><?php echo $address; ?></p>
            </td></tr>
            <tr><td>
                    <label>電話番号</label></td><td>
                    <p><?php echo $tel01 ."-". $tel02 ."-". $tel03; ?></p>
            </td></tr>
            <tr><td>
                    <label>メールアドレス</label></td><td>
                    <p><?php echo $mail01 ."@". $mail02 ?></p>
            </td></tr>
            <tr>
                <td>
                    <label>どこで知ったか</label>
                </td>
				<td>
                    <p><?= $where01." ".$where02; ?>
                </td>
            </tr>
            <tr><td>
                    <label>質問カテゴリ</label></td><td>
                    <p><?php echo $category; ?></p>
            </td></tr>
            <tr><td>
                    <label>質問内容</label></td><td>
                    <p><?php echo $question; ?></p>
            </td></tr>
        </table>
        <input type="button" value="編集" onclick="history.back(-1)">
        <input type="submit"　value="送信" name="submit">
    </form>

</center>
</body>
</html>
