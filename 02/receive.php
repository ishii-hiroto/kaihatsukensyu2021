<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>アンケート</title>
  </head>
  <body>
        <p>お名前→<?php echo $_GET['title']; ?>
        <p>契約内容→<?php echo $_GET['contract']; ?>
        <p>感想→<?php echo $_GET['test']; ?>
        <p>質問→<?php echo $_GET['txt']; ?>
        <?php echo " あなたが関心があるものは、 " . $_GET['q'][0] . ",
            " . $_GET['q'][1]. ",
            " . $_GET['q'][2] . " ですね。<br/>";?>
  </body>
</html>
