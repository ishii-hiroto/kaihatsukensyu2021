<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <form method='get' action='loop03.php'>
            <input type="number" name="cols0" >行×
            <input type="number" name="cols1" >行<br>
            <input type="submit" name="button" >
            <input type="reset" name="button2" >
        </form>
        <table border="1">
            <?php
                for($i=0; $i < $_GET['cols0']; $i++){
                    echo "<tr>";
                    for($r=0; $r < $_GET['cols1']; $r++){
                        echo "<td>". $i . "-" . $r . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
