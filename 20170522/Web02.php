<?php
    // フォームのボタンが押されたら
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // フォームから送信されたデータを各変数に格納
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
        $where01 = $_POST["where01"];
        $where02 = $_POST["where02"];
        $category = $_POST["category"];
        $question = $_POST["question"];
    }
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="Web_design.css">
</head>
<body>
<div><h1>Company Name</h1></div>
<div><h2>お問い合わせ</h2></div>
<div>
    <form action="Web03.php" method="post">
            <input type="hidden" name="last_name" value="<?php echo $last_name; ?>">
            <input type="hidden" name="first_name" value="<?php echo $first_name; ?>">
            <input type="hidden" name="gender" value="<?php echo $gender; ?>">
            <input type="hidden" name="address" value="<?php echo $address; ?>">
            <input type="hidden" name="tel" value="<?php echo $phone01 "-" $phone02 "-" $phone03; ?>">
            <input type="hidden" name="mail" value="<?php echo $mail01 "@" $mail02; ?>">
            <input type="hidden" name="where" value="<?php echo $where01 or $where02; ?>">
            <input type="hidden" name="category" value="<?php echo $category; ?>">
            <input tyoe="hidden" name="question" value="<?php echo $question; ?>">
            <h1 class="contact-title">お問い合わせ 内容確認</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div>
                <div>
                    <label>性</label>
                    <p><?php echo $last_name; ?></p>
                </div>
                <div>
                    <label>名</label>
                    <p><?php echo $first_name; ?></p>
                </div>
                <div>
                    <label>性別</label>
                    <p><?php echo $gender; ?></P>
                </div>
                <div>
                    <label>住所</label>
                    <p><?php echo $address; ?></p>
                </div>
                <div>
                    <label>電話番号</label>
                    <p><?php echo $phone01 "-" $phone02 "-" $phone03; ?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <p><?php echo $mail01 "@" $mail02 ?></p>
                </div>
                <div>
                    <label>どこで知ったか</label>
                    <p><?php echo $where01 or $where02; ?></p>
                </div>
                <div>
                    <label>質問カテゴリ</label>
                    <p><?php echo $category; ?></p>
                </div>
                <div>
                    <label>質問内容</label>
                    <p><?php echo nl2br($question); ?></p>
                </div>
            </div>
        <input type="button" value="内容を修正する" onclick="history.back(-1)">
        <button type="submit" name="submit">送信する</button>
    </form>
</div>
</body>
</html>
