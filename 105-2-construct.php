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

    function __construct($color,$bold,$price){
      echo "다음과 같은 속성의 펜이 생성됩니다.";
      echo "<br>";
      echo "색 : {$color}";
      echo "<br>";
      echo "두께 : {$bold}";
      echo "<br>";
      echo "가격 : {$price}";
    }
  }
  $pen = new pen('핑크색','졸라두꺼운','1억원');
 ?>
