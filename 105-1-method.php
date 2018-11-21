<?php
  class pen{
    public $color;
    public $bold;
    public $price;

    public function write($contents){
      echo "{$contents}을(를) 씁니다.<br>";
    }
    public function draw($contents){
      echo "{$contents}을(를) 그립니다.<br>";
    }
  }

  $pen = new pen();
  $pen -> write("이런내용");
  $pen -> draw("이런그림");
 ?>
