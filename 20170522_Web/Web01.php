<!DOCTYPE html>
<html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <br>
        <hr>
        <title>お問い合わせ</title>
    </head>
    <body class="haikei">

        <link rel="stylesheet" type="text/css" href="Web_design.css"/>
            <form action="Web02.php" method="post" name="form" onsubmit="return validate()">
                <center>
                <h1>お問い合わせ</h1>
                <br>
                <br>
                <table border="0">
                <tr><td>
                    <label>姓</label>   　　　　　　　　　<input required type="text" name="last_name" size=2 pattern="[^\s]+" placeholder="毛利"><br>
                </td></tr>
                <tr><td>
                    名   　　　　　　　　　<input required type="text" name="first_name" size=2 pattern="[^\s]+" placeholder="小五郎"><br>
                </td></tr>
                <tr><td>
                    <label>性別</label>  　　　　　　　　<input type="radio" name="gender" value="男" checked="checked">男
                        <input type="radio" name="gender" value="女">女
                        <input type="radio" name="gender" value="不明">不明<br>
                    </td></tr>
                    <tr><td>
                    住所  　　　　　　　　<input type="text" name="address" size="19" placeholder="東京都米花市米花町5丁目"><br>
                </td></tr>
                <tr><td>
                    電話番号    　　　　　　<input required type="tel" name="phone01" size="1" pattern="^[0-9]+$" placeholder="000">
                    -   <input required type="tel" name="phone02" size="1" pattern="^[0-9]+$" placeholder="0000">
                    -   <input required type="tel" name="phone03" size="2" pattern="^[0-9]+$" placeholder="0000">
                    <br>
                </td></tr>
                <tr><td>
                    メールアドレス 　　　<input required type="text" name="mail01" size="19" pattern="[^\s]+@[^\s]+" placeholder=" qqqqqqqqqq@ppppppppp"><br>
                    <!--@   <input type="text" name="mail02" size="5"><br>-->
                </td></tr>
                <tr><td>
                    <input type="hidden" name="where01" value="">
                    <input type="hidden" name="where02" value="">
                    どこで知ったか     　　　<input type="checkbox" name="where01" value="雑誌">雑誌
                                        <input type="checkbox" name="where02" value="新聞">新聞<br>
                </td></tr>
                <tr><td>
                    質問カテゴリ  　　　　<select name="category">
                                        <!--<input type="text" name="category" size="2"><br>-->
                                        <option value="---">----</option>
                                        <option value="Yes1">Yes</option>
                                        <option value="Yes2">Yes</option>
                                        <option value="Yes3">Yes</option>
                                        <option value="Yes4">Yes</option>
                                        <option value="Yes5">Yes</option>
                                        <option value="Yes6">Yes</option>
                                        <option value="Yes7">Yes</option>
                                        <option value="Yes8">Yes</option>
                                        <option value="Yes9">Yes</option>
                                        <option value="Yes10">Yes</option>
                                        <option value="Yes11">Yes</option>
                                        <option value="Yes12">Yes</option>
                                        <option value="Yes13">Yes</option>
                                        <option value="Yes14">Yes</option>
                                        <option value="Yes15">Yes</option>
                                        </select>
                    <br>
                    <br>
                </td></tr>
                <tr><td>
                    質問内容<br>
                    <textarea class="a" name="question" cols="44" rows="8"  maxlength="15"></textarea>
                </td></tr>
                <tr><td align="center" valign="middle">
                    <input class="button" type="submit" name="submit" value="確認">
                    　　<input class="button" type="reset" value="リセット">
                </td></tr>
            </table>
        </center>
    </from>
</body>
</html>
