<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <form method='get' action='loop02.php'>
            <input type="number" name="cols" >行×
            <input type="number" name="rows" >列<br>
            <input type="submit" name="button" >
            <input type="reset" name="button2" >
        </form>
        <table border="1">
            <?php
                for($i=0; $i < $_GET['cols']; $i++){
                    echo "<tr>";
                    for($r=0; $r < $_GET['rows']; $r++){
                        echo "<td>佐野</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
