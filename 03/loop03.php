<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <form method='get' action='loop03.php'>
            <input type="number" name="cols" >行×
            <input type="number" name="rows" >列<br>
            <input type="submit" name="button" >
            <input type="reset" name="button2" >
        </form>
        <table border="1">
            <?php
                for($i=1; $i <= $_GET['cols']; $i++){
                    echo "<tr>";
                    for($r=1; $r <= $_GET['rows']; $r++){
                        echo "<td>". $i . "-" . $r . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
