<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎 kadai_011</title>
  </head>
  <body>
    <P>
      <?php
      $itenms = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
      foreach ($itenms as $key => $value) {
        echo "{$key} : {$value}<br>";
      }
      ?>
    </P>
  </body>
  </html>