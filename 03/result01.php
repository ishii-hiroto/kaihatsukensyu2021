<!DOCTYPE>
<html>
    <head>
          <meta charset='utf-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1'>
          <title>ログイン</title>
    </head>
    <body>
        <?php
          $id = "4321";
          $ps = "1234";

            if($_POST['id'] == $id AND $_POST['ps'] == $ps){
                echo "ログイン成功";
            } else {
                echo "ログイン失敗";
            }
        ?>
    </body>
</html>
