<html>
    <head>
        <?php
            $page = ($_POST['last_name'] === "" or $_POST['first_name'] === "" or $_POST['phone1'] === "" or $_POST['phone2'] === "" or $_POST['phone3'] === "" or $_POST['mail'] === "");
            $number = (ctype_digit($_POST['phone1']) and ctype_digit($_POST['phone2']) and ctype_digit($_POST['phone3']) );
            if($page or !$number){
                print "<title>エラー</title>";
            }else{
                print "<title>確認</title>";
            }
        ?>
    </head>

    <body>
        <center>
            <form method="post" action="test3.php">
                <?php
                    if($page or !$number){
                        if($_POST['last_name'] === ""){
                            print "姓が入力されていません。<br>";
                        }
                        if($_POST['first_name'] === ""){
                            print "名が入力されていません。<br>";
                        }
                        if($_POST['phone1'] ==="" or $_POST['phone2'] ==="" or $_POST['phone3'] ===""){
                            print "電話番号が未入力です。<br>";
                        }elseif(!$number){
                            print "電話番号が不正です。<br>";
                        }
                        if($_POST['mail'] ===""){
                            print "メールアドレスが未入力です。<br>";
                        }
                        print "<hr>";
                    }else{
                        print "お問い合わせ内容<br><hr>";
                        print "姓：<br>".$_POST['last_name']."<br><br>";
                        print "名：<br>".$_POST['first_name']."<br><br>";
                        print "性別：<br>".$_POST['gender']."<br><br>";
                        print "住所：<br>".$_POST['address']."<br><br>";
                        print "電話番号：<br>".$_POST['phone1']."-".$_POST['phone2']."-".$_POST['phone3']."<br><br>";
                        print "メールアドレス：<br>".$_POST['mail']."<br><br>";
                        print "どこで知ったか：<br>".$_POST['where']."<br><br>";
                        print "質問カテゴリ：<br>".$_POST['category']."<br><br>";
                        print "質問内容：<br>".nl2br($_POST['question'])."<br><br>";

                        print "<input type=\"hidden\" name=\"last_name\" value=".$_POST['last_name'].">";
                        print "<input type=\"hidden\" name=\"first_name\" value=".$_POST['first_name'].">";
                        print "<input type=\"hidden\" name=\"gender\" value=".$_POST['gender'].">";
                        print "<input type=\"hidden\" name=\"address\" value=".$_POST['address'].">";
                        print "<input type=\"hidden\" name=\"phone\" value=".$_POST['phone1']."-".$_POST['phone2']."-".$_POST['phone3'].">";

                        print "<input type=\"hidden\" name=\"mail\" value=".$_POST['mail'].">";
                        print "<input type=\"hidden\" name=\"where\" value=".$_POST['where'].">";
                        print "<input type=\"hidden\" name=\"category\" value=".$_POST['category'].">";
                        print "<input type=\"hidden\" name=\"question\" value=".$_POST['question'].">";
                        print "<input type=\"submit\" name=\"submit\" value=\"送信\">";
                    }
                ?>
                <input type="button" value="戻る" onclick="history.back()">
            </form>

            <hr>
            <a href="test.php">未入力状態で書き直します</a>
        <center>
    </body>
</html>
