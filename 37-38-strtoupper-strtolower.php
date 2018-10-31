<?php
  $str = "low character";
  echo "원본 : {$str}";
  echo "<br><br>";
  echo "strtoupper : ".strtoupper($str);
  echo "<br><br>";
  echo "str함수는 일시적임 : ".$str;
  echo "<br><br>";
  $str = "LOW CHARACTER";
  echo "<br><br>";
  echo $str;
  echo "<br><br>";
  echo "strtolower : ".strtolower($str);

 ?>
