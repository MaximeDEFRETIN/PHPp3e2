<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 3 : exercice 2</title>
  </head>
  <body>
    <?php
    $number = 0;
    $number2 = mt_rand (1,100);

    while ($number < 20) {
      echo $number * $number2 . "\r";

      $number++;
    }
    ?>
  </body>
</html>
