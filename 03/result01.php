<?php
  $id = "4321";
  $ps = "1234";

    if($_POST['id'] == $id AND $_POST['ps'] == $ps){
        echo "ログイン成功";
    } else {
        echo "ログイン失敗";
    }
?>
