<!DOCTYPE html>
<html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせ</title>
    </head>
    <body text="A9085B">
        <link rel="stylesheet" type="text/css" href="Web_design.css"/>
            <hr>
            <form method="post" action="Web02.php">
                <center>
                お問い合わせ<br>
                <hr>
                <table border="0">
                <tr><td>
                    姓   　　　　　　　　　<input type="text" name="last_name" size=2><br>
                </td></tr>
                <tr><td>
                    名   　　　　　　　　　<input type="text" name="first_name" size=2><br>
                </td></tr>
                <tr><td>
                    性別  　　　　　　　　<input type="radio" name="gender" value="男">男
                        <input type="radio" name="gender" value="女">女
                        <input type="radio" name="gender" value="不明" checked="checked">不明<br>
                    </td></tr>
                    <tr><td>
                    住所  　　　　　　　　<input type="text" name="address" size="2"><br>
                </td></tr>
                <tr><td>
                    電話番号    　　　　　　<input type="tel" name="phone01" size="1">
                    -   <input type="tel" name="phone02" size="1">
                    -   <input type="tel" name="phone03" size="2">
                    <br>
                </td></tr>
                <tr><td>
                    メールアドレス 　　　<input type="text" name="mail01" size="5">
                    @   <input type="text" name="mail02" size="5"><br>
                </td></tr>
                <tr><td>
                    <input type="hidden" name="where" value="none">
                    どこで知ったか     　　　<input type="checkbox" name="where01" value="雑誌">雑誌
                                        <input type="checkbox" name="where02" value="新聞">新聞<br>
                </td></tr>
                <tr><td>
                    質問カテゴリ  　　　　<input type="text" name="category" size="2"><br>
                    <br>
                </td></tr>
                <tr><td>
                    質問内容<br>
                    <textarea name="question" cols="44" rows="8"></textarea>
                </td></tr>
                <tr><td>
                    <input type="submit" name="submit" value="確認">
                    <input type="reset" value="リセット">
                </td></tr>
            </table>
        </center>
    </from>
</body>
</html>
