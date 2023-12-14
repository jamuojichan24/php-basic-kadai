<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編 kadai_016</title>
  </head>
  <body>
    <P>
      <?php
      class Food {
        private $name;
        private $price;

        // メソッドを定義する
        public function show_price(int $price) {
          $this->price = $price . '<br>';
        }

        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }
        

      }


      class Animal {
        private $name;
        private $height;
        private $weight;

        // メソッドを定義する
        public function show_height(int $height) {
          $this->height = $height . '<br>';
        }

        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }
      $Food = new Food('potato',250);

      $Animal = new Animal ('dog', 60, 5000);
      
      print_r($Food);
      echo '<br>';
      print_r($Animal);
      ?>
    </P>
  </body>
</html>