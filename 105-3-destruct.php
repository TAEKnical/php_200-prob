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
      echo "<br>";
    }
    function __destruct(){
      echo "pen1 인스턴스 사용이 끝났습니다.";
    }
  }
  $pen = new pen('핑크색','졸라두꺼운','1억원');
  $pen->write("또 이런내용");
 ?>
