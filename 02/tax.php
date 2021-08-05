<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>税計算</title>
  </head>
  <body>
      <p>★消費税計算★</p>
      <form method='post' action='tax.php'>
          <table border="1">
                  <tr>
                      <th>商品名</th>
                      <th>価格</th>
                      <th>個数</th>
                      <th>税率</th>
                  </tr>
                  <tr>
                      <td><input type="text" name="product0" size="20" maxlength="28" /td>
                      <td><input type="text" name="price0" size="20" maxlength="28" /td>
                      <td><input type="text" name="number0" size="20" maxlength="28" /td>
                      <td>
                            <input type="radio" name="tax0" value="8" checked="checked" />8%
                            <input type="radio" name="tax0" value="10" />10%
                      </td>
                  </tr>
                  <tr>
                      <td><input type="text" name="product1" size="20" maxlength="28" /td>
                      <td><input type="number" name="price1" size="20" maxlength="28" /td>
                      <td><input type="number" name="number1" size="5" maxlength="28" /td>
                      <td>
                            <input type="radio" name="tax1" value="8" checked="checked" />8%
                            <input type="radio" name="tax1" value="10" />10%
                      </td>
                  </tr>
                  <tr>
                      <td><input type="text" name="product2" size="20" maxlength="28" /td>
                      <td><input type="number" name="price2" size="20" maxlength="28" /td>
                      <td><input type="number" name="number2" size="5" maxlength="28" /td>
                      <td>
                            <input type="radio" name="tax2" value="8" checked="checked" />8%
                            <input type="radio" name="tax2" value="10" />10%
                      </td>
                  </tr>
                  <tr>
                      <td><input type="text" name="product3" size="20" maxlength="28" /td>
                      <td><input type="number" name="price3" size="20" maxlength="28" /td>
                      <td><input type="number" name="number3" size="5" maxlength="28" /td>
                      <td>
                            <input type="radio" name="tax3" value="8" checked="checked" />8%
                            <input type="radio" name="tax3" value="10" />10%
                      </td>
                  </tr>
                  <tr>
                      <td><input type="text" name="product4" size="20" maxlength="28" /td>
                      <td><input type="number" name="price4" size="20" maxlength="28" /td>
                      <td><input type="number" name="number4" size="5" maxlength="28" /td>
                      <td>
                            <input type="radio" name="tax4" value="8" checked="checked" />8%
                            <input type="radio" name="cax4" value="10" />10%
                      </td>
                  </tr>
            </table>
            <table border ="1">
            <input type="submit" value="計算する">
            <input type="reset" name="btn2" value="リセット" >
                <tr>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>個数</th>
                    <th>税率</th>
                    <th>小計</th>
                </tr>
                <tr>
                    <td><?php echo $_POST['product0'];?></td>
                    <td><?php echo $_POST['price0'];?></td>
                    <td><?php echo $_POST['number0'];?></td>
                    <td><?php echo $_POST['tax0'];?></td>
                </tr>
                <tr>
                    <td>
                        <?php
                            $price_1 = $_POST['price0'];
                            $number = $_POST['number0'];
                            $tax = $_POST['tax0'];
                            $price_1 = $price_1 * $number * (1 + ($tax / 100));
                            echo $price_1 . "円";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $_POST['product1'];?></td>
                    <td><?php echo $_POST['price1'];?></td>
                    <td><?php echo $_POST['number1'];?></td>
                    <td><?php echo $_POST['tax1'];?></td>
                </tr>
                <tr>
                    <td>
                        <?php
                            $price_2 = $_POST['price1'];
                            $number = $_POST['number1'];
                            $tax = $_POST['tax1'];
                            $price_2 = $price_2 * $number * (1 + ($tax / 100));
                            echo $price_2 . "円";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $_POST['product2'];?></td>
                    <td><?php echo $_POST['price2'];?></td>
                    <td><?php echo $_POST['number2'];?></td>
                    <td><?php echo $_POST['tax2'];?></td>
                </tr>
                <tr>
                    <td>
                        <?php
                            $price_3 = $_POST['price2'];
                            $number = $_POST['number2'];
                            $tax = $_POST['tax2'];
                            $price_3 = $price_3 * $number * (1 + ($tax / 100));
                            echo $price_3 . "円";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $_POST['product3'];?></td>
                    <td><?php echo $_POST['price3'];?></td>
                    <td><?php echo $_POST['number3'];?></td>
                    <td><?php echo $_POST['tax3'];?></td>
                </tr>
                <tr>
                    <td>
                        <?php
                            $price_4 = $_POST['price3'];
                            $number = $_POST['number3'];
                            $tax = $_POST['tax3'];
                            $price_4 = $price_4 * $number * (1 + ($tax / 100));
                            echo $price_4 . "円";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $_POST['product4'];?></td>
                    <td><?php echo $_POST['price4'];?></td>
                    <td><?php echo $_POST['number4'];?></td>
                    <td><?php echo $_POST['tax4'];?></td>
                </tr>
                <tr>
                    <td>
                        <?php
                            $price_5 = $_POST['price4'];
                            $number = $_POST['number4'];
                            $tax = $_POST['tax4'];
                            $price_5 = $price_5 * $number * (1 + ($tax / 100));
                            echo $price_5 . "円";
                        ?>
                    </td>
                </tr>
            </table>
    </body>
