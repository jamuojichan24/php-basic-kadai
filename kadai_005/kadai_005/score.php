<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>5章の課題</title>

  </head>
  <body>
    <p>
    <?php
    // 変数に値を代入する
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 =30;
    $score10 =60;

    echo '<br>';

    // 合計点を算出

    echo $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

    echo '<br>';

    // 平均点を算出
    echo ($score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10) / 10;

    ?>
    </p>

 


  </body>
</html>