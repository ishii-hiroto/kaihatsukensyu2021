<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <?php
            // サンプル
            $fruit = array("りんご", "すいか", "みかん", "なし", "イチゴ", "かき");
            echo $fruit[3]; // なし と表示される
            echo $fruit[0]; // りんご と表示される
            echo $fruit[9]; // エラーになる
            $fruit[2] = "いちじく"; // 上書きされる
            $fruit[6] = "キウイ"; // 追加される
        ?>
        <pre>
            <?php var_dump($fruit); ?>
        </pre>
    </body>
</html>
