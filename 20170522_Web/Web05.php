<html>
    <head>
        <!--
            管理画面
            count.csvの内容をもとに問合せ一覧を表示。
        -->
        <title>管理</title>
        <link rel="stylesheet" type="text/css" href="Web_design.css">
    </head>

    <body class="ran haikei haikei2">
        <center>
            <br><br>
            <hr>
            <h1 class="kadomaru">管理画面</h1>
            <table class="kogorou">
                <caption>お問い合わせ一覧</caption>

                <tr>
                    <th class="mark_1" align="center">No.</th>
                    <th class="mark_2" align="center">氏名</th>
                    <th class="mark_3" align="center">性別</th>
                    <th class="mark_4" align="center">住所</th>
                    <th class="mark_5" align="center">電話番号</th>
                    <th class="mark_6" align="center">メールアドレス</th>
                    <th class="mark_7" align="center" colspan="2">どこで知ったか</th>
                    <th class="mark_8" align="center">質問カテゴリ</th>
                    <th class="mark_9" align="center">質問内容</th>
                </tr>
            <?php
                $fp = fopen( "count.csv", "r+" );
                $son = 0;
                while(($str=fgets($fp))!=false){
                    $data = explode(",",$str);
                    if($son%2 == 0){
                        print "<tr id='kkk2'>";
                    }else{
                        print "<tr id='kkk'>";
                    }
                    foreach($data as $key => $d){
                        print '<td class="kogorou" align=\"center\">'.$d."</td>";
                    }
                    print "</tr>";
                    $son++;
                }
                fclose( $fp );
            ?>
            <hr>
            </table>
        <center>
    </body>
</html>
