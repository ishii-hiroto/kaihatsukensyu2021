<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <form method='get' action='loop01.php'>
            <input type="number" name="cols" >行のテーブルを作成<br>
            <input type="submit" name="button" >
            <input type="reset" name="button2" >
        </form>
        <table border="1">
            <?php
                for($i=0; $i < $_GET['cols']; $i++){
                echo "<tr><td>佐野</td><td>花垣</td><td>橘</td><td>馬地</td></tr>";
              }
            ?>
        </table>
    </body>
</html>
