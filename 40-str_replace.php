<?php
//특정 문자 치환하기
  $str = "welcome to everdevel";
  $changeWord = str_replace('everdevel','beanscent',$str);//str_replace(A,B,C) -> C변수 안에 A문자열이 있으면 B로 대체
  echo $changeWord;
 ?>
