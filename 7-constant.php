<?php
  //상수 FAVORITE_DOLL에 값 gelatoni를 대입
  define("FAVORITE_DOLL", "gelatoni");

  echo "상수 FAVORITE_DOLL의 값은".FAVORITE_DOLL."<br>";
  //상수 FAVORITE_DOLL에 duffy 대입 시도
  define("FAVORITE_DOLL","duffy");
  echo "상수 FAVORITE_DOLL의 값은".FAVORITE_DOLL."<br>";
  //상수가 이미 선언되어있다는 에러메세지 출력

 ?>
