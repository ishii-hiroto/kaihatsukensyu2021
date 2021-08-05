<?php
//ゴールド会員

    $gold_id = "4321";
    $gold_ps= "1234";

    if($_POST['id'] == $gold_id AND $_POST['ps'] == $gold_ps){
        echo "ようこそゴールド会員様！！ログイン成功";
    } else {
        echo "ログイン失敗";
    }

//ノーマル会員

    $reg_id = "qwer";
    $reg_ps= "rewq";

    if($_POST['id'] == $reg_id AND $_POST['ps'] == $reg_ps){
        echo "ようこそノーマル会員様！！ログイン成功";
    } else {
        echo "ログイン失敗";
    }
?>
